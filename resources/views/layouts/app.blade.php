<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>@yield('title', 'Мебель для гостиниц')</title>
    <meta name="description" content="@yield('description', '')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('og')
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
    <header>
        <div class="sticky__menu{{ request()->get('alias') ? ' sticky__menu-always' : '' }}">
            <div class="container">
                <div class="top__line">
                    <svg class="icon menu">
                        <use xlink:href="{{ asset('img/symbols.svg#menu') }}"></use>
                    </svg>
                    <div class="logo">
                        <a href="{{ route('page.show') }}">
                            <img src="{{ asset('img/logo_white.svg') }}" data-green-logo="{{ asset('img/logo_green.svg') }}" alt="Создание сайта в веб-студии Красбер" title="Веб-студия Красбер">
                        </a>
                    </div>
                    <!-- /.logo -->
                    <nav>
                        <ul>
                            <li class="has__child">
                                <a href="/uslugi.html">Услуги</a>
                                <ul>
                                    <li>
                                        <a href="/uslugi.html">Создание сайта</a>
                                        <ul>
                                            <li><a href="/usluga.html">индивидуальный проект</a></li>
                                            <li><a href="/usluga.html">сайт-визитка</a></li>
                                            <li><a href="/usluga.html">сайт-каталог</a></li>
                                            <li><a href="/usluga.html">интернет-магазин</a></li>
                                            <li><a href="/usluga.html">корпоративный сайт</a></li>
                                            <li><a href="/usluga.html">редизайн сайта</a></li>
                                            <li><a href="/usluga.html">ip</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/uslugi.html">Техническая поддержка</a>
                                        <ul>
                                            <li><a href="#">домен-хотинг</a></li>
                                            <li><a href="#">seo-аудит</a></li>
                                            <li><a href="#">юзабилити аудит</a></li>
                                            <li><a href="#">разовая оптимизация</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/uslugi.html">Сопровождение сайта</a>
                                        <ul>
                                            <li><a href="#">seo-продвижение</a></li>
                                            <li><a href="#">контекстная реклама</a></li>
                                            <li><a href="#">SMM</a></li>
                                            <li><a href="#">дизайн-сопровождение</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="/portfolio.html">Портфолио</a></li>
                            <li><a href="/blog.html">Блог</a></li>
                            <li class="active"><a href="/contacts.html">Контакты</a></li>
                        </ul>
                    </nav>
                    <a href="tel:89787547499" class="phone__svg">
                        <svg class="phone">
                            <use xlink:href="./img/symbols.svg#phone"></use>
                        </svg>
                    </a>
                    <div class="phone__email">
                        <a href="tel:89787547499" title="Позвонить" class="phone__link">
                            <span>8 (978) 754-74-99</span>
                        </a>
                        <a href="mailto:info@krasber.ru" title="Написать на почту">info@krasber.ru</a>
                    </div>
                    <!-- /.phone__email -->
                </div>
                <!-- /.top__line -->
            </div>
        </div>
        @section('slogan')
        @show
    </header>

    @yield('content')

    <section class="footer__contacts">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="row">
                        <div class="col-6 footer__contacts-text">
                            Звоните, пишите, договоримся!
                        </div>
                        <div class="col-6 footer__contacts-messengers">
                            <div class="phone"><a href="#">8 (978) 754-74-99</a></div>
                            <div class="email"><a href="#">info@krasber.ru</a></div>
                            <div class="f__icons">
                                <a href="#">
                                    <svg class="icon telegram">
                                        <use xlink:href="./img/symbols.svg#telegram"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon viber">
                                        <use xlink:href="./img/symbols.svg#viber"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon skype">
                                        <use xlink:href="./img/symbols.svg#skype"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon insta">
                                        <use xlink:href="./img/symbols.svg#insta"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon facebook">
                                        <use xlink:href="./img/symbols.svg#facebook"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon vk">
                                        <use xlink:href="./img/symbols.svg#vk"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="line"></div>
                    <div class="row list__columns">
                        <div class="col__logo">
                            <img src="{{ asset('img/logo_green.svg') }}" class="logo__green" alt="Создание сайта в веб-студии Красбер" title="Веб-студия Красбер">
                            <div class="copyright">
                                2017 - {{ date('Y') }} © Создание и раскрутка сайтов. ООО «Красбер», ИНН 9106013479
                            </div>
                        </div>
                        @foreach ($services as $service)
                            <div class="col__service">
                                <div class="title">{{ $service->name }}</div>
                                @if ($service->services->count())
                                    <ul>
                                        @foreach ($service->services as $subService)
                                            <li><a href="#">{{ $subService->name }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        @endforeach
                        <div class="col__nav">
                            <nav>
                                <ul>
                                    <li><a href="#">Главная</a></li>
                                    <li><a href="#">Услуги</a></li>
                                    <li><a href="#">Портфолио</a></li>
                                    <li><a href="#">Блог</a></li>
                                    <li><a href="#">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.min.js') }}" defer></script>
</body>
</html>