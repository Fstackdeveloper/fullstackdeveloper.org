<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   protected $table = 'projects';
	
	
	/*
     * Get the category that belong to portfolio.
     */
	
    public function category()
    {
        return $this->belongsTo('App\ProjectCategories');
    }
	
	
	
	
	/*
     * Get the client that belong to portfolio.
     */
	
    public function client()
    {
        return $this->belongsTo('App\ProjectClient');
    }
	
	
}
