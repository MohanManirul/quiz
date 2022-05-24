<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\UserModule\User;
use App\Models\UserTest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Support\Str;
use PragmaRX\Google2FA\Google2FA;

class UserProfileController extends Controller
{
    
    //index  function start
    public function index(){
        if(auth('web')->check()){  

            $all_questions = Question::select('id', 'question', 'option_one' , 'option_two', 'option_three' , 'option_four')->get();
        

            $user_info = User::select('id',  'name',  'email' , 'phone'  ,  'image', 'company_name', 'language',  'address' ,'security' ,  'twitter','facebook','google_plus','linkedin', 'instagram' )->where('is_active',true)->first();
            return view('frontend.dashboard' ,  compact('user_info', 'all_questions'));
        }else{
            return  view('errors.404');
        }
        
    }
    //index  function ends
   
    //exam function start
    public function exam(Request $request){
        $user_id = Auth()->user()->id;
        
        if( $request['question_id'] ){
            foreach( $request['question_id'] as $key => $question_id ){

                $test = new UserTest(); 
            }
            return back()->with('success','Exam Submitted Successfully...');
        }

    }
    //exam function ends
    //user_profile_view function start
    public  function user_profile_view(){
       
        if(auth('web')->check()){           
            $user_info = User::select('id',  'name',  'name',  'email' , 'phone'  ,  'image', 'company_name', 'language',  'address' ,'security' ,  'twitter','facebook','google_plus','linkedin', 'instagram' )->where('is_active',true)->first();
            return view('frontend.pages.user.user-profile' ,  compact('user_info'));
        }else{
            return  view('errors.404');
        }
    }
    //user_profile_view function ends

    //logout  function  start
    public function logout(){
        if(auth('web')->check()){
          Auth::guard('web')->logout();  
        }        
        return redirect()->route('login');
    }
    //logout  function  ends
    
    //user_profile_update start
    public function user_profile_update(Request  $request){       
      
        $validator =  Validator::make($request->all(), [
           "name"     => "required",
           "email"          => "required|unique:users,email," . auth('web')->user()->id,
           "phone"          => "required|numeric|unique:users,phone," . auth('web')->user()->id,
           'image'          => 'image|mimes:jpg,jpeg,png,gif,svg|max:100',
           "company_name"   =>  "required",
           "language"       =>  "required",
           "address"        =>  "required",
           "twitter"        =>  "required",
           "facebook"       =>  "required",
           "linkedin"       =>  "required",
           "instagram"      =>  "required",
            
        ]);
        
        if($validator->fails()){
            return  response()->json(['errors' => $validator->errors()],422);
        }else{
            if(auth('web')->check()){
                
                try {
                    $user  = User::find(auth('web')->user()->id);
                    $user->name  = $request->name;
                    $user->email  = $request->email;
                    $user->phone  = $request->phone;
                    $user->company_name  = $request->company_name;
                    $user->language  = $request->language;
                    $user->address  = $request->address;
                    $user->twitter  = $request->twitter;
                    $user->facebook  = $request->facebook;
                    $user->linkedin  = $request->linkedin;
                    $user->instagram  = $request->instagram;
                    
                    //  image upload start
                    if($request->image){                        
                        if(File::exists('images/profile/user/' .  $user->image)){                           
                            File::delete('images/profile/user/' .  $user->image);
                        }
                        $image =  $request->file('image');
                        $img  = time().Str::random(12).'.'.$image->getClientOriginalExtension();
                        $location =  public_path('images/profile/user/'.$img);
                      
                        Image::make($image)->save($location);
                        $user->image = $img;                        
                    } 
                    if($user->save()){
                        return  response()->json(['success'  =>  'User  profile Updated'],200);
                        
                    }
                    
                } catch (Exception $e){
                    return response()->json(['error' => $e->getMessage()], 200);
                }
            }else{
                return  response()->json(['warning'  => 'Unauthorized  Request'],  200);
            }
        }
    }
    //user_profile_update ends

    // generate_qr_code function start
    public function generate_qr_code(Request $request){
        //return $request->all();

        $user  = User::find(auth('web')->user()->id);
        $google2fa = new Google2FA();
        $user->google2fa_secret = $google2fa->generateSecretKey();

        $qrCodeUrl = $google2fa->getQRCodeUrl(
            "CRYPTO WALLET",
            $user->email,
            $user->google2fa_secret
        );
       
        // Use your own QR Code generator to generate a data URL:
        $google2fa_url = 'https://chart.googleapis.com/chart?chs=150x150&chld=M|0&cht=qr&chl=' . $qrCodeUrl;
        $user->google2fa_url = $google2fa_url;
        $user->auth_type = "google_auth";

        if ($user->save()) {
            return  response()->json(['success'  =>  'QR Code Generated Successfully...'], 200);
    
        }

    }
    // generate_qr_code function ends
    public function user_account_settings_view(){
        if(auth()->check()){
            return  view('frontend.pages.user.user-account-settings');
        }
        else{
            return  view('errors.404');
        }
    }
    

}