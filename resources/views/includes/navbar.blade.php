<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="index.html">Ta'aruf.id</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if (route('home'))
                active
              @endif">
                    <a class="nav-link" href="{{ route('home') }}">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('taaruf') }}">Ta'aruf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('stories') }}">Stories</a>
                </li>
                <li class="  nav-item">
                    <a class="nav-link" href="#"><img
                            src="{{ asset('front-end/assets/images/icon/avatar_1.png') }}" alt="user profile"></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
