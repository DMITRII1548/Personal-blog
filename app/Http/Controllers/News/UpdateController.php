<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\EntryRequest;
use App\Models\News;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{

    public function __invoke(EntryRequest $request, News $news)
    {
        try {
            $request->validated();

            if (!isset($request->image)) {
                $news->update([
                    'title' => $request->title,
                    'text' => $request->text,
                ]);

                return redirect()->route('news.show', $news);
            }

            //get url file
            $imageUrl = str_replace('storage/app/', '', $news->image);

            //Create image url
            $imageName =  time() . '.' . $request->image->extension();
            $request->image->storeAs('images', $imageName);

            //Delete old image
            Storage::disk('local')->delete($imageUrl);

            //Update database
            $news->update([
                'title' => $request->title,
                'text' => $request->text,
                'image' => 'storage/app/images/' . $imageName,
            ]);

            return redirect()->route('news.show', $news);
        } catch (Exception $e) {
            return redirect()->route('news.edit', $news);
        }
    }

}
