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

Route::group(['namespace' => 'Main', 'prefix' => 'main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
    Route::get('show/{post}', 'ShowController')->name('main.show');

    Route::group(['namespace' => 'Comments', 'prefix' => '{post}/comment'], function () {
        Route::post('/', 'StoreController')->name('main.comment.store');
    });

    Route::group(['namespace' => 'Likes', 'prefix' => '{post}/like'], function () {
        Route::post('/', 'StoreController')->name('main.like.store');
    });
});

Route::group(['namespace' => 'Personal', 'prefix' => 'personal'], function () {
    Route::get('/', 'IndexController')->name('personal.index');

    route::group(['namespace' => 'Likes', 'prefix' => 'like'], function () {
        Route::get('/', 'IndexController')->name('personal.like.index');
        Route::delete('/{post}', 'DeleteController')->name('personal.like.delete');
    });

    route::group(['namespace' => 'Comments', 'prefix' => 'comment'], function () {
        Route::get('/', 'IndexController')->name('personal.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('personal.comment.edit');
        Route::patch('/update/{comment}', 'UpdateController')->name('personal.comment.update');
        Route::delete('/delete/{comment}', 'DeleteController')->name('personal.comment.delete');
    });
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'IndexController')->name('admin.index');

    route::group(['namespace' => 'Categories', 'prefix' => 'category'], function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/store', 'StoreController')->name('admin.category.store');
        Route::get('show/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/update/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/delete/{category}', 'DeleteController')->name('admin.category.delete');
    });

    route::group(['namespace' => 'Tags', 'prefix' => 'tag'], function () {
        Route::get('/', 'IndexController')->name('admin.tag.index');

        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/store', 'StoreController')->name('admin.tag.store');
        Route::get('show/{tag}', 'ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
        Route::patch('/update/{tag}', 'UpdateController')->name('admin.tag.update');
        Route::delete('/delete/{tag}', 'DeleteController')->name('admin.tag.delete');
    });

    route::group(['namespace' => 'Users', 'prefix' => 'user'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');

        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/store', 'StoreController')->name('admin.user.store');
        Route::get('show/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/update/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/delete/{user}', 'DeleteController')->name('admin.user.delete');

    });


    route::group(['namespace' => 'Posts', 'prefix' => 'post'], function () {
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
