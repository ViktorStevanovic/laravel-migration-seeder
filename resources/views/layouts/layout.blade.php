<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
    @yield('head-content')
</head>

<body>


    <main>
        @yield('main-content')
    </main>


    @yield('script-content')
</body>

</html>