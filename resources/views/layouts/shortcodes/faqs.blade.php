@if(count($faqs))
    <ul class="faq">
        @foreach ($faqs as $faq)
            <li>
                <div class="q">{{ $faq->question }}</div>
                <div class="a">{!! strip_tags($faq->answer) !!}</div>
            </li>
        @endforeach
    </ul>
@endif