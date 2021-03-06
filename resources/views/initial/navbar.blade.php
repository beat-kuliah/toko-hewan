<nav class="navbar navbar-expand-xl navbar-light" style="background-color: #FFE4B5; ">
    <div class="container">
        <a class="navbar-brand" href="/">QURBANER</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="coming_soon()" href="">Pesan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="coming_soon()" href="">Notifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pesanan">Pesanan</a>
                </li>
                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" onclick="coming_soon()" href="">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>