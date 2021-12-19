<nav class="navbar navbar-expand-xl navbar-light" style="background-color: #FFE4B5; ">
    <div class="container">
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
                    <a class="nav-link" href="/pesan">Pesan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/notifikasi">Notifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/keranjang">Keranjang</a>
                </li>
                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/account">Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>