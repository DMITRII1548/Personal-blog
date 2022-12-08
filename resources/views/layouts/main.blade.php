<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/media/home.css">
    <link rel="stylesheet" href="/css/reset.css">
    <title>Personal-blog</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-menu">
                <div class="logo">
                    <a href="#!" class="logo-link">Blog</a>
                </div>
                <nav class="header-nav">
                    <ul class="header-nav-list">
                        <li><a href="#!" class="header-nav-link">Home</a></li>
                        <li><a href="#!" class="header-nav-link">News</a></li>
                        <li><a href="#!" class="header-nav-link">About</a></li>
                        <li><a href="#!" class="header-nav-link">Get in touch</a></li>
                    </ul>
                    <img src="/img/layout/header/nav-open.svg" alt="" class="header-nav-menu">
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
                        <img src="/img/layout/footer/phone.png" alt="">
                        <span>+7-777-777-77-77</span>
                    </div>
                    <div class="email">
                        <span>example@exaple.example</span>
                    </div>
                </div>
                <div class="footer-socials">
                    <ul class="footer-social-list">
                        <li><a href="#!" class="footer-social-link"><img src="/img/layout/footer/socials/twitter.png" alt=""></a></li>
                        <li><a href="#!" class="footer-social-link"><img src="/img/layout/footer/socials/github.png" alt=""></a></li>
                        <li><a href="#!" class="footer-social-link"><img src="/img/layout/footer/socials/instagram.png" alt=""></a></li>
                        <li><a href="#!" class="footer-social-link"><img src="/img/layout/footer/socials/youtube.png" alt=""></a></li>
                        <li><a href="#!" class="footer-social-link"><img src="/img/layout/footer/socials/telegram.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="/js/home.js"></script>
</body>
</html>