@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('content')

    @if ($page->image)
        @include('layouts.partials.header_with_image', ['page' => $page])
     @else
        @include('layouts.partials.header', ['page' => $page])
    @endif

    <section>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="filter__categories">
                        <ul>
                            <li class="active" data-filter="portfolio__list-item">все</li>
                            @foreach ($portfolioCategories as $key => $value)
                                <li data-filter="{{ $key }}">{{ $value }}</li>
                            @endforeach
                        </ul>
                        <div class="btn__arrow">
                            <svg class="icon arrow_down">
                                <use xlink:href="./img/symbols.svg#arrow_down"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="portfolio__list">
                        @foreach ($portfolios as $portfolio)
                            <div class="portfolio__list-item {{ $portfolio->category }}">
                                <div class="bg__item {{ $portfolio->color }}"></div>
                                <div class="image__preview">
                                    <figure>
                                        <a href="{{ $portfolio->url }}">
                                            <img src="{{ $portfolio->image->path }}" alt="{{ $portfolio->image->alt }}" title="{{ $portfolio->image->title }}">
                                        </a>
                                    </figure>
                                </div>
                                <div class="body">
                                    <div class="bg__box">
                                        <div class="name">
                                            <a href="{{ $portfolio->url }}">{{ $portfolio->name }}</a>
                                        </div>
                                        <div class="desc">
                                            {!! $portfolio->preview !!}
                                        </div>
                                        @if ($portfolio->tags)
                                        <div class="tags">
                                            @foreach ($portfolio->tags as $tag)
                                                <span>{{ $tag }}</span>
                                            @endforeach
                                        </div>
                                        @endif
                                        <div class="link__more">
                                            <div class="link__more-text">
                                                <a href="{{ $portfolio->url }}">ПОДРОБНЕЕ</a>
                                            </div>
                                            <a href="{{ $portfolio->url }}" class="link__more-icon">
                                                <svg class="icon link">
                                                    <use xlink:href="./img/symbols.svg#link"></use>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection