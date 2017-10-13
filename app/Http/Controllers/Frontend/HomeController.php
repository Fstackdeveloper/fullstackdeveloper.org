<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Project;
use App\ProjectCategories;
use App\ProjectClient;
use Illuminate\Support\Facades\View;


class FrontendHomeController extends Controller
{	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	{
	
		return View::make("frontend.home")->with(array('clients'=>ProjectClient::all()->keyBy('id'),
											  'categories'=>ProjectCategories::all()->keyBy('id'),
											  'Projects'=>Project::limit(6)->get()->keyBy('id')
											 ));
    }

	
}
