<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntryRequest;
use App\Models\News;
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

            $news = News::create([
                'title' => $request->title,
                'text' => $request->text,
                'image' => 'storage/app/images/' . $imageName,
            ]);

            return redirect()->route('news.show', $news);
        } catch (Exception $e) {
            dd($e);
            return redirect()->route('news.create');
        }
    }

}
