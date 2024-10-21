<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('frontend/css/style.css')}}>
    <title>@yield('title')</title>
    <meta name="description" content="Read the latest articles on technology and gadgets from Gigaboulet.">
    <meta name="keywords" content="Gigaboulet, blog, technology, gadgets, articles">
    <meta name="author" content="Gigaboulet Team">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>
<body>
    <body class="antialiased">
        @include('client_layout.header')
    
        <main>
            <div class="wrapper">
            {{-- Commencement du contenu  --}}
            @yield('content')
            {{-- fin  du contenu  --}}
            </div>

    
            {{-- start footer --}}
            @include('client_layout.footer')
            {{-- end footer --}}
        </main>
     

     </body>
</html>