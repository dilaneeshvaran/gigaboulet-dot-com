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
    <!-- Schema.org amélioré -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Gigaboulet",
            "description": "Expert en boulets de canon historiques",
            "url": "https://www.gigaboulet.com",
            "logo": "https://www.gigaboulet.com/images/logo.png",
            "sameAs": [
                "https://www.facebook.com/gigaboulet",
                "https://twitter.com/gigaboulet",
                "https://www.instagram.com/gigaboulet"
            ],
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+33-1-23-45-67-89",
                "contactType": "customer service",
                "availableLanguage": ["French"]
            },
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "123 rue de l'Histoire",
                "addressLocality": "Paris",
                "postalCode": "75001",
                "addressCountry": "FR"
            }
        }
        </script>
    
        <!-- Schema.org pour le breadcrumb -->
        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Accueil",
                "item": "https://www.gigaboulet.com"
            }]
        }
        </script>
    
        <!-- Microformats -->
        <div class="h-card">
            <p class="p-name">Gigaboulet</p>
            <p class="p-street-address">123 rue de l'Histoire</p>
            <p class="p-locality">Paris</p>
            <p class="p-postal-code">75001</p>
            <p class="p-country-name">France</p>
        </div>
    
        <header>
            <div class="container">
                <nav aria-label="Breadcrumb">
                    <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="/"><span itemprop="name">Accueil</span></a>
                            <meta itemprop="position" content="1" />
                        </li>
                    </ol>
                </nav>
                <h1>Gigaboulet : L'expertise française des boulets de canon historiques</h1>
                <p>La plus grande collection de boulets de canon expertisée par Gigaboulet</p>
                <a href="#contact" class="cta-button">Contactez nos experts</a>
            </div>
        </header>
    <main>
        <section class="hero">
            <a href="histoire" class="home-title">
                <h2>-> Explorez l'Histoire de Gigaboulet <-</h2>
            </a>
            <p>Bienvenue sur Gigaboulet, le premier site français dédié aux passionnés de boulets de canon. Notre expertise Gigaboulet s'étend de l'identification à l'estimation de ces précieux artéfacts militaires.</p>
        </section>


        
        <section class="expertise">
            <h2>Notre Expertise Gigaboulet</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Identification Gigaboulet </h3>
                    <p>Identification précise par les experts Gigaboulet</p>
                </div>
                <div class="service-card">
                    <h3>Estimation Gigaboulet </h3>
                    <p>Estimation de la valeur historique</p>
                </div>
                <div class="service-card">
                    <h3>Conservation Gigaboulet </h3>
                    <p>Conseils de conservation professionnels</p>
                </div>
            </div>
        </section>

        <section class="collections">
            <h2>La Collection Gigaboulet</h2>
            <div class="services-grid">
                @foreach ($collection as $item)
                <article class="service-card">
                        <h3>{{ $item->excerpt }} </h3>
                        <p>{{ Str::limit(strip_tags($item->content), 110) }}</p>
                        <a rel="dofollow" href="{{ url('/collection', $item->slug) }}" class="btn">
                            <span>Lire plus</span>
                        </a>
                        <p>{{ $item->user->name }}</p>

                </article>
                @endforeach
            </div>
        </section>

        <section class="actualites">
            <h2>Les dernières actualités Gigaboulet</h2>
            <div class="services-grid">
                <div class="service-card">
                    <h3>Expositions Gigaboulet </h3>
                    <p>Découvrez nos expositions en cours</p>
                </div>
                <div class="service-card">
                    <h3>Acquisitions Gigaboulet </h3>
                    <p>Nouvelles acquisitions Gigaboulet</p>
                </div>
                <div class="service-card">
                    <h3>Événements Gigaboulet </h3>
                    <p>Conférences et rencontres</p>
                </div>
            </div>
        </section>

        <section id="blog" class="blog">
            <h2>Le blog Gigaboulet</h2>
            <div class="services-grid">
                @foreach ($blog as $item)
                    <article class="service-card">
                        <h3>{{ $item->excerpt }} </h3>
                        <p>{{ Str::limit(strip_tags($item->content), 110) }}</p>
                        <a rel="dofollow" href="{{ url('/blog', $item->slug) }}" class="btn">
                            <span>Lire plus</span>
                        </a>
                        <p>{{ $item->user->name }}</p>

                    </article>
                @endforeach
            @foreach ($blogHome as $item)
                <article class="service-card">
                    <h3>{{ $item->excerpt }} </h3>
                    <p>{{ Str::limit(strip_tags($item->content), 110) }}</p>
                    <a rel="dofollow" href="{{ url('/blog', $item->slug) }}" class="btn">
                        <span>Lire plus</span>
                    </a>
                    <p>{{ $item->user->name }}</p>
                </article>
            @endforeach
            </div>
        </section>

        <section id="articles">
            <h2>Articles et Découvertes</h2>
            <form class="search-form" action="" method="GET">
                <label for="search-input" class="visually-hidden">Recherche d'articles</label>
                <input id="search-input" class="search-input" type="text" name="q" placeholder="Rechercher dans notre collection d'articles..." />
                <button class="search-submit" type="submit">Rechercher</button>
            </form>

            <div id="loading-message" style="display: none; text-align: center;">Chargement...</div>
        </section>

        <section class="hero">
            <a href="collections" class="cta-button">Réservez Vos Places</a>
            <p>Venez visiter l'artillerie française et mondiale.</p>
        </section>
    </main>

@endsection