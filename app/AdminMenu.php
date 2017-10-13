<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class AdminMenu extends Model
{
   
	 protected $table = 'admin_menus';
	 
	 private $AllMenusArray = NULL;
	
	
	public function __construct(array $attributes = array())
		{
    parent::__construct($attributes);
    $this->AllMenusArray =  DB::table($this->table)->select("id","parentID","title","route","icon")->get()->keyBy('id');
		}
	

	/**
		* Call this function to get Tree Menu Array
		* ever Node has Childs Array
		* Example
		$Node //is a Node We can get title $Node->title , link $Node->route, Icon $Node->icon, ID $Node->id, , Parent ID $Node->parentID
		$Node->childs  // The are athe node childrens array
		* ROOT Mean 
		each tree start with item has parent 0
		so each tree as root
		* Depth Mean
		level of su category
	 */
	public  function getAllNodes($parentID=0, $depth=0, $root=0)
		{
			$AllNodes = array();
			$parentID = ($parentID == NULL)? 0 : $parentID;
			foreach ($this->AllMenusArray AS $key => $value)
			{	
				if ($value->parentID == $parentID)
				{
					if ($value->parentID == 0){++$root;}
					$value->root = $root;
					$value->depth=$depth;
					$AllNodes[]= $value;
					$AllNodes[count($AllNodes) - 1]->childs = array();
					if($childs = $this->getAllNodes($value->id, $depth++,$root))
					{
						$AllNodes[count($AllNodes) - 1]->childs =$childs;
					}
				}
			}
			
			if (count($AllNodes) > 0)
			{
				return $AllNodes;
			}
			else
			{
				return array();
			}
		}
	
	
	public  function setNewObjectVariablesForParents($nodeID, Array $VariablesArray= Array())
	{
			$nodeID = $nodeID?$nodeID:0;
			$parents = $this->getAllParentsIDArray($nodeID);
			foreach ($this->AllMenusArray AS $MenuKey => $MenuValue)
			{
				foreach($VariablesArray AS $key => $value )
				{
					$MenuValue->$key = NULL;
					if (in_array($MenuValue->id, $parents))
					{
						$MenuValue->$key = $value;
					}
					
				}
			}
	}

	
		
	public  function getAllParentsIDArray(Int $nodeID)
	{
		if ($nodeID == 0) {return array();}
		$parents = $this->getAllParents($nodeID);
		$ids_array = array();
		foreach($parents AS $key => $value )
			{
			 	$ids_array[] = $value->id;
			}
		return $ids_array;
	}

	
	public function getAllParents(Int $nodeID, Array &$parents = array())
		{	
			if ($nodeID == 0) {return array();}
			$parents[] = $this->AllMenusArray[$nodeID];
			if ($this->AllMenusArray[$nodeID]->parentID != 0)	
			{
			$this->getAllParents($this->AllMenusArray[$nodeID]->parentID, $parents);
			}
			return $parents;
		}
	
	
	public  function getParent($nodeID)
		{
			return $this->AllMenusArray[$this->AllMenusArray[$nodeID]->parentID];
		}


	public  function getChilds($nodeID)
		{
			return DB::table($this->table)->where('parentID', $nodeID)->get()->keyBy('id');
		}
	
	public  function getIdByPath($current_route_name)
		{
			return DB::table($this->table)->where('route', $current_route_name)->value('id');
		}



}
