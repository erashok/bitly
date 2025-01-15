<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function about(){
        return view('frontend.about');
    }
    public function privacy(){
        return view('frontend.privacy');
    }
    // public function cookies(){
    //     return view('frontend.cookies');
    // }
    public function terms(){
        return view('frontend.terms');
    }
    public function partners(){
        return view('frontend.partners');
    }
    public function help(){
        return view('frontend.help');
    }
}
