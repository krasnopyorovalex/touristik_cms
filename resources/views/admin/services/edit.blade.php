@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.services.index') }}">Услуги</a></li>
    <li class="active">Форма редактирования услуги</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования услуги</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.services.update', ['id' => $service->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="main">

                            <div class="form-group">
                                <label for="parent_id">Выберите родительский пункт меню</label>
                                <select class="form-control border-blue border-xs select-search" id="parent_id" name="parent_id" data-width="100%">
                                    <option value="">Не выбрано</option>
                                    @foreach($services as $s)
                                        <option value="{{ $s->id }}"  @if ( $s->id == old('parent_id', $service->parent_id))selected="selected"@endif>{{ $s->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            @input(['name' => 'name', 'label' => 'Название', 'entity' => $service])
                            @input(['name' => 'title', 'label' => 'Title', 'entity' => $service])
                            @input(['name' => 'description', 'label' => 'Description', 'entity' => $service])

                            @input(['name' => 'alias', 'label' => 'Alias', 'entity' => $service])
                            @textarea(['name' => 'preview', 'label' => 'Превью услуги', 'id' => 'editor-full2', 'entity' => $service])
                            @textarea(['name' => 'text', 'label' => 'Текст', 'entity' => $service])
                            @checkbox(['name' => 'is_published', 'label' => 'Опубликовано?', 'entity' => $service])

                            @submit_btn()
                        </div>

                    </div>
                </div>
            </form>

        </div>
    </div>

@push('scripts')
<script src="{{ asset('dashboard/laravel-ckeditor/ckeditor.js') }}"></script>
@endpush
@endsection