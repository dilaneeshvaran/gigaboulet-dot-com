@extends('layout.master')
@section('title')
{{$posts->title}}
@endsection

@section('header')
<header>
    <div class="header-bg"></div>
    <div class="header-content">
        <h1>{{$posts->excerpt}}</h1>
        <p>Gigaboulet</p>
    </div>
</header>
@endsection

@section('content')
<main>
    <section class="article-container" style="max-width: 1200px; margin: 2rem auto; padding: 0 1rem;">
        <a href="posts" style="display: inline-block; margin-bottom: 1rem; text-decoration: none; color: #E74C3C; font-weight: bold;">&larr; Retour</a>

        <article class="article-section" style="margin-bottom: 4rem;">
            <h2 style="font-size: 2rem; margin-bottom: 1rem;">{{ $posts->excerpt ?? 'Titre Indisponible' }}</h2>

            <div class="article-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: start;">
                <div class="article-image" style="background: var(--light-bg); aspect-ratio: 4/3; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                    <img src="{{ $posts->posts_image ?? asset('frontend/assets/gigaboulet.avif') }}" alt="{{ $posts->excerpt ?? 'gigaboulet' }}" class="responsive-image" style="max-width: 100%; border-radius: 8px;">
                </div>

                <div class="article-description">
                    <p>{{ $posts->description ?? 'Résumé indisponible pour cet article historique.' }}</p>

                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li><strong>Événement Principal :</strong> {{ $posts->category->name ?? 'Non spécifié' }}</li>
                        <li><strong>Impact Historique :</strong> {{ $posts->user->name ?? 'Non précisé' }}</li>
                    </ul>

                    <p style="margin-top: 1rem;">{{ $posts->details ?? 'Détails supplémentaires sur cet épisode historique de gigaboulet à venir.' }}</p>
                    <p><strong>Auteur :</strong> {{ $posts->user->name ?? 'Anonyme' }}</p>
                    <p><strong>Date de publication :</strong> {{ isset($posts->published_format) ? $posts->published_format->format('d/m/Y') : 'Non spécifiée' }}</p>
                </div>
            </div>

            <div class="article-body" style="margin-top: 2rem; line-height: 1.6;">

                {{ $posts->content?? "L'année 2024 s'annonce riche en événements culturels à Paris, avec de nombreuses expositions déjà programmées. Gigaboulet vous offre un aperçu exclusif des expositions à ne pas manquer l'année prochaine. Parmi les événements les plus attendus, le Louvre prépare une exposition exceptionnelle sur l'art de la Renaissance, tandis que le Grand Palais accueillera une rétrospective sur l'art moderne. Ces expositions promettent d'attirer des visiteurs du monde entier, désireux de découvrir des œuvres d'art uniques et inspirantes. Sur notre gigaboulet.com, vous trouverez toutes les informations nécessaires pour planifier vos visites, y compris les dates, les lieux et les artistes présentés. Gigaboulet est votre guide de confiance pour explorer les trésors culturels de Paris en 2024" }}

                <p>
                    {{ $posts->additional_details ?? 'Suspendisse potenti. Curabitur aliquam lectus a libero finibus, nec vehicula felis efficitur. Aenean id nunc sed enim dignissim tempus non vel lorem.' }}
                </p>
            </div>
        </article>
    </section>
</main>
@endsection