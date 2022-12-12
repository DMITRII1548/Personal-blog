@extends('layouts.main')

@section('content')

    <article class="article-show">
        <div class="container">
            <a href="{{ url()->previous() }}" class="link-back">Back</a>
            <div class="article-content">
                <h2 class="article-content-title">{{ $article->title }}</h2>
                <img src="{{ asset($article->image) }}" alt="" class="article-content-img">
                <span class="article-content-text">
                    {{ $article->text }}                          
                </span>
            </div>
        </div>
    </article>

@endsection