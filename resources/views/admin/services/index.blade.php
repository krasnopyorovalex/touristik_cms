@extends('layouts.admin')

@section('content')

    <a href="{{ route('admin.services.create') }}" type="button" class="btn bg-primary">
        Добавить
        <i class="icon-stack-plus position-right"></i>
    </a>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr class="border-solid">
                <th>#</th>
                <th>Название</th>
                <th>Alias</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr>
                    <td><span class="label label-primary">{{ $loop->iteration }}</span></td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->alias }}</td>
                    <td>
                        <div>
                            <a href="{{ route('admin.services.edit', $service) }}"><i class="icon-pencil7"></i></a>
                            <form method="POST" action="{{ route('admin.services.destroy', $service) }}" class="form__delete">
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