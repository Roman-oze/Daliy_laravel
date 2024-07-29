<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>@yield('title') - {{ config('app.name', 'GARS') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="WooShaper" name="author" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <!-- App Css-->
        <link href="{{ asset('css/app.min.css') }}@if( App::environment() == 'local' )?v={{ time() }}@endif" rel="stylesheet" type="text/css" />

    </head>

    <body class="welcome">

        <div id="layout-wrapper">
            @yield('content')
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('js/app.min.js') }}"></script>

    </body>

</html>
