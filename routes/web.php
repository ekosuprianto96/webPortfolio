<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnalitycController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GraduationController;
use App\Http\Controllers\MyProject;
use App\Http\Controllers\MyProjectController;
use App\Http\Controllers\SocialMediaController;

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

Route::get('/', [IndexController::class, 'index']);


// Admin
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');

// My profile route
Route::get('/myprofile', [AdminController::class, 'myprofile'])->middleware('auth');
Route::post('/updateprofile', [ProfileController::class, 'updateprofile'])->name('updateprofile')->middleware('auth');
Route::post('/uploadimage', [ProfileController::class, 'updateprofile'])->name('uploadimage')->middleware('auth');
Route::get('/socialmedia', [AdminController::class, 'socialmedia'])->middleware('auth');
Route::get('/myproject', [AdminController::class, 'myproject'])->middleware('auth');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// My Graduations Route
Route::get('/mygraduation', [GraduationController::class, 'index'])->middleware('auth');
Route::post('/addgraduation', [GraduationController::class, 'addGraduation'])->name('addGraduation')->middleware('auth');
Route::get('/deletegraduate', [GraduationController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/updategraduate/{id}', [GraduationController::class, 'update'])->middleware('auth');
Route::post('/updategraduate', [GraduationController::class, 'insertUpdate'])->name('updategraduate')->middleware('auth');
Route::get('/deletegraduate/{id}', [GraduationController::class, 'deletegraduate'])->name('deletegraduate')->middleware('auth');

//Route My Project
Route::post('/addproject', [MyProjectController::class, 'insert'])->name('insertproject')->middleware('auth');
Route::get('/getproject/{id}', [MyProjectController::class, 'get'])->name('getproject')->middleware('auth');
Route::post('/updateproject', [MyProjectController::class, 'update'])->name('updateproject')->middleware('auth');
Route::get('/deleteproject/{id}', [MyProjectController::class, 'delete'])->name('updateproject')->middleware('auth');

// Analitycs
Route::post('analitycs', [AnalitycController::class, 'index'])->name('analityc.search')->middleware('auth');
Route::get('analitycs', [AnalitycController::class, 'index'])->name('analityc.index')->middleware('auth');
// Login
Route::get('/loginadmin', [LoginController::class, 'index'])->name('loginadmin')->middleware('guest');
Route::post('/loginadmin', [LoginController::class, 'authenticate'])->middleware('guest');

// Contact Email
Route::post('contact-us', [ContactController::class, 'store'])->name('contact-us');
Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'store']);

Route::prefix('socialmedia')->name('socialmedia.')->middleware('auth')->group(function () {
    Route::post('create', [SocialMediaController::class, 'create'])->name('create');
    Route::post('edit', [SocialMediaController::class, 'edit'])->name('edit');
    Route::get('delete/{id}', [SocialMediaController::class, 'delete'])->name('delete');
});

Route::prefix('contact')->name('contact.')->middleware('auth')->group(function () {
    Route::get('view/{id}', [ContactController::class, 'view'])->name('view');
    Route::get('delete/{id}', [ContactController::class, 'delete'])->name('delete');
});
