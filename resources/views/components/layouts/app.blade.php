<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Portfolio | Ogie Sanchez' }}</title>
        <link rel="icon" href="{{ asset('images/logos/logo.png') }}">
        @vite('resources/css/app.css')
        @fluxAppearance
        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        {{-- lightbox css --}}
        <link rel="stylesheet" href="{{ asset('css/lightbox/lightbox.min.css') }}">
        {{-- Animate CSS --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <body>
        <div class="relative bg-cover bg-no-repeat bg-bodywhite bg-bodydark">
            <div class="absolute left-0">{!! file_get_contents(public_path('images/logos/left-design.svg')) !!}</div>
            <div class="absolute right-0">{!! file_get_contents(public_path('images/logos/right-design.svg')) !!}</div>
            <x-layouts.header />
            {{ $slot }}
        </div>
        @fluxScripts
        {{-- lightbox script --}}
        <script src="{{ asset('js/lightbox/lightbox-plus-jquery.min.js') }}"></script>
        <script src="{{ asset('js/lightbox/custom-lightbox.js') }}"></script>
    </body>
</html>
