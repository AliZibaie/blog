<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @yield('title')
</head>

<body>
@yield('content')
</body>

<footer class="footer footer-center p-4 bg-base-300 text-base-content">
    <aside>
        <p>Copyright © 2023 - All right reserved by ACME Industries Ltd</p>
    </aside>
</footer>


