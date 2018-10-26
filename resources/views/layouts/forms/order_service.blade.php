<section>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="order__service-form">
                    <div class="wrap">
                        <div class="desc">
                            <div class="as__h1">Заказать услугу</div>
                            <p>Вы можете бесплатно  получить аудит вашего сайта. Вас это не к чему не обязывает.</p>
                        </div>
                        <div class="form__box">
                            <form action="#" class="order__service" method="post">
                                @csrf
                                <div class="services__list-block single__block">
                                    <select name="service" id="service__field">
                                        <option selected disabled>Не выбрано</option>
                                        @foreach ($services as $service)
                                        <optgroup label="{{ $service->name }}">
                                            @if ($service->services->count())
                                                @foreach ($service->services as $subService)
                                                    <option>{{ $subService->name }}</option>
                                                @endforeach
                                            @endif
                                        </optgroup>
                                        @endforeach
                                    </select>
                                    <i class="select__arrow"></i>
                                </div>
                                <div class="single__block">
                                    <input type="text" name="name" placeholder="Ваше имя" autocomplete="off">
                                </div>
                                <div class="single__block">
                                    <input type="text" name="phone" placeholder="Номер телефона" autocomplete="off">
                                </div>
                                <div class="single__block">
                                    <input type="email" name="email" placeholder="Email" autocomplete="off">
                                </div>
                                <div class="single__block submit__block">
                                    <button type="submit">Отправить</button>
                                </div>
                                <div class="single__block agree__block">
                                    <input type="checkbox" name="agree" id="i_agree{{ $postfix ?? '' }}" value="1" checked>
                                    <label for="i_agree{{ $postfix ?? '' }}">Отправляя заяявку  вы соглашаетесь с <a href="#">правилами офферты</a></label>
                                </div>
                            </form>
                            <!-- /.order__service -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>