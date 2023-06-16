<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Profile;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $users=User::find(1);
   $userprofile= $users->profile;
    //dd($userprofile);
    $user = User::find(1)->profile;
    $profile = Profile::find(1)->user;
    dd($user);
    return view('welcome');
});
