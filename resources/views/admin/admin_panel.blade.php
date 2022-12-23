@extends('layouts.main')

@section('content')
    <div class="section-admin-panel">
        <div class="container">
            <div class="admin-actions">
                <nav class="admin-nav">
                    <ul class="admin-nav-list">
                        <li><h1 class="admin-nav-title">Article</h1></li>
                        <li><a href="{{ route('articles.create') }}" class="admin-nav-link">Create article</a></li>
                    </ul>
                </nav>
                <div class="admin-line"></div>
                <nav class="admin-nav">
                    <ul class="admin-nav-list">
                        <li><h1 class="admin-nav-title">News</h1></li>
                        <li><a href="#!" class="admin-nav-link">Create news</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
