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
                <form action="#!" method="POST" class="comment-sent-form">
                    @csrf
                    @method('post')
                    <textarea type="text" class="comment-input" name="comment" placeholder="Comment" required maxlength="1000"></textarea>
                    <button class="comment-send-button" type="submit">Send</button>
                </form>
            </div>
            <div class="comments-line"></div>
            <div class="comments">
                <div class="comment">
                    <h3 class="comment-user-name">
                        User name
                    </h3>
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam velit cumque itaque illum iusto impedit praesentium eum, sint ut quod nihil voluptatum et eaque reprehenderit molestiae, nemo, saepe corporis optio!
                    </p>
                </div>
                <div class="comment">
                    <h3 class="comment-user-name">
                        User name
                    </h3>
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam velit cumque itaque illum iusto impedit praesentium eum, sint ut quod nihil voluptatum et eaque reprehenderit molestiae, nemo, saepe corporis optio!
                    </p>
                </div>
                <div class="comment">
                    <h3 class="comment-user-name">
                        User name
                    </h3>
                    <p class="comment-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam velit cumque itaque illum iusto impedit praesentium eum, sint ut quod nihil voluptatum et eaque reprehenderit molestiae, nemo, saepe corporis optio!
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
