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

    <main class="catalog page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('layouts.partials.breadcrumbs', ['page' => $service])
                </div>
            </div>
            @if (count($service->services))
            <div class="row">
                <div class="col-9">
                    <div class="text__block">
                        {!! $service->short_text !!}
                    </div>
                    <div class="catalog__items">
                        @foreach ($service->services as $subService)
                            <div class="catalog__items-item">
                                <figure>
                                    <a href="{{ $subService->url }}">
                                        <img src="{{ $subService->image->path }}" alt="{{ $subService->image->alt }}" title="{{ $subService->image->title }}">
                                    </a>
                                </figure>
                                <div class="catalog__items-info">
                                    <div class="name">
                                        <a href="{{ $subService->url }}">{{ $subService->name }}</a>
                                    </div>
                                    <div class="buttons">
                                        <div class="btn__go call__popup" data-target="popup__order" data-service="{{ $subService->name }}">Заказать</div>
                                        <a href="{{ $subService->url }}" class="btn__go">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-3">
                    <div class="sidebar">
                        Виджет ВК
                    </div>
                </div>
            </div>
            @endif
        </div>
    </main>

    @includeWhen($service->gallery, 'layouts.sections.gallery', ['gallery' => $service->gallery])

    <section class="seo text__block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    {!! $service->text !!}
                </div>
            </div>
        </div>
    </section>
    @include('layouts.forms.order_popup')
@endsection
