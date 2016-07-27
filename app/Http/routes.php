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

Route::get('/', function() {
    return view('welcome');
}) ;
Route::get('users' , ['as' => 'userList' , 'uses'=> 'SohanController@lists']);
Route::get('create' , [ 'as'=> 'addUser' , 'uses'=> 'SohanController@creates']);
Route::post('users', ['as' => 'saveUser' , 'uses' => 'SohanController@stores'] );
Route::get('users/{id}/edit', ['as'=> 'editUser' , 'uses'=>'SohanController@edits']  );
Route::post('users/{id}', [  'as' => 'updateUser' , 'uses' => 'SohanController@updates'] );
Route::get('users/{id}/delete', ['as'=> 'deleteUser' , 'uses'=>'SohanController@deletes']  );




