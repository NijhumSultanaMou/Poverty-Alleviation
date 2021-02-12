<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function aboutus()
    {
        return view('frontend.aboutus');
    }
     
    public function farmer()
    {
        return view('frontend.farmer');
    }
     
    public function handicraft()
    {
        return view('frontend.handicraft');
    }
    
    public function loan()
    {
        return view('frontend.loan');
    }

    public function contactus()
    {
        return view('frontend.contactus');
    }

    public function help()
    {
        return view('frontend.help');
    }

}
