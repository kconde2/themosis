<?php

/**
 * Application routes.
 */
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/settings', 'SettingsController@index')->name('settings');

Auth::routes();

Route::get('/settings', 'SettingsController@index')->name('settings');
