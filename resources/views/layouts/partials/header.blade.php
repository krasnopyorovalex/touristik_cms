<section class="breadcrumbs with__bg">
    <div class="bg__box"></div>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                        <a href="{{ route('page.show') }}">Главная</a>
                        <meta itemprop="position" content="1">
                    </li>
                    @if (isset($parent))
                        <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                            <a href="{{ route('page.show', ['alias' => $parent]) }}">{{ $name }}</a>
                            <meta itemprop="position" content="2">
                        </li>
                    @endif
                    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                        {{ $page->name }}
                        <meta itemprop="position" content="{{ isset($parent) ? 3 : 2 }}">
                    </li>
                </ul>
                <h1>{{ $page->menu_name ?: $page->name }}</h1>
            </div>
        </div>
    </div>
</section>