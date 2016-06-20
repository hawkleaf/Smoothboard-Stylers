<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<head>
	<title> Admin Panel </title>
    <meta name="csrf-token" content="{{csrf_token()}}">
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
    <header class="adminPanel__header">
        <h1 class="base__title">Admin Panel</h1>
        <div class="adminPanel__header--buttons">
            <a href="/" class="adminPanel__header--button"><i class="material-icons">home</i></a>
            <a href="/auth/logout" class="adminPanel__header--button"><i class="material-icons">exit_to_app</i></a>
        </div>
    </header>
    <section class="adminPanel__container">
        <section class="adminPanel__nav">
            <a href="{{ action('ProductController@adminIndex') }}" class="adminPanel__nav--item pjax"><i class="material-icons">shopping_basket</i> <span>Products</span></a>
            <a href="{{ action('CustomerController@index') }}" class="adminPanel__nav--item pjax"><i class="material-icons">person</i> <span>Customers</span></a>
            <a href="{{ action('QuestionController@adminIndex') }}" class="adminPanel__nav--item pjax"><i class="material-icons">question_answer</i><span>F.A.Q</span></a>
        </section>
        <section class="adminPanel__content pjax-content">
            @yield('content')
            @include('components.messages')
        </section>
    </section>
    {{-- Javascript includes --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.6/jquery.pjax.js"></script>
    <script src="{{asset('js/ohsnap.js')}}"></script>
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
