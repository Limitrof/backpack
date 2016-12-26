<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Organization extends Model
{
	use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

	protected $table = 'organizations';
	protected $primaryKey = 'id';
	// public $timestamps = false;
	// protected $guarded = ['id'];
	protected $fillable = ['title','logo','descr','photo','phone','address','email','geo','worktime'];
	// protected $fillable = [];
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
	public function User()
	{
		return $this->belongsTo('App\Models\User');
	}

	public function organization()
	{
		return $this->hasMany('App\Models\Organizationoccupation','organization_id');
	}
	public function getOccupationById($currentkey)
	{

		$ocid = Organizationoccupation::where('organization_id', $currentkey)->get();
		$alloccupations = '';
		$len = count($ocid);
		$i = 0;
		foreach ($ocid as $onebyoneoccu) {
			$currentoccupations_id = $onebyoneoccu->occupation_id;
			$title = Occupation::find($currentoccupations_id)->title;

			$alloccupations .= $title . (($i < $len - 1) ? "," : "");
			$i++;
		}
		return $alloccupations;
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
