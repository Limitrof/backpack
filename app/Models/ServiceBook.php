<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class ServiceBook extends Model
{
	use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

	protected $table = 'service_books';
	protected $primaryKey = 'id';
	public $timestamps = true;
	// protected $guarded = ['id'];
	protected $fillable = ['user_id','vin','gos_number','tcd_car_id'];
	//protected $hidden = ['vin'];
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
	public function tcdCar()
	{
		return $this->belongsTo('App\Models\TcdCar');
	}	
	public function User()
	{
		return $this->belongsTo('App\Models\User');
	}
	public function order()
	{
		return $this->hasMany('App\Models\Order','service_book_id');
	}
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
