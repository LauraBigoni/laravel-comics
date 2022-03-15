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
    <header>
        <div class="additional-dc-sites">
            <p>DC POWER&trade; VISA&reg;</p>
            <p>ADDITIONAL DC SITES<i class="fa-solid fa-caret-down"></i></p>
        </div>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo" />
            </div>
            <nav class="nav-menu">
                <ul>
                    <li><a href="#">CHARACTERS</a></li>
                    <li><a href="#">COMICS</a></li>
                    <li><a href="#">MOVIES</a></li>
                    <li><a href="#">TV</a></li>
                    <li><a href="#">GAMES</a></li>
                    <li><a href="#">COLLECTIBLES</a></li>
                    <li><a href="#">VIDEOS</a></li>
                    <li><a href="#">FANS</a></li>
                    <li><a href="#">NEWS</a></li>
                    <li><a href="#">SHOP <i class="fa-solid fa-caret-down"></i></a></li>
                </ul>
                <div class="search-container">
                    <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <section id="jumbotron"></section>
        <section id="comics">
            <div class="container">
                <div class="currentSeries">
                    <p>CURRENT SERIES</p>
                </div>
                <ul>
                    <li>
                        <div class="card"><img src="" alt="comic" /></div>
                        <p class="comic-series">descrizione fumetto</p>
                    </li>
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
    <footer>
        <div class="container">
            <div class="content">
                <section id="footer-nav">
                    <ul>
                        <h5>DC COMICS</h5>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                        <h5>SHOP</h5>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>
                    <ul>
                        <h5>DC</h5>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy policy (New)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent Workshops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <ul>
                        <h5>SITES</h5>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </section>
                <section class="bigger-logo"></section>
            </div>
        </div>
        <section id="footer-social">
            <div class="container">
                <div class="sign-up">
                    <a href="#">SIGN-UP NOW!</a>
                </div>
                <div class="socials">
                    <h4>FOLLOW US</h4>
                    <img src="{{ asset('images/footer-facebook.png') }}" alt="Facebook" />
                    <img src="{{ asset('images/footer-twitter.png') }}" alt="Twitter" />
                    <img src="{{ asset('images/footer-youtube.png') }}" alt="YouTube" />
                    <img src="{{ asset('images/footer-pinterest.png') }}" alt="Pinterest" />
                    <img src="{{ asset('images/footer-periscope.png') }}" alt="Periscope" />
                </div>
            </div>
        </section>
    </footer>
</body>

</html>
