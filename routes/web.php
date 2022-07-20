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

Route::get('/', 'NoteController@index')->name('note.index');
Route::get('/note/create', 'NoteController@create')->name('note.create');
Route::post('/note', 'NoteController@store')->name('note.store');
Route::get('/note/{note}', 'NoteController@show')->name('note.show');
Route::get('/note/{note}/edit', 'NoteController@edit')->name('note.edit');
Route::patch('/note/{note}', 'NoteController@update')->name('note.update');
Route::delete('/note/{note}', 'NoteController@destroy')->name('note.delete');
