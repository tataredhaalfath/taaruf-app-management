@php
use App\Models\User\UserProfile;
@endphp
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Ta'aruf.id</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('taaruf') }}">Ta'aruf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('stories') }}">Stories</a>
                </li>
                <li class="  nav-item">
                    @guest

                        <a class="nav-link far" href="/login">
                            {{-- <img src="{{ asset('front-end/assets/images/icon/avatar_1.png') }}" alt="user profile"> --}}
                            <i class="fas fa-user">
                                <small>Login</small>
                            </i>
                        </a>
                    @endguest

                    @auth
                        @if (Auth::user()->roles == 'ADMIN')
                            @php
                                $profile = UserProfile::where('user_id', Auth::user()->id)->first();
                            @endphp
                            @if ($profile)
                                <a class="nav-link far" href="/admin">
                                    <img src="{{ Storage::url($profile->image) }}" alt="user profile"
                                        class="img img-thumbnail rounded-circle"
                                        style="object-fit: cover; width:55px !important; height:55px !important">
                                    {{-- <i class="fas fa-user"></i> --}}
                                </a>
                            @else
                                <a class="nav-link far" href="/admin">
                                    <img src="{{ asset('front-end/assets/images/icon/avatar_1.png') }}" alt="user profile"
                                        class="img img-thumbnail rounded-circle"
                                        style="object-fit: cover; width:55px !important; height:55px !important">
                                    {{-- <i class="fas fa-user"></i> --}}
                                </a>
                            @endif

                        @else
                            @php
                                $profile = UserProfile::where('user_id', Auth::user()->id)->first();
                            @endphp
                            @if ($profile)
                                <a class="nav-link far" href="/user/dashboard">
                                    <img src="{{ Storage::url($profile->image) }}" alt="user profile"
                                        class="img img-thumbnail rounded-circle"
                                        style="object-fit: cover; width:55px !important; height:55px !important">
                                    {{-- <i class="fas fa-user"></i> --}}
                                </a>
                            @else
                                <a class="nav-link far" href="/user/dashboard">
                                    <img src="{{ asset('front-end/assets/images/icon/avatar_1.png') }}" alt="user profile"
                                        class="img img-thumbnail rounded-circle"
                                        style="object-fit: cover; width:55px !important; height:55px !important">
                                    {{-- <i class="fas fa-user"></i> --}}
                                </a>
                            @endif
                        @endif

                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
