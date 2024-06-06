<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('layouts/public/home');
// })->name('home');

Route::get('/', [HomeController:: class, 'home'])->name('home');

Route::get('/profile',[ProfileController:: class, 'profile'])->name('profile');
Route::get('/contact',[ContactController:: class, 'contact'])->name('contact');
Route::post('/contact/simpan',[ContactController:: class,'simpancontact'])->name('simpancontact');


Route::get('/projects',[ProjectController:: class, 'project'])->name('project');
//Route::get('/login',[LoginController:: class, 'login'])->name('login');

Auth::routes();
Route::middleware('auth')->group(function () {
    //Admin page
    Route::get('/auth/dashboard',[DashboardController:: class,'dashboard'])->name('dashboard');

    Route::get('/auth/user',[UserController:: class,'user'])->name('user');
    Route::get('/auth/user/tambah',[UserController:: class,'tambahuser'])->name('tambahuser');
    Route::get('/auth/user/edit',[UserController:: class,'edituser'])->name('edituser');

    Route::get('/auth/profile',[ProfileController:: class,'daftarprofile'])->name('daftarprofile');
    Route::get('/auth/profile/tambah',[ProfileController:: class,'tambahprofile'])->name('tambahprofile');
    Route::post('/auth/profile/simpan',[ProfileController:: class,'simpanprofile'])->name('simpanprofile');
    Route::get('/auth/profile/edit/{id}',[ProfileController:: class,'editprofile'])->name('editprofile');
    Route::post('/auth/profile/update/{id}',[ProfileController:: class,'updateProfile'])->name('updateProfile');
    Route::post('/auth/profile/delete/{id}',[ProfileController:: class,'deleteProfile'])->name('deleteProfile');


    Route::get('/auth/contact',[ContactController:: class,'daftarcontact'])->name('daftarcontact');
    Route::post('/auth/contact/delete/{id}',[ContactController:: class,'deleteContact'])->name('deleteContact');

    Route::get('/auth/footer',[FooterController:: class,'daftarfooter'])->name('daftarfooter');
    Route::get('/auth/footer/tambah',[FooterController:: class,'tambahfooter'])->name('tambahfooter');
    Route::get('/auth/footer/edit',[FooterController:: class,'editfooter'])->name('editfooter');

    Route::get('/auth/home',[HomeController:: class,'daftarhome'])->name('daftarhome');
    Route::get('/auth/home/tambah',[HomeController:: class,'tambahhome'])->name('tambahhome');
    Route::post('/auth/home/simpan',[HomeController:: class,'simpanhome'])->name('simpanhome');
    Route::get('/auth/home/edit/{id}',[HomeController:: class,'editHome'])->name('editHome');
    Route::post('/auth/home/update/{id}',[HomeController:: class,'updateHome'])->name('updateHome');
    Route::post('/auth/home/delete/{id}',[HomeController:: class,'deleteHome'])->name('deleteHome');
});