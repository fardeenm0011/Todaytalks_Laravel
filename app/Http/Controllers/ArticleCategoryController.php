<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

class ArticleCategoryController extends Controller
{
    public function show($name)
    {
        // $categories = // Fetch categories data here
        // $seo = // Fetch SEO data based on $name
        $type = 'article';
        return view('category', compact('name', 'type'));
    }
    
}
