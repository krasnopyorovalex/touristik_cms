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
    <header itemscope="" itemtype="http://schema.org/WPHeader">
        <meta itemprop="headline" content="Веб-студия Красбер в Крыму и Краснодарском крае">
        <meta itemprop="description" content="Создание и seo-продвижение веб-сайтов, настройка рекламы в интернете по всей России">
        <meta itemprop="keywords" content="создание, продвижение, интернет-реклама, крым, краснодар">
        <div class="sticky__menu{{ is_main_page() ? '' : ' sticky__menu-always' }}">
            <div class="container">
                <div class="top__line">
                    <svg class="icon menu">
                        <use xlink:href="{{ asset('img/symbols.svg#menu') }}') }}"></use>
                    </svg>
                    <div class="logo">
                        <a href="{{ route('page.show') }}">
                            <img src="{{ is_main_page() ? asset('img/logo_white.svg') : asset('img/logo_green.svg') }}" data-green-logo="{{ is_main_page() ? asset('img/logo_green.svg'): '' }}" alt="Создание сайта в веб-студии Красбер" title="Веб-студия Красбер">
                        </a>
                    </div>
                    <!-- /.logo -->
                    @includeWhen($menu->get('menu_header'), 'layouts.menus.header', ['menu' => $menu, 'services' => $services])
                    <a href="tel:89787547499" class="phone__svg">
                        <svg class="phone">
                            <use xlink:href="{{ asset('img/symbols.svg#phone') }}"></use>
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
                        <div class="col-6 footer__contacts-messengers" itemscope itemtype="http://schema.org/Organization">
                            <div class="phone"><a href="tel:89787547499" itemprop="telephone" title="Позвонить">8 (978) 754-74-99</a></div>
                            <div class="email"><a href="mailto:info@krasber.ru" itemprop="email" title="Написать на почту">info@krasber.ru</a></div>
                            <div class="f__icons">
                                <a href="#">
                                    <svg class="icon telegram">
                                        <use xlink:href="{{ asset('img/symbols.svg#telegram') }}"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon viber">
                                        <use xlink:href="{{ asset('img/symbols.svg#viber') }}"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon skype">
                                        <use xlink:href="{{ asset('img/symbols.svg#skype') }}"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon insta">
                                        <use xlink:href="{{ asset('img/symbols.svg#insta') }}"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon facebook">
                                        <use xlink:href="{{ asset('img/symbols.svg#facebook') }}"></use>
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg class="icon vk">
                                        <use xlink:href="{{ asset('img/symbols.svg#vk') }}"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer itemtype="http://schema.org/WPFooter">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="line"></div>
                    <div class="row list__columns">
                        <div class="col__logo">
                            <a href="{{ route('page.show') }}">
                                <img src="{{ asset('img/logo_green.svg') }}" class="logo__green" alt="Создание сайта в веб-студии Красбер" title="Веб-студия Красбер">
                            </a>
                            <div class="copyright">
                                <span itemprop="copyrightYear">2017 - {{ date('Y') }}</span> © Создание и продвижение сайтов. ООО «Красбер», ИНН 9106013479
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
                            @includeWhen($menu->get('menu_footer'), 'layouts.menus.footer', ['menu' => $menu])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/app.min.js') }}" defer></script>
</body>
</html>