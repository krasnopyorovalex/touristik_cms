@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)
@push('og')
<meta property="og:title" content="{{ $page->title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($page->image ? $page->image->path : 'img/logo.png') }}">
    <meta property="og:description" content="{{ $page->description }}">
    <meta property="og:site_name" content="Бравый турист">
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')

    @includeWhen($page->slider, 'layouts.sections.slider', ['slider' => $page->slider])

    @includeWhen($services, 'layouts.sections.services')

    <section class="info__text">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="title">Мы создаем воспоминания</div>
                    <div class="sub__title">О компании</div>
                    <div class="text">
                        <p>Что нужно человеку для счастья? Хорошие люди рядом и возможность путешествовать! Бравый турист – это новые места и море новых впечатлений.</p>
                        <p>Мы организовываем однодневные и многодневные походы по Крыму и за его пределами. Наши гиды-профессионалы сделают Ваш тур не только интересным и безопасным, а также запечатлят на фотокамеру все значимые моменты.</p>
                        <p>Основные наши направления:</p>
                        <ul>
                            <li><b>Крым</b> – походы вдоль моря, по горной и степной части полуострова, каяк-туры по Черному морю, спуски дюльфером в известных и живописных местах.</li>
                            <li><b>Кавказ</b> – путешествие на несколько дней небольшой группой. Посещаем исторические и природные достопримечательности. Основные направления: Абхазия, Дагестан, Чечня, Сочи, Домбай, Пятигорск, Терскол.</li>
                        </ul>
                        <p>Для полного комфорта в путешествии, туры организованы небольшими группами с выездом из города Симферополь. Во время пешеходных туров мы показываем красивейшие места и тропы.</p>
                        <p class="center">Насладимся путешествием вместе!</p>
                        <div class="center">
                            <a href="{{ route('page.show', ['alias' => 'turi']) }}" class="btn">Смотреть все туры</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="img__bg">
                        <img src="{{ asset('img/info_text-bg.jpg') }}" alt="alt">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.partials.begin_travel')

    @includeWhen($page->gallery, 'layouts.sections.gallery', ['gallery' => $page->gallery])

    @if($guids->count())
        <section class="guides">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title">
                            Профессионалы своего дела
                        </div>
                        <div class="sub__title">Наши гиды</div>
                    </div>
                </div>
                <div class="row">
                    @foreach($guids as $guid)
                        <div class="col-3">
                            <div class="guide__item" data-target="guid-{{ $guid->id }}">
                                @if($guid->image)
                                <div class="ava">
                                    <img src="{{ asset($guid->image->path) }}" alt="{{ $guid->name }}" title="">
                                </div>
                                @endif
                                <div class="info">
                                    <div class="name">{{ $guid->name }}</div>
                                    <div class="text">
                                        <p>{{ $guid->post }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @include('layouts.partials.counts')

    <main class="seo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title">{{ $page->name }}</h1>
                    {{--<div class="sub__title">СЕО Текст</div>--}}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="seo__text">
                        {!! $page->text !!}
                    </div>
                </div>
            </div>
        </div>
    </main>

    @if($guids->count())
        @foreach($guids as $guid)
            <div class="popup" id="guid-{{ $guid->id }}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="guid-text">
                                <div class="close__box" title="Закрыть форму">
                                    <div class="close"></div>
                                </div>
                                {!! $guid->text !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
