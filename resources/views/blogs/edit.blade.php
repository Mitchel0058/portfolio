@extends('mainLayout')
@section('content')
    <script src="/js/blogs.js"></script>
        <form method="POST" action="/blog/{{ $blog->id }} }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label h3">Titel</label>
                <input name="title" type="text"
                       class="form-control @error('title') border-2 border-danger @enderror"
                       value="{{$blog->title }}" placeholder="Your title here...">
                <div id="titleHelp" class="form-text">The title of the blog, max 100 characters</div>
                @error('title')
                <p class="text-danger my-0">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="paragraph" class="form-label">Paragraph</label>
                <textarea name="paragraph" type="text"
                          class="form-control @error('paragraph') border-2 border-danger @enderror"
                          placeholder="The text/paragraph of the blog" rows="10">{{ $blog->paragraph }}</textarea>
                <div id="paragraphHelp" class="form-text">This keeps linebreaks but not multiple spaces</div>
                @error('paragraph')
                <p class="text-danger my-0">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="img_link" class="form-label">Link to an img</label>
                <input name="img_link" type="text" id="img_link"
                       class="form-control @error('img_link') border-2 border-danger @enderror"
                       value="{{$blog->img_link }}" placeholder="Your link here...">
                <div id="imgHelp" class="form-text">Link to an image, can be left blank</div>
                <p class="text-danger" id="img_linkError"></p>
                <div id="previewMsg" hidden>Preview of the img:
                    <div>If it did not load please try a different link</div>
                </div>
                <img src="" id="imgPreview" class="mw-10 mh-10">
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
@endsection
