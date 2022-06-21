<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Auth::routes();

$product = [
    1 => [
        'name' => 'baju',
        'image' => '....'
    ],
    2 => [
        'name' => 'baju',
        'image' => '....'
    ],
    3 => [
        'name' => 'baju',
        'image' => '....'
    ]
    ];

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/customers', MemberController::class);

Route::get('/test', function(){
    return view('partials.form');
});

Route::get('/shows', function(){
    return view('partials.show');
})->name('show');

Route::get('/orders', function(){
    return view('order');
})->name('orders');

Route::get('/sell', function(){
    return view('sells');
})->name('sell');