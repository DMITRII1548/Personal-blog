<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleComment;
use Exception;
use Illuminate\Http\Request;

class DestroyController extends Controller
{

    public function __invoke(Article $article)
    {
        try {
            ArticleComment::where('article_id', $article->id)->forceDelete();
            $article->delete();

            return redirect()->route('nav.home');
        } catch (Exception $e) {
            return redirect()->route('nav.home');
        }

    }

}
