@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('content')

    @include('layouts.partials.header_with_image', ['page' => $page])

    <main>
        <div class="container">
            <div class="row">
                <div class="col-10">
                   {!! $page->text !!}
                </div>
            </div>
        </div>
    </main>

    @if ($articles->count())
    <section itemscope="" itemtype="http://schema.org/BlogPosting" itemprop="BlogPost" class="articles__list">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    @foreach ($articles as $article)
                        <article>
                            @if ($article->image)
                            <div itemscope="" itemprop="image" itemtype="http://schema.org/ImageObject" class="image">
                                <figure>
                                    <a href="{{ $article->url }}">
                                        <img itemprop="url contentUrl" src="{{ asset($article->image->path) }}" alt="{{ $article->image->alt }}" title="{{ $article->image->title }}">
                                        <meta itemprop="url" content="{{ asset($article->image->path) }}">
                                        <meta itemprop="width" content="319">
                                        <meta itemprop="height" content="216">
                                    </a>
                                </figure>
                            </div>
                            @endif
                            <div itemprop="articleBody" class="preview">
                                <time itemprop="datePublished" datetime="{{ $article->published_at->format('c') }}">
                                    {{ $article->published_at->formatLocalized('%d %b %Y') }}
                                </time>
                                <a itemprop="headline" href="{{ $article->url }}" class="name">{{ $article->name }}</a>
                                {!! $article->preview !!}
                                <a href="{{ $article->url }}" class="btn_style-two">читать подробнее</a>
                            </div>
                        </article>
                    @endforeach

                    <div class="center">
                        <a href="/article.html" class="btn green">еще статьи</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <section class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="subscribe__box grey">
                        <div class="title">Подпишитесь и узнавайте о самых интересных материалах на KRASBER</div>
                        <form action="#" class="subscribe" method="post">
                            <div class="single__block email__block">
                                <input type="email" name="email" placeholder="Укажите ваш Email" autocomplete="off">
                                <div class="info__message">
                                    Нажимая кнопку подписаться, Вы даете согласие на обработку персональных данных
                                </div>
                            </div>
                            <div class="single__block">
                                <button type="submit">ПОДПИСАТЬСЯ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection