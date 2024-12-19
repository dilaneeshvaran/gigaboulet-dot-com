@extends('layout.master')

@section('title')
Gigaboulet - À Propos
@endsection

@section('header')
<header>
    <div class="header-bg"></div>
    <div class="header-content">
        <h1>À Propos du Musée Gigaboulet</h1>
        <p>Découvrez l'histoire fascinante des boulets de canon et leur évolution à travers les siècles.</p>
    </div>
</header>
@endsection

@section('content')
<main>
    <section class="about-container" style="max-width: 1200px; margin: 2rem auto; padding: 0 1rem;">
        <h2>Bienvenue au Musée Gigaboulet</h2>
        <p>Le <strong>Musée Gigaboulet</strong> est un lieu unique dédié à l'artillerie historique et à l'évolution des boulets de canon. Situé au cœur d'une région riche en patrimoine militaire, notre musée met en lumière des siècles d'innovation, de technologie et d'histoire. Gigaboulet n'est pas qu'un musée, c'est une aventure éducative et immersive pour tous les passionnés d'histoire et de science militaire.</p>
        
        <p>Vous y découvrirez une collection impressionnante : des boulets pleins utilisés pour briser les fortifications, des boulets ramés destinés aux combats navals, jusqu'aux obus explosifs qui ont révolutionné l'artillerie. Chaque pièce exposée raconte une histoire captivante, enrichie par des présentations interactives et des reconstitutions numériques.</p>

        <h3>Notre Mission</h3>
        <p>La mission de <strong>Gigaboulet</strong> est de préserver et transmettre l'histoire de l'artillerie. Nous cherchons à éduquer nos visiteurs tout en leur offrant une expérience mémorable, en combinant passion, innovation et savoir-faire.</p>

        <h3>Pourquoi "Gigaboulet" ?</h3>
        <p>Le nom "<strong>Gigaboulet</strong>" reflète notre ambition de devenir une référence mondiale dans l'étude et l'exposition des munitions d'artillerie. Le mot "giga" incarne notre vaste collection et l'ampleur de notre projet, tandis que "boulet" rappelle notre sujet principal : les boulets de canon.</p>

        <div style="margin-top: 2rem;">
            <a href="collections" class="cta-button">Réservez Votre Visite</a>
        </div>
    </section>
</main>
@endsection
