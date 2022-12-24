<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsComment;
use Exception;
use Illuminate\Http\Request;

class DestroyController extends Controller
{

    public function __invoke(News $news)
    {
        try {
            NewsComment::where('article_id', $news->id)->forceDelete();
            $news->delete();

            return redirect()->route('nav.news');
        } catch (Exception $e) {
            return redirect()->route('nav.news');
        }

    }

}
