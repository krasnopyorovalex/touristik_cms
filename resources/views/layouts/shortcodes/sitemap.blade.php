<ul class="sitemap">
    @if (count($pages))
        @foreach($pages as $page)
            <li>
                <a href="{{ route('page.show', ['alias' => $page->alias]) }}">{{ $page->name }}</a>
                @if ($page->template == 'page.blog' && count($articles))
                    <ul>
                        @foreach($articles as $blog)
                            <li>
                                <a href="{{ route('article.show', ['alias' => $blog->alias]) }}">{{ $blog->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    @endif
</ul>