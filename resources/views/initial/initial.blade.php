<html>
    <head>
        <title>QURBANER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ URL::to('/images/avatar.jpg') }}">
        @include('initial.style')
    </head>
    <body>
        @include('initial.navbar')
        <div class="container" style="margin-top: 10px">
            @yield('content-body')
        </div>
    </body>
    @yield('script')
</html>
