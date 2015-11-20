<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('menu')
        @show

        <div class="container">
            @yield('content')
        </div>
        <div class="container">
            @yield('footer')
        </div>
    </body>
</html>