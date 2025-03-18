<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Portfolio | Ogie Sanchez' }}</title>
        @vite('resources/css/app.css')
        @fluxAppearance
    </head>
    <body>
        <x-layouts.header />
        {{ $slot }}
        @fluxScripts
    </body>
</html>
