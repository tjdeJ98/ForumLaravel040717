<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="../../favicon.ico">
    <title>Home</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/navbar.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Tirum</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="navbar-form navbar-right">
                <ul class="nav navbar-nav buttonnav">
                    @if(!Auth::check())
                        <li>
                            <a href="{{ url('/login') }}" ><button class="btn btn-success">Log in</button></a>
                        </li>
                        <li>
                            <a href="{{ url('/register') }}"><button class="btn btn-success">Register</button></a>
                        </li>
                    @endif
                    @if(Auth::check())
                    <li>
                        <a href="{{ url('/makePost') }}"><button class="btn btn-success">Make Topic</button></a>
                    </li>
                        <li><a href="{{ url('/profile/username') }}"><button class="btn btn-success">Profiel van {{ Auth::user()->username }}</button></a></li>

                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <button class="btn btn-success">Afmelden</button>
                            </a>
                            <form id="logout-form"
                                  action="{{ url('/logout') }}"
                                  method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        @endif
                </ul>

            </div>
        </div>
    </div>
</nav>

@yield('content')
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
@yield('scripts')

</body>
</html>