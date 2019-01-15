<form action="{{ route('order.check.send') }}" class="form__order" id="{{ $id ?? 'check__order' }}" method="post">
    @csrf
    <input type="hidden" name="service" value="{{ $service ? $service->name : '' }}">
    @if(isset($title))
        <div class="close__box" title="Закрыть форму">
            <div class="close"></div>
        </div>
        <div class="single__block">
            <div class="title">
                {{ $title }}
            </div>
        </div>
    @endif
    <div class="single__block name">
        <input type="text" name="name" placeholder="Имя*" autocomplete="off" required>
        <i class="icon human"></i>
    </div>
    <div class="single__block phone">
        <input type="text" name="phone" class="phone" required>
        <i class="icon phone"></i>
    </div>
    <div class="single__block email">
        <input type="text" name="email" placeholder="Email" autocomplete="off">
        <i class="icon email"></i>
    </div>
    <div class="single__block">
        <textarea name="info" placeholder="Доп. информация"></textarea>
    </div>
    <div class="single__block i__agree">
        <input type="checkbox" name="agree" id="agree" checked="checked">
        <label for="agree">
            Согласие на обработку персональных данных
        </label>
        <p class="error">Согласитесь на обработку персональных данных</p>
    </div>
    <div class="single__block center submit">
        <button type="submit" class="btn">Отправить</button>
    </div>
</form>
