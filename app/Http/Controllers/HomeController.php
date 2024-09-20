<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use GuzzleHttp\Client;

class HomeController extends Controller
{

    function index()
    {
        // $response = Http::get('https://tnreaders.in/api/user/setting');

        // $data = $response->json();

        $data = json_encode([
            'seo_title' => 'TodayTalks',
            'seo_keyword' => 'TodayTalks',
            'seo_description' => 'description'
        ]);

        return view('home', compact('data'));
    }
}
