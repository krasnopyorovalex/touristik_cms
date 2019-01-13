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
    <section class="title__section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $page->name }}</h1>
                </div>
            </div>
        </div>
    </section>

    <main class="seo page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('layouts.partials.breadcrumbs', ['page' => $page])
                    <div class="seo__text">
                        {!! $page->text !!}
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.partials.counts', ['css' => ' without__margin'])

    @include('layouts.partials.begin_travel')

    @includeWhen($page->gallery, 'layouts.sections.gallery', ['gallery' => $page->gallery])

    <section class="travels">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        Какие путешествия тебе нужны
                    </div>
                    <div class="sub__title">
                        Наши услуги
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="travel__item-two">
                        <img src="./img/travel-2-01.jpg" alt="travel">
                        <div class="travel__item-name">
                            <a href="#">Однодневные туры</a>
                        </div>
                        <a href="#" class="btn__more">&nbsp;</a>
                        <div class="travel__count">01</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="travel__item-two">
                        <img src="./img/travel-2-02.jpg" alt="travel">
                        <div class="travel__item-name">
                            <a href="#">Многодневные туры</a>
                        </div>
                        <a href="#" class="btn__more">&nbsp;</a>
                        <div class="travel__count">02</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="travel__item-two">
                        <img src="./img/travel-2-03.jpg" alt="travel">
                        <div class="travel__item-name">
                            <a href="#">Индивидуальные туры</a>
                        </div>
                        <a href="#" class="btn__more">&nbsp;</a>
                        <div class="travel__count">03</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="travel__item-two">
                        <img src="./img/travel-2-04.jpg" alt="travel">
                        <div class="travel__item-name">
                            <a href="#">Морские туры на каяках</a>
                        </div>
                        <a href="#" class="btn__more">&nbsp;</a>
                        <div class="travel__count">04</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="travel__item-two">
                        <img src="./img/travel-2-04.jpg" alt="travel">
                        <div class="travel__item-name">
                            <a href="#">Морские туры на каяках</a>
                        </div>
                        <a href="#" class="btn__more">&nbsp;</a>
                        <div class="travel__count">05</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection