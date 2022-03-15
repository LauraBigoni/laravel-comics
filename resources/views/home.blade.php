<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <title>DC | Comics</title>
</head>

<body>
    @include('includes.header')
    <main>
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
    </main>
    @include('includes.footer')
</body>

</html>
