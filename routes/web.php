<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AllBooksController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BookViewController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeBlogsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeGalleryController;
use App\Http\Controllers\HomeSelected;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ManageHomeController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\TestimonialController;
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

Route::get('manage', function () {
    return view('management.login');
});
Route::get('registration', function () {
    return view('management.registration');
});
Route::get('/', [HomeController::class,'index']) ->name('home');
Route::get('home', [HomeController::class,'index']) ->name('home');

Route::get('book', [AllBooksController::class,'index']) ->name('book');

Route::get('gallery-images', [HomeGalleryController::class,'index']) ->name('gallery-images');

Route::get('blogs', [HomeBlogsController::class,'index']) ->name('blogs');

Route::get('book/{book}/view', [BookViewController::class,'index']) ->name('book.view');

Route::get('about', [AboutController::class,'index']) ->name('about');

Route::get('contact', [AboutController::class,'index']) ->name('contact');

Route::get('home-manage', [ManageHomeController::class,'index']) ->name('home-manage');
Route::post('home-manage', [ManageHomeController::class,'add_slider']);

Route::get('dashboard', [DashboardController::class,'index']) ->name('dashboard');
Route::post('dashboard', [DashboardController::class,'add_book']);

Route::get('gallery', [GalleryController::class,'index']) ->name('gallery');
Route::post('gallery', [GalleryController::class,'upload']);

Route::get('articles', [ArticleController::class,'index']) ->name('articles');
Route::post('articles', [ArticleController::class,'upload']);

Route::get('testimonials', [TestimonialController::class,'index']) ->name('testimonials');
Route::post('testimonials', [TestimonialController::class,'upload']);

Route::get('messages', [MessagesController::class,'index']) ->name('messages');
// Route::post('messages', [MessagesController::class,'upload']);

Route::get('login', [LoginController::class,'index']) ->name('login');
Route::post('login', [LoginController::class,'login']);

Route::post('registerAdmin', [RegistrationController::class,'store']) ->name('registerAdmin');

Route::post('logout', [LogoutController::class,'logout']) ->name('logout');

// Route::resource('selectedHome', 'HomeSelected', ['parameters' => [
//     'home' => 'home'
// ]]);

Route::post('home/{home}/view', [HomeSelected::class,'save']) ->name('home.view');
Route::get('home/{home}/view', [HomeSelected::class,'show']);
// Route::resource('selected-home', HomeSelected::class);


