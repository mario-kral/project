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

/*
    GET /projects (index) - zobraz vsetky projekty
    GET /projects/create (create) - vytvor novy projekt
    GET /projects/1 (show) - zobraz projekty 1
    POST /projects (store) - uloz projekt
    GET /projects/1/edit (edit) - edituj projekt
    PATCH /projects/1 (update) - updatni projekt
    DELETE /projects/1 (destroy) - vymaz projekt
*/

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@about');
Route::resource ('/projects', 'ProjectsController');    // resource je shortcut pre vsetky routes (create, show, store...)
Route::post('/projects/{project}/tasks/', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');

/*
Route::get('/projects', 'ProjectsControler@index');
Route::get('/projects/create', 'ProjectsControler@create');
Route::get('/projects/{project}', 'ProjectsControler@show');
Route::post('/projects', 'ProjectsControler@store');
Route::get('/projects/{project}/edit', 'ProjectsControler@edit');
Route::patch('/projects/{project}', 'ProjectsControler@update');
Route::delete('/projects/{project}', 'ProjectsControler@destroy');
*/
