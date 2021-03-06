<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Healthy Region</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>

</head>
<body>

<nav class="top-bar" data-topbar role="navigation" data-options="is_hover: true">

    <ul class="ul">
        <li class="name">
            <a href="https://hz.nl/" title="HZ University of Applied Sciences (nl)">
                <img class="hz-logo" src="{{asset('/img/hz-logo.svg')}}" alt="HZ University of Applied Sciences (nl)">
            </a>
        </li>
    </ul>
</nav>

<img src="{{asset('/healthyregion-banner.jpg')}}">


<!--Menu-->

<ul>
    <div class="wrapper" id="navBar">
        <li class="documents">
            <a href="/" {{ Request::path() === 'documents' ? "is-active" : "" }}"> Documents </a>
        </li>
        @if(Auth::check())
            <li class="documents">
                <a href="/dashboard" {{ Request::path() === 'dashboard' ? "is-active" : "" }}"> Dashboard </a>
            </li>

            <li class="logout">
                <a href="{{ url('/logout') }}"> Log out </a>
            </li>
        @else
            <li class="login">
            <a href="/login" {{ Request::path() === 'login' ? "is-active" : "" }}"> Log in </a>
        </li>
        <li class="register" id="lightBlue">
            <a href="/register" {{ Request::path() === 'register' ? "is-active" : "" }}"> Register </a>
        </li>
            @endif
    </div>
</ul>

@yield('content')
</div>
</body>
</html>
