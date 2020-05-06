<?php

Auth::routes();
Route::get('/', 'ArticleController@index')->name('articles.index');  //(URL, コントローラー@メソッド)
Route::resource('/articles', 'ArticleController')->except(['index'])->middleware('auth');