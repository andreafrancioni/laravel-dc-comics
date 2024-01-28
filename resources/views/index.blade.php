@extends('layouts.app')

@section('content')

{{-- JUMBO --}}
<section id="jumbo-section">
    <div class="jumbo">

        <img src="../assets/img/jumbotron.jpg" alt="">

    </div>
</section>

{{-- CARD SECTION --}}
<section id="card-section" class="bg-grey">
    <div class="title container">
        <h2 class="text-center">CURRENT SERIES</h2>
    </div>
    <div class="cardsWrapper container d-flex flex-wrap justify-content-center">
        <div class="singleCard">
            <a href="{{route('comics.create')}}">
                <img src="../assets/img/plus-sign-vector-icon.jpg" alt="">
                <h3>+ Add Comic</h3>
            </a>
        </div>
        @foreach ($comics as $comic)
        <div class="singleCard">
            <a href="{{route('comics.show', $comic->id)}}">
                <img src="{{ $comic["thumb"] }}" alt="">
                <h3>{{strtoupper($comic["title"])}}</h3>
            </a>
        </div>
        @endforeach
    </div>
</section>

{{-- ICON SECTION --}}
<section id="icon-section" class="bg-banner">
    <div class="comicsCards container d-flex justify-content-center align-items-center">
        <div class="comicsCard">
            <img src="../assets/img/buy-comics-digital-comics.png" alt="">
            <span class="mx-2">DIGITAL COMICS</span>
        </div>
        <div class="comicsCard">
            <img src="../assets/img/buy-comics-merchandise.png" alt="">
            <span class="mx-2">DC MERCHANDISE</span>
        </div>
        <div class="comicsCard">
            <img src="../assets/img/buy-comics-shop-locator.png" alt="">
            <span class="mx-2">SHOP LOCATOR</span>
        </div>
        <div class="comicsCard">
            <img src="../assets/img/buy-comics-subscriptions.png" alt="">
            <span class="mx-2">SUBSCRIPTION</span>
        </div>
        <div class="comicsCard">
            <img src="../assets/img/buy-dc-power-visa.svg" alt="">
            <span class="mx-2">POWER VISA</span>
        </div>
    </div>
</section>


@endsection

{{-- JUMBO CSS --}}
<style scoped>
    .jumbo img {
        width: 100%;
        object-fit: cover;
        height: 350px;
        object-position: top;
    }
</style>

{{-- CARDS CSS --}}
<style>

    #card-section{
        .title {
            position: relative;
        }
        h2 {
            width: 300px;
            background-color: blue;
            position: absolute;
            top: -20px;
        }
        .cardsWrapper {
            padding-top: 40px;
        }
    
        .singleCard {
            width: calc(100% / 6);
        }
        a{
            img {
                width: 12em;
                height: 15em;
            }
            
            
                h3 {
                    font-size: 1.5em;
                    color: white
                }


        }
    
        .bg-grey {
            background-color: #303030;
            color: white;
        }

    }


</style>

{{-- ICON CSS --}}
        <style scoped>
            .bg-banner {
                color: white;
                height: 100px;
        
            }
        
            .comicsCard {
                margin: 0 1rem;
            }
        
            .comicsCards {
                height: 100%;
            }
        
            .bg-banner {
                background-color: #0082F9;
            }
        
            .comicsCard img {
                width: 40px;
            }
        </style>
