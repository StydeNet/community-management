<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/styles.css" rel="stylesheet">

        <title>@yield('title') | Community Management</title>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;700&display=swap" rel="stylesheet">
    </head>
    <body class="@yield('pagetype')">
        <div class="app-wrap">
            @include('partials.sidebar')
            <main id="main" class="stage">
                @include('partials.header')

                @yield('content')

                @include('partials.footer')
            </main>
        </div>

        <script src="{{ asset('js/app.js')}}"></script>
    </body>
</html>
