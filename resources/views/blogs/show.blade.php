@extends('mainLayout')
@section('content')
    <a href="/blog">Back</a>
    <div class="container">
        <div class="h1 text-center">
            {{ ucfirst($blog->title) }}
        </div>
        <div class="h2 w-75">
            {{ $blog->paragraph }}
        </div>
        @if($blog->img_link !== null)
            <img src="{{ $blog->img_link }}" class="position-absolute end-0 top-20 mw-30 mh-75" alt="blog image">
        @endif
    </div>
@endsection
