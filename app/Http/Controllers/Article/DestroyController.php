<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleComment;
use Illuminate\Http\Request;

class DestroyController extends Controller
{

    public function __invoke(Article $article)
    {
        ArticleComment::where('article_id', $article->id)->forceDelete();
        $article->delete();
    }

}
