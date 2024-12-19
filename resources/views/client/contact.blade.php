@extends('layout.master')

@section('title')
Gigaboulet - Contact
@endsection

@section('header')
<header>
    <div class="header-bg"></div>
    <div class="header-content">
        <h1>Contactez le Musée Gigaboulet</h1>
        <p>Nous sommes là pour répondre à toutes vos questions.</p>
    </div>
</header>
@endsection

@section('content')
<main>
    <section class="contact-container" style="max-width: 1200px; margin: 2rem auto; padding: 0 1rem;">
        <h2>Nous Contacter</h2>
        <p>Le <strong>Musée Gigaboulet</strong> est ravi de répondre à vos questions, de vous assister pour vos réservations ou de recueillir vos commentaires. N'hésitez pas à nous contacter par l'un des moyens ci-dessous :</p>

        <h3>Coordonnées</h3>
        <ul style="list-style: none; padding: 0; margin-top: 1rem;">
            <li><strong>Adresse :</strong> 123 Rue de l'Artillerie, 75000 Paris, France</li>
            <li><strong>Téléphone :</strong> +33 1 23 45 67 89</li>
            <li><strong>Email :</strong> contact@gigaboulet.fr</li>
        </ul>

        <h3>Formulaire de Contact</h3>
        <form action="" method="POST" style="margin-top: 1.5rem;">
            @csrf
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div>
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" required style="width: 100%; padding: 0.5rem; margin-top: 0.5rem;">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 0.5rem; margin-top: 0.5rem;">
                </div>
            </div>
            <div style="margin-top: 1rem;">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 0.5rem; margin-top: 0.5rem;"></textarea>
            </div>
            <div style="margin-top: 1.5rem;">
                <button type="submit" class="cta-button">Envoyer</button>
            </div>
        </form>

        <h3>Horaires d'ouverture</h3>
        <ul style="list-style: none; padding: 0; margin-top: 1rem;">
            <li><strong>Lundi - Vendredi :</strong> 10h00 - 18h00</li>
            <li><strong>Samedi - Dimanche :</strong> 10h00 - 20h00</li>
        </ul>

        <div style="margin-top: 2rem;">
            <a href="collections" class="cta-button">Réservez Vos Billets</a>
        </div>
    </section>
</main>
@endsection