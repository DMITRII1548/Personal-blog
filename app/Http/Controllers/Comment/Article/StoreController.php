<?php

namespace App\Http\Controllers\Comment\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Article;
use App\Models\ArticleComment;

class StoreController extends Controller
{

    public function __invoke(CommentRequest $request, Article $article)
    {

        $comment = $request->validated();

        $comment = $comment['comment'];

        ArticleComment::create([
            'text' => $comment,
            'article_id' => $article->id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('articles.show', compact('article'));
    }

}
