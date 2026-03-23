<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function calcoloFunction()
    {
        $calcolo = 2 + 2;
        return $calcolo;
    }
}
