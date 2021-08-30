<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Title --}}
        <title>@yield('title')</title>

        {{-- Styles --}}
        @stack('prepend-style')
        @include('includes.admin.style')
        @stack('addon-style')
    </head>

    <body class="sb-nav-fixed">
        {{-- Navigation --}}
        @include('includes.admin.navbar')

        {{-- Sidebar --}}
        @include('includes.admin.sidebar')

        {{-- Scripts --}}
        @stack('prepend-script')
        @include('includes.admin.script')
        @stack('addon-script')
    </body>
</html>
