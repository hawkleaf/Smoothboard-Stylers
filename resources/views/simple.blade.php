<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<head>
	<title> Smoothboard Stylers </title>
	<!-- Header CSS -->
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700italic' rel='stylesheet' type='text/css'>
    <!-- Style sheets -->
	<link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}">
    <!-- Third party styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="{{asset('js/ohsnap.js')}}"></script>
	@yield('header')
</head>
<body>
    <div id="ohsnap"></div>
    <header class="simple__header">
        <a class="simple__title" href="/">
            <span class="material-icons">toys</span>
            <h2 class="base__title">Smoothboard Stylers</h2>
        </a>
        <ul class="simple__nav">
            <a href="{{action('ProductController@index')}}" class="simple__nav--item pjax"><span class="content">Products</span></a>
            <a href="/question" class="simple__nav--item pjax"><span class="content">F.A.Q</span></a>
            <a href="/contact" class="simple__nav--item pjax"><span class="content">Contact</span></a>
        </ul>
    </header>
    <section class="simple__art">
        <div class="simple__art--container">
            <h1 class="simple__art--title">"Spicin' up your board!"</h1>
        </div>

        <a class="simple__art--button material-icons" href="javascript:scrollDiv('.simple__content')">keyboard_arrow_down</a>
    </section>
    <div class="simple__content pjax-content">
        @yield('content')
        @include('components.messages')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.6/jquery.pjax.js"></script>
    <script src="{{asset('js/smoothboard.js')}}"></script>
    @yield('footer')
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.12.12.js'><\/script>".replace("HOST", location.hostname));
    //]]></script>
</body>
</html>
