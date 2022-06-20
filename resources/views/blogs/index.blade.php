@extends('mainLayout')
<title>My blogs</title>
@section('content')
    <div class="container" style="text-align: -webkit-center">
        @auth
            <a href="/blog/create" class="btn btn-success position-absolute end-0">New blog</a>
        @endauth
        @foreach($blogs as $blog)
            <div class="d-flex flex-column p-2 border border-darkblue bg-darkerblue" style="max-width: 60%">
                <div class="text-center h3 mw-100 text-break">
                    {{ $blog->title }}
                </div>
                <p class="h4 text-break">
                    {{ Str::limit($blog->paragraph, 150, '...') }}
                </p>
                <a href="/blog/{{ $blog->id }}" class="h4">Read blog</a>
                <div>
                    @auth
                        <a href="/blog/{{ $blog->id }}/edit" class="btn btn-warning">Edit</a>
                        <form method="POST" action="/blog/{{ $blog->id }}" class="all-unset">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you certain you want to delete this blog?')">Delete
                            </button>
                        </form>
                    @endauth
                </div>
            </div>
            <br/>
        @endforeach
        <div style="max-width: 60%">
            <a href="/blog?page=1" class="float-sm-start h5 me-3">First</a>
            @if($page > 1)
                <a href="/blog?page={{ $page - 1}}" class="float-sm-start h5">Previous</a>
            @endif
            <div class="m-0 w-fit-content h-0">
                @for($i = $page - 2; $i <= $page + 2; $i++)
                    @if($i === $page - 2 && $i > 1)
                        ...
                    @endif
                    @if(!($i < 1) && !($i > $lastPage))
                        @if($i === intVal($page))
                            <a class="m-0 w-fit-content h-0 h5 text-info">{{ $i }}</a>
                        @else
                            <a href="/blog?page={{ $i }}" class=" h5">{{ $i }}</a>
                        @endif
                    @endif
                    @if($i === $page + 2 && $i < $lastPage)
                        ...
                    @endif
                @endfor
            </div>
            <a href="/blog?page={{ $lastPage }}" class="float-sm-end h5 ms-3">Last</a>
            @if($page < $lastPage)
                <a href="/blog?page={{ $page + 1}}" class="float-sm-end h5">Next</a>
            @endif
            <br/>
        </div>
    </div>
@endsection
