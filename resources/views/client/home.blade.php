@extends('layout.master')
@section('title')
Gigaboulet - L'Histoire des Boulets de Canon
@endsection
@section('header')
<header>
    <div class="header-bg"></div>
    <div class="header-content">
        <h1>Gigaboulet</h1>
        <p>L'histoire fascinante des boulets de canon à travers les âges</p>
    </div>
</header>
@endsection
@section('content')

    <main>
        <section class="hero">
            <a href="histoire.html" class="home-title">
                <h2>-> Explorez l'Histoire de l'Artillerie <-</h2>
            </a>
            <p>Des boulets de canon médiévaux aux projectiles de la Renaissance, découvrez l'évolution de l'artillerie française et mondiale.</p>
        </section>

        <section id="articles">
            <h2>Articles et Découvertes</h2>
            <form class="search-form" action="actualites.html" method="GET">
                <label for="search-input" class="visually-hidden">Recherche d'articles</label>
                <input id="search-input" class="search-input" type="text" name="q" placeholder="Rechercher dans notre collection d'articles..." />
                <button class="search-submit" type="submit">Rechercher</button>
            </form>

            <div id="loading-message" style="display: none; text-align: center;">Chargement...</div>
            <div class="articles-container">
                
            </div>
        </section>
    </main>

@endsection