<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

class ArticleBlogDetailController extends Controller
{
    public function show($title)
    {
        // $categories = // Fetch categories data here
        // $seo = // Fetch SEO data based on $name
        $detailType = 'article_detail';
        return view('blog-detail', compact('title', 'detailType'));
    }
    
}
