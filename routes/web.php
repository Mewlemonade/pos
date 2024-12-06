<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

//Route::get('/formulir', [FormController::class, 'showForm']);
//Route::get('/output/{nama}', [FormController::class, 'showOutput'])->where('nama', '[A-Za-z0-9-]+');

Route::get('/nama/{nama}', function ($nama) {
    return "Hello, nama kamu adalah " . $nama;
});

Route::get('/nama-optional/{nama?}', function (?string $nama = null) {
    return "Hello, nama kamu adalah " . $nama;
});

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
Route::delete('/post/{id}', [PostController::class, 'delete'])->name('post.delete');
Route::put('/post/{id}', [PostController::class, 'update'])->name('post.update');

//Route::resource('post', PostController::class);

// Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', 'Auth\RegisterController@register');

Route::get('/home', function () {
    return view('design.home');
});

Route::get('/grid_sederhana', function () {
    return view('design.grid_sederhana');
});

Route::get('/grid_sederhana_gambar', function () {
    return view('design.grid_sederhana_gambar');
});

Route::get('/blog/create', [BlogPostController::class, 'create']);
Route::post('/blog', [BlogPostController::class, 'store']);
Route::get('/blog/{blogPost}', [BlogPostController::class, 'show']);

Route::get('/get-cities', [LocationController::class, 'getCities']);
Route::get('/locations', function () {
    $countries = App\Models\Country::all();
    return view('locations', ['countries' => $countries]);
});

Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::get('/foods', [FoodController::class, 'index'])->name('foods.index');
Route::get('/foods/search', [FoodController::class, 'search'])->name('foods.search');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
