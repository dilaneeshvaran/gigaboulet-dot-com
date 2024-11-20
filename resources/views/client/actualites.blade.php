@extends('layout.master')
@section('title')
Gigaboulet - L'Histoire des Boulets de Canon
@endsection
@section('header')
<header>
    <div class="header-bg"></div>
    <div class="header-content">
        <h1>Collections</h1>
        <p>Des pièces uniques témoignant de l'histoire de l'artillerie</p>
    </div>
</header>
@endsection
@section('content')

<main>
    <section id="articles">
        <h2>Dernières Actualités sur l'Artillerie et les Conflits</h2>
        <form class="search-form" action="" method="GET">
            <label for="search-input" class="visually-hidden">Recherche d'articles</label>
            <input id="search-input" class="search-input" type="text" name="q" placeholder="Entrez un sujet" />
            <button class="search-submit" type="submit">Rechercher</button>
        </form>

        <div id="loading-message" style="display: none; text-align: center;">Chargement...</div>
        <div class="articles-container">
            <ul class="article-list"></ul>
        </div>
    </section>
</main>

@endsection
@section('script')
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const API_BASE_URL = "https://api.webz.io/newsApiLite?token=e28d92b5-d365-48d8-b09d-b245fd086676&q=";
        const articlesContainer = document.querySelector(".articles-container");
        const searchForm = document.querySelector(".search-form");
        const searchInput = document.getElementById("search-input");
        const loadingMessage = document.getElementById("loading-message");
        const urlParams = new URLSearchParams(window.location.search);
        const searchQuery = urlParams.get('q');

        if (searchQuery) {
            searchInput.value = searchQuery;
            fetchArticles(searchQuery);
        }
    
        searchForm.addEventListener("submit", (event) => {
            event.preventDefault();
            const searchQuery = searchInput.value.trim();
            if (searchQuery) {
                window.location.href = `actualites.html?q=${encodeURIComponent(searchQuery)}`;
            }
        });

        async function fetchArticles(query) {
            const API_URL = `${API_BASE_URL}language:french AND ${encodeURIComponent(query)}`;
            
            loadingMessage.style.display = "block";
            articlesContainer.innerHTML = "";

            try {
                const response = await fetch(API_URL);
                const data = await response.json();
                loadingMessage.style.display = "none";

                if (data.posts) {
                    displayArticles(data.posts);
                } else {
                    articlesContainer.innerHTML = "<p>Aucun article trouvé.</p>";
                }
            } catch (error) {
                console.error("Erreur lors de la récupération des articles :", error);
                articlesContainer.innerHTML = "<p>Erreur lors du chargement des articles.</p>";
                loadingMessage.style.display = "none";
            }
        }

        function displayArticles(articles) {
            articlesContainer.innerHTML = "";
            articles.forEach((article) => {
                const articleElement = document.createElement("div");
                articleElement.className = "article-item";

                const title = document.createElement("h3");
                title.textContent = article.title;

                const text = document.createElement("p");
                text.textContent = `${article.text.slice(0, 150)}...`;

                const showMoreLink = document.createElement("a");
                showMoreLink.textContent = "Voir Plus";
                showMoreLink.href = article.url;
                showMoreLink.target = "_blank";
                showMoreLink.className = "show-more-link";

                articleElement.append(title, text, showMoreLink);
                articlesContainer.appendChild(articleElement);
            });
        }

        fetchArticles("language:french AND category:\"War, Conflict and Unrest\"");
    });
</script>
@endsection
