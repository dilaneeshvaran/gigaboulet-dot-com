@extends('layout.master')
@section('title')
Gigaboulet - Type de Boulet
@endsection

@section('header')
<header>
    <div class="header-bg"></div>
    <div class="header-content">
        <h1>Gigaboulet</h1>
        <p>Type de Boulet</p>
    </div>
</header>
@endsection

@section('content')
<main>
    <section class="article-container" style="max-width: 1200px; margin: 2rem auto; padding: 0 1rem;">
        <a href="types" style="display: inline-block; margin-bottom: 1rem; text-decoration: none; color: #E74C3C; font-weight: bold;">&larr; Retour</a>

        <article class="article-section" style="margin-bottom: 4rem;">
            <h2 style="font-size: 2rem; margin-bottom: 1rem;">{{ $type->name ?? 'Nom du Boulet' }}</h2>

            <div class="article-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: start;">
                <div class="article-image" style="background: var(--light-bg); aspect-ratio: 4/3; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                    <img src="{{ $type->image_url ?? asset('frontend/assets/default-image.avif') }}" alt="{{ $type->name ?? 'Image de Boulet' }}" class="responsive-image" style="max-width: 100%; border-radius: 8px;">
                </div>

                <div class="article-description">
                    <p>{{ $type->description ?? 'Description indisponible.' }}</p>

                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li><strong>Innovation :</strong> {{ $type->innovation ?? 'Inconnue' }}</li>
                        <li><strong>Avantage :</strong> {{ $type->advantage ?? 'Non spécifié' }}</li>
                        <li><strong>Utilisation :</strong> {{ $type->usage ?? 'Non spécifiée' }}</li>
                    </ul>

                    <p style="margin-top: 1rem;">{{ $type->content ?? 'Contenu supplémentaire à propos de ce type de boulet.' }}</p>
                    <p><strong>Auteur :</strong> {{ $type->author ?? 'Anonyme' }}</p>
                    <p><strong>Date de création :</strong> {{ isset($type['created_at']) ? $type['created_at']->format('d/m/Y') : 'Non spécifiée' }}</p>
                    </div>
            </div>

            <div class="article-body" style="margin-top: 2rem; line-height: 1.6;">
                <p>
                    {{ $type->article_body ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis et sem a tincidunt. Nullam et ligula sit amet lorem posuere accumsan sed a purus. Etiam vulputate, purus ut tincidunt facilisis, odio nulla cursus turpis, non auctor ligula nisi vitae metus. Suspendisse id orci convallis, malesuada massa in, porttitor nulla. Quisque ut ultrices erat. Sed eget lectus a lacus vehicula fringilla eu ac lorem.' }}
                </p>

                <p>
                    {{ $type->additional_details ?? 'Aliquam erat volutpat. Duis sollicitudin orci et eros faucibus, nec pellentesque velit lacinia. Suspendisse vehicula eros nec velit posuere luctus. Integer id metus nec purus cursus feugiat. Integer consequat odio quis tortor hendrerit, at fermentum magna dictum. Sed facilisis dui vel nulla laoreet, in posuere ligula interdum. Integer eu dapibus arcu. Curabitur luctus, lacus sit amet facilisis vehicula, nulla dolor vehicula nisl, at venenatis lacus velit vitae lorem.' }}
                </p>
            </div>
        </article>
    </section>
</main>
@endsection