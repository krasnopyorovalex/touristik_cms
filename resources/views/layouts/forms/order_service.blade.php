<div class="form__box">
    <form action="{{ route('order.service.send') }}" id="order__service-form" class="order__service" method="post">
        @csrf
        <div class="services__list-block single__block">
            <select name="service" id="service__field" required>
                @foreach ($services as $service)
                    <optgroup label="{{ $service->name }}">
                        @if ($service->services->count())
                            @foreach ($service->services as $subService)
                                <option value="{{ $subService->name }}">{{ $subService->name }}</option>
                            @endforeach
                        @endif
                    </optgroup>
                @endforeach
            </select>
            <i class="select__arrow"></i>
        </div>
        <div class="single__block">
            <input type="text" name="name" placeholder="Ваше имя" autocomplete="off" required minlength="3">
        </div>
        <div class="single__block">
            <input type="text" name="phone" placeholder="Номер телефона" autocomplete="off" required>
        </div>
        <div class="single__block">
            <input type="email" name="email" placeholder="Email" autocomplete="off" required>
        </div>
        <div class="single__block submit__block">
            <button type="submit">Отправить</button>
        </div>
        <div class="single__block agree__block">
            <input type="checkbox" name="agree" id="i_agree{{ $postfix ?? '' }}" value="1" checked>
            <label for="i_agree{{ $postfix ?? '' }}">Отправляя заявку  вы соглашаетесь с <a href="{{ route('page.show', ['alias' => 'personal-data']) }}" target="_blank" title="Перейти на страницу описания">правилами офферты</a></label>
            <p class="error">Отметьте, пожалуйста</p>
        </div>
    </form>
    <!-- /.order__service -->
</div>
