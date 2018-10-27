@extends('layouts.app')

@section('title', $article->title)
@section('description', $article->description)

@section('content')

    @include('layouts.partials.header', ['page' => $article, 'parent' => 'blog', 'name' => 'Блог'])

    <main>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="row">
                        <div class="col-8">
                            <article>
                                <time datetime="{{ date('c', strtotime($article->published_at)) }}">
                                    {{ Illuminate\Support\Carbon::parse($article->published_at)->format('d M Y') }}
                                </time>

                                <div class="content">
                                    {!! $article->preview !!}
                                    <figure>
                                        <img src="{{ asset($article->image->path) }}" alt="{{ $article->image->alt }}" title="{{ $article->image->title }}">
                                    </figure>
                                    {!! $article->text !!}
                                </div>
                            </article>
                        </div>
                        <div class="col-4 hidden__xs to__bottom">
                            <div class="ad">
                                <div class="text">Реклама</div>
                            </div>
                            <aside class="other__articles">
                                <div class="title">ЧИТАЙТЕ ПО ТЕМЕ</div>
                                <div class="other__articles-row">
                                    <div class="other__articles-image">
                                        <figure>
                                            <img src="/img/article_another.png" alt="alt">
                                        </figure>
                                    </div>
                                    <div class="other__articles-name">
                                        <div class="name">Где заказать сайт: фриланс или веб-студия</div>
                                    </div>
                                </div>
                                <div class="other__articles-row">
                                    <div class="other__articles-image">
                                        <figure>
                                            <img src="/img/article_another.png" alt="alt">
                                        </figure>
                                    </div>
                                    <div class="other__articles-name">
                                        <div class="name">Где заказать сайт: фриланс или веб-студия</div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="row">
                        <div class="col-only-6 center">
                            @if ($prev)
                            <a href="{{ route('article.show', $prev->alias) }}" class="prev__project">
                                {{ $prev->name }}
                            </a>
                            @endif
                        </div>
                        <div class="col-only-6 center">
                            @if ($next)
                            <a href="{{ route('article.show', $next->alias) }}" class="next__project">
                                {{ $next->name }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection