<ol class="navigation">
    @foreach($menuItems as $menuItem)
        <li id="item_{{ $menuItem->id }}">
            <div>
                <div class="item_name">{{ $menuItem->name }}</div>
                <div class="center-block ">{{ $menuItem->link }}</div>
                <div class="actions">
                    <a href="{{ route('admin.menu_items.edit', $menuItem) }}"><i class="icon-pencil7"></i></a>
                    <form action="{{ route('admin.menu_items.destroy', $menuItem) }}" class="form__delete">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="last__btn">
                            <i class="icon-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
            @includeIf('admin.menu_items._list', ['menuItems' => $menuItem->menuItems])
        </li>
    @endforeach
</ol>