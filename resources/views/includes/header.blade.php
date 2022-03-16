@php
$links = config('links');
@endphp

<header>
    <div class="additional-dc-sites">
        <p>DC POWER&trade; VISA&reg;</p>
        <p>ADDITIONAL DC SITES<i class="fa-solid fa-caret-down"></i></p>
    </div>
    <div class="container">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo" /></a>
        </div>
        <nav class="nav-menu">
            <ul>
                @foreach ($links as $link)
                    <li class="{{ request()->routeIs($link['route_name']) ? 'active' : '' }}"><a
                            href="{{ route($link['route_name']) }}">{{ $link['text'] }}</a></li>
                    @if ($link['text'] == 'SHOP')
                        <i class="fa-solid fa-caret-down"></i>
                    @endif
                @endforeach
            </ul>
            <div class="search-container">
                <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </nav>
    </div>
</header>
