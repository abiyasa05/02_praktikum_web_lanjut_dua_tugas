<?php

use App\Http\Controllers\ContactUsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return '<iframe src="https://www.educastudio.com/" width="100%" height="100%"></iframe>';
});

// Route Biasa Halaman About Us
Route::get('/about-us', function (){
    return '<iframe src="https://www.educastudio.com/about-us" width="100%" height="100%"></iframe>';
});

// Route Biasa Halaman About Us
Route::get('/contact', function (){
    return '<iframe src="https://www.educastudio.com/contact-us" width="100%" height="100%"></iframe>';
});

// Route Resource Halaman Contact Us
Route::resource('/contact-us', ContactUsController::class)->only([
    'contact',
]);

// Route Prefix Halaman Products
Route::prefix('products')->group(function(){
    Route::get('category/marbel-edu-games',function(){
        return '<iframe src="https://www.educastudio.com/category/marbel-edu-games" width="100%" height="100%"></iframe>';
    });
});

Route::prefix('products')->group(function(){
    Route::get('category/marbel-and-friends-kids-games',function(){
        return '<iframe src="https://www.educastudio.com/category/marbel-and-friends-kids-games" width="100%" height="100%"></iframe>';
    });
});

Route::prefix('products')->group(function(){
    Route::get('category/riri-story-books',function(){
        return '<iframe src="https://www.educastudio.com/category/riri-story-books" width="100%" height="100%"></iframe>';
    });
});

Route::prefix('products')->group(function(){
    Route::get('category/kolak-kids-songs',function(){
        return '<iframe src="https://www.educastudio.com/category/kolak-kids-songs" width="100%" height="100%"></iframe>';
    });
});

// Route param Halaman News
Route::get('/{news}', function () {
    echo '<iframe src="https://www.educastudio.com/news" width="100%" height="100%"></iframe>';
});

Route::get('news/{title}', function () {
    echo '<iframe src="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19" width="100%" height="100%">
        </iframe>';
});

// Route prefix Halaman Program
Route::prefix('program')->group(function(){
    Route::get('karir',function(){
        return '<iframe src="https://www.educastudio.com/program/karir" width="100%" height="100%"></iframe>';
    });
});

Route::prefix('program')->group(function(){
    Route::get('magang',function(){
        return '<iframe src="https://www.educastudio.com/program/magang" width="100%" height="100%"></iframe>';
    });
});

Route::prefix('program')->group(function(){
    Route::get('kunjungan-industri',function(){
        return '<iframe src="https://www.educastudio.com/program/kunjungan-industri" width="100%" height="100%"></iframe>';
    });
});



