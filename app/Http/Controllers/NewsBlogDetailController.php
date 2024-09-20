<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class NewsBlogDetailController extends Controller
{
    public function show($title)
    {
        $detailType = 'news_detail';
        // $url = 'https://tnreaders.in/api/user/seoCategory?id=' . $title;
        // $response = Http::get($url);
        // $data = $response->json();

        $data = json_encode([
            'seo_title' => 'Young leader Vijay has bought a new car.',
            'seo_keyword' => 'Tamil cinema, leading actor, Vijay, luxury car career, new car, Rolls Royce, controversy, sale, fans, official reason.',
            'seo_description' => 'Vijay39s Rolls Royce is no more Commander bought a new car.'
        ]);
        return view('blog-detail', compact('title', 'detailType', 'data'));
    }
}
