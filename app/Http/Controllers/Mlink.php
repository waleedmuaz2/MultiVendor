<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mlink extends Controller
{
     public function checkout()
    {
        return view('BillingDetail');
    }
    public function aftersearch()
    {
        return view('AfterSearch');
    }
    public function productdetail()
    {
        return view('product-detail');
    }
    public function AddProduct()
    {
        return view('addproduct');
    }
     public function contact()
    {
        return view('contactus');
    }
     public function manageaccount()
    {
        return view('manageaccount');
    }
     public function mycart()
    {
        return view('mycart');
    }
    public function profile()
    {
        return view('profile');
    } 
     public function vendorpage()
    {
        return view('vendorpage');
    }
    public function wishlist()
    {
        return view('wishlist');
    }
    
}
