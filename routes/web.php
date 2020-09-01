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

Auth::routes();

Route::get('/login',function (){
	return view('auth.login');
})->name('login');

Route::post('/loginPost', 'UserController@loginPost')->name('req.login');
Route::get('/logout', 'UserController@logout')->name('logout');

Route::get('/', function (){
	return view('other.index');
})->name('home');

Route::get('/dashboard',function (){
	return view('AdminLTE/pages/dashboard');
});

Route::get('/survey','SurveyController@index');
Route::get('/survey/form_insert','SurveyController@create');
Route::post('/survey/act_insert', 'SurveyController@store');
Route::get('/survey/form_edit/{id}','SurveyController@edit');
Route::post('/survey/act_update/{id}', 'SurveyController@update');
Route::get('/survey/act_delete/{id}','SurveyController@destroy');

Route::get('/survey/{id}/pertanyaan','PertanyaanController@index');
Route::post('/survey/{id}/pertanyaan/savepertanyaan','PertanyaanController@store');
Route::post('pertanyaan/savepertanyaan','PertanyaanController@store')->name('insert.q');

Route::get('/pantaujawaban',function (){
	return view('AdminLTE/pages/pantaujawaban');
});


Route::get('/notlogin', 'UserController@notLogin');



