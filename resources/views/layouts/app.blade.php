<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <script src="{{asset("js/app.js")}}"></script>
</head>

<body>
    <div class="main-container">
        
        <header>
            @include('sections.header')
        </header>
        <main class="">

            @yield('page_content')
        </main>
        <footer>
            @include('sections.footer')
        </footer>
    </div>

</body>

</html>
