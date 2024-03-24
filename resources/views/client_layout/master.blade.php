<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('frontend/css/style.css')}}>
    <title>@yield('title')</title>
</head>
<body>
    <main>
        @include('client_layout.header')
        {{-- Commencement du contenu  --}}
          @yield('content')
        {{-- fin  du contenu  --}}
        {{-- start footer --}}
        @include('client_layout.footer')
        {{-- end footer --}}
    </main>
</body>
</html>