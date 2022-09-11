@if($schedules->count())
<div class="schedule schedule_yandex">
    <div class="schedule__row">
        <div class="date">Срок истечения доступа на скачивание</div>
        <div class="name">Название тура</div>
        <div class="order">Ссылка для скачивания</div>
    </div>
    @foreach ($schedules as $schedule)
    <div class="schedule__row">
        <div class="date">{{ $schedule->date_string ?: $schedule->finished_at->formatLocalized('%d %b %Y') }} г.</div>
        <div class="name">{!! strip_tags($schedule->body, '<a>') !!}</div>
        <div class="order"><a href="{{ $schedule->link_to_yandex_disk }}" target="_blank" class="btn">Скачать</a></div>
    </div>
    @endforeach
</div>
@endif