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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/all-student", "StudentController@allStudent");
Route::get("/add-student", function(){
	return view("/pages.addStudent");
});
Route::post("/saveStudent", "StudentController@saveStudent");
Route::get("/view-student/{id}", "StudentController@viewStudent");

Route::get("/edit-student/{id}", "StudentController@editStudent");
Route::post("/update-student/{id}", "StudentController@updateStudent");

Route::get("/delete-student/{id}", "StudentController@deleteStudent");
Route::get("/accounting", "SubjectController@accounting");
Route::get("/computer", "SubjectController@computer");
Route::get("/mathematic", "SubjectController@mathematic");