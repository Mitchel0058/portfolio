@extends('errors.layout')
<title>Error 500</title>
@section('content')
    <div class="position-absolute end-0 text-primary cursor-pointer user-select-none" id="hideText" tabindex="0">
        Hide to view image
    </div>
    <div class="text-center bg-black" style="--bs-bg-opacity: .5;" id="text">
        <div class="h1">Error 500 | Internal server error</div>
        <div class="h2" >It seems something went wrong on our side</div>
        <div class="h3">Try coming back in a few minutes and refreshing the site</div>
        <div class="h3" id="bgMessage">But in the meantime, grab something to drink and enjoy looking at this </div>
        <a class="h4" href="/">Go to home page</a>
        <div class="h4">
            <a class="h4 cursor-pointer user-select-none" id="previousPage" tabindex="0">Go back to previous page</a>
        </div>
    </div>
@endsection
