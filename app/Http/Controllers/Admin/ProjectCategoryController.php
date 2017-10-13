<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\ProjectCategories;
use Yajra\DataTables\DataTables;


class AdminProjectCategoryController extends Controller
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
		
			return  View::make("admin.ProjectCategories");
    }
	
	
	
	
	    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function CategoriesData()
    {
		
		$ProjectCategories = DB::table('project_categories')
            ->select('project_categories.id AS id', 'project_categories.title AS title', 'project_categories.created_at AS created_at', 'project_categories.updated_at AS updated_at')
            ->get();
		
        return  DataTables::of($ProjectCategories)->make(true);
    }
	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return View::make("admin.ProjectCategoryAdd");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ProjectCategories = new ProjectCategories;
		$ProjectCategoriesInput = $request->projectCategory;
		foreach ($ProjectCategoriesInput as $key => $value) {
			if ($request->hasfile('projectCategory.'.$key))
			{
				$ProjectCategoriesInput[$key] = $value->store('project/images','public');
			}
			$ProjectCategories->$key = $ProjectCategoriesInput[$key];	
        }
		
        $ProjectCategories->save();
		
		return redirect()->route('project.category.edit', array('id'=>$ProjectCategories->id));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return View::make("admin.ProjectCategoryEdit")->with(array('projectCategory'=>ProjectCategories::findOrFail($id)
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
       	$ProjectCategories = ProjectCategories::find($id);
		$ProjectCategoriesInput = $request->projectCategory;
		foreach ($ProjectCategoriesInput as $key => $value) {
			if ($request->hasfile('projectCategory.'.$key))
			{
				$ProjectCategoriesInput[$key] = $value->store('project/images','public');
			}
			$ProjectCategories->$key = $ProjectCategoriesInput[$key];	
        }
		
        $ProjectCategories->save();
		
		return redirect()->route('project.category.edit', array('id'=>$ProjectCategories->id));
    }

	
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectCategories::destroy($id);
		return redirect()->route('project.category');

    }
}
