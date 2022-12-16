<?php

namespace App\Http\Controllers\Nav;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function __invoke()
    {
        $news = News::paginate();

        return view('blog.news', compact('news'));
    }

}
