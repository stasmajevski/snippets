<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::get('me', 'MeController');
    Route::post('signin', 'SignInController');
    Route::post('signout', 'SignOutController');
});

Route::group(['prefix' => 'snippets', 'namespace' => 'Snippets'], function () {
    Route::post('', 'SnippetController@store');
});
