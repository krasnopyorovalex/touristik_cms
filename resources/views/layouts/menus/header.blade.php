<ul class="header__nav">
    <li class="logo"><a href="{{ route('page.show') }}"><img src="{{ asset('img/logo.png') }}" alt="logo"></a></li>
    @foreach($menu->get('menu_header') as $item)
        <li{!! add_css_class($item) !!}>
            <a itemprop="url" href="{{ $item->link }}">{{ $item->name }}</a>
            @if (count($item->menuItems))
                <ul>
                    @foreach($item->menuItems as $subItem)
                        <li><a href="{{ $subItem->link }}">{{ $subItem->name }}</a></li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>