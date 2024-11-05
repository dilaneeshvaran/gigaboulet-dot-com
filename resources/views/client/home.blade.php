@extends('layout.master')
@section('title')
Accueil
@endsection
@section('content')
<section class="hero_section">
    <div class="wrapper">
      <div class="hero_section_content">
        <div class="left_col">
          <div class="text">
            <h1>
              L'agence événementielle qui fait voyager
            </h1>
            <p>
              Découvrez des séjours inoubliables et des événements festifs organisés dans les destinations les plus captivantes. 🏡🎉  Profitez d'hébergements de charme et de services haut de gamme pour des vacances à la fois relaxantes et enrichissantes. Que vous cherchiez à skier en janvier ou à explorer les plages de Zanzibar en mai, Afro French Touch vous offre une expérience de voyage unique et authentique.
            </p>
          </div>
          {{-- @if(session()->has('status'))
          <div class="alert alert-success">
              {{ session()->get('status') }}
          </div>
      @endif --}}


      @if ($errors->any())
          <div class="alert alert-danger" role="alert">
              <ul class="mb-0 mt-0">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>

      @endif
          <h3>Email address</h3>
          <div class="item-footer">
            <form method="post" action="{{ url('email') }}">
              @csrf
              <input type="email" name="email" class="form-control"   required>
              <button type="submit" class="btn btn-outline-warning ">Rejoindre </button>

            </form>
          </div>
        </div>
        <div class="right_col">
        </div>
      </div>
    </div>

  </section>
  <section class="saison_section" id="Saison">
    <section class="section_title">
      <div class="wrapper">
        <h1>Découvrez nos offres de voyages et événements</h1>
      </div>
    </section>
    <div class="wrapper">
      <div class="section_content">
        <a href="/ski">
          <card>
              <div class="card_body">
                <h1 slot="header">Séjour Ski</h1>
                <p slot="content">DU 11 AU 16 janvier 2025</p>
              </div>
          </card>
       </a>
      <a href="/dubai">

        <card>
          <div class="card_body">
            <h1 slot="header">Vacances à Dubaï </h1>
            <p slot="content">MARS-AVRIL 2025</p>
          </div>
        </card>
      </a>
      <a href="/zanzibar">
        <card>
          <div class="card_body">
            <h1 slot="header">Vacances ZANZIBAR </h1>
            <p slot="content">MAI 2025</p>
          </div>
        </card>
      </a>
      </div>
    </div>
    </div>
  </section>
  <section class="pourquoi_section">
    <div class="wrapper">
      <div class="pourquoi_section_content">
        <div class="left_col">
          <div class="text">
            <h2>
              Pourquoi choisir Afro French Touch pour vos séjours ?
            </h2>
            <p>
              Afro French Touch offre une expérience de voyage unique 🌍. Nous priorisons votre confort avec des hébergements de charme 🏡, des destinations captivantes  🎉 et une ambiance festive 🎊. Choisissez-nous pour un séjour authentique et mémorable.            </p>
          </div>
          <div class="mobile-cart-menu">
            <a  href="/contact" class="cart ">
              <p >Contact-nous</p>
            </a>
          </div>
        </div>
        <div class="right_col">
        </div>
      </div>
    </div>

  </section>
  {{-- <section class="avantage_section">
    <div class="wrapper">
      <div class="avantage_section_content">
        <div class="item">
          <div class="svg"></div>
          <h3>
            Mixite
          </h3>

          <p>Lorem ipsum dolor sit amet consectetur. Nunc elit eget laoreet pulvinar varius fusce ut malesuada.

          </p>

        </div>
        <div class="item">
          <div class="svg"></div>
          <h3>
            Disponibilite
          </h3>
          <p>Lorem ipsum dolor sit amet consectetur. Nunc elit eget laoreet pulvinar varius fusce ut malesuada.

          </p>

        </div>
        <div class="item">
          <div class="svg"></div>
          <h3>
            Intitegriter
          </h3>
          <p>
            Lorem ipsum dolor sit amet consectetur. Nunc elit eget laoreet pulvinar varius fusce ut malesuada.
          </p>

        </div>
      </div>
    </div>
  </section>
  <section class="testimony_section">
    <div class="wrapper">
      <div class="testimony_section_content">
        <div class="item">
          <div class="img"></div>
          <h3>
            Faby
          </h3>

          <p>Lorem ipsum dolor sit amet consectetur. Nunc elit eget laoreet pulvinar varius fusce ut malesuada.

          </p>

        </div>
        <div class="item">
          <div class="img"></div>
          <h3>
            Karrele
          </h3>
          <p>Lorem ipsum dolor sit amet consectetur. Nunc elit eget laoreet pulvinar varius fusce ut malesuada.

          </p>

        </div>
        <div class="item">
          <div class="img"></div>
          <h3>
            David
          </h3>
          <p>
            Lorem ipsum dolor sit amet consectetur. Nunc elit eget laoreet pulvinar varius fusce ut malesuada.
          </p>

        </div>
      </div>
    </div>
  </section> --}}
  <script src="/frontend/script.js"></script>
@endsection