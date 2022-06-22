<?php

use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\LicenseController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\VideoArticleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'set_locale'], function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/projects', [MainController::class, 'projects'])->name('projects');
    Route::get('/partners', [MainController::class, 'partners'])->name('partners');
    Route::get('/about', [MainController::class, 'about'])->name('about');
    Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');
    Route::get('/ads', [MainController::class, 'ads'])->name('ads');
    Route::get('/licenses', [MainController::class, 'licenses'])->name('licenses');
    Route::get('/news', [MainController::class, 'news'])->name('news');
    Route::get('/news/{article}', [MainController::class, 'showArticle'])->name('showArticle');
    Route::get('/video-news/{videoArticle}', [MainController::class, 'showVideoArticle'])->name('showVideoArticle');

	Route::view('/calculate', 'frontend.calculator')->name('calc');

    Route::get('/control-measurement', [MainController::class, 'controlMeasurement'])->name('control-measurement');
    Route::view('/technical-supervision', 'frontend.technical-supervision')->name('technical-supervision');
    Route::view('/design-and-estimate-documentation', 'frontend.design-and-estimate-documentation')->name('design-and-estimate-documentation');

    Route::get('/locale/{locale}', [MainController::class, 'changeLocale'])->name('changeLocale');
});

Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'register'])->name('register');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('ads', AdController::class);
    Route::resource('articles', ArticleController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('counters', CounterController::class);
    Route::resource('information', InformationController::class);
    Route::resource('licenses', LicenseController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('socials', SocialController::class);
    Route::resource('video-articles', VideoArticleController::class);
});
