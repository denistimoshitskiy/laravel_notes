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

Route::group(['namespace' => 'Note'], function () {
    Route::get('/', 'IndexController')->name('note.index');
    Route::get('/note/create', 'CreateController')->name('note.create');
    Route::post('/note', 'StoreController')->name('note.store');
    Route::get('/note/{note}', 'ShowController')->name('note.show');
    Route::get('/note/{note}/edit', 'EditController')->name('note.edit');
    Route::patch('/note/{note}', 'UpdateController')->name('note.update');
    Route::delete('/note/{note}', 'DestroyController')->name('note.delete');
});


