<?php


namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserModule\SuperAdmin;
use App\Models\UserModule\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //login_show function start
    
    public function login_show()
    {
        if( auth('super_admin')->check() ){
            return redirect()->route("dashboard");
        }else{
            return view('auth.login');
        }
    }

     //login_show function ends


     //do login function start
     public function do_login(Request $request)
     {
         $request->validate([
             'email' => 'required|email',
             'password' => 'required|min:6',
         ]);
         
 
         $superadmin = SuperAdmin::where('email',$request->email)->first();
 
         if( $superadmin ){
            
             if (auth('super_admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                 $dashboard = route('dashboard');
                 return response()->json(['login' => $dashboard ], 200);
             } else {
                 return response()->json(['error' => 'Invalid Credentials' ], 200);
             }
         }
         else{
             return response()->json(['error' => 'Invalid Credentials' ], 200);
         }
 
         
     }
     //do-login function end

}
