<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class PrivacyPolicyController extends Controller
{
    public function show()
    {
        return view('privacy-policy');
    }
}
