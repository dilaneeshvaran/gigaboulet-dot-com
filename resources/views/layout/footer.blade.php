<!--==================== FOOTER ====================-->
<footer class="footer">
    <div class="footer__bg">
        <div class="footer__container">
            <div class="top">
                <div class="h-card">

                <a href="/" class="logo">
                    <div class="p-name svg"></div>
                </a>

                <span class="footer__subtitle">
                    AFT est une entreprise qui organise des voyages à échelle internationale afin de réunir un ensemble de personnes pour passer un moment de détente, de joie, de partage. C’est aussi à la fois un moment de créer du contacte et enrichir sa culture générale à travers les voyages.        
                    <div class="p-adr h-adr">
                        {{-- <span class="p-street-address">Adresse de votre agence</span>, --}}
                        {{-- <span class="p-locality">Paris</span>, --}}
                        {{-- <span class="p-region">Région</span>, --}}
                        {{-- <span class="p-postal-code">Code Postal</span>, --}}
                        <span class="p-country-name">france</span>
                        <a class="u-email" href="mailto:contact@afrofrenchtouch.com">contact@afrofrenchtouch.com</a>

                    </div>
                </div>
            </div>

            <ul class="footer__links">
                <ul class="footer__links2">
                        <p  class="footer__header">Saison</p>
                    <li>
                        <a href="/ski" class="footer__link">Ski</a>
                    </li>
                    <li>
                        <a href="/dubai" class="footer__link">Dubai</a>
                    </li>
                    <li>
                        <a href="/zanzibar" class="footer__link">zanzibar</a>
                    </li>
                </ul>
                <ul class="footer__links2">
                    <p  class="footer__header">Galerie </p>
                <li>
                    <a href="/galerie" class="footer__link">Mai 2023</a>
                </li>
                <li>
                    <a href="/galerie" class="footer__link">Juillet 2023</a>
                </li>
                <li>
                    <a href="/galerie" class="footer__link">Hiver 2023</a>
                </li>
            </ul>

                <li>
                    <a href="/contact" class="footer__link">Contact</a>
                </li>
            </ul>

            {{-- <div class="footer__socials">
                <a  href= {{asset('https://github.com/JoelAka01')}}  target="_blank" class="footer__social">
                    <i class="uil uil-github-alt "></i>
                </a>
                <a href={{asset('https://www.linkedin.com/in/jo%C3%ABl-emmanuel-aka/')}} target="_blank" class="footer__social">
                    <i class="uil uil-linkedin-alt"></i>
                </a>
                <a href={{asset('https://twitter.com/emanouu_225')}} target="_blank" class="footer__social">
                    <i class="uil uil-twitter-alt"></i>
                </a>
            </div> --}}
            <div class="footer_left_col">
                <p for="email">Newsletter</p>
                @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0 mt-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
      
            @endif
                <form method="post" action="{{ url('email') }}">
                    @csrf
                    <input type="email" name="email" class="form-control" required>
                    <button type="submit" class="btn btn-outline-warning ">Rejoindre </button>
                </form>
              </div>
        </div>
        <p class="footer__copy">&#169; JoelAka. All right reserved</p>
    </div>
</footer>