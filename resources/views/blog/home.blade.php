@extends('layouts.main')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="hero-main">
                <div class="hero-img">
                    <img src="/img/home/hero_section/hero.png" alt="">
                </div>
                <div class="hero-line">

                </div>
                <div class="hero-text">
                    <span>
                        HI i’m Dmitrii. I’m a web developer even 1 year. I use next technologies: html, css, bootstrap, php, laravel 9, mysql, sqlite, git. And also i learn next technologies: vue and many moduls laravel. Hovever it it isn’t everything. Because i develop my hard and soft skills.As a result, i’ll can become professional in my area
                    </span>
                </div>
            </div>
        </div>
    </section>
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