@extends('layouts.app')

@section('title', $service->title)
@section('description', $service->description)
@push('og')
<meta property="og:title" content="{{ $service->title }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($service->image ? $service->image->path : 'img/logo.png') }}">
    <meta property="og:description" content="{{ $service->description }}">
    <meta property="og:site_name" content="Бравый турист">
    <meta property="og:locale" content="ru_RU">
@endpush
@section('content')
    <section class="title__section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $service->name }}</h1>
                </div>
            </div>
        </div>
    </section>

    <main class="catalog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('layouts.partials.breadcrumbs', ['page' => $service])
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="catalog__items">
                        <div class="catalog__items-item-two">
                            <figure>
                                <a href="#">
                                    <img src="./img/item-01.png" alt="">
                                </a>
                            </figure>
                            <div class="catalog__items-info">
                                <div class="name">
                                    <a href="#">Рюкзак туристический Сплав "Phoenix 27"</a>
                                </div>
                                <div class="prices">
                                    <div class="price__new">
                                        2 299 ₽
                                    </div>
                                    <div class="price__old">
                                        3 499 ₽
                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="btn__go call__popup" data-target="popup__order">Заказать</div>
                                    <a href="#" class="btn__go">Подробнее</a>
                                </div>
                            </div>
                            <div class="label__product new">Новинка!</div>
                            <div class="label__product info">1+1</div>
                        </div>
                        <div class="catalog__items-item-two">
                            <figure>
                                <a href="#">
                                    <img src="./img/item-02.png" alt="">
                                </a>
                            </figure>
                            <div class="catalog__items-info">
                                <div class="name">
                                    <a href="#">Ботинки Jack Wolfskin Vojo Hike Mid Texapore</a>
                                </div>
                                <div class="prices">
                                    <div class="price__new">
                                        2 299 ₽
                                    </div>
                                    <div class="price__old">
                                        3 499 ₽
                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="btn__go call__popup" data-target="popup__order">Заказать</div>
                                    <a href="#" class="btn__go">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog__items-item-two">
                            <figure>
                                <a href="#">
                                    <img src="./img/item-01.png" alt="">
                                </a>
                            </figure>
                            <div class="catalog__items-info">
                                <div class="name">
                                    <a href="#">Рюкзак туристический Сплав "Phoenix 27"</a>
                                </div>
                                <div class="prices">
                                    <div class="price__new">
                                        2 299 ₽
                                    </div>
                                    <div class="price__old">
                                        3 499 ₽
                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="btn__go call__popup" data-target="popup__order">Заказать</div>
                                    <a href="#" class="btn__go">Подробнее</a>
                                </div>
                            </div>
                            <div class="label__product info">1+1</div>
                        </div>
                        <div class="catalog__items-item-two">
                            <figure>
                                <a href="#">
                                    <img src="./img/item-01.png" alt="">
                                </a>
                            </figure>
                            <div class="catalog__items-info">
                                <div class="name">
                                    <a href="#">Рюкзак туристический Сплав "Phoenix 27"</a>
                                </div>
                                <div class="prices">
                                    <div class="price__new">
                                        2 299 ₽
                                    </div>
                                    <div class="price__old">
                                        3 499 ₽
                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="btn__go call__popup" data-target="popup__order">Заказать</div>
                                    <a href="#" class="btn__go">Подробнее</a>
                                </div>
                            </div>
                        </div>
                        <div class="catalog__items-item-two">
                            <figure>
                                <a href="#">
                                    <img src="./img/item-02.png" alt="">
                                </a>
                            </figure>
                            <div class="catalog__items-info">
                                <div class="name">
                                    <a href="#">Ботинки Jack Wolfskin Vojo Hike Mid Texapore</a>
                                </div>
                                <div class="prices">
                                    <div class="price__new">
                                        2 299 ₽
                                    </div>
                                    <div class="price__old">
                                        3 499 ₽
                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="btn__go call__popup" data-target="popup__order">Заказать</div>
                                    <a href="#" class="btn__go">Подробнее</a>
                                </div>
                            </div>
                            <div class="label__product new">Новинка!</div>
                        </div>
                        <div class="catalog__items-item-two">
                            <figure>
                                <a href="#">
                                    <img src="./img/item-01.png" alt="">
                                </a>
                            </figure>
                            <div class="catalog__items-info">
                                <div class="name">
                                    <a href="#">Рюкзак туристический Сплав "Phoenix 27"</a>
                                </div>
                                <div class="prices">
                                    <div class="price__new">
                                        2 299 ₽
                                    </div>
                                    <div class="price__old">
                                        3 499 ₽
                                    </div>
                                </div>
                                <div class="buttons">
                                    <div class="btn__go call__popup" data-target="popup__order">Заказать</div>
                                    <a href="#" class="btn__go">Подробнее</a>
                                </div>
                            </div>
                            <div class="label__product info">1+1</div>
                        </div>
                    </div>
                    <div class="pagination">
                        <ul class="not__decorated">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="banners">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="./img/banner-01.png" alt="alt">
                </div>
            </div>
        </div>
    </section>

    <section class="another__products">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">Другие товары в данной категории</div>
                    <div class="sub__title">
                        Другие товары
                    </div>

                    <div class="catalog__items owl-carousel owl-theme">
                        <div class="catalog__items-item">
                            <figure>
                                <a href="#">
                                    <img src="./img/item-01.png" alt="">
                                </a>
                            </figure>
                            <div class="catalog__items-info">
                                <div class="name">
                                    <a href="#">Рюкзак туристический Сплав "Phoenix 27"</a>
                                </div>
                                <div class="prices">
                                    <div class="price__new">
                                        2 299 ₽
                                    </div>
                                    <div class="price__old">
                                        3 499 ₽
                                    </div>
                                </div>
                                <a href="#" class="btn__go">Заказать</a>
                            </div>
                            <div class="label__product new">Новинка!</div>
                            <div class="label__product info">1+1</div>
                        </div>
                        <div class="catalog__items-item">
                            <figure>
                                <a href="#">
                                    <img src="./img/item-02.png" alt="">
                                </a>
                            </figure>
                            <div class="catalog__items-info">
                                <div class="name">
                                    <a href="#">Ботинки Jack Wolfskin Vojo Hike Mid Texapore</a>
                                </div>
                                <div class="prices">
                                    <div class="price__new">
                                        2 299 ₽
                                    </div>
                                    <div class="price__old">
                                        3 499 ₽
                                    </div>
                                </div>
                                <a href="#" class="btn__go">Заказать</a>
                            </div>
                        </div>
                        <div class="catalog__items-item">
                            <figure>
                                <a href="#">
                                    <img src="./img/item-01.png" alt="">
                                </a>
                            </figure>
                            <div class="catalog__items-info">
                                <div class="name">
                                    <a href="#">Рюкзак туристический Сплав "Phoenix 27"</a>
                                </div>
                                <div class="prices">
                                    <div class="price__new">
                                        2 299 ₽
                                    </div>
                                    <div class="price__old">
                                        3 499 ₽
                                    </div>
                                </div>
                                <a href="#" class="btn__go">Заказать</a>
                            </div>
                            <div class="label__product info">1+1</div>
                        </div>
                        <div class="catalog__items-item">
                            <figure>
                                <a href="#">
                                    <img src="./img/item-01.png" alt="">
                                </a>
                            </figure>
                            <div class="catalog__items-info">
                                <div class="name">
                                    <a href="#">Рюкзак туристический Сплав "Phoenix 27"</a>
                                </div>
                                <div class="prices">
                                    <div class="price__new">
                                        2 299 ₽
                                    </div>
                                    <div class="price__old">
                                        3 499 ₽
                                    </div>
                                </div>
                                <a href="#" class="btn__go">Заказать</a>
                            </div>
                        </div>
                        <div class="catalog__items-item">
                            <figure>
                                <a href="#">
                                    <img src="./img/item-01.png" alt="">
                                </a>
                            </figure>
                            <div class="catalog__items-info">
                                <div class="name">
                                    <a href="#">Рюкзак туристический Сплав "Phoenix 27"</a>
                                </div>
                                <div class="prices">
                                    <div class="price__new">
                                        2 299 ₽
                                    </div>
                                    <div class="price__old">
                                        3 499 ₽
                                    </div>
                                </div>
                                <a href="#" class="btn__go">Заказать</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="seo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title">Невероятная Африка</h1>
                    <div class="sub__title">СЕО Текст</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="seo__text">
                        {!! $service->text !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.forms.order_popup')
@endsection