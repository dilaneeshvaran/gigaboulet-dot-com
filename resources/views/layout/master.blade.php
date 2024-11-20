<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez l'histoire authentique des boulets de canon français du XIIIe au XIXe siècle. Collection unique, analyses détaillées et chronologie complète.">
    <meta name="keywords" content="boulets de canon, artillerie historique, histoire militaire française, canons historiques, boulets, artillerie napoleonienne">
    <meta name="author" content="Gigaboulet">
    <title>@yield('title')</title>
    <link rel="stylesheet" href={{ asset('frontend/css/style.css')}}>
    <link rel="shortcut icon" href={{ asset('frontend/favicon.ico')}} />
    <link rel="icon" href={{ asset('frontend/favicon.ico" type="image/x-icon')}} />
    <meta property="og:title" content='frontend/Histoire des Boulets de Canon | Gigaboulet'>
    <meta property="og:description" content="Découvrez l'histoire fascinante des boulets de canon à travers les siècles.">
    <meta property="og:image" content={{ asset('https://www.gigaboulet.com/assets/twitterimage.jpg')}}>
    <meta property="og:url" content={{ asset('https://www.gigaboulet.com/histoire.html')}}>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Histoire des Boulets de Canon | Gigaboulet">
    <meta name="twitter:description" content="Découvrez l'histoire fascinante des boulets de canon à travers les siècles.">
    <meta name="twitter:image" content={{ asset('https://www.gigaboulet.com/assets/twitterimage.jpg')}}>
    <meta name="robots" content="index, follow">
    <meta name="language" content="fr">
    <link rel="alternate" hreflang="fr" href={{ asset('https://www.gigaboulet.com')}}>
    <link rel="canonical" href={{ asset('https://www.gigaboulet.com/types')}}>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Article",
          "headline": "Types de Boulets de Canon Historiques",
          "image": "https://www.gigaboulet.com/assets/bouletplein.jpg",
          "author": {
            "@type": "Organization",
            "name": "Gigaboulet"
          },
          "publisher": {
            "@type": "Organization",
            "name": "Gigaboulet",
            "logo": {
              "@type": "ImageObject",
              "url": "https://www.gigaboulet.com/logo.png"
            }
          },
          "datePublished": "2024-01-01",
          "dateModified": "2024-01-30"
        }
        </script>
</head>
<!-- Google Analytics -->
<script async src={{ asset('https://www.googletagmanager.com/gtag/js?id=G-T63K4QVKHY')}}></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-T63K4QVKHY');
</script>
<body>

    @include('layout.header')
    {{-- Commencement du contenu  --}}

    @yield('content')

    @include('layout.footer')
    
    @yield('script')

</body>
</html>