@if($schedules->count())
<div class="schedule schedule_yandex">
    <div class="schedule__row">
        <div class="date" style="width: 25%">Срок истечения доступа на скачивание</div>
        <div class="name" style="width: 50%">Название тура</div>
        <div class="order" style="width: 15%">Ссылка для скачивания</div>
    </div>
    @foreach ($schedules as $schedule)
    <div class="schedule__row">
        <div class="date" style="width: 25%">{{ $schedule->date_string ?: $schedule->finished_at->formatLocalized('%d %b %Y') }} г.</div>
        <div class="name" style="width: 50%">{!! strip_tags($schedule->body, '<a>') !!}</div>
        <div class="order" style="width: 15%"><a href="{{ $schedule->link_to_yandex_disk }}" target="_blank" class="btn">Скачать</a></div>
    </div>
    @endforeach
</div>
@endif