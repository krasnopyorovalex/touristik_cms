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

    @include('layouts.forms.order', [
        'form_title' => 'Заказать консультацию',
        'form_sub_title' => 'Вы можете получить консультацию по услуге ' . mb_strtolower($service->name) . '. Вас это ни к чему не обязывает'
    ])

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