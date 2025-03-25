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
        <div class="relative">
            <div class="absolute left-0">{!! file_get_contents(public_path('images/logos/left-design.svg')) !!}</div>
            <div class="absolute right-0">{!! file_get_contents(public_path('images/logos/right-design.svg')) !!}</div>
            <x-layouts.header />
            {{ $slot }}
            @fluxScripts
        </div>
    </body>
</html>
