@extends('mainLayout')
@section('content')
    <a href="/blog" class="h4">⮜ back</a>
    @auth
    <a href="/blog/{{ $blog->id }}/edit" class="float-end btn btn-dark">Edit</a>
    @endauth
    <div class="container">
        <div class="h1 text-center text-break">
            {{ ucfirst($blog->title) }}
        </div>
        <div class="h2 w-75 keep-linebreaks text-break">
            {{ $blog->paragraph }}
        </div>
        @if($blog->img_link !== null)
            <img src="{{ $blog->img_link }}" class="position-absolute end-0 top-20 mw-30 mh-75" alt="blog image">
        @endif
    </div>
@endsection
