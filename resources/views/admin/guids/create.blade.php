@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.guids.index') }}">Гиды</a></li>
    <li class="active">Форма добавления</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления статьи</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.guids.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @input(['name' => 'name', 'label' => 'Название'])
                @input(['name' => 'post', 'label' => 'Должность'])
                @input(['name' => 'pos', 'label' => 'Позиция'])

                @imageInput(['name' => 'image', 'type' => 'file', 'label' => 'Выберите изображение на компьютере'])
                @textarea(['name' => 'text', 'label' => 'Описание'])

                @submit_btn()
            </form>

        </div>
    </div>
@push('scripts')
<script src="{{ asset('dashboard/ckeditor/ckeditor.js') }}"></script>
@endpush
@endsection