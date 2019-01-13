<section class="travels">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title">
                    Какие путешествия тебе нужны?
                </div>
                <div class="sub__title">
                    Наши услуги
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
                <div class="col-4">
                    <div class="travel__item">
                        <img src="{{ $service->image->path }}" alt="{{ $service->image->alt }}" title="{{ $service->image->title }}">
                        <div class="travel__item-name">
                            <a href="{{ $service->url }}">{{ $service->name }}</a>
                        </div>
                        <a href="{{ $service->url }}" class="btn__more">&nbsp;</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>