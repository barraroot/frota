<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- Base Meta Tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    {{-- Custom Meta Tags --}}
    @yield('meta_tags')

    {{-- Title --}}
    <title>
        @yield('title_prefix', config('adminlte.title_prefix', ''))
        @yield('title', config('adminlte.title', 'Grupo DDLimp'))
        @yield('title_postfix', config('adminlte.title_postfix', ''))
    </title>

    {{-- Custom stylesheets (pre AdminLTE) --}}
    @yield('adminlte_css_pre')

    {{-- Base Stylesheets --}}
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.custom.css') }}">
</head>

<body class="@yield('classes_body')" @yield('body_data')>

    {{-- Body Content --}}
    <div class="container-fluid">
        @yield('impressao')
    </div>


    @yield('script')
</body>

</html>
