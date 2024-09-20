<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class VideoController extends Controller
{
    public function show()
    {
        return view('video');
    }
}
