<!DOCTYPE html>
<html>
<head>
	<title>New Page</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>

<header>
	<div class="wrapper">

        @yield('header')

		</nav>
	</div>
</header>
<div class="wrapper">

		@yield('content')


</div>

<footer>
<div class="wrapper">
    <nav>
        <ul>
            <li><a href="login">Login</a></li>
            <li><a href="register">Register</a></li>
            <li><a href="about">About us</a></li>
            <li><a href="">Contact us</a></li>

        </ul>
    </nav>
</div>
</footer>
</body>
</html>