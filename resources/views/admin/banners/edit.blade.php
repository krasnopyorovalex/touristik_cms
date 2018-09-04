@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.banners.index') }}">Баннеры</a></li>
    <li class="active">Форма редактирования баннера</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования баннера</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.banners.update', $banner) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                        <li><a href="#image" data-toggle="tab">Изображение</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="main">
                            @selectLink(['name' => 'link', 'label' => 'Ссылка', 'entity' => $banner])

                            @input(['name' => 'name', 'label' => 'Название', 'entity' => $banner])
                            @textarea(['name' => 'text', 'label' => 'Текст', 'entity' => $banner])
                            @input(['name' => 'btn_text', 'label' => 'Текст кнопки', 'entity' => $banner])

                            @submit_btn()
                        </div>

                        <div class="tab-pane" id="image">
                            @if ($banner->image)
                                <div class="panel panel-flat border-blue border-xs" id="image__box">
                                    <div class="panel-body">
                                        <img src="{{ asset($banner->image->path) }}" alt="" class="upload__image">

                                        <div class="btn-group btn__actions">
                                            <button data-toggle="modal" data-target="#modal_info" type="button" class="btn btn-primary btn-labeled btn-sm"><b><i class="icon-pencil4"></i></b> Атрибуты</button>

                                            <button type="button" data-href="{{ route('admin.images.destroy', ['id' => $banner->image->id]) }}" class="btn delete__img btn-danger btn-labeled btn-labeled-right btn-sm">Удалить <b><i class="icon-trash"></i></b></button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @imageInput(['name' => 'image', 'type' => 'file', 'entity' => $banner, 'label' => 'Выберите изображение на компьютере'])
                            @submit_btn()
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
@if ($banner->image)
    @include('layouts.partials._image_attributes_popup', ['image' => $banner->image])
@endif

@push('scripts')
    <script src="{{ asset('dashboard/laravel-ckeditor/ckeditor.js') }}"></script>
@endpush

@endsection