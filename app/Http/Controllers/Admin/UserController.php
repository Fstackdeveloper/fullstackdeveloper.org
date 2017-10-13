<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Yajra\DataTables\DataTables;

use App\User;
use Illuminate\Support\Facades\Validator;


class AdminUserController extends Controller
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
		
			return  View::make("admin.Users");
    }
	
	
	
	
	    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ClientsData()
    {
		
		$Users = DB::table('users')
            ->select('users.id AS id', 'users.name AS name', 'users.email AS email', 'users.photo AS photo', 'users.created_at AS created_at', 'users.updated_at AS updated_at')
            ->get();
		
        return  DataTables::of($Users)->make(true);
    }
	
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return View::make("admin.UserAdd");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
		$Users = new User;
		$UsersInput = $request->user;
		foreach ($UsersInput as $key => $value) {
			if ($request->hasfile('user.'.$key))
			{
				$UsersInput[$key] = $value->store('project/images','public');
			}
			
			if($key != 'password_confirmation' && $key!='password')
			{
				$Users->$key = $UsersInput[$key];	
			}
			elseif($key =='password')
			{
				$Users->$key = bcrypt($UsersInput[$key]);
			}
							
        }
		
        $Users->save();
		
		return redirect()->route('user.edit', array('id'=>$Users->id));

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
      return View::make("admin.UserEdit")->with(array('user'=>User::findOrFail($id)
											 ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
       	$Users = User::find($id);
		$UsersInput = $request->user;
		foreach ($UsersInput as $key => $value) {
			if ($request->hasfile('user.'.$key))
			{
				$UsersInput[$key] = $value->store('project/images','public');
			}
			
			if($key != 'password_confirmation' && $key!='password')
			{
				$Users->$key = $UsersInput[$key];	
			}
			elseif($key =='password' && $UsersInput[$key])
			{
				$Users->$key = bcrypt($UsersInput[$key]);
			}

        }
		
        $Users->save();
		
		return redirect()->route('user.edit', array('id'=>$Users->id));
    }

	
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
		return redirect()->route('user');

    }
}
