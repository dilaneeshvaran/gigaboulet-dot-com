@extends('layout.master')
@section('title')
AFT Skii 2025
@endsection
@section('content')

<section class="banner_saisonSkii">
    
    <h2 class="title_blog">
        AFT SKI 2025
    </h2>
</section>
<section class="product_section">
    <div class="wrapper">
      <div class="product_section_content">
        <div class="left_col">
          <div class="text">
            <h2>
                AFROFRENCHTOUCH à
                <span style="color: rgb(133, 197, 253)">la plagne && courchevel</span>    
            </h2>
            <p>
                Venez vivre des moments de joie pure avec nous à Chamonix en janvier ! 🎿✨ Découvrez des pistes de ski époustouflantes et partagez des rires avec notre groupe enthousiaste. 😄❄️ Réservez dès maintenant pour des vacances pleines de fun et de neige ! ⛷️🌨️
            </p>
          </div>
          <div class="mobile-cart-menu">
            <a  href="/skiSoon" class="cart ">
              <p >Rester-informer</p>
            </a>
          </div>
        </div>
        <div class="right_col">
        </div>
      </div>
    </div>

  </section>
  <section class="package_section">
    <div class="wrapper">
        <h2>
            NOS PACKAGES
        </h2>
      <div class="package_section_content">
        <div class="item">
            <div class="top">
                <h3 class="title">PACKAGE 1</h3>
                <div class="prix">699€</div>
            </div>
            <div class="content">
                <ul class="inclus">
                    <li>Chambre dans le chalet</li>
                    <li>Petit dejeuner durant le sejour</li>
                    <li>Coures (Boisons, cacahuete,Chips,Gateaux,Pates....)</li>
                    <li>Assistance AFT HELP (Preparation du Voyage)</li>
                    <li>Activites</li>

                </ul>
                <ul class="noninclus">
                    <li>Billet de train</li>
                </ul>
            </div>
            <div class="item-footer">
              <button type="button" onclick="window.location.href='/skiSoon'" class="btn">Acheter maintenant</button>
            </div>

        </div>
        {{-- <div class="item">
            <div class="top">
                <h3 class="title">PACKAGE 2</h3>
                <div class="prix">590€</div>
            </div>
            <div class="content">
                <ul class="inclus">
                    <li>Chambre dans le chalet</li>
                    <li>Petit dejeuner durant le sejour</li>
                    <li>Coures (Boisons, cacahuete,Chips,Gateaux,Pates....)</li>
                    <li>Assistance AFT HELP (Preparation du Voyage)</li>
                    <li>Activites</li>
                </ul>
                <ul class="noninclus">
                    <li>Billet d’avion</li>
                </ul>
            </div>
            <div class="item-footer">
                <button type="submit" class="btn ">Rester-informer </button>
            </div>

        </div> --}}
      </div>
    </div>

  </section>
@endsection