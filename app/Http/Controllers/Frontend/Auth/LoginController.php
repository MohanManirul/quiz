<?php


namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserModule\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //two  step auth 


    //login function start
    public function login(){
        if( auth('web')->check() ){
            return redirect()->route('user.dashboard');
        }
        else{
            return view("frontend.auth.login");
        }
    }
    //login function end

    //do login function start
    public function do_frontend_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        

        $user = User::where('email',$request->email)->first();

        if( $user ){
           
            if (auth('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                $dashboard = route('user.dashboard');
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
