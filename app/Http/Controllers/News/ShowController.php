<?php

namespace App\Http\Controllers\News;

use App\Actions\UrlBackAction;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsComment;
use Illuminate\Http\Request;

class ShowController extends Controller
{

    public function __invoke(News $news)
    {
        $comments = NewsComment::where('news_id', $news->id)->get();

        $urlBackAction = new UrlBackAction();
        $urlPreviousPage = $urlBackAction->execute(route('nav.news'));

        return view('news.show', compact('news', 'comments', 'urlPreviousPage'));
    }

}
