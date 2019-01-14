<div class="articles" itemscope="" itemtype="http://schema.org/BlogPosting" itemprop="BlogPost">
    @foreach ($articles as $article)
        <article class="articles__item">
            @if ($article->image)
                <div itemscope="" itemprop="image" itemtype="http://schema.org/ImageObject" class="image">
                    <figure>
                        <a href="{{ $article->url }}">
                            <img itemprop="url contentUrl" src="{{ asset($article->image->path) }}" alt="{{ $article->image->alt }}" title="{{ $article->image->title }}">
                            <meta itemprop="url" content="{{ asset($article->image->path) }}">
                            <meta itemprop="width" content="282">
                            <meta itemprop="height" content="194">
                        </a>
                    </figure>
                </div>
            @endif
            <div class="desc">
                <div class="date">
                    <time itemprop="datePublished" datetime="{{ $article->published_at->format('c') }}">
                        {{ $article->published_at->formatLocalized('%d %b %Y') }}
                    </time>
                </div>
                <a href="{{ $article->url }}" class="name">{{ $article->name }}</a>
                <div itemprop="articleBody" class="text">
                    {!! $article->preview !!}
                </div>
                <div class="btn__box">
                    <a href="{{ $article->url }}" class="btn">Подробнее</a>
                </div>
            </div>
        </article>
    @endforeach
</div>