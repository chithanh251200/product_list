<?php
use Illuminate\Support\Facades\Route;
use app\http\controller\PostControler;
use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// định nghĩa định tuyến
// product list
Route::get('/','ProductController@show');

// detail
Route::get('/product/detail/{id}','ProductController@detail')->name('detail_product');