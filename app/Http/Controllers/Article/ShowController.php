<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleComment;
use Illuminate\Http\Request;

class ShowController extends Controller
{

    public function __invoke(Article $article)
    {
        $comments = ArticleComment::where('article_id', $article->id)->get();

        return view('article.show', compact('article', 'comments'));
    }

}
