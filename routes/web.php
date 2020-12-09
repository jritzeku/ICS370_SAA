<?php

use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SchedulesController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::group(['middleware'=> ['auth']], function() {

    Route::group(['middleware'=>['advisor']], function(){
        Route::get('/advisor', [App\Http\Controllers\DashboardController::class, 'advisor'])->name('advisor');
    });

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
});


Route::get('/', [PagesController::class,'index']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/contact', [PagesController::class,'contact']);

Route::resource('appointments',AppointmentsController::class);


Route::resource('advisor/schedules',SchedulesController::class);


/*


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

//todo:
//Route::get('/user','DemoController@userDemo')->name('user');    //todo: 'user' page IS the dashboard...
//Route::get('/admin','DemoController@adminDemo')->name('admin'); //todo: no path this yet!

//todo: user
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
//todo: admin
Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'admin'])->name('admin');

*/


//
//Route::group(['middleware'=> ['auth']], function() {
//    Route::get('/user', 'DemoController@userDemo')->name('user');
//
//    Route::group(['middleware'=>['admin']], function(){
//        Route::get('/admin', 'DemoController@adminDemo')->name('admin');
//    });
//});
//





