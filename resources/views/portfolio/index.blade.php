@extends('layouts.app')

@section('title', $portfolio->title)
@section('description', $portfolio->description)

@section('content')

    @include('layouts.partials.header', ['page' => $portfolio, 'parent' => 'portfolio', 'name' => 'Портфолио'])

    @if ($portfolio->tags)
    <section>
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="tags black">
                        @foreach ($portfolio->tags as $tag)
                            <span>{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

    <main>
        <div class="container">
            <div class="row">
                <div class="col-10">
                   {!! $portfolio->text !!}
                </div>
            </div>
        </div>
    </main>

    @if ($portfolio->site_url)
    <section class="grey">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <a class="btn__link-project" target="_blank" href="{{ $portfolio->site_url }}" rel="nofollow">
                        {{ $portfolio->site_url }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="portfolio__nav">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <div class="row">
                        <div class="col-only-6 center">
                            <a class="prev__project">
                                Предыдущий проект
                            </a>
                        </div>
                        <div class="col-only-6 center">
                            <a class="next__project">
                                Следующий проект
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="order__form">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="as__h1">Заказать сайт</div>
                    <div class="sub__title">Вы можете бесплатно  получить аудит вашего сайта. Вас это не к чему не обязывает.</div>

                    <form action="#" method="post">
                        <div class="single__block">
                            <input type="text" name="name" placeholder="Ваше имя" autocomplete="off">
                        </div>
                        <div class="single__block">
                            <input type="email" name="email" placeholder="Номер телефона" autocomplete="off">
                        </div>
                        <div class="single__block">
                            <input type="text" name="phone" placeholder="Email" autocomplete="off">
                        </div>
                        <div class="single__block message">
                            <textarea name="message" id="message" placeholder="Дополнительная информация"></textarea>
                        </div>
                        <div class="single__block agree__block">
                            <input type="checkbox" name="agree" id="i_agree2" value="1" checked>
                            <label for="i_agree2">Отправляя заяявку  вы соглашаетесь с <a href="#" title="Перейти на страницу описания">правилами офферты</a></label>
                        </div>
                        <div class="single__block submit__block">
                            <button type="submit">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection