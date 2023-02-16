<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Wed routes
Route::get('/', function () {return view('web.index');});

// Auth & user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

// Admin panel
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/change/password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');
// Admin panel
Route::prefix('admin')->group(function () {
        Route::resources([
        'categories' => Admin\Category\CategoryController::class,
        'subcategories' => Admin\Category\SubcategoryController::class,
        'brands' => Admin\Category\BrandController::class,
        ]);
});

Route::get('/main', 'Dashboard\MainController@showHomePage')->name('dashboard.home');

Route::prefix('categories-section')->group(function () {
        Route::resources([
        'tags' => Dashboard\Category\TagController::class,
        'colors' => Dashboard\Category\ColorController::class,
        'categories' => Dashboard\Category\CategoryController::class,
        'subcategories' => Dashboard\Category\SubcategoryController::class
        ]);
});

