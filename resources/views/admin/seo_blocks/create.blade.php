@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.seo_blocks.index') }}">SEO-блоки</a></li>
    <li class="active">Форма добавления seo-блока</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления seo-блока</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.seo_blocks.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @input(['name' => 'name', 'label' => 'Название'])
                @input(['name' => 'sys_name', 'label' => 'Системное имя'])
                @textarea(['name' => 'value', 'label' => 'Значение'])

                @submit_btn()
            </form>

        </div>
    </div>

@endsection