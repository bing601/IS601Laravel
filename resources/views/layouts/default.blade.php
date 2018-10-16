<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.header')
</header>

<footer class="row">
    @include('includes.footer')
</footer>

<main role="main">

    @yield('content')

</main>

</body>
</html>