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
    <div class="loader">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    <div class="loader__bg"></div>
    <header>
        <div class="top__line">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="phone">
                            <svg class="icon">
                                <use xlink:href="{{ asset('img/symbols.svg#phone') }}"></use>
                            </svg>
                            <a href="tel:+79787971006" title="Позвонить">+7 (978) 797-10-06 </a>
                        </div>
                        <div class="phone">
                            <svg class="icon">
                                <use xlink:href="{{ asset('img/symbols.svg#phone') }}"></use>
                            </svg>
                            <a href="tel:+79787157355" title="Позвонить">+7 (978) 715-73-55</a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="address">
                            <svg class="icon">
                                <use xlink:href="{{ asset('img/symbols.svg#map') }}"></use>
                            </svg>
                            Республика Крым, Симферополь
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="search__socials-icons">
                            <div class="btn call__popup" data-target="popup__recall">Перезвонить нам</div>
                            <div class="delimiter"></div>
                            @include('layouts.partials.socials')
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
                        <a href="tel:+79787157355" class="call__btn visible__sm"></a>
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
                        <li><a href="{{ route('page.show') }}">Главная</a></li>
                        <li><a href="{{ route('page.show',['alias' => 'otzivi']) }}">Отзывы</a></li>
                        <li><a href="{{ route('page.show', ['alias' => 'turi']) }}">Наши туры</a></li>
                    </ul>
                </div>
                <div class="col-2">
                    <ul>
                        <li><a href="{{ route('page.show',['alias' => 'blog']) }}">Блог</a></li>
                        <li><a href="{{ route('page.show', ['alias' => 'kontakti']) }}">Контакты</a></li>
                        <li><a href="{{ route('page.show',['alias' => 'sitemap']) }}">Карта сайта</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <div class="contact">
                        <svg class="icon map">
                            <use xlink:href="{{ asset('img/symbols.svg#map') }}"></use>
                        </svg>
                        Республика Крым, Симферополь
                    </div>
                    <div class="contact">
                        <svg class="icon">
                            <use xlink:href="{{ asset('img/symbols.svg#phone') }}"></use>
                        </svg>
                        <a href="tel:+79787157355" title="Позвонить">+7 (978) 715-73-55</a>
                    </div>
                    <div class="contact">
                        <svg class="icon">
                            <use xlink:href="{{ asset('img/symbols.svg#phone') }}"></use>
                        </svg>
                        <a href="tel:+79787971006" title="Позвонить">+7 (978) 797-10-06</a>
                    </div>
                </div>
                <div class="col-4 right">
                    <div class="btn call__popup" data-target="popup__recall">Перезвонить нам</div>
                    <div class="socials">
                        @include('layouts.partials.socials')
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
            @include('layouts.partials.socials')
        </div>
        <div class="close-menu-btn"></div>
        <div class="menu-overlay-mob"></div>
    </div>

    @include('layouts.forms.recall')
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(52611727, "init", {
            id:52611727,
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/52611727" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <div class="popup__show-bg"></div><div class="notify"></div>
    <script src="{{ asset('js/jquery.3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/app.min.js') }}" async></script>
</body>
</html>
