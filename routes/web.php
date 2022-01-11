<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;

Route::get('/', [Home::class, 'employee']);

Route::get('/about', function () {
    return view('about', array(
        "webname" => "gepcode.com",
        "owner" => "Gilang Pratama",
        "usiaweb" => "7 Bulan"
    ));
});
