@extends('layouts.main')

@section('content')

    <article class="article-show">
        <div class="container">
            <a href="{{ url()->previous() }}" class="link-back">Back</a>
            <div class="article-content">
                <img src="{{ $article->image }}" alt="" class="article-content-img">
                <span class="article-content-text">
                    {{ $article->text }}                          
                </span>
            </div>
        </div>
    </article>

@endsection