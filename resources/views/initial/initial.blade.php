<html>
    <head>
        <title>QURBANER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ URL::to('/images/avatar.jpg') }}">
        @include('initial.style')
        <style type="text/css">
            .preloader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background-color: #fff;
            }
            .preloader .loading {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                font: 14px arial;
            }
            .success {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background-color: #fff;
            }
            .success .icon {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                font: 14px arial;
            }
        </style>
    </head>
    <body style="background-color: #e8e8e8;">
        @include('initial.navbar')
        <div class="container" style="margin-top: 10px">
            @yield('content-body')
        </div>
    </body>
    @yield('script')
    <script>
        function coming_soon(){
            alert('Coming Soon !')
        }
    </script>
</html>
