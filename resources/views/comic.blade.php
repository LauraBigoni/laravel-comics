@extends('layouts.main')

@section('title', 'Comic')

@section('content')
    <section id="jumbotron" class="comic"></section>
    <section class="comics-info">
        <div id="comic">
            <div class="container">
                <div class="details">
                    <h2>Action Comics #1000: The Deluxe Edition</h2>
                    <div class="availability">
                        <div>
                            <p class="text-op">U.S. Price: <span class="text-white">$ 19.99</span></p>
                            <p class="text-op">AVAILABLE</p>
                        </div>
                        <div>
                            <span class="text-white">Check Availability <i class="fa-solid fa-caret-down"></i></span>
                        </div>
                    </div>
                    <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing
                        comic that
                        won raves when it hit comics shops in April! This hardcover includes all the stories from that
                        issue, plus the
                        tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of
                        Superman
                        hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look,
                        scripts for
                        the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a
                        complete reprint
                        of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                    </p>
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
                        <span> persone, persone, persone, persone, persone, persone, persone, persone, persone, persone</span>
                    </div>
                    <div class="written">
                        <h6>Written by:</h6>
                        <span> persone, persone, persone, persone, persone, persone, persone, persone, persone, persone</span>
                    </div>
                </div>
                <div class="table">
                    <h2>Specs</h2>
                    <div class="series">
                        <h6>Series:</h6>
                        <span>ACTION COMICS</span>
                    </div>
                    <div class="price">
                        <h6>U.S. Price:</h6>
                        <span>$19.99</span>
                    </div>
                    <div class="sale-date">
                        <h6>On Sale Date:</h6>
                        <span>Oct 02 2018</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
