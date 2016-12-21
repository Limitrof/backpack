<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Service extends Model
{
	use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

	protected $table = 'services';
	protected $primaryKey = 'id';
	public $timestamps = true;
	// protected $guarded = ['id'];
	 protected $fillable = ['title','descr']; 
	// protected $hidden = [];
    // protected $dates = [];

	/*
	|--------------------------------------------------------------------------
	| FUNCTIONS
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| RELATIONS
	|--------------------------------------------------------------------------
	*/
	
/* 	public function order_services()
		{
			return $this->hasMany('App\Models\order_services', 'order_services_service');
		}
	public function services_parts_category()
		{
			return $this->hasMany('App\Models\services_parts_category', 'services_parts_category_service');
		}
	public function organization_services()
		{
			return $this->hasMany('App\Models\organization_services', 'organization_services_service');
		} */

	/*
	|--------------------------------------------------------------------------
	| SCOPES
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| ACCESORS
	|--------------------------------------------------------------------------
	*/

	/*
	|--------------------------------------------------------------------------
	| MUTATORS
	|--------------------------------------------------------------------------
	*/
}
