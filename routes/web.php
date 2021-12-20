<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', array(
        "webname" => "gepcode.com",
        "owner" => "Gilang Pratama",
        "usiaweb" => "7 Bulan"
    ));
});
