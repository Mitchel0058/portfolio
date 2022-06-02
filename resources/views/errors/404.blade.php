@extends('errors.layout')
<title>Error 404</title>
@section('content')
    <div class="position-absolute end-0 text-primary cursor-pointer user-select-none" id="hideText" tabindex="0">
        Hide to view image
    </div>
    <div class="text-center bg-black" style="--bs-bg-opacity: .5;" id="text">
        <div class="h1">Error 404 | page not found</div>
        <div class="h2" id="bgMessage">Something went wrong, but in the meantime enjoy this </div>
        <div class="h3">There may be something misspelled in the url</div>
        <div class="h3">Are you sure {{ Request::url() }} is correct?</div>
        <a class="h4" href="/">Go to home page</a>
        <div class="h4">
            <a class="h4 cursor-pointer user-select-none" id="previousPage" tabindex="0">Go back to previous page</a>
        </div>
    </div>
@endsection
