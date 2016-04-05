<?php

Route::get('/', 'Bierbrouwerij\Controllers\HelloController@index');

Route::get('/hello', 'Bierbrouwerij\Controllers\HelloController@hello');