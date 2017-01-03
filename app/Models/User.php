<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class User extends Model
{
	use CrudTrait;

     /*
	|--------------------------------------------------------------------------
	| GLOBAL VARIABLES
	|--------------------------------------------------------------------------
	*/

	protected $table = 'users';
	protected $primaryKey = 'id';
	public $timestamps = true;
	// protected $guarded = ['id'];
	protected $fillable = ['name','email'];
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

	public function roles(){
		return $this->belongsToMany('App\Models\Role')->withTimestamps();
	}
	/*public function getOccupationById($currentkey)
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
	}*/
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
