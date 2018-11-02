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
                            @include('layouts.partials._portfolio_item', ['portfolio' => $portfolio])
                        @endforeach
                    </div>
                    {!! $page->text !!}
                </div>
            </div>
        </div>
    </main>

@endsection