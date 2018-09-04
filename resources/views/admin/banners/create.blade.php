@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.banners.index') }}">Баннеры</a></li>
    <li class="active">Форма добавления баннера</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления баннера</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.banners.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @selectLink(['name' => 'link', 'label' => 'Ссылка'])

                @input(['name' => 'name', 'label' => 'Название'])
                @textarea(['name' => 'text', 'label' => 'Текст'])
                @input(['name' => 'btn_text', 'label' => 'Текст кнопки'])
                @imageInput(['name' => 'image', 'type' => 'file', 'label' => 'Выберите изображение на компьютере'])

                @submit_btn()
            </form>

        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('dashboard/laravel-ckeditor/ckeditor.js') }}"></script>
    @endpush
@endsection