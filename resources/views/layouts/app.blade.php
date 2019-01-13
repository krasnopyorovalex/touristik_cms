<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes"/>
    <title>@yield('title', 'Мебель для гостиниц')</title>
    <meta name="description" content="@yield('description', '')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#eee">
    @stack('og')
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="canonical" href="@yield('canonical', request()->url())"/>
</head>
<body>
    <header>
        <div class="top__line">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="phone">
                            <svg class="icon">
                                <use xlink:href="{{ asset('img/symbols.svg#phone') }}"></use>
                            </svg>
                            <a href="#">+7 (495) 664-94-42</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="address">
                            <svg class="icon">
                                <use xlink:href="{{ asset('img/symbols.svg#map') }}"></use>
                            </svg>
                            Москва, Варшавское шоссе 16, офис 135
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="search__socials-icons">
                            <div class="btn call__popup" data-target="popup__recall">Перезвонить нам</div>
                            <div class="delimiter"></div>
                            <a href="#">
                                <svg class="icon vk">
                                    <use xlink:href="{{ asset('img/symbols.svg#vk') }}"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="icon fb">
                                    <use xlink:href="{{ asset('img/symbols.svg#fb') }}"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="icon ok">
                                    <use xlink:href="{{ asset('img/symbols.svg#ok') }}"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="icon twitter">
                                    <use xlink:href="{{ asset('img/symbols.svg#twitter') }}"></use>
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="icon insta">
                                    <use xlink:href="{{ asset('img/symbols.svg#insta') }}"></use>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="sticker" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        @includeWhen($menu->get('menu_header'), 'layouts.menus.header', ['menu' => $menu])
                        <div class="call__popup call__btn visible__sm"></div>
                        <div class="burger-mob visible__sm">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer itemtype="http://schema.org/WPFooter" itemscope="">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">О нас</a></li>
                        <li><a href="#">Каталог товаров</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <ul>
                        <li><a href="#">Отзывы</a></li>
                        <li><a href="#">Блог</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <div class="contact">
                        <svg class="icon map">
                            <use xlink:href="{{ asset('img/symbols.svg#map') }}"></use>
                        </svg>
                        Москва, Варшавское шоссе 16, офис 135
                    </div>
                    <div class="contact">
                        <svg class="icon">
                            <use xlink:href="{{ asset('img/symbols.svg#phone') }}"></use>
                        </svg>
                        <a href="tel:+74956649442">+7 (495) 664-94-42</a>
                    </div>
                    <div class="contact">
                        <svg class="icon">
                            <use xlink:href="{{ asset('img/symbols.svg#phone') }}"></use>
                        </svg>
                        <a href="tel:+74956649442">+7 (495) 664-94-42</a>
                    </div>
                </div>
                <div class="col-4 right">
                    <div class="btn call__popup" data-target="popup__recall">Перезвонить нам</div>
                    <div class="socials">
                        <a href="#">
                            <svg class="icon vk">
                                <use xlink:href="{{ asset('img/symbols.svg#vk') }}"></use>
                            </svg>
                        </a>
                        <a href="#">
                            <svg class="icon fb">
                                <use xlink:href="{{ asset('img/symbols.svg#fb') }}"></use>
                            </svg>
                        </a>
                        <a href="#">
                            <svg class="icon ok">
                                <use xlink:href="{{ asset('img/symbols.svg#ok') }}"></use>
                            </svg>
                        </a>
                        <a href="#">
                            <svg class="icon twitter">
                                <use xlink:href="{{ asset('img/symbols.svg#twitter') }}"></use>
                            </svg>
                        </a>
                        <a href="#">
                            <svg class="icon insta">
                                <use xlink:href="{{ asset('img/symbols.svg#insta') }}"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="copyright">&copy; <span itemprop="copyrightYear">2019</span>. Бравый Турист. Все права защищены.</div>
                </div>
            </div>
        </div>
    </footer>

    <div class="mobile__menu">
        @includeWhen($menu->get('menu_header'), 'layouts.menus.footer_mobile', ['menu' => $menu])
        <div class="socials">
            <a href="#">
                <svg class="icon vk">
                    <use xlink:href="{{ asset('img/symbols.svg#vk') }}"></use>
                </svg>
            </a>
            <a href="#">
                <svg class="icon fb">
                    <use xlink:href="{{ asset('img/symbols.svg#fb') }}"></use>
                </svg>
            </a>
            <a href="#">
                <svg class="icon ok">
                    <use xlink:href="{{ asset('img/symbols.svg#ok') }}"></use>
                </svg>
            </a>
            <a href="#">
                <svg class="icon twitter">
                    <use xlink:href="{{ asset('img/symbols.svg#twitter') }}"></use>
                </svg>
            </a>
            <a href="#">
                <svg class="icon insta">
                    <use xlink:href="{{ asset('img/symbols.svg#insta') }}"></use>
                </svg>
            </a>
        </div>
        <div class="close-menu-btn"></div>
        <div class="menu-overlay-mob"></div>
    </div>

    @include('layouts.forms.recall')
    <div class="notify"></div>
    <script src="{{ asset('js/app.min.js') }}" defer></script>
</body>
</html>