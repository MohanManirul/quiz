<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\UserModule\User;
use Exception;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
   
 //register function start
 public function register(){
   if( auth('web')->check() ){
       return redirect()->route('user.dashboard');
   }
   else{
       return view("frontend.auth.register");
   }
   
}
//register function end

//do_register function start
   public function do_register(Request $request){
     
      $validator  = Validator::make($request->all(),[
         'name' =>  'required',
         'email' =>  'required|unique:users,email',
         'password' => 'required|min:8',
      ]);
      
      if($validator->failed()){        
         return  response()->json(['errors'=>  $validator->errors()],422);
      }else{
         try{
            $user  =  new User();
            $user->name  = $request->name;
            $user->email  = $request->email;
            $user->password  = Hash::make($request->password);
            
            if($user->save()){
               if( auth('web')->attempt(['email'  =>  $request->email ,  'password' => $request->password],true)){
                  $url = route('user.dashboard');
                  return  response()->json([
                     'redirect' => $url,
                     'redirect_messege' => 'Registration Success.  Redirecting....'
                  ]);
               }
            }
            else{
               return response()->json(['error' => 'Invalid Credentials'],200);
            }
         }
         catch(Exception  $e){
            return response()->json(['error' => $e->getMessage()], 200);
         }
      }
   }
//do_register function ends

}