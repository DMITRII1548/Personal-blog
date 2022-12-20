<?php

namespace App\Http\Controllers\Article;

use App\Actions\UrlBackAction;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\NewsComment;
use Illuminate\Http\Request;

class ShowController extends Controller
{

    public function __invoke(Article $article)
    {
        $comments = ArticleComment::where('article_id', $article->id)->get();

        $urlBackAction = new UrlBackAction();
        $urlPreviousPage = $urlBackAction->execute(route('nav.home'));

        return view('article.show', compact('article', 'comments', 'urlPreviousPage'));
    }

}
