<div class="schedule">
    @foreach ($schedules as $schedule)
    <div class="schedule__row">
        <div class="date">{{ $schedule->date_string ?: $schedule->date->formatLocalized('%d %b %Y') }} г.</div>
        <div class="name">{{ strip_tags($schedule->body) }}</div>
        <div class="price">{{ $schedule->price }}</div>
        <div class="order"><div class="btn call__popup" data-target="popup__order" data-service="{{ strip_tags($schedule->body) }}">Хочу в поход</div></div>
    </div>
    @endforeach
</div>
@include('layouts.forms.order_popup', ['service' => false])
