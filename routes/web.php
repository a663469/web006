<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => '\App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
//    Route::get('/posts/create', 'CreateController')->name('post.create');
//    Route::post('/posts', 'StoreController')->name('post.store');
//    Route::get('/posts/{post}', 'ShowController')->name('post.show');
//    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit');
//    Route::patch('/posts/{post}', 'UpdateController')->name('post.update');
//    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
