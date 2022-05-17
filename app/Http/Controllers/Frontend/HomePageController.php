<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //index function start
    public function index(){
        return view('frontend.home');
    }
    //index function ends
}
