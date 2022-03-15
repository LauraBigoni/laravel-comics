<header>
    <div class="additional-dc-sites">
        <p>DC POWER&trade; VISA&reg;</p>
        <p>ADDITIONAL DC SITES<i class="fa-solid fa-caret-down"></i></p>
    </div>
    <div class="container">
        <div class="logo">
            <a href="{{ route('home')}}"><img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo" /></a>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="{{ route('characters')}}">CHARACTERS</a></li>
                <li><a href="{{ route('comics')}}">COMICS</a></li>
                <li><a href="{{ route('movies')}}">MOVIES</a></li>
                <li><a href="{{ route('tv')}}">TV</a></li>
                <li><a href="{{ route('games')}}">GAMES</a></li>
                <li><a href="{{ route('collectibles')}}">COLLECTIBLES</a></li>
                <li><a href="{{ route('videos')}}">VIDEOS</a></li>
                <li><a href="{{ route('fans')}}">FANS</a></li>
                <li><a href="{{ route('news')}}">NEWS</a></li>
                <li><a href="{{ route('shop')}}">SHOP <i class="fa-solid fa-caret-down"></i></a></li>
            </ul>
            <div class="search-container">
                <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </nav>
    </div>
</header>
