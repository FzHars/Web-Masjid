<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="generator" content="Astro v5.7.10" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="icon" href="/favicon.ico?v=3" type="image/x-icon"> --}}
    <title>Web Masjid Kalisari | {{ $title }}</title>
    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- Script -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.fonts')
</head>

<body class="min-h-screen flex flex-col green-100 text-base-content">
    @include('layouts.my-vs-navbar')
    <main class="flex-grow">
        <div class="container mx-auto px-4 py-6">
            @yield('container')
        </div>
    </main>
    @include('layouts.scroll-on-top')
    <x-footer />
</body>

</html>
