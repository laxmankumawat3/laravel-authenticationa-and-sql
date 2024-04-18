<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Middleware\ChechAuth;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\postcontroller;
// Route::get('/', function () {
//     return view('welcome');
// });

// ****************************** frontend route *****************

// Route::get('/registerview',function(){
//     return view('frontend.registration');
// });
Route::post('/register',[userController::class, 'registration'])->name('register');
// Route::get('/loginview',function(){
//     return view('frontend.login');
// })->name('loginview');
Route::post('/login',[userController::class, 'login']);

Route::get('resetpassword', function(){{
    return view('frontend.resetpassword');
}})->middleware(ChechAuth::class);

// *********** layout route ****************************** 

Route::get('/', [LayoutsController::class , 'home']);
Route::get('/about', [LayoutsController::class , 'about']);
Route::get('/shop', [LayoutsController::class , 'shop']);
Route::get('/shop_details', [LayoutsController::class , 'shop_details']);
Route::get('/shoping_cart', [LayoutsController::class , 'shoping_cart']);
Route::get('/check_out', [LayoutsController::class , 'check_out']);
Route::get('/wiss_list', [LayoutsController::class , 'wiss_list']);
Route::get('/class', [LayoutsController::class , 'class']);
Route::get('/blog_details', [LayoutsController::class , 'blog_details']);
Route::get('/blog', [LayoutsController::class , 'blog']);
Route::get('/contact', [LayoutsController::class , 'contact']);
Route::get('/signin', [LayoutsController::class , 'signin'])->name('signin');
Route::get('/signup', [LayoutsController::class , 'signup']);

// ************** reset password route start from here **************

// routes/web.php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::group( ['prefix' => 'password'], function(){
    Route::get('/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
  
});


// ***************** logout route *****************************************

Route::get('/logout' , function(){
    Auth::logout();
    return redirect('/');
})->middleware(ChechAuth::class);



// ***************** fetch user ************************ 

Route::get('getalluser', [userController::class , 'fetchAllUser']);


// ******************** get student table route ******************
Route::get('/get_student_list', [studentcontroller::class, 'index']);
// ******************** get postcontroller  table route ******************

Route::get('/join_table', [postcontroller::class, 'index']);
Route::get('/left_join', [postcontroller::class, 'leftJoin']);
Route::get('/rigth_join', [postcontroller::class, 'rigthJoin']);
Route::get('/full_join', [postcontroller::class, 'fullJoin']);
Route::get('/left_exclusive_join', [postcontroller::class, 'leftExclusiveJoin']);
Route::get('/right_exclusive_join', [postcontroller::class, 'rightExclusiveJoin']);
Route::get('/Union', [postcontroller::class, 'Union']);
Route::get('/findaboveAvgmarkStd', [postcontroller::class, 'findaboveAvgmarkStd']);
Route::get('/evenRollNoStd', [postcontroller::class, 'evenRollNoStd']);
Route::get('/maxMarkStudent', [postcontroller::class, 'maxMarkStudent']);


// ********************** carousel ********************************* 

Route::get('/carousel', function(){
    return view('frontend.carousel');
});