<?php

Route::get('/', 'Bierbrouwerij\Controllers\HomeController@index');

Route::get('/hello', 'Bierbrouwerij\Controllers\HelloController@hello');
