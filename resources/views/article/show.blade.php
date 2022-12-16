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

    <section class="comments-section">
        <div class="container">
            <div class="comments-line"></div>
            <div class="comment-send">
                <form action="{{ route('articles.comments.store', $article) }}" method="POST" class="comment-sent-form">
                    @csrf
                    @method('post')
                    <textarea type="text" class="comment-input" name="comment" placeholder="Comment" required maxlength="1000"></textarea>
                    <button class="comment-send-button" type="submit">Send</button>
                </form>
            </div>
            <div class="comments-line"></div>
            <div class="comments">

                @foreach ($comments as $comment)
                    <div class="comment">
                        <h3 class="comment-user-name">
                            User name
                        </h3>
                        <p class="comment-text">
                            {{ $comment->text }}
                        </p>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

@endsection
