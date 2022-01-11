<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    function employee()
    {
        $employee = [
            array('id' => 1, 'name' => 'Sukidi', 'age' => 30),
            array('id' => 2, 'name' => 'Parjo', 'age' => 29),
        ];
        return view('home', ['employee' => $employee]); // melempar data employee ke view
    }
}
