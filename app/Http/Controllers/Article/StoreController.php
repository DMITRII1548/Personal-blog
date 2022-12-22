<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntryRequest;
use App\Models\Article;
use Exception;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __invoke(EntryRequest $request)
    {
        try {
            $request->validated();

            $imageName =  time() . '.' . $request->image->extension();

            $request->image->storeAs('images', $imageName);

            $article = Article::create([
                'title' => $request->title,
                'text' => $request->text,
                'image' => 'storage/app/images/' . $imageName,
            ]);

            return redirect()->route('articles.show', $article);
        } catch (Exception $e) {
            return redirect()->url()->previos();
        }
    }

}
