@extends('layouts.main')

@section('content')
    <section id="jumbotron"></section>
    <section id="comics">
        <div class="container">
            <div class="currentSeries">
                <p>CURRENT SERIES</p>
            </div>
            <ul>
                @forelse ($comics as $comic)
                    <li class="cards">
                        <div class="card">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" />
                        </div>
                        <p class="comic-series">{{ $comic['title'] }}</p>
                    </li>
                @empty
                    <h3>Non ci sono fumetti da mostrare</h3>
                @endforelse
            </ul>
            <div class="load-more">
                <p>LOAD MORE</p>
            </div>
        </div>
    </section>
    <section id="secondary-nav">
        <div class="container">
            <ul>
                <li>
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="comics" />
                    <a href="#">DIGITAL COMICS</a>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="merchandise" />
                    <a href="#">DC MERCHANDISE</a>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="subscription" />
                    <a href="#">SUBSCRIPTION</a>
                </li>
                <li>
                    <img class="resized" src="{{ asset('images/buy-comics-shop-locator.png') }}"
                        alt="shop locator" />
                    <a href="#">COMIC SHOP LOCATOR</a>
                </li>
                <li>
                    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="visa" />
                    <a href="#">DC POWER VISA</a>
                </li>
            </ul>
        </div>
    </section>
@endsection
