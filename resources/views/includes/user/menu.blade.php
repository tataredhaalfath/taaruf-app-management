<aside>
    <div class="row">
        <div class="col-9 mx-auto my-3">
            <h4 class="center text-center mt-3">Main Menu</h4>
            <div class="main__menu  my-3">
                <div class="item d-flex align-items-center my-3 nav_menu">
                    @if (Route::current()->getName() == 'user-dashboard')
                        <i class="fas fa-tachometer-alt mr-2" style="color: blue"></i>
                        <a href="{{ route('user-dashboard') }}" class="active">Dashboard</a>
                    @else
                        <i class="fas fa-tachometer-alt mr-2"></i>
                        <a href="{{ route('user-dashboard') }}" class="text-dark">Dashboard</a>
                    @endif

                </div>
                <div class="item d-flex align-items-center my-3 nav_menu">
                    <i class="fas fa-user mr-2"></i>
                    <a href="my-account.html" class="text-dark">My Account</a>
                </div>
                <div class="item d-flex align-items-center my-3 nav_menu">
                    @if (Route::current()->getName() == 'user-cv')
                        <i class="fas fa-file-alt mr-2" style="color: blue"></i>
                        <a href="/user/cv" class="active">Curriculum Vitae</a>
                    @else
                        <i class="fas fa-file-alt mr-2"></i>
                        <a href="/user/cv" class="text-dark">Curriculum Vitae</a>
                    @endif
                </div>
                <div class="item d-flex align-items-center my-3 nav_menu">
                    <i class="fas fa-paper-plane mr-2"></i>
                    <a href="cv-sent.html" class="text-dark">Ta'aruf Sent</a>
                </div>
                <div class="item d-flex align-items-center my-3 nav_menu">
                    @if (Route::current()->getName() == 'user-incoming')
                        <i class="fas fa-envelope-open-text mr-2" style="color: blue"></i>
                        <a href="{{ route('user-incoming') }}" class="active">Incoming Ta'aruf</a>
                    @else
                        <i class="fas fa-envelope-open-text mr-2"></i>
                        <a href="{{ route('user-incoming') }}" class="text-dark">Incoming Ta'aruf</a>
                    @endif
                </div>
                <div class="item d-flex align-items-center my-3 nav_menu">
                    @if (Route::current()->getName() == 'user-approve')
                        <i class="fas fa-clipboard-check mr-2" style="color: blue"></i>
                        <a href="{{ route('user-approve') }}" class="active">Ta'aruf Approve</a>
                    @else
                        <i class="fas fa-clipboard-check mr-2"></i>
                        <a href="{{ route('user-approve') }}" class="text-dark">Ta'aruf Approve</a>
                    @endif
                </div>
                <div class="item d-flex align-items-center my-3 nav_menu">
                    <i class="fas fa-file-excel mr-2"></i>
                    <a href="rejected.html" class="text-dark">Ta'aruf Rejected</a>
                </div>
                <div class="item d-flex align-items-center my-3 nav_menu">
                    <form action="{{ url('logout') }}" method="POST">
                        @csrf
                        <i class="fas fa-sign-out-alt"></i>
                        <button type="submit" class="text-dark mx-0 px-0" style="background: none; border:none;"
                            onclick="return confirm('Yakin untuk Logout?')">Sign
                            Out</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
