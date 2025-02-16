<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    $products= \App\Product::all();  
    return view('welcome',['products' => $products]);
});

Route::get('/plan_a.php','ProductController@ruleUploadSpeedLessThan100');
Route::get('/plan_b.php','ProductController@ruleUploadSpeedLessThan100AndFiber');
Route::get('/plan_c.php','ProductTwoController@ruleDownloadSpeedGreaterThan100AndFiber');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
















