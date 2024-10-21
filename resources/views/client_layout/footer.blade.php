<!--==================== FOOTER ====================-->
<footer class="footer">
    <div class="footer__bg">
        <div class="footer__container  ">
            <div>
                <h1 class="footer__title">GigaBoulet</h1>
                <span class="footer__subtitle">votre page  web</span>
            </div>

            <ul class="footer__links">

                <li>
                    <a href="/blog" class="footer__link">Blog</a>
                </li>
                <li>
                    <a href="/contact" class="footer__link">Contact</a>
                </li>
            </ul>
            <div class="footer_left_col">
                <label for="email">Newsletter</label>
                                <form method="post" action="https://joelaka.com/email">
                    <input type="hidden" name="_token" value="2tJ6Y3V90ouyGwN9Lx74R65UKsUSrGsuRAStUgZM">                    <input type="email" name="email" class="form-control" placeholder="name@example.com" required="">
                    <button type="submit" class="btn btn-outline-warning ">Rejoindre </button>
                </form>
              </div>
            <div class="footer__socials">
                <a  href= {{asset('https://github.com/JoelAka01')}}  target="_blank" class="footer__social">
                    <i class="uil uil-github-alt "></i>
                </a>
                <a href={{asset('https://www.linkedin.com/in/jo%C3%ABl-emmanuel-aka/')}} target="_blank" class="footer__social">
                    <i class="uil uil-linkedin-alt"></i>
                </a>
                <a href={{asset('https://twitter.com/emanouu_225')}} target="_blank" class="footer__social">
                    <i class="uil uil-twitter-alt"></i>
                </a>
            </div>
        </div>

        <p class="footer__copy">&#169; JoelAka. All right reserved</p>
    </div>
</footer>