@extends('layouts.main')

@section('content')

<section class="create-article-section">
    <div class="container">
        <h1 class="create-article-title">
            Create-article
        </h1>
        <form action="{{ route('articles.update', $article) }}" method="post" class="create-article-form" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <label for="image">
                Image:
            <input type="file" id="image" class="create-article-input create-article-input-img" name="image" maxlength="120" value="{{ $article->image }}"></label>

            <label for="title">
                Title:
            <input type="text" id="title" class="create-article-input" required name="title" value="{{ $article->title }}"></label>
            <label for="text">
                Text:
            <textarea type="text" id="text" class="create-article-textarea" required maxlength="65000" name="text">{{ $article->text }}</textarea></label>

            <button type="submit" class="create-article-button">
                Change
            </button>
        </form>
    </div>
</section>

@endsection
