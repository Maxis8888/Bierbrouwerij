<?php

Route::get('/', 'Bierbrouwerij\Controllers\HomeController@index');
Route::get('/articles/{id}', 'Bierbrouwerij\Controllers\ArticleController@show');