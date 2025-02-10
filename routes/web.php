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

Route::group(['namespace'=>'Main', 'prefix'=>'main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
    Route::get('show/{post}', 'ShowController')->name('main.show');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'IndexController')->name('admin.index');

    route::group(['namespace'=> 'Categories','prefix' => 'category'], function () {
        Route::get('/', 'IndexController')->name('admin.category.index');

        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/store', 'StoreController')->name('admin.category.store');
        Route::get('show/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/update/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/delete/{category}', 'DeleteController')->name('admin.category.delete');
    });

    route::group(['namespace'=> 'Tags','prefix' => 'tag'], function () {
        Route::get('/', 'IndexController')->name('admin.tag.index');

        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/store', 'StoreController')->name('admin.tag.store');
        Route::get('show/{tag}', 'ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
        Route::patch('/update/{tag}', 'UpdateController')->name('admin.tag.update');
        Route::delete('/delete/{tag}', 'DeleteController')->name('admin.tag.delete');
    });

    route::group(['namespace'=> 'Users','prefix' => 'user'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');

        Route::get('show/{user}', 'ShowController')->name('admin.user.show');

    });


    route::group(['namespace'=> 'Posts','prefix' => 'post'], function () {
        Route::get('/', 'IndexController')->name('admin.post.index');

        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/store', 'StoreController')->name('admin.post.store');
        Route::get('show/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/update/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/delete/{post}', 'DeleteController')->name('admin.post.delete');
    });



});

Route::get('/', function () {
    return view('welcome');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
