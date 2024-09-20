<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class PrivacyController extends Controller
{
    public function show()
    {
        return view('about');
    }
}
