<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gabriel Amaral | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href={{ asset('img/amaral.png') }}>
    @vite('resources/css/app.css')
</head>

<body class="py-16 font-medium">
    <div class="w-[95%] md:w-[80%] m-auto">
        <h1 class="text-white font-semibold drop-shadow-md text-shadow">
            Gabriel Amaral | Full Stack Developer
        </h1>
        @yield('content')
    </div>
</body>

</html>
