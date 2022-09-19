<?php

use Illuminate\Support\Facades\Route;

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

Route::get(
    '/login',
    'App\Http\Controllers\UserController@createNewAccount'
);
Route::post('/save-register', [
    'as' => 'savecreatenewaccount',
    'uses' => 'App\Http\Controllers\UserController@store'
]);
Route::get('/', 'App\Http\Controllers\SanPhamController@index');
// Route::get('/', 'App\Http\Controllers\SanPhamController@mau_ao_moi');
//     return view('trang_chu');
// });
Route::get('/index', 'App\Http\Controllers\SanPhamController@index');
// Route::get('/index', 'App\Http\Controllers\SanPhamController@mau_ao_moi');

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product', function () {
    return view('production');
});
Route::get('/product-nike', 'App\Http\Controllers\SP_NikeController@index');
Route::get('/product-jordan', 'App\Http\Controllers\SP_JordanController@index');
Route::get('/product-nike/{id_sp}', 'App\Http\Controllers\SP_NikeController@show');
Route::get('/basket-shoes', 'App\Http\Controllers\SanPhamController@product_shoes');



Route::get('/single', function () {
    return view('single');
});
Route::get('/register', function () {
    return view('register_acc');
});
Route::get('/cart', function () {
    return view('trang_gio_hang');
});
