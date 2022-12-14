@extends('layouts.main')

@section('content')

    <section class="section-get-in-touch">
        <div class="container">
            <div class="get-in-touch-content">
                <div class="get-in-touch-info">
                    <div class="get-in-touch-img">
                        <img src="{{ asset('img/layout/socials/phone.png') }}" alt="">
                    </div>
                    <div class="get-in-touch-text">
                        <a href="#!" target="_blank">+ 7-777-777-77-77</a>
                    </div>
                </div>
                <div class="get-in-touch-line">

                </div>
                <div class="get-in-touch-info">
                    <div class="get-in-touch-img">
                        <img src="{{ asset('img/layout/socials/tik-tok.png') }}" alt="">
                    </div>
                    <div class="get-in-touch-text">
                        <a href="https://www.tiktok.com/@hello_world_823" target="_blank">Tik-Tok</a>
                    </div>
                </div>
                <div class="get-in-touch-line">

                </div>
                <div class="get-in-touch-info">
                    <div class="get-in-touch-img">
                        <img src="{{ asset('img/layout/socials/github.png') }}" alt="">
                    </div>
                    <div class="get-in-touch-text">
                        <a href="https://github.com/DMITRII1548" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection