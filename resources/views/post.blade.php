@extends('layout.master')
@section('title')
{{$post->title}}
@endsection

@section('header')
<header>
    <div class="header-bg"></div>
    <div class="header-content">
        <h1>{{$post->excerpt}}</h1>
        <p>Gigaboulet</p>
    </div>
</header>
@endsection

@section('content')
<main>
    <section class="article-container" style="max-width: 1200px; margin: 2rem auto; padding: 0 1rem;">
        <a href="/blog" style="display: inline-block; margin-bottom: 1rem; text-decoration: none; color: #E74C3C; font-weight: bold;">&larr; Retour</a>

        <article class="article-section" style="margin-bottom: 4rem;">
            <h2 style="font-size: 2rem; margin-bottom: 1rem;">{{ $post->excerpt ?? 'Titre Indisponible' }}</h2>

            <div class="article-content" >
                <div class="article-image" style="background: var(--light-bg); aspect-ratio: 4/3; display: flex; align-items: center; justify-content: center; border-radius: 8px;">
                    <img src="{{ asset('storage/post_images/' . ($post->post_image ?? 'storage/post_images/gigaboulet.avif')) }}" alt="{{ $post->excerpt ?? 'gigaboulet' }}" class="responsive-image" style="max-width: 100%; border-radius: 8px;">
                </div>

                <div class="article-description">
                    <p>{{ $post->description ?? 'Résumé indisponible pour cet article historique.' }}</p>

                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li><strong>Événement Principal :</strong> {{ $post->category->name ?? 'Non spécifié' }}</li>
                        <li><strong>Impact Historique :</strong> {{ $post->user->name ?? 'Non précisé' }}</li>
                    </ul>

                    <p style="margin-top: 1rem;">{{ $post->details ?? 'Détails supplémentaires sur cet épisode historique de gigaboulet à venir.' }}</p>
                    <p><strong>Auteur :</strong> {{ $post->user->name ?? 'Anonyme' }}</p>
                    {{-- <p><strong>Date de publication :</strong> {{ isset($post->published_format) ? $post->published_format->format('d/m/Y') : 'Non spécifiée' }}</p> --}}
                </div>
            </div>
                {!! $post->content !!}
                
                <div class="section-blog">
                    <h3>Découvrez aussi:</h3>
                    <ul>
                        @foreach ($posts as $post)
                            <li><a href="{{ route('post.show', $post->slug) }}">{{ $post->excerpt }}</a></li>
                        @endforeach
                    </ul>
                </div>

        </article>
    </section>
</main>
@endsection