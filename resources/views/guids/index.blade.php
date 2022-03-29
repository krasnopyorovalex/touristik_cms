@extends('layouts.app')

@section('title', $guid->title)
@section('description', $guid->description)
@push('og')
    <meta property="og:title" content="{{ $guid->title }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ request()->getUri() }}">
    <meta property="og:image" content="{{ asset($guid->image ? $guid->image->path : 'img/logo.png') }}">
    <meta property="og:description" content="{{ $guid->description }}">
    <meta property="og:site_name" content="Бравый турист">
    <meta property="og:locale" content="ru_RU">
@endpush

@section('content')
    <section class="title__section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>{{ $guid->name }}</h1>
                    <div class="sub__title post">{{ $guid->post }}</div>
                </div>
            </div>
        </div>
    </section>

    <main class="seo page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                            <a href="{{ route('page.show') }}">Главная</a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                            {{ $guid->name }}
                            <meta itemprop="position" content="2">
                        </li>
                    </ul>
                    <div class="seo__text">
                        @if ($guid->image)
                            <figure>
                                <img src="{{ $guid->image->path }}" alt="{{ $guid->image->alt }}" title="{{ $guid->image->title }}" class="responsive" />
                            </figure>
                        @endif
                        {!! $guid->text !!}
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
