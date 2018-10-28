<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/{project_id}/share', function () {
    return view('share');
});

Route::get('/{project_id}/message', function () {
    return view('message.message');
});

Route::get('/{project_id}/message/confirm', function () {
    return view('message.confirm');
});

Route::get('/{project_id}/message/finish', function () {
    return view('message.finish');
});