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
                        <p>Бравый Турист это многолетний опыт походов и несколько десятков инструкторов – опытных путешественников из Санкт-Петербурга, Москвы и других городов. Активный отдых в самых интересных местах - это наша специализация.Каждый год инструткоры, которых вы можете видеть на нашем сайте, отправляются в большое количество походов по самым разнообразным маршрутам по всей России и миру и рады пригласить в них всех, кто хочет отдыхать активно.</p>
                        <p>Участники наших походов - это, в основном, молодые люди и девушки, но возраст не является для нас ограничением, присоединиться к походам могут как более взрослые, так и более молодые участники.</p>
                        <p>Мы предлагаем большое количество походов с открытым набором в группы - присоединиться можно как одному участнику, так и с друзьями. Для организованных групп от 10 человек мы готовы предложить поход по любому из имеющихся у нас на сайте маршрутов в отдельные удобные сроки.</p>
                        <div class="center">
                            <a href="#" class="btn">Подробнее</a>
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
                <div class="col-3">
                    <div class="guide__item">
                        <a href="#">
                            <div class="ava">
                                <img src="./img/guide-02.jpg" alt="alt">
                            </div>
                        </a>
                        <div class="info">
                            <a href="#" class="name">Ольга Лесова</a>
                            <div class="text">
                                <p>Пешие туры, поднятие в горы. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="guide__item">
                        <a href="#">
                            <div class="ava">
                                <img src="./img/guide-03.jpg" alt="alt">
                            </div>
                        </a>
                        <div class="info">
                            <div class="name">Игорь бунев</div>
                            <div class="text">
                                <p>Пешие туры, поднятие в горы. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="guide__item">
                        <a href="#">
                            <div class="ava">
                                <img src="./img/guide-01.jpg" alt="alt">
                            </div>
                        </a>
                        <div class="info">
                            <a href="#" class="name">Игорь бунев</a>
                            <div class="text">
                                <p>Пешие туры, поднятие в горы. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="guide__item">
                        <a href="#">
                            <div class="ava">
                                <img src="./img/guide-04.jpeg" alt="alt">
                            </div>
                        </a>
                        <div class="info">
                            <a href="#" class="name">Ольга Лесова</a>
                            <div class="text">
                                <p>Пешие туры, поднятие в горы. Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.partials.counts')

    <main class="seo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title">{{ $page->name }}</h1>
                    <div class="sub__title">СЕО Текст</div>
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
@endsection