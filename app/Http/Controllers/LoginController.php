<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }
}
