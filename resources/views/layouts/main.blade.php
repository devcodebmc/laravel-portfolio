<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RYNH0JB0MZ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-RYNH0JB0MZ');
    </script>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Brayan Manzano')</title>
    <link rel="alternate" href="https://brayanmanzano.dev" hreflang="es-mx">
    <meta content="Brayan Manzano" name="author">
    <meta name="copyright" content="Brayan Manzano" />
    <link href="@yield('canonical','https://brayanmanzano.dev')" rel="canonical">
    <meta name="robots" content="index,follow">
    <meta content="@yield('description', '📌 Hey there, I’m Brayan Manzano! First of all, thanks for visiting my personal website. I’m a Mexican ICT Engineer, Frontend, Backend Developer.')" name="description">
    <meta content="Brayan Manzano,Web Developer,HTML,CSS,JavaScript,Laravel, MySQL,PHP, Desarrollador web, base de datos,Soluciones Digitales,Marketing" name="keywords">
    <meta name="msapplication-TileColor" content="#807FE2">
    <meta name="theme-color" content="#807FE2">
  {{-- Styles Refresh --}}
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
  <!-- Meta Facebook -->
    <meta property="og:locale" content="es_MX">
    <meta property="og:type" content="website"> 
    <meta property="og:title" content="@yield('ogtitle', ' Brayan Manzano Web Developer')">
    <meta property="og:description" content="@yield('ogdescription', 'Brayan Manzano Web Developer.')" >
    <meta property="og:url" content="@yield('ogurl', 'https://brayanmanzano.dev')">
    <meta property="og:site_name" content="Brayan Manzano">  
    <meta property="article:publisher" content="https://www.facebook.com/bryan.manzanocortes">
    <meta property="og:image" content="@yield('ogimage', asset('images/BMC.png'))">
    <meta property="og:image:alt" content="Brayan Manzano Web Developer">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="1080">
 <!-- Meta Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:creator" content="@BrayanDevcode">
    <meta name="twitter:site" content="@BrayanDevcode">
    <meta name="twitter:title" content="@yield('twtitle','Brayan Manzano Web Developer')">
    <meta name="twitter:description" content="@yield('twdescription', '📌 Hey there, I’m Brayan Manzano! First of all, thanks for visiting my personal website. I’m a Mexican ICT Engineer, Frontend, Backend Developer.')">
    <meta property="twitter:url" content="@yield('twurl','https://brayanmanzano.dev')">
    <meta name="twitter:image" content="@yield('twimage', asset('images/BMC.png'))">
    <meta name="twitter:image:alt" content="Brayan Manzano Web Developer">
  {{-- Favicons --}}
    <link rel="shortcut icon" href="{{asset('favicons/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">
  {{-- Spectre Styles --}}
    <link rel="stylesheet" href="{{asset('css/spectre.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-exp.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/spectre-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
  {{-- boxicons Styles --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

  <div class="cursor"></div>

  @include('layouts.partials.navbar')
  @include('layouts.partials.partialNav')

  @if (Route::currentRouteName() != 'home')
    @include('layouts.partials.verticalBreadcrumb')
  @endif  

  @yield('shared-button')
    

  <section>		

    @include('components.toast')

    <section>
      @yield('content')
    </section> 

    @include('components.footer')

	</section>				
	
  <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
      </svg>
  </div>

 
  <script src="{{asset('js/index.js')}}"></script> 
  <script src="{{asset('js/cursor.js')}}"></script>
  <script src="{{ asset('js/toast.js') }}" defer></script>
  @stack('js')
  <script>
    document.addEventListener("DOMContentLoaded", function () {
  "use strict";

  //Switch dark/light
  document.querySelector(".switch").addEventListener("click", function () {
    if (document.body.classList.contains("light")) {
      document.body.classList.remove("light");
      document.querySelector(".switch").classList.remove("switched");
    } else {
      document.body.classList.add("light");
      document.querySelector(".switch").classList.add("switched");
    }
  });

  //Scroll back to top
  var progressPath = document.querySelector(".progress-wrap path");
  var pathLength = progressPath.getTotalLength();
  progressPath.style.transition = progressPath.style.WebkitTransition = "none";
  progressPath.style.strokeDasharray = pathLength + " " + pathLength;
  progressPath.style.strokeDashoffset = pathLength;
  progressPath.getBoundingClientRect();
  progressPath.style.transition = progressPath.style.WebkitTransition =
    "stroke-dashoffset 10ms linear";

  var updateProgress = function () {
    var scroll = window.scrollY;
    var height = document.documentElement.scrollHeight - window.innerHeight;
    var progress = pathLength - (scroll * pathLength) / height;
    progressPath.style.strokeDashoffset = progress;
  };
  updateProgress();
  window.addEventListener("scroll", updateProgress);

  var offset = 50;
  var duration = 550;

  window.addEventListener("scroll", function () {
    if (window.scrollY > offset) {
      document.querySelector(".progress-wrap").classList.add("active-progress");
    } else {
      document.querySelector(".progress-wrap").classList.remove("active-progress");
    }
  });

  document.querySelector(".progress-wrap").addEventListener("click", function (event) {
    event.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
});

  </script>
</body>

</html>
