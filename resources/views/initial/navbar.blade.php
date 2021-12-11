@extends('initial.style')

<html>
    <body>
        @yield('content-head')
        <nav class="navbar navbar-expand-xl navbar-light" style="background-color: #FFE4B5">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">QURBANER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Pesan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/help">Notifikasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus">Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid" style="margin-top: 10px">
            @yield('content-body')
        </div>
    </body>
</html>
