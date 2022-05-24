<?php

use App\Http\Controllers\Frontend\User\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' =>  'dashboard' , 'middleware'  => 'web'],  function(){
    Route::get("/"  ,  [UserProfileController::class, "index"])->name('user.dashboard');
    Route::get("/do-exam"  ,  [UserProfileController::class, "exam"])->name('user.exam');
   // Route::get("/2fa"  ,  [UserProfileController::class, "twoFa"])->name('user.2fa');    
    Route::get("/logout"  ,  [UserProfileController::class, "logout"])->name('user.logout');
    Route::get("/user-profile-view"  ,  [UserProfileController::class, "user_profile_view"])->name('user.profile.view');
    Route::post("/user-profile-update"  ,  [UserProfileController::class, "user_profile_update"])->name('user.profile.update');
    Route::get("/generate-qr-code", [UserProfileController::class, "generate_qr_code"])->name('generate.qr.code');

    Route::get("user-account-settings"  ,  [UserProfileController::class, "user_account_settings_view"])->name('user.account.settings.view');
    Route::get("/user/security/settings"  ,  [UserProfileController::class, "user_secuirity_settings"])->name('user.secuirity.settings');
});

?>