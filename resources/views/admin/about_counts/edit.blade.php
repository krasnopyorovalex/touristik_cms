@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.about_counts.index') }}">О нас(счётчики)</a></li>
    <li class="active">Форма редактирования счётчика</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма редактирования счётчика</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.about_counts.update', $aboutCount) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                @input(['name' => 'count', 'label' => 'Количество', 'entity' => $aboutCount])
                @input(['name' => 'name', 'label' => 'Название', 'entity' => $aboutCount])
                @input(['name' => 'icon', 'label' => 'сss-класс иконки', 'entity' => $aboutCount])

                @submit_btn()
            </form>

        </div>
    </div>

@endsection