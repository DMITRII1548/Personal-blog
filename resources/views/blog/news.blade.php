@extends('layouts.main')

@section('content')
<main class="main">
    <div class="container">
        <div class="main-content">

            @foreach ($articles as $article)
                <a href="{{ route('articles.show', $article) }}">
                    <article class="article">
                        <div class="article-img">
                            <img src="{{ asset($article->image) }}" alt="">
                        </div>
                        <div class="article-title">
                            <h2>{{ $article->title }}</h2>
                        </div>
                    </article>
                </a>
            @endforeach

        </div>
    </div>
</main>

<section class="paginate-section">
    <div class="container">
        {{ $articles->onEachSide(1)->links('vendor.pagination.pagination') }}
    </div>
</section>
@endsection
