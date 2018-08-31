@extends('layouts.admin')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления товара</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.catalog_products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="catalog_id" value="{{ $catalog }}">

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                        <li><a href="#related" data-toggle="tab">Сопутствующие товары</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="main">

                            @input(['name' => 'name', 'label' => 'Название'])
                            @input(['name' => 'title', 'label' => 'Title'])
                            @input(['name' => 'description', 'label' => 'Description'])

                            @input(['name' => 'alias', 'label' => 'Alias'])
                            @textarea(['name' => 'text', 'label' => 'Текст'])
                            @checkbox(['name' => 'is_published', 'label' => 'Опубликовано?', 'isChecked' => true])

                            @submit_btn()
                        </div>
                        <div class="tab-pane" id="related">
                            <div class="form-group">
                                <label for="products">Выберите сопутствующие товары</label>
                                <select class="form-control border-blue border-xs select-search" multiple="multiple" id="products" name="products[]" data-width="100%">
                                    @foreach($catalogProducts as $catalogProduct)
                                        <option value="{{ $catalogProduct->id }}">{{ $catalogProduct->name }}</option>
                                    @endforeach
                                </select>
                            </div>
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