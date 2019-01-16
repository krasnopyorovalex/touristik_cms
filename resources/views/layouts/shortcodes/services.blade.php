<div class="row">
    @foreach ($services as $service)
        <div class="col-4">
            <div class="travel__item">
                @if ($service->image)
                <img src="{{ $service->image->path }}" alt="{{ $service->image->alt }}" title="{{ $service->image->title }}">
                @endif
                <div class="travel__item-name">
                    <a href="{{ $service->url }}" class="show__tour">{{ $service->name }}</a>
                </div>
                <a href="{{ $service->url }}" class="btn__more">&nbsp;</a>
            </div>
        </div>
    @endforeach
</div>