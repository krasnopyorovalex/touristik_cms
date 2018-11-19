@extends('layouts.app')

@section('title', $portfolio->title)
@section('description', $portfolio->description)

@section('content')

    @include('layouts.partials.header', ['page' => $portfolio, 'parent' => 'portfolio', 'name' => 'Портфолио'])

    @if ($portfolio->tags)
    <section class="tags">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="tags black">
                        @foreach ($portfolio->tags as $tag)
                            <span>{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <main>
        <div class="container">
            <div class="row">
                <div class="col-10">
                   {!! $portfolio->text !!}
                </div>
            </div>
        </div>
    </main>

    @if ($portfolio->site_url)
    <section class="grey">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <a class="btn__link-project" target="_blank" href="{{ $portfolio->site_url }}" rel="nofollow">
                        {{ $portfolio->site_url }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="portfolio__nav">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="row">
                        <div class="col-only-6 center">
                            @if ($prev)
                                <a class="prev__project" href="{{ route('portfolio.show', ['alias' => $prev->alias]) }}">
                                    Предыдущий проект
                                </a>
                            @endif
                        </div>
                        <div class="col-only-6 center">
                            @if ($next)
                                <a class="next__project" href="{{ route('portfolio.show', ['alias' => $next->alias]) }}">
                                    Следующий проект
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.forms.order', ['form_title' => $portfolio->form_title, 'form_sub_title' => $portfolio->form_sub_title])

@endsection
