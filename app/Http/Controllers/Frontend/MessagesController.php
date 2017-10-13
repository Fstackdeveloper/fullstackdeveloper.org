<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\View;


class FrontendMessagesController extends Controller
{	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
	{
		$Message = new Message;
		$Message->name = $request->name;
		$Message->email = $request->email;
		$Message->phone = $request->phone;
		$Message->message = $request->message;
        $Message->save();  
    }

	
}
