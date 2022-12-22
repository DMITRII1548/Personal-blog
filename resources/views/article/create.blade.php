@extends('layouts.main')

@section('content')

<section class="create-article-section">
    <div class="container">
        <h1 class="create-article-title">
            Create-article
        </h1>
        <form action="{{ route('articles.store') }}" method="post" class="create-article-form" enctype="multipart/form-data">
            @csrf
            <label for="image">
                Image:
            <input type="file" id="image" class="create-article-input create-article-input-img" required name="image" maxlength="120"></label>

            <label for="title">
                Title:
            <input type="text" id="title" class="create-article-input" required name="title"></label>
            <label for="text">
                Text:
            <textarea type="text" id="text" class="create-article-textarea" required maxlength="65000" name="text"></textarea></label>

            <button type="submit" class="create-article-button">
                Create
            </button>
        </form>
    </div>
</section>

@endsection
