<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index function start
    public function index()
    {
        
        if( auth('super_admin')->check() ){          

            return view('backend.dashboard');
        }else{
            return view("errors.404");
        }
    }

    //index function ends

}
