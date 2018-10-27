@extends('layouts.app')

@section('title', $page->title)
@section('description', $page->description)

@section('content')

    @if ($page->image)
        @include('layouts.partials.header_with_image', ['page' => $page])
     @else
        @include('layouts.partials.header', ['page' => $page])
    @endif

    <main>
        <div class="container">
            <div class="row">
                <div class="col-10">
                   {!! $page->text !!}
                </div>
            </div>
        </div>
    </main>

@endsection