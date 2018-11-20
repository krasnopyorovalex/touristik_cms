@extends('layouts.app')

@section('title', $service->title)
@section('description', $service->description)

@section('content')

    @if ($service->image)
        @include('layouts.partials.header_with_image', ['page' => $service, 'parent' => $service->parent ? $service->parent->alias : false, 'name' => $service->parent ? $service->parent->name : false])
    @else
        @include('layouts.partials.header', ['page' => $service, 'parent' => $service->parent ? $service->parent->alias : false, 'name' => $service->parent ? $service->parent->name : false])
    @endif

    <main>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    {!! $service->text !!}
                    @if ($service->is_showed_dev_stages)
                    <div class="list__items develop__steps">
                        <div class="list__items-item">
                            <div class="title">Звоните или пишите нам</div>
                            <div class="text">
                                <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                            </div>
                            <div class="decor">
                                <div class="decor__number"><span>1</span></div>
                                <div class="decor__line"></div>
                                <div class="decor__icon">
                                    <svg class="icon de-01">
                                        <use xlink:href="./img/symbols.svg#de-01"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="list__items-item">
                            <div class="title">Бриф</div>
                            <div class="text">
                                <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                            </div>
                            <div class="decor">
                                <div class="decor__number"><span>2</span></div>
                                <div class="decor__line"></div>
                                <div class="decor__icon">
                                    <svg class="icon de-02">
                                        <use xlink:href="./img/symbols.svg#de-02"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="list__items-item">
                            <div class="title">Техническое задание</div>
                            <div class="text">
                                <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                            </div>
                            <div class="decor">
                                <div class="decor__number"><span>3</span></div>
                                <div class="decor__line"></div>
                                <div class="decor__icon">
                                    <svg class="icon de-03">
                                        <use xlink:href="./img/symbols.svg#de-03"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="list__items-item">
                            <div class="title">Дизайн</div>
                            <div class="text">
                                <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                            </div>
                            <div class="decor">
                                <div class="decor__number"><span>4</span></div>
                                <div class="decor__line"></div>
                                <div class="decor__icon">
                                    <svg class="icon de-04">
                                        <use xlink:href="./img/symbols.svg#de-04"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="list__items-item">
                            <div class="title">Согласование</div>
                            <div class="text">
                                <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                            </div>
                            <div class="decor">
                                <div class="decor__number"><span>5</span></div>
                                <div class="decor__line"></div>
                                <div class="decor__icon">
                                    <svg class="icon de-05">
                                        <use xlink:href="./img/symbols.svg#de-05"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="list__items-item">
                            <div class="title">Разработка</div>
                            <div class="text">
                                <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                            </div>
                            <div class="decor">
                                <div class="decor__number"><span>6</span></div>
                                <div class="decor__line"></div>
                                <div class="decor__icon">
                                    <svg class="icon de-06">
                                        <use xlink:href="./img/symbols.svg#de-06"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="list__items-item">
                            <div class="title">Тестирование</div>
                            <div class="text">
                                <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                            </div>
                            <div class="decor">
                                <div class="decor__number"><span>7</span></div>
                                <div class="decor__line"></div>
                                <div class="decor__icon">
                                    <svg class="icon de-07">
                                        <use xlink:href="./img/symbols.svg#de-07"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="list__items-item">
                            <div class="title">Сдача проекта и обучение</div>
                            <div class="text">
                                <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                            </div>
                            <div class="decor">
                                <div class="decor__number"><span>8</span></div>
                                <div class="decor__line"></div>
                                <div class="decor__icon">
                                    <svg class="icon de-08">
                                        <use xlink:href="./img/symbols.svg#de-08"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="list__items-item">
                            <div class="title">Сопровождение</div>
                            <div class="text">
                                <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                            </div>
                            <div class="decor">
                                <div class="decor__number"><span>9</span></div>
                                <div class="decor__line"></div>
                                <div class="decor__icon">
                                    <svg class="icon de-09">
                                        <use xlink:href="./img/symbols.svg#de-09"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </main>

    @if ($service->is_showed_type_sites)
    <section class="sites__types">
        <div class="bg__box"></div>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="as__h1">Типы сайтов</div>

                    <div class="list__items">
                        <div class="list__items-item2">
                            <div class="row">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="./img/site_type-01.png" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="body">
                                        <a class="title">Сайт-визитка</a>
                                        <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                                        <div class="price">от 5000 р.</div>
                                        <a href="#" class="btn green">ПОДРОБНЕЕ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list__items-item2">
                            <div class="row">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="./img/site_type-02.png" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="body">
                                        <a class="title">Сайт-каталог</a>
                                        <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                                        <div class="price">от 15 000 р.</div>
                                        <a href="#" class="btn green">ПОДРОБНЕЕ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list__items-item2">
                            <div class="row">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="./img/site_type-03.png" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="body">
                                        <a class="title">Интернет-магазин</a>
                                        <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                                        <div class="price">от 25 000 р.</div>
                                        <a href="#" class="btn green">ПОДРОБНЕЕ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list__items-item2">
                            <div class="row">
                                <div class="col-4">
                                    <div class="image">
                                        <img src="./img/site_type-04.png" alt="">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="body">
                                        <a class="title">Корпоративный сайт</a>
                                        <p>Сайт - визитная карточка Вашего бизнеса на просторах интернета.  Сайт - визитная карточка Вашего бизнеса на просторах интернета.</p>
                                        <div class="price">от 18 000 р.</div>
                                        <a href="#" class="btn green">ПОДРОБНЕЕ</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="order__form">
        <div class="container">
            <div class="row">
                <div class="col-6 green">
                    <div class="as__h1">Заказать консультацию</div>
                    <div class="sub__title">Вы можете получить консультацию по услуге «{{ mb_strtolower($service->name) }}». Вас это ни к чему не обязывает</div>

                    <form action="#" method="post">
                        <div class="single__block">
                            <input type="text" name="name" placeholder="Ваше имя" autocomplete="off">
                        </div>
                        <div class="single__block">
                            <input type="email" name="email" placeholder="Email" autocomplete="off">
                        </div>
                        <div class="single__block">
                            <input type="text" name="phone" autocomplete="off">
                        </div>
                        <div class="single__block message">
                            <textarea name="message" id="message" placeholder="Дополнительная информация"></textarea>
                        </div>
                        <div class="single__block agree__block">
                            <input type="checkbox" name="agree" id="i_agree2" value="1" checked>
                            <label for="i_agree2">Отправляя заяявку  вы соглашаетесь с <a href="#" title="Перейти на страницу описания">правилами офферты</a></label>
                        </div>
                        <div class="single__block submit__block">
                            <button type="submit">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @if (count($service->relatedServices))
        <section class="services_list-box">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <h4 class="as__h1 center">Что заказывают вместе с услугой «{{ mb_strtolower($service->name) }}»</h4>
                        <div class="list__items">
                            @foreach ($service->relatedServices as $relatedService)
                                <div class="list__items-item4">
                                    <a href="{{ route('service.show', ['alias' => $relatedService->alias]) }}">
                                        <svg class="icon {{ $relatedService->icon }}">
                                            <use xlink:href="./img/symbols.svg#{{ $relatedService->icon }}"></use>
                                        </svg>
                                    </a>
                                    <a href="{{ route('service.show', ['alias' => $relatedService->alias]) }}" class="title">{{ $relatedService->name }}</a>
                                    {!! $relatedService->preview !!}
                                    <div class="price">{{ $relatedService->getPrice() }}</div>
                                    <a href="{{ route('service.show', ['alias' => $relatedService->alias]) }}" class="btn_style-two">Подробнее</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection