@extends('mainLayout')
@section('content')
    <div class="container">
        <div class="columns">
            <div class="column is-12"> {{-- These divs are needed for proper layout --}}
                <form method="POST" action="/blog/{{ $blog->id }} }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label h3">Titel</label>
                        <input name="title" type="text"
                               class="form-control @error('title') border-2 border-danger @enderror"
                               value="{{$blog->title }}" placeholder="Your title here...">
                        <div id="titleHelp" class="form-text">The title of the blog</div>
                        @error('title')
                        <p class="text-danger my-0">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="paragraph" class="form-label">Paragraph</label>
                        <textarea name="paragraph" type="text"
                                  class="form-control @error('paragraph') border-2 border-danger @enderror"
                                  placeholder="The text/paragraph of the blog" rows="10">{{ $blog->paragraph }}</textarea>
                        @error('paragraph')
                        <p class="text-danger my-0">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="img_link" class="form-label">Link to an img</label>
                        <input name="img_link" type="text"
                               class="form-control @error('img_link') border-2 border-danger @enderror"
                               value="{{$blog->img_link }}" placeholder="Your link here...">
                        <div id="imgHelp" class="form-text">Link to an image, can be left blank</div>
                        @error('img_link')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <a type="button" href="/blog" class="btn btn-light">Cancel</a>
                    </div>

                </form>
                <form method="POST" action="/blog/{{ $blog->id }}">
                    @csrf
                    @method('DELETE')
                    <div class="control">
                        <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you certain you want to delete this blog?')">Delete
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
