<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RYNH0JB0MZ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-RYNH0JB0MZ');
    </script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Brayan Manzano')</title>

    <link rel="alternate" href="https://bryanmanzano.dev" hreflang="es-mx">
    <meta name="author"    content="Brayan Manzano">
    <meta name="copyright" content="Brayan Manzano">
    <link href="@yield('canonical','https://bryanmanzano.dev')" rel="canonical">
    <meta name="robots" content="index,follow">
    <meta name="description" content='@yield("description", "Hey there, I\'m Brayan Manzano! Mexican ICT Engineer, Frontend & Backend Developer.")'>
    <meta name="keywords"    content="Brayan Manzano,Web Developer,HTML,CSS,JavaScript,Laravel,MySQL,PHP">
    <meta name="theme-color" content="#807FE2">

    {{-- OG --}}
    <meta property="og:locale"      content="es_MX">
    <meta property="og:type"        content="website">
    <meta property="og:title"       content="@yield('ogtitle', 'Brayan Manzano Web Developer')">
    <meta property="og:description" content="@yield('ogdescription', 'Brayan Manzano Web Developer.')">
    <meta property="og:url"         content="@yield('ogurl', 'https://bryanmanzano.dev')">
    <meta property="og:site_name"   content="Brayan Manzano">
    <meta property="og:image"       content="@yield('ogimage', asset('images/BMC.png'))">
    <meta property="og:image:width"  content="1920">
    <meta property="og:image:height" content="1080">

    {{-- Twitter --}}
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:creator"     content="@BrayanDevcode">
    <meta name="twitter:title"       content="@yield('twtitle','Brayan Manzano Web Developer')">
    <meta name="twitter:description" content="@yield('twdescription', 'Mexican ICT Engineer, Frontend & Backend Developer.')">
    <meta name="twitter:image"       content="@yield('twimage', asset('images/BMC.png'))">

    {{-- Favicons --}}
    <link rel="shortcut icon"       href="{{ asset('favicons/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon"    href="{{ asset('favicons/apple-touch-icon.png') }}" sizes="180x180">
    <link rel="icon" type="image/png" href="{{ asset('favicons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('favicons/favicon-16x16.png') }}" sizes="16x16">

    {{-- Fuente --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=encode-sans:300,400,600,700&display=swap" rel="stylesheet">

    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#807fe2',
                        'primary-dark': '#6c63d9',
                    },
                    fontFamily: {
                        sans: ['Encode Sans', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    @stack('styles')
</head>

<body class="bg-white text-[#464646] font-['Encode_Sans',sans-serif] text-sm leading-relaxed antialiased">

    <div class="cursor" aria-hidden="true"></div>

    @include('layouts.partials.navbar')

    @if(Route::currentRouteName() !== 'home')
        @include('layouts.partials.verticalBreadcrumb')
    @endif

    @yield('shared-button')

    <div class="page-container transition-transform duration-300 ease-in-out">

        <header class="relative h-14 bg-white">
            <div class="absolute top-2 left-6">
                <a href="{{ url('/') }}" class="opacity-70 hover:opacity-100 transition-opacity">
                    <img src="{{ asset('images/BMC.png') }}" alt="Brayan Manzano" class="h-8 w-auto">
                </a>
            </div>
        </header>

        @include('components.toast')

        <main>
            @yield('content')
        </main>

        @include('components.footer')
    </div>

    <script src="{{ asset('js/cursor.js') }}"></script>
    <script src="{{ asset('js/toast.js') }}" defer></script>
    @stack('js')
</body>
</html>