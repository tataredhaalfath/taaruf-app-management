<aside>
    <div class="row">
        <div class="col-9 mx-auto my-3">
            <h4 class="center text-center mt-3">Main Menu</h4>
            <div class="main__menu  my-3">
                <div class="item d-flex align-items-center my-3 btn-cta">
                    @if (url('/user/dashboard'))
                        <i class="fas fa-tachometer-alt mr-2" style="color: blue"></i>
                        <a href="dashboard.html" class="">Dashboard</a>
                    @else
                        <i class="fas fa-tachometer-alt mr-2"></i>
                        <a href="dashboard.html" class="text-dark">Dashboard</a>
                    @endif

                </div>
                <div class="item d-flex align-items-center my-3">
                    <i class="fas fa-user mr-2"></i>
                    <a href="my-account.html" class="text-dark">My Account</a>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <i class="fas fa-file-alt mr-2"></i>
                    <a href="cv-document.html" class="text-dark">Curriculum Vitae</a>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <i class="fas fa-paper-plane mr-2"></i>
                    <a href="cv-sent.html" class="text-dark">CV Sent</a>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <i class="fas fa-envelope-open-text mr-2"></i>
                    <a href="incoming.html" class="text-dark">Incoming Ta'aruf</a>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <i class="fas fa-clipboard-check mr-2"></i>
                    <a href="approved.html" class="text-dark">Ta'aruf Approve</a>
                </div>
                <div class="item d-flex align-items-center my-3">
                    <i class="fas fa-file-excel mr-2"></i>
                    <a href="rejected.html" class="text-dark">Rejected CV</a>
                </div>
                <div class="item d-flex align-items-center my-3">


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
