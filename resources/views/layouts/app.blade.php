<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    
    <title>
        @yield('title')
    </title>
</head>

<body>
    <header class="bg-petrol">
       @include('partials.navBar')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.credits')
    </footer>
</body>

</html>