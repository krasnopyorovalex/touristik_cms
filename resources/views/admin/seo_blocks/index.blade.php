@extends('layouts.admin')

@section('content')

    <a href="{{ route('admin.seo_blocks.create') }}" type="button" class="btn bg-primary">
        Добавить
        <i class="icon-stack-plus position-right"></i>
    </a>

    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr class="border-solid">
                <th>#</th>
                <th>Название</th>
                <th>Системное имя</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($seoBlocks as $seoBlock)
                <tr>
                    <td><span class="label label-primary">{{ $loop->iteration }}</span></td>
                    <td>{{ $seoBlock->name }}</td>
                    <td>{{ $seoBlock->sys_name }}</td>
                    <td>
                        <div>
                            <a href="{{ route('admin.seo_blocks.edit', $seoBlock) }}"><i class="icon-pencil7"></i></a>
                            <form method="POST" action="{{ route('admin.seo_blocks.destroy', $seoBlock) }}" class="form__delete">
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