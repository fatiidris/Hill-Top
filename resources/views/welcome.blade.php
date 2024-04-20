<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hill-Top</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- tab Icon css link-->
    <link rel="icon" href="{{URL::asset('public/images/example.png')}}">
    <!-- Styles -->
    <style>
        /* Reset default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Set a background and font styles */
        body {
            font-family: 'figtree', sans-serif;
            background-color: #000080; /* Deep blue background */
            color: #fff;
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }

        /* Style the navigation bar */
        .navbar {
            background-color: purple;
            color: #fff;
        }

        .navbar a {
            color: #fff;
        }

        .navbar a:hover {
            color: #ffcc00;
        }

        /* Style the jumbotron section */
        .jumbotron {
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black background */
            color: #fff;
            text-align: center;
            padding: 100px 0;
            min-height: 100vh; /* Full viewport height */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .jumbotron h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .jumbotron p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        /* Style the search input and button */
        .input-group {
            margin-top: 20px;
        }

        .input-group input[type="email"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }

        .input-group button {
            background-color: #ffcc00;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .input-group button:hover {
            background-color: #ff9900;
        }

        /* Add custom CSS for the navigation links if needed */
        .nav.navbar-nav li a {
            /* Your custom styles here */
        }

        /* Responsive styles (you can add your own media queries) */
        @media (max-width: 768px) {
            .navbar {
                padding: 10px 0;
            }
        }
    </style>
    <!--CDN Bootstrap 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Hill-Top</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
        </ul>

        <!--this is the login and register link-->
        @if (Route::has('login'))
            <ul class="nav navbar-nav navbar-right">
                @auth
                    <a href="{{ url('/admin/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                @else
                    <li>
                        <a href="{{ route('login') }}">
                            <span class="glyphicon glyphicon-log-in" ></span>
                            Log in
                        </a>
                    </li>

                    @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}">
                                <span class="glyphicon glyphicon-user"></span>
                                Sign Up
                            </a>
                        </li>
                    @endif
                @endauth
            </ul>
        @endif
        <!--this is the end login and register link-->
    </div>
</nav>

<div class="jumbotron text-center">
    <h1>Welcome To Hill-Top Model School</h1>
    <p>pupils are groomed, cultured and nurtured to cope with </p>
    <p>every situation and stand high everywhere, anytime. </p>
    <p> perserverance is our mottos.</p>
    <form class="form-inline">
        <div class="input-group">
            <input type="email" class="form-control" size="50" placeholder="Email Address" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-info">Search Section</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
