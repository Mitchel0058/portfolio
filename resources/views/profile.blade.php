@extends('mainLayout')
<title>Profile</title>
@section('content')
    <h1 class="text-center">My profile</h1>
    <img src="me" alt="need to upload img of face" class="float-end">
    <h3>Hi, I'm Mitchel Goedegebuure, creator of this website.</h3>
    <h4>I decided to recreate this website after we had to make one at the start of this year for a school project. <br>
        That site was very rough and only used html, so since I needed to create a project for some individual
        assignments I
        decided to recreate the site with what I've learned. But enough about this site, there's a <a href="blog/1">blog
            about this site</a> if you're curious about that.</h4>
    <h4>I'm</h4>
    <ul class="h4">
        <li>18 years old,</li>
        <li>live in Vlissingen,</li>
        <li>and I'm currently studying at HZ University of Applied</li>
    </ul>
    <h4>In my free time I like to play games <i>e.g.</i></h4>
    <ul class="h4">
        <li>Dark souls</li>
        <li>Hollow knight</li>
        <li>Horizon zero dawn</li>
    </ul>
    <h4>or walk my dog. <img src="dog" alt="need to upload dog pic"></h4>
    <h4>Programming languages I've learned and used so far:</h4>
        <ul class="h4">
            <li>
                Javascript/typescript, made <a href="https://barb0019.github.io/Serious-Game_BSF/" target="_blank"> this
                    game</a> with object oriented programming using typescript as a project for school with a group of 5
                in my first year. I even earned a <i>fake</i> certificate for it. Read it on <a href="blog/3">this
                    blog</a>.
            </li>
            <li>PHP, mainly using the laravel framework, which is how this site is made</li>
        </ul>
@endsection
