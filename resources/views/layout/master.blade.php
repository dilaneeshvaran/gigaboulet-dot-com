<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @notifyCss
    <link rel="stylesheet" href={{ asset('frontend/style.css')}}>
    
    <link rel="stylesheet" href="./frontend/app.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="description" content="AFT est une entreprise qui organise des voyages à échelle internationale afin de réunir un ensemble de personnes pour passer un moment de détente, de joie, de partage. C’est aussi à la fois un moment de créer du contacte et enrichir sa culture générale à travers les voyages.">
    @yield('style')
    <title>@yield('title')</title>
    @yield('script')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "TravelAgency",
          "name": "Afro French Touch",
          "url": "https://afrofrenchtouch.com",
          "description": "AFT est une entreprise qui organise des voyages à échelle internationale afin de réunir un ensemble de personnes pour passer un moment de détente, de joie, de partage. C’est aussi un moment pour créer des contacts et enrichir sa culture générale à travers les voyages.",

          "sameAs": [
            "https://www.facebook.com/afrofrenchtouch",
            "https://www.tiktok.com/@afrofrenchtouch?lang=fr"
          ]
        }
    </script>
        
</head>

<body >


    <main>
        @include('layout.header')
        {{-- Commencement du contenu  --}}
          @yield('content')
        {{-- fin  du contenu  --}}
  
        {{-- start footer --}}
        @include('layout.footer')
        {{-- end footer --}}

        
    </main>
    @yield('scriptCa')

    <!--mon footer-->
    <script src={{asset('/frontend/js/main.js')}}></script>

    <x-notify::notify />

    @notifyJs

</body>


</html>