<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    //logout function start
    public function do_logout(Request $request)
    {
        if( auth('super_admin')->check() ){
            Auth::guard('super_admin')->logout();
        }

        return redirect()->route('login.show');
    }
    //logout function ends
}
