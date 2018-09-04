@extends('layouts.admin')

@section('breadcrumb')
    <li class="active">О нас(счётчики)</li>
@endsection

@section('content')

    <a href="{{ route('admin.about_counts.create') }}" type="button" class="btn bg-primary">
        Добавить
        <i class="icon-stack-plus position-right"></i>
    </a>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr class="border-solid">
                <th>#</th>
                <th>Количество</th>
                <th>Название</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($aboutCounts as $aboutCount)
                <tr>
                    <td><span class="label label-primary">{{ $loop->iteration }}</span></td>
                    <td><span class="label label-primary">{{ $aboutCount->count }}</span></td>
                    <td>{{ $aboutCount->name }}</td>
                    <td>
                        <div>
                            <a href="{{ route('admin.about_counts.edit', $aboutCount) }}"><i class="icon-pencil7"></i></a>
                            <form method="POST" action="{{ route('admin.about_counts.destroy', $aboutCount) }}" class="form__delete">
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