@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.catalogs.index') }}">Категории каталога</a></li>
    <li><a href="{{ route('admin.catalog_products.index', $catalogProduct->catalog) }}">Список товаров</a></li>
    <li class="active">Форма редактирования товара</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования товара</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

                <div class="tabbable">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#main" data-toggle="tab">Основное</a></li>
                        <li><a href="#images" data-toggle="tab">Галерея товара</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="main">
                            <form action="{{ route('admin.catalog_products.update', ['id' => $catalogProduct->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                @input(['name' => 'name', 'label' => 'Название', 'entity' => $catalogProduct])
                                @input(['name' => 'title', 'label' => 'Title', 'entity' => $catalogProduct])
                                @input(['name' => 'description', 'label' => 'Description', 'entity' => $catalogProduct])

                                @input(['name' => 'alias', 'label' => 'Alias', 'entity' => $catalogProduct])

                                <div class="form-group">
                                    <label for="products">Выберите сопутствующие товары</label>
                                    <select class="form-control border-blue border-xs select-search" multiple="multiple" id="products" name="products[]" data-width="100%">
                                        @foreach($catalogProducts as $catalogProductOption)
                                            <option value="{{ $catalogProductOption->id }}" {{ in_array($catalogProductOption->id, $catalogProductRelatives) ? 'selected' : '' }}>{{ $catalogProductOption->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                @textarea(['name' => 'text', 'label' => 'Текст', 'entity' => $catalogProduct])
                                @checkbox(['name' => 'is_published', 'label' => 'Опубликовано?', 'entity' => $catalogProduct])

                                @submit_btn()
                            </form>
                        </div>
                        <div class="tab-pane" id="images">
                            <form action="#" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <div class="col-lg-12">
                                        <input type="hidden" name="galleryId" value="{{ $catalogProduct->id }}">
                                        <input type="hidden" name="uploadUrl" value="{{ route('admin.catalog_product_images.store', $catalogProduct) }}">
                                        <input type="hidden" name="updatePositionUrl" value="{{ route('admin.catalog_product_images.update_positions') }}">
                                        <input type="file" class="file-input-ajax" multiple="multiple" name="upload">
                                    </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                            @if ($catalogProduct->images)
                                <div id="_images_box">
                                    @include('admin.catalog_products._images_box')
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

        </div>
    </div>

    <div id="edit-image" class="modal fade"></div>
    @push('scripts')
        <script src="{{ asset('dashboard/laravel-ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('dashboard/assets/js/plugins/ui/dragula.min.js') }}" defer></script>
        <script src="{{ asset('dashboard/assets/js/pages/extension_dnd.js') }}" defer></script>
        <script src="{{ asset('dashboard/assets/js/plugins/uploaders/fileinput.min.js') }}" defer></script>
        <script src="{{ asset('dashboard/assets/js/pages/uploader_bootstrap.js') }}" defer></script>
    @endpush
@endsection