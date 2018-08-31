@extends('layouts.admin')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования товара</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.catalog_products.update', ['id' => $catalogProduct->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                        <li><a href="#related" data-toggle="tab">Сопутствующие товары</a></li>
                        <li><a href="#images" data-toggle="tab">Галерея товара</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="main">

                            @input(['name' => 'name', 'label' => 'Название', 'entity' => $catalogProduct])
                            @input(['name' => 'title', 'label' => 'Title', 'entity' => $catalogProduct])
                            @input(['name' => 'description', 'label' => 'Description', 'entity' => $catalogProduct])

                            @input(['name' => 'alias', 'label' => 'Alias', 'entity' => $catalogProduct])
                            @textarea(['name' => 'text', 'label' => 'Текст', 'entity' => $catalogProduct])
                            @checkbox(['name' => 'is_published', 'label' => 'Опубликовано?', 'entity' => $catalogProduct])

                            @submit_btn()
                        </div>
                        <div class="tab-pane" id="related">
                            <div class="form-group">
                                <label for="products">Выберите сопутствующие товары</label>
                                <select class="form-control border-blue border-xs select-search" multiple="multiple" id="products" name="products[]" data-width="100%">
                                    @foreach($catalogProducts as $catalogProductOption)
                                        <option value="{{ $catalogProductOption->id }}">{{ $catalogProductOption->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @submit_btn()
                        </div>
                        <div class="tab-pane" id="images">
                            asxaxs
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