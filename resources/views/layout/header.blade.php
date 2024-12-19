@yield('header')
<nav>
    <ul>
        <li><a href="/">Accueil</a></li>
        <li><a href="histoire">Histoire du Gigaboulet</a></li>
        <li class="dropdown-menu">
            <a href="/blog">Blog</a>
            <ul class="dropdown">
                @foreach ($blog as $item)
                  <li><a href="/blog/{{ $item->slug }}">{{ $item->excerpt }}</a></li>
                @endforeach  
            </ul>
        </li>
        <li class="dropdown-menu">
            <a href="/collections">Collection</a>
            <ul class="dropdown">
                @foreach ($collection as $item)
                  <li><a href="/collections/{{ $item->slug }}">{{ $item->excerpt }}</a></li>
                @endforeach 
            </ul>
        </li>       
        <li class="dropdown-menu">
            <a href="/musees">Musées</a>
            <ul class="dropdown">
                @foreach ($muses as $item)
                  <li><a href="/musees/{{ $item->slug }}">{{ $item->excerpt }}</a></li>
                @endforeach 
            </ul>
        </li>  
        <li><a href="/apropos">A propos</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>
