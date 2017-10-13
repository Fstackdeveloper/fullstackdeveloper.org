<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;



class AdminHomeController extends Controller
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
		$count = array();
		$count['users'] = DB::table('users')->count();
		$count['messages'] = DB::table('messages')->count();
		$count['projects'] = DB::table('projects')->count();
		$count['clients'] = DB::table('project_clients')->count();
		
        return View::make("admin.home",array('count'=>$count));
    }
	
	
}
