<?php

Route::get('/', 'Bierbrouwerij\Controllers\HomeController@index');
Route::get('/articles/{id}', 'Bierbrouwerij\Controllers\ArticleController@create');
Route::post('/articles', 'Bierbrouwerij\Controllers\ArticleController@store);