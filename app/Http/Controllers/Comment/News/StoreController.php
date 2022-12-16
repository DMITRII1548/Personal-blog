<?php

namespace App\Http\Controllers\Comment\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\News;
use App\Models\NewsComment;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __invoke(CommentRequest $request, News $news)
    {

        $comment = $request->validated();

        $comment = $comment['comment'];

        NewsComment::create([
            'text' => $comment,
            'news_id' => $news->id,
        ]);

        return redirect()->route('news.show', compact('news'));
    }

}
