<?php

namespace App\Http\Controllers;
use App\Models\Organization;
use App\Models\Occupation;
use App\Models\Organizationoccupation;
use Illuminate\Http\Request;

class OrganizationController extends Controller
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
        //$brands= Brand::find(1)->get();
        //var_dump(Brand::find(4)->get());['user' => User::findOrFail($id)]
        return view('organizations',['organizations' => Organization::find(1) -> get()]);
        //return view('brand')->with(['brands'=>$brands]);
    }

    public function getbyid($id)
    {
        //$forme=$id;
        $org = Organization::find($id);

        return view('organization') -> with(['oo' => $org]);
    }
}
