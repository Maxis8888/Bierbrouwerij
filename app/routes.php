<?php

Route::get('/', 'Bierbrouwerij\Controllers\HelloController@index');

Route::get('/hello', function() {
    "Hello";
});