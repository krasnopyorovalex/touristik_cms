@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('slogan')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="row align__items-center">
                    <div class="col-5">
                        <div class="slogan__box">
                            <p>{!! $page->slogan !!}</p>
                            <a href="#" class="btn black">Заказать сайт</a>
                        </div>
                        <!-- /.slogan__box -->
                    </div>
                    <div class="col-7">
                        <div class="main__image-top">
                            <img src="{{ asset($page->image->path) }}" alt="{{ $page->image->alt }}" title="{{ $page->image->title }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    @includeWhen($services, 'layouts.sections.services', ['services' => $services])

    <section>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="order__service-form">
                        <div class="wrap">
                            <div class="desc">
                                <div class="as__h1">Заказать услугу</div>
                                <p>Вы можете бесплатно  получить аудит вашего сайта. Вас это не к чему не обязывает.</p>
                            </div>
                            @include('layouts.forms.order_service', ['services' => $services])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why__we">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="step">02</div>
                    <div class="as__h1">Несколько фактов о нас</div>
                    <div class="why__we-list">
                        <div class="why__we-list-item">
                            <svg class="icon opit_v_razrabotke">
                                <use xlink:href="{{ asset('img/symbols.svg#opit_v_razrabotke') }}"></use>
                            </svg>
                            <div class="separator"></div>
                            <div class="desc">Опыт в разработке сайтов более 5 лет</div>
                        </div>
                        <div class="why__we-list-item">
                            <svg class="icon opit">
                                <use xlink:href="{{ asset('img/symbols.svg#opit') }}"></use>
                            </svg>
                            <div class="separator"></div>
                            <div class="desc">Опыт в интернет-рекламе более 3 лет</div>
                        </div>
                        <div class="why__we-list-item">
                            <svg class="icon sertifikat">
                                <use xlink:href="{{ asset('img/symbols.svg#sertifikat') }}"></use>
                            </svg>
                            <div class="separator"></div>
                            <div class="desc">Сертифицированные специалисты Яндекс.Директ и Google.Adwords</div>
                        </div>
                        <div class="why__we-list-item">
                            <svg class="icon konsultaciya">
                                <use xlink:href="{{ asset('img/symbols.svg#konsultaciya') }}"></use>
                            </svg>
                            <div class="separator"></div>
                            <div class="desc">Бесплатные консультации и информационная поддержка спец. на всех этапах работы</div>
                        </div>
                        <div class="why__we-list-item">
                            <svg class="icon podhod">
                                <use xlink:href="{{ asset('img/symbols.svg#podhod') }}"></use>
                            </svg>
                            <div class="separator"></div>
                            <div class="desc">Индивидуальный подход и расчет стоимости для каждого клиента</div>
                        </div>
                        <div class="why__we-list-item">
                            <svg class="icon garantii">
                                <use xlink:href="{{ asset('img/symbols.svg#garantii') }}"></use>
                            </svg>
                            <div class="separator"></div>
                            <div class="desc">Юридические гарантии (составление договора)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @includeWhen($guestbook, 'layouts.sections.guestbook', ['guestbook' => $guestbook])

    <section class="portfolio">
        <div class="bg__box-section"></div>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="step">04</div>
                    <div class="as__h1">Портфолио</div>
                    <div class="info">Работы нашей веб-студии, разработанные сайты, полезные кейсы.</div>

                    <div class="portfolio__list">

                        @foreach ($portfolios->slice(0,3) as $portfolio)
                            @include('layouts.partials._portfolio_item', ['portfolio' => $portfolio])
                        @endforeach

                        <div class="btn__more">
                            <a href="{{ route('page.show', ['alias' => 'portfolio']) }}" class="btn green">БОЛЬШЕ РАБОТ</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="we__work">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="step">05</div>
                    <div class="as__h1">Мы работаем</div>
                    <div class="info">Инструменты, которые мы используем для анализа и увеличения эффективности работы сайта.</div>
                    <div class="we__work-list">
                        <div class="we__work-list-item">
                            <img src="{{ asset('img/we_work-01.png') }}" alt="Яндекс.Метрика">
                        </div>
                        <div class="we__work-list-item">
                            <img src="{{ asset('img/we_work-02.jpg') }}" alt="Яндекс.Директ">
                        </div>
                        <div class="we__work-list-item">
                            <img src="{{ asset('img/we_work-03.jpeg') }}" alt="Google.Adwords">
                        </div>
                        <div class="we__work-list-item">
                            <img src="{{ asset('img/we_work-04.png') }}" alt="Google.Analytics">
                        </div>
                        <div class="we__work-list-item">
                            <img src="{{ asset('img/we_work-05.png') }}" alt="Topvisor">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="order__service-form">
                        <div class="wrap">
                            <div class="desc">
                                <div class="as__h1">Заказать услугу</div>
                                <p>Вы можете бесплатно  получить аудит вашего сайта. Вас это не к чему не обязывает.</p>
                            </div>
                            @include('layouts.forms.order_service', ['services' => $services, 'postfix' => '_bottom'])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection