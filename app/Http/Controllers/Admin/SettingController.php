<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Settings;


class AdminSettingController extends Controller
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
        return View::make("admin.Settings");

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
		$settings = $request->settings;
		foreach ($settings as $key => $setting) {
			if ($request->hasfile('settings.'.$key))
			{
				$settings[$key] = $setting->store('settings/images','public');
			}
        }

		
		Settings::update_settings($settings);
		
		return redirect()->route('adminSetting');
    }

}
