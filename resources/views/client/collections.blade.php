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
    <section class="collections-intro" style="max-width: 800px; margin: 2rem auto; text-align: center; padding: 0 1rem;">
        <h2>Nos Collections Exceptionnelles</h2>
        <p>Découvrez notre collection unique de boulets de canon historiques, témoins silencieux des grandes batailles qui ont façonné l'histoire de France et d'Europe.</p>
    </section>

    <section class="collection-grid" style="max-width: 1200px; margin: 3rem auto; padding: 0 1rem;">
        <article class="collection-item" style="margin-bottom: 4rem; background: var(--light-bg); padding: 2rem; border-radius: 8px;">
            <h3>Collection Médiévale (XIVe - XVe siècles)</h3>
            <div class="collection-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 1.5rem;">
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
                    <p>Nos plus anciennes pièces datent du début de l'artillerie à poudre en Europe. Cette collection comprend des boulets en pierre et les premiers exemplaires en fonte de fer.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Boulets de siège utilisés pendant la Guerre de Cent Ans</li>
                        <li>Projectiles des premières bombardes</li>
                        <li>Boulets de pierre sculptés à la main</li>
                    </ul>
                </div>
            </div>
        </article>

        <article class="collection-item" style="margin-bottom: 4rem; background: var(--light-bg); padding: 2rem; border-radius: 8px;">
            <h3>Ère de la Renaissance (XVIe - XVIIe siècles)</h3>
            <div class="collection-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 1.5rem;">
                <div class="collection-description">
                    <p>La période de la Renaissance a vu une standardisation des calibres et une amélioration significative de la qualité de fonte. Notre collection illustre cette évolution technique.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Boulets standardisés des guerres d'Italie</li>
                        <li>Collection de boulets ramés de la Marine Royale</li>
                        <li>Premiers exemplaires de boulets explosifs</li>
                    </ul>
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

        <article class="collection-item" style="margin-bottom: 4rem; background: var(--light-bg); padding: 2rem; border-radius: 8px;">
            <h3>Période Napoléonienne</h3>
            <div class="collection-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 1.5rem;">
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
                    <p>Notre collection napoléonienne représente l'apogée de l'artillerie à boulets. Elle comprend des pièces provenant des principales campagnes de l'Empire.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Boulets récupérés de la campagne de Russie</li>
                        <li>Collection complète des calibres du système Gribeauval</li>
                        <li>Projectiles de la bataille de Waterloo</li>
                    </ul>
                </div>
            </div>
        </article>

        <article class="collection-item" style="margin-bottom: 4rem; background: var(--light-bg); padding: 2rem; border-radius: 8px;">
            <h3>Pièces Remarquables</h3>
            <div class="collection-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 1.5rem;">
                <div class="collection-description">
                    <p>Certaines pièces de notre collection se distinguent par leur rareté ou leur importance historique particulière.</p>
                    <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                        <li>Boulet du siège de La Rochelle (1627-1628)</li>
                        <li>Collection de boulets decoratifs du Château de Versailles</li>
                        <li>Boulets récupérés des épaves de la bataille de Trafalgar</li>
                    </ul>
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
        <h2>Conservation et Restauration</h2>
        <div style="margin-top: 1.5rem;">
            <p>Notre équipe de conservateurs travaille continuellement à la préservation de ces précieux témoins de l'histoire. Chaque pièce est :</p>
            <ul style="margin-top: 1rem; margin-left: 1.5rem;">
                <li>Cataloguée avec son origine historique</li>
                <li>Traitée contre la corrosion</li>
                <li>Conservée dans des conditions optimales</li>
                <li>Régulièrement inspectée par nos experts</li>
            </ul>
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