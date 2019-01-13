<ul class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
        <a href="{{ route('page.show') }}">Главная</a>
        <meta itemprop="position" content="1">
    </li>
    <li itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem">
        {{ $page->name }}
        <meta itemprop="position" content="2">
    </li>
</ul>