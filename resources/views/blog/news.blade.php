@extends('layouts.main')

@section('content')
<main class="main">
    <div class="container">
        <div class="main-content">

            @foreach ($news as $item)
                <a href="{{ route('news.show', $item) }}">
                    <article class="article">
                        <div class="article-img">
                            <img src="{{ asset($item->image) }}" alt="">
                        </div>
                        <div class="article-title">
                            <h2>{{ $item->title }}</h2>
                        </div>
                    </article>
                </a>
            @endforeach

        </div>
    </div>
</main>

<section class="paginate-section">
    <div class="container">
        {{ $news->onEachSide(1)->links('vendor.pagination.pagination') }}
    </div>
</section>
@endsection
