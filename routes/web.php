<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = [
        array('id' => 1, 'name' => 'Sukidi', 'age' => 30),
        array('id' => 2, 'name' => 'Parjo', 'age' => 29),
    ];
    return view('home', array('users' => $users));
});

Route::get('/about', function () {
    return view('about', array(
        "webname" => "gepcode.com",
        "owner" => "Gilang Pratama",
        "usiaweb" => "7 Bulan"
    ));
});
