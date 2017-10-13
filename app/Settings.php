<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Settings extends Model
{
	private static $setting_arr;
	protected $fillable = ['setting_name', 'setting_value'];

	public function  __construct()
	{
		
	}
	
	
	public static function get_settings_from_db()
	{
	    self::$setting_arr = array();
	    $settings_db = DB::table("settings")->select("setting_name","setting_value")->get();
        foreach ($settings_db as $setting_item)
		{
		self::$setting_arr[$setting_item->setting_name]	= $setting_item->setting_value;
		}
		return self::$setting_arr;
		
	}
	
    public static function get_settings()
	{	
		return self::$setting_arr = self::$setting_arr?:self::get_settings_from_db();
	}
	
	
	  public static function update_settings($settings)
	{	
	   foreach ($settings as $key => $value)
		{

		self::updateOrCreate(
    	['setting_name' => $key],
   	    ['setting_name' => $key, 'setting_value' => $value]
			);
	
		} 

	}
	
	
}
