@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.seo_blocks.index') }}">SEO-блоки</a></li>
    <li class="active">Форма редактирования seo-блока</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования seo-блока</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.seo_blocks.update', ['id' => $seoBlock->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                @input(['name' => 'name', 'label' => 'Название', 'entity' => $seoBlock])
                @input(['name' => 'sys_name', 'label' => 'Системное имя', 'entity' => $seoBlock])
                @textarea(['name' => 'value', 'label' => 'Значение', 'entity' => $seoBlock, 'rows' => 10])

                @submit_btn()

            </form>

        </div>
    </div>
@endsection