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
                    <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                            <a href="{{ route('page.show') }}">Главная</a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                            <a href="{{ route('page.show', ['alias' => 'turi']) }}">Туры</a>
                            <meta itemprop="position" content="2">
                        </li>
                        @if($service->parent)
                            <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                                <a href="{{ $service->parent->url }}">{{ $service->parent->name }}</a>
                                <meta itemprop="position" content="3">
                            </li>
                        @endif
                        <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                            {{ $service->name }}
                            @if($service->parent)
                                <meta itemprop="position" content="4">
                            @else
                                <meta itemprop="position" content="3">
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="text__block">
                        {!! $service->short_text !!}
                    </div>

                    @if($service->services->where('is_category', '1')->count())
                        <div class="row">
                            @foreach($service->services->where('is_category', '1') as $subService)
                                <div class="col-4">
                                    <div class="travel__item">
                                        @if ($subService->image)
                                            <img src="{{ $subService->image->path }}" alt="{{ $subService->image->alt }}" title="{{ $subService->image->title }}">
                                        @endif
                                        <div class="travel__item-name">
                                            <a href="{{ $subService->url }}" class="show__tour">{{ $subService->name }}</a>
                                        </div>
                                        <a href="{{ $subService->url }}" class="btn__more">&nbsp;</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @elseif (count($service->services))
                    <div class="catalog__items">
                        @foreach ($service->services as $subService)
                            <div class="catalog__items-item">
                                @if ($subService->image)
                                <figure>
                                    <a href="{{ $subService->url }}">
                                        <img src="{{ $subService->image->path }}" alt="{{ $subService->image->alt }}" title="{{ $subService->image->title }}">
                                    </a>
                                </figure>
                                @endif
                                <div class="catalog__items-info">
                                    <div class="name">
                                        <a href="{{ $subService->url }}">{{ $subService->name }}</a>
                                    </div>
                                    <div class="buttons">
                                        <div class="btn__go call__popup" data-target="popup__order" data-service="{{ $subService->name }}">Записаться</div>
                                        <a href="{{ $subService->url }}" class="btn__go">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endif
                </div>
                <div class="col-3">
                    <div class="sidebar">
                        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?160"></script>

                        <!-- VK Widget -->
                        <div id="vk_groups"></div>
                        <script type="text/javascript">
                            VK.Widgets.Group("vk_groups", {mode: 3, width: "auto"}, 150179830);
                        </script>
                    </div>
                </div>
            </div>
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
