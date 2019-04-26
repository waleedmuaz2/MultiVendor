<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function manageaccount()
    {
        return view('manageaccount');
    }
    
   public function AddProduct()
    {
        return view('addproduct');
    }
     public function profile()
    {
        return view('profile');
    } 

}
