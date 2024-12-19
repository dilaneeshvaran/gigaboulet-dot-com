@extends('layout.master')
@section('title')
Gigaboulet - L'Histoire des Boulets de Canon
@endsection
@section('header')
<header>
    <div class="header-bg"></div>
    <div class="header-content">
        <h1>Types de Boulets</h1>
        <p>Explorer les différentes munitions d'artillerie historique</p>
    </div>
</header>
@endsection
@section('content')
<main>
    <section class="types-container" style="max-width: 1200px; margin: 2rem auto; padding: 0 1rem;">
        <article class="type-section" style="margin-bottom: 4rem;">
            <h2>Boulet Plein</h2>
            <div class="type-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center;">
                <div class="type-description">
                    <p>Le boulet plein était le projectile le plus commun de l'artillerie historique. Fabriqué en fonte de fer, il était principalement utilisé pour sa force de percussion contre les fortifications et les navires.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Poids : 4 à 36 livres</li>
                        <li>Période d'utilisation : XVe - XIXe siècle</li>
                        <li>Efficacité maximale : 800-1000 mètres</li>
                    </ul>
                    <a href="articleType" class="voir-plus-btn">Lire plus</a>
                </div>
                <div class="type-image" style="background: var(--light-bg); aspect-ratio: 4/3; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                    <img src={{ asset('frontend/assets/bouletplein.avif')}} alt="Boulets de Canon Plein" class="responsive-image">
                </div>
            </div>
        </article>

        <article class="type-section" style="margin-bottom: 4rem;">
            <h2>Boulet Ramé</h2>
            <div class="type-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center;">
                <div class="type-image" style="background: var(--light-bg); aspect-ratio: 4/3; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                    <img src={{ asset('frontend/assets/barshot.avif')}} alt="Boulets de Canon Ramé" class="responsive-image">
                </div>
                <div class="type-description">
                    <p>Le boulet ramé consistait en deux demi-boulets reliés par une barre de fer. Particulièrement redoutable en combat naval, il était conçu pour déchirer les voiles et briser les mâts des navires ennemis.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Utilisation principale : Combat naval</li>
                        <li>Portée effective : 400-600 mètres</li>
                        <li>Spécialité : Dégâts aux gréements</li>
                    </ul>
                    <a href="articleType" class="voir-plus-btn">Lire plus</a>
                </div>
            </div>
        </article>

        <article class="type-section" style="margin-bottom: 4rem;">
            <h2>Boulet Chaîné</h2>
            <div class="type-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center;">
                <div class="type-description">
                    <p>Similaire au boulet ramé, le boulet chaîné utilisait une chaîne au lieu d'une barre pour relier les deux projectiles. Cette configuration permettait une rotation plus imprévisible et des dégâts plus étendus.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Usage : Combat naval principalement</li>
                        <li>Période d'utilisation : XVIIe - XIXe siècle</li>
                        <li>Caractéristique : Trajectoire imprévisible</li>
                    </ul>
                    <a href="articleType" class="voir-plus-btn">Lire plus</a>
                </div>
                <div class="type-image" style="background: var(--light-bg); aspect-ratio: 4/3; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                    <img src={{ asset('frontend/assets/chained.avif')}} alt="Boulets de Canon Chainé" class="responsive-image">
                </div>
            </div>
        </article>

        <article class="type-section" style="margin-bottom: 4rem;">
            <h2>Boulet Explosif</h2>
            <div class="type-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center;">
                <div class="type-image" style="background: var(--light-bg); aspect-ratio: 4/3; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                    <img src={{ asset('frontend/assets/explosif.avif')}} alt="Boulets de Canon Explosif" class="responsive-image">
                </div>
                <div class="type-description">
                    <p>Les boulets explosifs, ou obus, représentaient une évolution majeure dans l'artillerie. Remplis de poudre noire et équipés d'une mèche, ils explosaient à l'impact ou après un délai calculé.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Innovation : XVIIIe siècle</li>
                        <li>Avantage : Dégâts explosifs</li>
                        <li>Utilisation : Siège et bataille navale</li>
                    </ul>
                    <a href="articleType" class="voir-plus-btn">Lire plus</a>
                </div>
            </div>
        </article>
    </section>
</main>


@endsection