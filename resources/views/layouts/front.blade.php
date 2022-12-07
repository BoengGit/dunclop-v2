<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- App Css-->
    <link href="{{ asset('frontend/css/bootstrap5.css') }}" rel="stylesheet" />
    <!-- Custom Css-->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet" />

</head>

<body>

    @include('layouts.inc.frontnavbar')

    <!-- Begin page -->

            <div class="content">
                @yield('content')
            </div>

        <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
        <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        @if (session('status'))
            <script>
                swal("{{ session('status') }}");
            </script>
        @endif

        @yield('scripts')
</body>

</html>
