<?php

use App\Models\WorkExperience;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkExperienceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

// Route::get('profile',function () {
//     return "hello";
// });


Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('info',function(){
    return view('profile.info');
});
Route::post('update-profile',[ProfileController::class,'updateInfo'])->name('update-profile.updateInfo');
Route::get('workExp', [WorkExperienceController::class,'index']);
Route::post('workExp', [WorkExperienceController::class,'store'])->name('workExp.store');


