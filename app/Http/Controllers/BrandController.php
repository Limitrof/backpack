<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
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
        //return view('brand',['brands' => Brand::has(1)->get()]);
        return view('brand',['brands' => Brand::all()]);
        // WORK WELL! return view('brand',['brands' => DB::table('brands')->get()]);
		// $brands = DB::table('brands')->get();
        //return view('brand')->with(['brands'=>$brands]);
		// return view('brand', ['brands' => $users]);
    }
}
