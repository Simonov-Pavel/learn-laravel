<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/contact/message', 'ContactController@allData')->name('contact-data');
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
Route::get('/contact/message/{id}', 'ContactController@messageShow')->name('message-show');
Route::get('/contact/message/edit/{id}', 'ContactController@messageEdit')->name('message-edit');
Route::get('/contact/message/delete/{id}', 'ContactController@messageDelete')->name('message-delete');
Route::post('/contact/message/edit/{id}/submit', 'ContactController@messageEditSubmit')->name('message-edit-submit');
