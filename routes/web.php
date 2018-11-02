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

Route::get('/create', 'ProjectController@create');

Route::post('/share', 'ProjectController@share');

Route::get('/{project_id}/message', 'ProjectController@message');

Route::get('/{project_id}/message/confirm', 'ProjectController@confirm');

Route::get('/{project_id}/message/finish', 'ProjectController@finish');