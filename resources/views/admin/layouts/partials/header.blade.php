<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
        <script src="{{ asset('assets/js/sitewide.js') }}"></script>

        <x-head.tinymce-config/>

        <!-- Vitie Scripts -->
        {{--@vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    </head>
    <body class="font-sans antialiased">
        <header>
            @include('admin.layouts.partials.mainNavs.topbarNav')
        </header>
        @include('sweetalert::alert')
