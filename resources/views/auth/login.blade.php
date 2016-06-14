<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<head>
	<title> Admin Login </title>
	<!-- Header CSS -->
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700italic' rel='stylesheet' type='text/css'>
    <!-- Style sheets -->
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}">
    <!-- Third party styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	@yield('header')
</head>
<body>
    <div class="login__container">
        {!! Form::open(array('url' => 'auth/login', 'class' => 'login__form')) !!}
        {{ Form::token() }}
        {{ Form::label('email', 'E-Mail Address') }}
        {{ Form::text('email', 'Your@email.com') }}
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
        {{ Form::label('remember', 'Remember me?') }}
        {{ Form::checkbox('remember', false) }}
        {{ Form::submit('Login') }}
    </div>
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.12.12.js'><\/script>".replace("HOST", location.hostname));
    //]]></script>
</body>
</html>
