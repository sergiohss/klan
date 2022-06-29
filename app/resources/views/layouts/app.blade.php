<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Klan Team - @yield('title')</title>

        <!-- Styles -->
        @include('layouts.includes.css')
        @stack('styles')

    </head>
    <body class="font-sans antialiased">

        <!--*******************
        Preloader start
        ********************-->
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
        <!--*******************
            Preloader end
        ********************-->

        <div id="main-wrapper">
            @include('layouts.navigation')

            <!--**********************************
            Content body start
            ***********************************-->
            <div class="content-body">

                <div class="container-fluid mt-3">
                    @yield('content')
                </div>
                <!-- #/ container -->
            </div>
            <!--**********************************
                Content body end
            ***********************************-->

            @include('layouts.footer')
        </div>

        <!-- Scripts -->
        @include('layouts.includes.js')
    </body>
</html>
