<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Project;
use App\ProjectCategories;
use App\ProjectClient;
use Yajra\DataTables\DataTables;



class AdminProjectController extends Controller
{
   
  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		        $this->middleware('auth');
    }
	
	
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
			return  View::make("admin.Projects");
    }
	
	
	
	
	    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function projectsData()
    {
		
		$projects = DB::table('projects')
            ->leftJoin('project_categories', 'project_categories.id', '=', 'projects.project_categories_id')
			->leftJoin('project_clients', 'project_clients.id', '=', 'projects.project_clients_id')
            ->select('projects.id AS id', 'projects.title AS title', 'projects.description AS description', 'projects.release_date AS release_date', 'projects.created_at AS created_at', 'projects.updated_at AS updated_at', 'project_categories.title AS category', 'project_clients.name AS client')
            ->get();

		
        return  DataTables::of($projects)->make(true);
    }
	
	
	    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function create()
    {		
		
		return View::make("admin.ProjectAdd")->with(array('clients'=>ProjectClient::all()->keyBy('id'),
											  'categories'=>ProjectCategories::all()->keyBy('id')
											 ));
	}
	
	
	
	  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Project = new Project;
		$projectInput = $request->project;
		foreach ($projectInput as $key => $value) {
			if ($request->hasfile('project.'.$key))
			{
				$projectInput[$key] = $value->store('project/images','public');
			}
			$Project->$key = $projectInput[$key];	
        }
		
        $Project->save();
		
		return redirect()->route('project.edit', array('id'=>$Project->id));
    }
	
	
	
	
	
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
		return View::make("admin.ProjectEdit")->with(array('clients'=>ProjectClient::all()->keyBy('id'),
											  'categories'=>ProjectCategories::all()->keyBy('id'),
											  'project'=>Project::findOrFail($id)
											 ));

    }


	
	
	
	
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Project = Project::find($id);
		$projectInput = $request->project;
		foreach ($projectInput as $key => $value) {
			if ($request->hasfile('project.'.$key))
			{
				$projectInput[$key] = $value->store('Project/images','public');
			}
			$Project->$key = $projectInput[$key];	
        }
		
        $Project->save();
		
		return redirect()->route('project.edit', array('id'=>$Project->id));

    }

	
	
	
	  /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::destroy($id);
		return redirect()->route('project');

    }
	
	
	
	
}
