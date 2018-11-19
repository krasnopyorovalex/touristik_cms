<section class="order__form">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="as__h1">{{ $form_title ?: 'Заказать сайт' }}</div>
                <div class="sub__title">{{ $form_sub_title ?: 'Вы можете бесплатно  получить аудит вашего сайта. Вас это не к чему не обязывает.' }}</div>

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
                        <label for="i_agree2">Отправляя заяявку  вы соглашаетесь с <a href="{{ route('page.show', ['alias' => 'personal-data']) }}" target="_blank" title="Перейти на страницу описания">правилами офферты</a></label>
                    </div>
                    <div class="single__block submit__block">
                        <button type="submit">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>