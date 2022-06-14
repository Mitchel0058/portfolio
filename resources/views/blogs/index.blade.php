@extends('mainLayout')
<title>My blogs</title>
@section('content')
    <div class="container" style="text-align: -webkit-center">
        <a href="/blog/create" class="btn btn-success position-absolute end-0">New blog</a>
        @foreach($blogs as $blog)
            <div class="d-flex flex-column p-2 border border-darkblue bg-darkerblue" style="max-width: 60%">
                <div class="text-center h3">
                    {{ $blog->title }}
                </div>
                <p class="h4">
                    {{ Str::limit($blog->paragraph, 150, '...') }}
                </p>
                <a href="/blog/{{ $blog->id }}" class="h4">Read blog</a>
                <div>
                    <a href="/blog/{{ $blog->id }}/edit" class="btn btn-warning">Edit</a>
                    <form method="POST" action="/blog/{{ $blog->id }}" class="all-unset">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you certain you want to delete this foo?')">Delete
                        </button>
                    </form>
                </div>
            </div>
            <br/>
        @endforeach
        <div style="max-width: 60%">
            @if($page > 1)
                <a href="/blog?page={{ $page - 1}}" class="float-sm-start h5">Previous</a>
            @endif
            @if(($page + 1) * ($paginate_amount - 1) <= $blogs->total())
                <a href="/blog?page={{ $page + 1}}" class="float-sm-end h5">Next</a>
            @endif
            <br/>
        </div>
    </div>
@endsection
