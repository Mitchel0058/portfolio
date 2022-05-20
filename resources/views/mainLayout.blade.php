<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The main page of 'me'</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="public/css/default.css">
</head>

<body>

{{--<ul class="navbar">--}}
{{--    <li>--}}
{{--        <nav>Links:</nav>--}}
{{--    </li>--}}
{{--    <?php $sites = ['/', 'profile', 'dashboard', 'faq', 'blog', 'aside'] ?>--}}
{{--    @foreach($sites as $site)--}}
{{--        @if(Request::is($site) || Request::is("$site/*") ? $page = 'current-page' : $page = 'different-page') @endif--}}
{{--        @if($site == '/' ? $appearance = 'Home' : $appearance = ucfirst($site)) @endif--}}
{{--        @if($site != '/' ? $site = "/$site" : null) @endif--}}
{{--        <li class="active">--}}
{{--            <nav><a href="{{ $site }}" class="{{ $page }}">{{ $appearance }}</a></nav>--}}
{{--        </li>--}}
{{--    @endforeach--}}
{{--</ul>--}}
@include('navbar')
@yield('content')
<p class="footer">Gemaakt door:<br> Mitchel Goedegebuure</p>

</body>
</html>

