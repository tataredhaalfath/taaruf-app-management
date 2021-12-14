<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @include('includes.style')
    <title>@yield('title')</title>
</head>

<body>
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')
    @include('includes.script')
    @stack('api-daerah')
</body>

</html>
