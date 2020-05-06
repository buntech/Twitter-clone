<?php

Auth::routes();
Route::get('/', 'ArticleController@index')->name('articles.index');  //(URL, コントローラー@メソッド)
Route::resource('/articles', 'ArticleController')->except(['index', 'show'])->middleware('auth');
Route::resource('/articles', 'ArticleController')->only(['show']);