@extends('mainLayout')
@section('content')
    <form method="POST" action="{{ route('exams.store') }}">
        @csrf
        <div class="mb-3">
            <label for="exam_Name" class="form-label h3">Exam Name</label>
            <input name="exam_Name" type="text"
                   class="form-control @error('exam_Name') border-2 border-danger @enderror"
                   value="{{ old('exam_Name') }}" placeholder="The exam_Name of the blog">
            <div id="exam_NameHelp" class="form-text">The exam_Name of the blog, max 100 characters</div>
            @error('exam_Name')
            <p class="text-danger my-0">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exam_Grade" class="form-label">Exam Grade</label>
            <textarea name="exam_Grade" type="text"
                      class="form-control @error('exam_Grade') border-2 border-danger @enderror"
                      placeholder="The text/exam_Grade of the blog" rows="10">{{ old('exam_Grade') }}</textarea>
            <div id="exam_GradeHelp" class="form-text">This keeps linebreaks but not multiple spaces</div>
            @error('exam_Grade')
            <p class="text-danger my-0">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="dashboard_id" class="form-label">Exam id</label>
            <input name="dashboard_id" type="text" id="dashboard_id"
                   class="form-control @error('dashboard_id') border-2 border-danger @enderror"
                   value="{{ old('dashboard_id') }}" placeholder="Link to an image, may be left blank">
            <div id="imgHelp" class="form-text">Link to an image, can be left blank</div>
            @error('dashboard_id')
            <p class="text-danger">{{ $message }} Or be left blank.</p>
            @enderror
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-warning">Reset</button>
            <a type="button" href="/blog" class="btn btn-light">Cancel</a>
        </div>
    </form>
@endsection
