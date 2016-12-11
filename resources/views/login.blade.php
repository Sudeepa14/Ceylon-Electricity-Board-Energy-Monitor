
@extends('masterPage')

@section('content')

    <div class="form">
    <h2>Login from here</h2>
        <form action="">
            <input type="text" name="username" placeholder="Enter Username" required="Username is required">
            <input type="password" name="password" placeholder="Enter Password" required="Password is required">
            <input type="submit" name="submit" value="Login">

            <input type="checkbox" name="remember" value="remember me">Remember me
            <a href="">forget passowd?</a>
        </form>
    </div>

@stop
