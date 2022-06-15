@extends('mainLayout')
@section('content')
    <script src="/js/blogs.js"></script>
    <form method="POST" action="{{ route('blog.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label h3">Titel</label>
            <input name="title" type="text"
                   class="form-control @error('title') border-2 border-danger @enderror"
                   value="{{ old('title') }}" placeholder="The title of the blog">
            <div id="titleHelp" class="form-text">The title of the blog</div>
            @error('title')
            <p class="text-danger my-0">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="paragraph" class="form-label">Paragraph</label>
            <textarea name="paragraph" type="text"
                      class="form-control @error('paragraph') border-2 border-danger @enderror"
                      placeholder="The text/paragraph of the blog" rows="10">{{ old('paragraph') }}</textarea>
            <div id="paragraphHelp" class="form-text">This keeps linebreaks but not multiple spaces</div>
            @error('paragraph')
            <p class="text-danger my-0">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="img_link" class="form-label">Link to an img</label>
            <input name="img_link" type="text" id="img_link"
                   class="form-control @error('img_link') border-2 border-danger @enderror"
                   value="{{ old('img_link') }}" placeholder="Link to an image, may be left blank">
            <div id="imgHelp" class="form-text">Link to an image, can be left blank</div>
            <p class="text-danger" id="img_linkError"></p>
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
@endsection
