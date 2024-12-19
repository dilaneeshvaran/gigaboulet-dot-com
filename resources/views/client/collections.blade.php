@extends('layout.master')
@section('title')
Collections |Gigaboulet
@endsection
@section('header')
<header>
    <div class="header-bg"></div>
    <div class="header-content">
        <h1>Collections Gigaboulet</h1>
        <p>Des pièces uniques témoignant de l'histoire de l'artillerie</p>
    </div>
</header>
@endsection
@section('content')
<main>
    <section class="collections-intro" style="max-width: 800px; margin: 2rem auto; text-align: center; padding: 0 1rem;">
        <h2>Nos Collections Gigaboulet Exceptionnelles</h2>
        <p>Découvrez notre collection unique de boulets de canon Gigaboulet historiques, témoins silencieux des grandes batailles qui ont façonné l'histoire de France et d'Europe.</p>
    </section>

    <section class="collection-grid" style="max-width: 1200px; margin: 3rem auto; padding: 0 1rem;">
        <article class="collection-item" >

            <div class="collection-content" >

                <div class="collection-images" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">

                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col1.avif' )}} alt="Boulets de Canon Médiévale" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col2.avif' )}} alt="Boulets de Canon Médiévale" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col3.avif' )}} alt="Boulets de Canon Médiévale" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col5.avif' )}} alt="Boulets de Canon Médiévale" class="responsive-image">
                    </div>
                </div>
                <div class="collection-description">
                    <h3>Collection Médiévale (XIVe - XVe siècles) Gigaboulet</h3>

                    <p>Nos plus anciennes pièces datent du début de l'artillerie à poudre en Europe. Cette collection comprend des boulets en pierre et les premiers exemplaires en fonte de fer.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Boulets de siège utilisés pendant la Guerre de Cent Ans</li>
                        <li>Projectiles des premières bombardes</li>
                        <li>Boulets de pierre sculptés à la main</li>
                    </ul>
                    <a target="_blank" href="/collections/rechercher-un-boulet-de-canon-gigaboulet">En savoir plus</a>
                </div>
            </div>
        </article>

        <article class="collection-item" >

            <div class="collection-content" >

                <div class="collection-description">
                    <h3>Ère de la Renaissance (XVIe - XVIIe siècles) Gigaboulet</h3>

                    <p>La période de la Renaissance a vu une standardisation des calibres et une amélioration significative de la qualité de fonte. Notre collection illustre cette évolution technique.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Boulets standardisés des guerres d'Italie</li>
                        <li>Collection de boulets ramés de la Marine Royale</li>
                        <li>Premiers exemplaires de boulets explosifs</li>
                    </ul>
                    <a target="_blank" href="/collections/rechercher-un-boulet-de-canon-gigaboulet">En savoir plus</a>

                </div>
                <div class="collection-images" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col6.avif' )}} alt="Boulets de Canon Renaissance" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col7.avif' )}} alt="Boulets de Canon Renaissance" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col8.avif' )}} alt="Boulets de Canon Renaissance" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col9.avif' )}} alt="Boulets de Canon Renaissance" class="responsive-image">
                    </div>
                </div>
            </div>
        </article>

        <article class="collection-item" >

            <div class="collection-content" >

                <div class="collection-images" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col4.avif' )}} alt="Boulets de Canon Napoleon" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col10.avif' )}} alt="Boulets de Canon Napoleon" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col13.avif' )}} alt="Boulets de Canon Napoleon" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col17.avif' )}} alt="Boulets de Canon Napoleon" class="responsive-image">
                    </div>
                </div>
                <div class="collection-description">
                    <h3>Période Napoléonienne gigaboulet</h3>

                    <p>Notre collection napoléonienne représente l'apogée de l'artillerie à boulets. Elle comprend des pièces provenant des principales campagnes de l'Empire.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Boulets récupérés de la campagne de Russie</li>
                        <li>Collection complète des calibres du système Gribeauval</li>
                        <li>Projectiles de la bataille de Waterloo</li>
                    </ul>
                    <a target="_blank" href="/collections/rechercher-un-boulet-de-canon-gigaboulet">En savoir plus</a>

                </div>
            </div>
        </article>

        <article class="collection-item" >

            <div class="collection-content" >

                <div class="collection-description">
                    <h3>Pièces Remarquables gigaboulet</h3>

                    <p>Certaines pièces de notre collection se distinguent par leur rareté ou leur importance historique particulière.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Boulet du siège de La Rochelle (1627-1628)</li>
                        <li>Collection de boulets decoratifs du Château de Versailles</li>
                        <li>Boulets récupérés des épaves de la bataille de Trafalgar</li>
                    </ul>
                    <a target="_blank" href="/collections/rechercher-un-boulet-de-canon-gigaboulet">En savoir plus</a>

                </div>
                <div class="collection-images" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col18.avif' )}} alt="Boulets de Canon Remarquable" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col14.avif' )}} alt="Boulets de Canon Remarquable" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col15.avif' )}} alt="Boulets de Canon Remarquable" class="responsive-image">
                    </div>
                    <div style="background: white; aspect-ratio: 1; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                        <img src={{ asset('frontend/assets/collections/col16.avif' )}} alt="Boulets de Canon Remarquable" class="responsive-image">
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section class="conservation" style="max-width: 800px; margin: 4rem auto; padding: 2rem; background: var(--light-bg); border-radius: 8px;">
        <div style="margin-top: 1.5rem;">
            <p>Notre équipe de conservateurs travaille continuellement à la préservation de ces précieux témoins de l'histoire. Chaque pièce est :</p>
            <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                <li>Cataloguée avec son origine historique</li>
                <li>Traitée contre la corrosion</li>
                <li>Conservée dans des conditions optimales</li>
                <li>Régulièrement inspectée par nos experts</li>
            </ul>
            <a href="/collections/rechercher-un-boulet-de-canon-gigaboulet">En savoir plus</a>

            <div class="conservation-images" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem; margin-top: 2rem;">
                <div style="background: white; aspect-ratio: 16/9; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                    <img src={{ asset('frontend/assets/collections/col12.avif' )}} alt="Boulets de Canon Restauration" class="responsive-image">
                </div>
                <div style="background: white; aspect-ratio: 16/9; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                    <img src={{ asset('frontend/assets/collections/col11.avif' )}} alt="Boulets de Canon Concervation" class="responsive-image">
                </div>
                <div style="background: white; aspect-ratio: 16/9; display: flex; align-items: center; justify-content: center; border-radius: 4px;">
                    <img src={{ asset('frontend/assets/collections/col.avif' )}} alt="Boulets de Canon Atelier" class="responsive-image">
                </div>
            </div>
        </div>
    </section>

    <section class="visit-info" style="max-width: 800px; margin: 4rem auto; padding: 0 1rem; text-align: center;">
        <h2>Visiter la Collection</h2>
        <p style="margin-top: 1rem;">Notre collection est accessible aux chercheurs et passionnés d'histoire sur rendez-vous.</p>
        <div class="contact-button" style="margin-top: 2rem;">
            <a id="appointmentButton" onclick="showMessage()" style="display: inline-block; background: var(--secondary-color); color: white; padding: 1rem 2rem; border-radius: 4px; text-decoration: none; transition: background-color 0.3s; cursor: pointer;">
                Prendre Rendez-vous
            </a>
        </div>
        <p id="availabilityMessage" style="margin-top: 1rem; color: red; font-weight: bold; display: none;">
            En raison de forte demande, nous n'avons plus de disponibilités. Réessayez ultérieurement.
        </p>
    </section>
</main>
@endsection
@section('script')

<script>
    function showMessage() {
        document.getElementById("availabilityMessage").style.display = "block";
    }
</script>

@endsection