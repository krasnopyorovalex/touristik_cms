@extends('layouts.admin')

@section('breadcrumb')
    <li class="active">Баннеры</li>
@endsection

@section('content')

    <a href="{{ route('admin.banners.create') }}" type="button" class="btn bg-primary">
        Добавить
        <i class="icon-stack-plus position-right"></i>
    </a>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr class="border-solid">
                <th>#</th>
                <th>Название</th>
                <th>Ссылка</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($banners as $banner)
                <tr>
                    <td><span class="label label-primary">{{ $loop->iteration }}</span></td>
                    <td>{{ $banner->name }}</td>
                    <td><span class="label label-primary bg-teal-400">{{ $banner->link }}</span></td>
                    <td>
                        <div>
                            <a href="{{ route('admin.banners.edit', $banner) }}"><i class="icon-pencil7"></i></a>
                            <form method="POST" action="{{ route('admin.banners.destroy', $banner) }}" class="form__delete">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="last__btn">
                                    <i class="icon-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection