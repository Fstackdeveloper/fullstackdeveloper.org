<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use App\ProjectClient;
use Yajra\DataTables\DataTables;


class AdminProjectClientController extends Controller
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
		
			return  View::make("admin.ProjectClients");
    }
	
	
	
	
	    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ClientsData()
    {
		
		$ProjectClients = DB::table('project_clients')
            ->select('project_clients.id AS id', 'project_clients.name AS name', 'project_clients.created_at AS created_at', 'project_clients.updated_at AS updated_at')
            ->get();
		
        return  DataTables::of($ProjectClients)->make(true);
    }
	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return View::make("admin.ProjectClientAdd");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ProjectClients = new ProjectClient;
		$ProjectClientsInput = $request->projectClient;
		foreach ($ProjectClientsInput as $key => $value) {
			if ($request->hasfile('projectClient.'.$key))
			{
				$ProjectClientsInput[$key] = $value->store('project/images','public');
			}
			$ProjectClients->$key = $ProjectClientsInput[$key];	
        }
		
        $ProjectClients->save();
		
		return redirect()->route('project.client.edit', array('id'=>$ProjectClients->id));

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
      return View::make("admin.ProjectClientEdit")->with(array('projectClient'=>ProjectClient::findOrFail($id)
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
       	$ProjectClients = ProjectClient::find($id);
		$ProjectClientsInput = $request->projectClient;
		foreach ($ProjectClientsInput as $key => $value) {
			if ($request->hasfile('projectClient.'.$key))
			{
				$ProjectClientsInput[$key] = $value->store('project/images','public');
			}
			$ProjectClients->$key = $ProjectClientsInput[$key];	
        }
		
        $ProjectClients->save();
		
		return redirect()->route('project.client.edit', array('id'=>$ProjectClients->id));
    }

	
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProjectClient::destroy($id);
		return redirect()->route('project.client');

    }
}
