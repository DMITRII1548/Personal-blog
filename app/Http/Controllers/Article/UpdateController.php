<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntryRequest;
use App\Models\Article;
use Exception;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{

    public function __invoke(EntryRequest $request, Article $article)
    {
        try {
            $request->validated();

            if (!isset($request->image)) {
                $article->update([
                    'title' => $request->title,
                    'text' => $request->text,
                ]);

                return redirect()->route('articles.show', $article);
            }

            //get url file
            $imageUrl = str_replace('storage/app/', '', $article->image);

            //Create image url
            $imageName =  time() . '.' . $request->image->extension();
            $request->image->storeAs('images', $imageName);

            //Delete old image
            Storage::disk('local')->delete($imageUrl);

            //Update database
            $article->update([
                'title' => $request->title,
                'text' => $request->text,
                'image' => 'storage/app/images/' . $imageName,
            ]);

            return redirect()->route('articles.show', $article);
        } catch (Exception $e) {
            return redirect()->route('articles.edit');
        }
    }

}
