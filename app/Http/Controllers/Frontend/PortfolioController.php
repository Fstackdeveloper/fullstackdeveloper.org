<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Project;
use App\ProjectCategories;
use App\ProjectClient;
use Illuminate\Support\Facades\View;


class FrontendPortfolioController extends Controller
{	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
	{
		$Projects =Project::paginate(12);
	
		return View::make("frontend.portfolio")->with(array('clients'=>ProjectClient::all()->keyBy('id'),
											  'categories'=>ProjectCategories::all()->keyBy('id')
											 ))->with(compact('Projects'));
    }

	
}
