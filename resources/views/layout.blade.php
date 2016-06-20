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
<body class="main">
    <div id="ohsnap"></div>
    <header class="main__header">
        <img class="main__logo" src="{{asset('image/logo.png')}}" alt="" />
        <div class="main__title">
            <h2 class="base__title">Smoothboard Stylers</h2>
            <h3><i>Spicin' up your board!</i></h3>
        </div>
        <ul class="main__nav">
            <li><a href="/" class="main__nav--item material-icons pjax">home</a></li>
            <li><a href="{{action('ProductController@index')}}" class="main__nav--item pjax">Our products</a></li>
            <li><a href="/question" class="main__nav--item pjax">F.A.Q</a></li>
            <li><a href="/contact" class="main__nav--item pjax">Contact</a></li>
        </ul>
    </header>
    <div class="main__content pjax-content">
        @yield('content')
        @include('components.messages')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.6/jquery.pjax.js"></script>
    <script src="{{asset('js/smoothboard.js')}}"></script>
    <script type="text/javascript">
        $(document).pjax('.pjax', '.pjax-content');
    </script>
    @yield('footer')
    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.12.12.js'><\/script>".replace("HOST", location.hostname));
    //]]></script>
</body>
</html>
