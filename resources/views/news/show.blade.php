@extends('layouts.main')

@section('content')

    <article class="article-show">
        <div class="container">
            <div class="article-show-buttons">
                <div>
                    <a href="{{ $urlPreviousPage }}" class="link-back">Back</a>
                </div>

                @if (!auth()->user())
                @elseif (auth()->user()->status == 'admin')
                    <div class="admin-buttons">
                        <a href="{{ route('news.edit', $news) }}" class="admin-button">Change</a>
                        <form action="{{ route('news.destroy', $news) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="admin-button">Delete</button>
                        </form>
                    </div>
                @endif
            </div>

            <div class="article-content">
                <h2 class="article-content-title">{{ $news->title }}</h2>
                <img src="{{ asset($news->image) }}" alt="" class="article-content-img">
                <span class="article-content-text">
                    {!! nl2br($news->text) !!}
                </span>
            </div>
        </div>
    </article>

    <section class="comments-section">
        <div class="container">
            <div class="comments-line"></div>
            <div class="comment-send">
                <form action="{{ route('news.comments.store', compact('news')) }}" method="POST" class="comment-sent-form">
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
                            {{ $comment->users->name }}
                        </h3>
                        <p class="comment-text">
                            {!! nl2br($comment->text) !!}
                        </p>
                    </div>
                @endforeach
                {{ $comments->onEachSide(1)->links('vendor.pagination.pagination') }}
            </div>
        </div>
    </section>

@endsection
