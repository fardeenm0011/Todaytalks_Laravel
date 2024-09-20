<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class NewsCategoryController extends Controller
{
    public function show($name)
    {
        $type = 'news';

        // $url = 'https://tnreaders.in/api/user/seoCategory?id' . $name;
        // $response = Http::get($url);
        // $data = $response->json();

        $data = json_encode([
            'seo_title' => 'cinema-news',
            'seo_keyword' => 'cinema-news',
            'seo_description' => 'cinema-news'
        ]);

        return view('category', compact('name', 'type', 'data'));
    }
}
