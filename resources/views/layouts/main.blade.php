<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lc-oQ8kAAAAAKV0kJwWZbv0YQ6PzsGh3VqGQFxB"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <link rel="icon" href="{{asset('images/favicon.svg')}}" type="image/svg+xml">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&family=Raleway:wght@700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Инновационная международная компания. Мы являемся пионерами во внедрении передовых технологий АПК для производства каннабиса на территории королевства Таиланд.  Используя достижения науки, мы обеспечиваем производство каннабис-содержащих продуктов мирового уровня для рекреационных и медицинских целей.">
    <meta property="og:title" content="@yield("title")">
    <meta property="og:description" content="Инновационная международная компания. Мы являемся пионерами во внедрении передовых технологий АПК для производства каннабиса на территории королевства Таиланд.  Используя достижения науки, мы обеспечиваем производство каннабис-содержащих продуктов мирового уровня для рекреационных и медицинских целей.">
    <meta property="og:image" content="/images/logo.svg">
    <meta property="og:url" content=https://gg-pharm.com/">
    <meta name="google-site-verification" content="2jPGSVTZc1AB1n0yl2lvlYipBKT92zNTq8-SFGvV8o0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield("title")</title>
    @vite(['resources/js/app.js'])
</head>
<body class="body">
<div class="preloader preloader-js animate__animated">
    <img src="images/preloader.svg" alt="preloader" class="preloader__img">
</div>
<main class="main">
    <header class="header {{ Route::is('index') ? 'header__landing' : ''}}">
        <div class="container header__container">
            <a href="/"><img src="{{asset('images/logo.svg')}}" alt="Logo GGP" class="white-logo"></a>
            <div class="header__menu-wrap animate__animated mobile-menu-block-js animate__faster">
                <nav class="header__menu">
                    <a href="{{ route('about') }}" class="header__link">{{ __('landing.menu_1') }}</a>
                    <a href="{{ route('investors') }}" class="header__link">{{ __('landing.menu_2') }}</a>
                    <a href="#" data-menu="products" class="header__link scroll-menu-js">{{ __('landing.menu_3') }}</a>
                    <a href="#" data-menu="making" class="header__link scroll-menu-js">{{ __('landing.menu_4') }}</a>
                    <a href="#" data-menu="mission" class="header__link scroll-menu-js">{{ __('landing.menu_5') }}</a>
                    <a href="#" data-menu="contacts" class="header__link scroll-menu-js">{{ __('landing.menu_6') }}</a>
                </nav>
                <div class="header__lang">
                    <div data-open="false" class="header__lang-select custom-select">
                        <img class="header__lang-img" alt="flag" src="/images/flags/{{ __('landing.this_lang') }}.png">
                    </div>
                    <div class="header__lang-drop animate__animated">
                        <div class="header__lang-item">
                            <a href="{{ route('locale', 'ru') }}">
                                <img class="header__lang-img" alt="flag" src="/images/flags/ru.png">
                            </a>
                        </div>
                        <div class="header__lang-item">
                            <a href="{{ route('locale', 'en') }}">
                                <img class="header__lang-img" alt="flag" src="/images/flags/en.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="toggle-hamburger mobile-menu-btn-js toggle-hamburger__animx">
                <span></span>
            </button>
        </div>
    </header>
    @yield("content")
    <footer class="footer">
        <div class="container footer__container">
            <a href="/"><img src="images/logo_yellow.png" alt="GGP" class="footer__logo"></a>
            <div class="footer__social-wrap">
                <a class="footer__link" href="#">
                    <img src="images/socials/facebook.png" alt="" class="footer__social">
                </a>
                <a class="footer__link" href="#">
                    <img src="images/socials/telegram.png" alt="" class="footer__social">
                </a>
            </div>
        </div>
        <div class="footer__line"></div>
        <div class="container footer__submenu">
            <div>
                <p class="text footer__text">{{ __('landing.footer_copy') }}</p>
                <p class="text footer__text">This site is protected by reCAPTCHA and the Google
                    <a class="footer__sublink" href="https://policies.google.com/privacy">Privacy Policy</a>
                    and <a class="footer__sublink" href="https://policies.google.com/terms">Terms of Service</a> apply
                </p>
            </div>
            <div>
                <a class="footer__sublink" href="#">{{ __('landing.footer_privacy') }}</a>
            </div>
        </div>
    </footer>
</main>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>
