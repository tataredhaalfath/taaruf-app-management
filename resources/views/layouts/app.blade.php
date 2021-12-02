<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <!-- css  -->
    <link rel="stylesheet" href="{{ asset('front-end/assets/styles/main.css') }}">
    <!-- font-family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Assistant&family=Lobster&family=Playfair+Display&family=Roboto:wght@300;400&display=swap"
        rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="taaruf.html">Ta'aruf</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stories.html">Stories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><img
                                src="{{ asset('front-end/assets/images/icon/avatar_1.png') }}" alt="user profile"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- footer -->
    <footer>
        <hr>
        <div class="container">
            <div class="row footer__item">
                <div class="col-md-3 col-sm-3">
                    <h5>Ta'aruf</h5>
                    <p>Ta'aruf, Khitbah, Nikah</p>
                </div>

                <div class="col-md-2 col-sm-3 ml-auto">
                    <p> New Account </p>
                    <p>Let’s Ta’aruf</p>
                    <p>Support us</p>
                </div>
                <div class="col-md-2 col-sm-3">
                    <p>Explore Us</p>
                    <p>About</p>
                    <p>Privacy Policy</p>
                    <p>Term & Condition</p>
                </div>
                <div class="col-md-2 col-sm-3">
                    <p>Getting Touch</p>
                    <p>support@ta'aruf.id</p>
                    <p>0853-2522-4829</p>
                    <p>Ta’aruf ID, Jakarta</p>
                </div>

            </div>
            <div class="row justify-content-center text-center mb-4">
                <p>Copyright 2021 * All right reserved * Ta’aruf.id</p>
            </div>
        </div>

    </footer>
    <!-- camanjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/camanjs/3.3.0/caman.full.min.js" />
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

</body>

</html>
