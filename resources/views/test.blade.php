<!DOCTYPE html>
<html>
<head>
	<title>New Page</title>

	<style type="text/css">
		.wrapper {
			width: 960px;
			margin: 0 auto;
		}

		header {
			background-color: black;
		}

		nav {
			padding: 5px 0;

		}

		ul	{
			text-decoration: none;
			list-style: none;
		}

		.form {
			width: 500px;
			margin: 50px auto;
		}

		input {
			width: 	100%;
			border: none;
			border-radius: 3px;
			padding: 5px 0 5px	5px;
			font-size: 	20px;
			margin-bottom: 10px;
			overflow: hidden;

		}



	</style>

</head>
<body>

<header>
	<div class="wrapper">
		<nav>
			<ul>
				<li><a href="">Login</a></li>
				<li><a href="">Register</a></li>
				<li><a href="">About us</a></li>
				<li><a href="">Contact us</a></li>
				
			</ul>		
		</nav>
	</div>
</header>
<div class="wrapper">
    <div class="form">
        <form action="">
            <input type="text" name="username" placeholder="Enter Username">
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Submit this">
        </form>
    </div>
</div>
</body>
</html>