@extends('layouts.admin')

@section('breadcrumb')
    <li><a href="{{ route('admin.about_counts.index') }}">О нас(счётчики)</a></li>
    <li class="active">Форма добавления счётчика</li>
@endsection

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Форма добавления счётчика</div>

        <div class="panel-body">

            @include('layouts.partials.errors')

            <form action="{{ route('admin.about_counts.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                @input(['name' => 'count', 'label' => 'Количество'])
                @input(['name' => 'name', 'label' => 'Название'])
                @input(['name' => 'icon', 'label' => 'сss-класс иконки'])

                @submit_btn()
            </form>

        </div>
    </div>

@endsection