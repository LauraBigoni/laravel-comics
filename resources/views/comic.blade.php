@extends('layouts.main')

@section('title', 'Comic')

@section('content')
    <section id="jumbotron" class="comic"><div class="img">
            <img src="{{$comic['thumb']}}" alt="">
        </div></section>
    <section class="comics-info">
        <div id="comic">
            <div class="container">
                <div class="details">
                    <h2>{{ $comic['title']}}</h2>
                    <div class="availability">
                        <div>
                            <p class="text-op">U.S. Price: <span class="text-white">{{ $comic['price'] }}</span></p>
                            <p class="text-op">AVAILABLE</p>
                        </div>
                        <div>
                            <span class="text-white">Check Availability <i class="fa-solid fa-caret-down"></i></span>
                        </div>
                    </div>
                    <p>{{ $comic['description']}}</p>
                </div>
                <div class="adv">
                    <p>ADVERTISEMENT</p>
                    <img class="adv" src="{{ asset('images/adv.jpg') }}" alt="advertisement logo">
                </div>
            </div>
        </div>
        <div id="comic-info">
            <div class="container">
                <div class="table">
                    <h2>Talent</h2>
                    <div class="art">
                        <h6>Art by:</h6>
                        <span>  
                            
                        </span>
                    </div>
                    <div class="written">
                        <h6>Written by:</h6>
                        <span>

                        </span>
                    </div>
                </div>
                <div class="table">
                    <h2>Specs</h2>
                    <div class="series">
                        <h6>Series:</h6>
                        <span>{{ $comic['series']}}</span>
                    </div>
                    <div class="price">
                        <h6>U.S. Price:</h6>
                        <span>{{ $comic['price']}}</span>
                    </div>
                    <div class="sale-date">
                        <h6>On Sale Date:</h6>
                        <span>{{ $comic['sale_date']}}</span>
                    </div>
                </div>
            </div>
            <div class="secondary-nav">
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
        </div>
    </section>
@endsection
