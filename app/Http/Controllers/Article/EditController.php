<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class EditController extends Controller
{

    public function __invoke(Article $article)
    {
        return view('article.edit', compact('article'));
    }

}
