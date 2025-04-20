<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Portfolio | Ogie Sanchez' }}</title>
        <link rel="icon" href="{{ asset('images/logos/logo.png') }}">
        @vite('resources/css/app.css')
        {{-- fontawesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
        {{-- lightbox css --}}
        <link rel="stylesheet" href="{{ asset('css/lightbox/lightbox.min.css') }}">
        {{-- Animate CSS --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        {{-- AOS --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        {{-- Wire UI --}}
        <wireui:scripts />
        {{-- <script src="//unpkg.com/alpinejs" defer></script> --}}
        {{-- Main JS --}}
        <script src="{{ asset('js/main.js') }}"></script>
    </head>
    <body class="overflow-x-hidden md:overflow-x-auto" x-data="{}">
        <div class="relative bg-cover bg-no-repeat bg-bodywhite bg-bodydark">
            <div class="absolute left-0">{!! file_get_contents(public_path('images/logos/left-design.svg')) !!}</div>
            <div class="absolute right-0">{!! file_get_contents(public_path('images/logos/right-design.svg')) !!}</div>
            <x-layouts.header />
            {{ $slot }}
            <button type="button" id="scroll_top" class="fixed animate-pulse transition-opacity right-[20px] bottom-[20px] border border-dark md:right-[30px] md:bottom-[30px] bg-pf-peach w-[50px] h-[50px] rounded-full cursor-pointer hover:bg-pf-orange hover:border-none dark:bg-dark dark:border-pf-gray2 group/top" alt="Back to Top">
                <i class="text-dark dark:text-white group-hover/top:text-white fa-solid fa-up-long"></i>
            </button>
        </div>
        <script>
            AOS.init();
        </script>
        {{-- lightbox script --}}
        <script src="{{ asset('js/lightbox/lightbox-plus-jquery.min.js') }}"></script>
        <script src="{{ asset('js/lightbox/custom-lightbox.js') }}"></script>
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        <script src="https://unpkg.com/tippy.js@6"></script>
        <script>
            // Tooltip with Tippy
            tippy('.btn_image', {
              content: 'View Project Image',
              duration: 0
            });
            tippy('.btn_github', {
              content: 'Visit on Github',
              duration: 0
            });
          </script>
    </body>
</html>
