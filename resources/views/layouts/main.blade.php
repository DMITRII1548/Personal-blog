<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/js/app.js'])

    <title>Personal-blog</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-menu">
                <div class="logo">
                    <a href="{{ route('nav.home') }}" class="logo-link">Blog</a>
                </div>
                <nav class="header-nav">
                    <ul class="header-nav-list">
                        <li><a href="{{ route('nav.home') }}" class="header-nav-link">Home</a></li>
                        <li><a href="{{ route('nav.news') }}" class="header-nav-link">News</a></li>
                        <li><a href="{{ route('nav.about') }}" class="header-nav-link">About</a></li>
                        <li><a href="{{ route('nav.getintouch') }}" class="header-nav-link">Get in touch</a></li>
                        <li class="header-sign">
                            @if (isset(auth()->user()->name))
                                <a href="{{ route('auth.logout') }}" class="header-nav-link">Logout</a>
                                @if (auth()->user()->status == 'admin')
                                    <a href="{{ route('articles.create') }}" class="header-nav-link">AdminPanel</a>
                                @endif
                            @else
                                <a href="{{ route('auth.create') }}" class="header-nav-link">Sign in</a>
                                <a href="{{ route('auth.register') }}" class="header-nav-link">Sign up</a>
                            @endif

                        </li>
                    </ul>
                    <img src="{{ asset('/img/layout/header/nav-open.svg') }}" alt="" class="header-nav-menu">
                </nav>
            </div>
        </div>
    </header>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-contacts">
                    <div class="phone">
                        <img src="{{ asset('/img/layout/socials/phone.png') }}" alt="">
                        <span>+7-777-777-77-77</span>
                    </div>
                    <div class="email">
                        <span>example@exaple.example</span>
                    </div>
                </div>
                <div class="footer-socials">
                    <ul class="footer-social-list">
                        <li><a href="#!" class="footer-social-link"><img src="{{ asset('/img/layout/socials/twitter.png') }}" alt=""></a></li>
                        <li><a href="https://github.com/DMITRII1548" target="_blank" class="footer-social-link"><img src="{{ asset('/img/layout/socials/github.png') }}" alt=""></a></li>
                        <li><a href="#!" class="footer-social-link"><img src="{{ asset('/img/layout/socials/instagram.png') }}" alt=""></a></li>
                        <li><a href="#!" class="footer-social-link"><img src="{{ asset('/img/layout/socials/youtube.png') }}" alt=""></a></li>
                        <li><a href="#!" class="footer-social-link"><img src="{{ asset('/img/layout/socials/telegram.png') }}" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ resource_path ("assets/js/home.js") }}"></script>

</body>
</html>
