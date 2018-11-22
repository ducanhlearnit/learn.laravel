<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return 'welcome to admin';
});

Route::get('/admin/categories/add', function () {
    return 'add to categories';
});

Route::get('/admin/post/{idPost}', function ($idPost) {
    return 'you view post ' . $idPost;
});

Route::get('/admin/post/{name}/{section}', function ($nameR, $sectionR) {
    return 'you view post with ' . $nameR . ' ' . $sectionR;
});