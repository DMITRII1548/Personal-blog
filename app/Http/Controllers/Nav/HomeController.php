<?php

namespace App\Http\Controllers\Nav;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __invoke()
    {
        $articles = Article::all();

        return view('blog.home', compact('articles'));
    }

}
