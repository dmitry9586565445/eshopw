<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Main')->group(function () {
    Route::get('/', 'IndexController@index')->name('index');
});

Auth::routes();
