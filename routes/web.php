<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Controllers\NewsBlogDetailController;
use App\Http\Controllers\ArticleBlogdetailController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/news/{name}', [NewsCategoryController::class, 'show']);
Route::get('/article/{name}', [ArticleCategoryController::class, 'show']);
Route::get('/news_detail/{title}', [NewsBlogDetailController::class, 'show']);
Route::get('/article_detail/{title}', [ArticleBlogDetailController::class, 'show']);
Route::get('/news-detail/{title}', [NewsBlogDetailController::class, 'show']);
Route::get('/article-detail/{title}', [ArticleBlogDetailController::class, 'show']);
Route::get('/video', [VideoController::class, 'show']);
Route::get('/privacy', [PrivacyPolicyController::class, 'show']);
Route::get('/about', [PrivacyPolicyController::class, 'show']);
Route::get('/term', [PrivacyPolicyController::class, 'show']);
Route::get('/Privacy_policy.php', [PrivacyPolicyController::class, 'show']);
Route::get('/login', [LoginController::class, 'show']);
