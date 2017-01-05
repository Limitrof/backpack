<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;
use App\Models\Userrole;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Auth;
use DB;
class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$userId = Auth::id();
        //return view('home');
        $user = User::find(Auth::id());
        //check if Driver - role_id=1
        $user -> isDriver = DB::table('user_roles')->where('user_id',Auth::id())->where('role_id',1)->count();
        //check if StoOwner - role_id=2
        $user -> isStoOwner = DB::table('user_roles')->where('user_id',Auth::id())->where('role_id',2)->count();
        //check if StoOwner - role_id=42
        $user -> isAdmin = DB::table('user_roles')->where('user_id',Auth::id())->where('role_id',42)->count();

        //get from TECDOC carmakers
        $user -> carBrands = DB::table('TOF_MANUFACTURERS')->select('MFA_ID', 'MFA_BRAND')->where('MFA_SHOW_CAR',1)->orderBy('MFA_BRAND')->get();
        $user -> org=Organization::find(1);
        return view('home',['user' => $user]);
    }
}
