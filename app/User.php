<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	
    public function serviceBooks()
    {
			return $this->hasMany('App\Models\ServiceBook','user_id');
    }    
    
    public function organization()
    {
			return $this->hasMany('App\Models\Organization','user_id');
    }
    public function order()
    {
			return $this->hasMany('App\Models\Order','manager_user_id');
    }
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }
	  /**
   * Send the password reset notification.
   *
   * @param  string  $token
   * @return void
   */
  public function sendPasswordResetNotification($token)
  {
      $this->notify(new ResetPasswordNotification($token));
  }
}
