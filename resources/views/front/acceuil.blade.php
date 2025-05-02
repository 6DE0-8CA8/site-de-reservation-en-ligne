@extends('front.layouts.app')

@section('content')

    <!-- Navbar Start -->
    <nav class="py-3 navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Transport</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="ml-auto navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('dashboard') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Réservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Mes Réservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="p-0 container-fluid" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">nos bus</h4>
                            <h1 class="text-white display-1 mb-md-4">Best Rental Cars In Your Location</h1>
                            <a href="" class="mt-2 btn btn-primary py-md-3 px-md-5">Reservation</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">nos bus</h4>
                            <h1 class="text-white display-1 mb-md-4">Quality Cars with Unlimited Miles</h1>
                            <a href="" class="mt-2 btn btn-primary py-md-3 px-md-5">Reservation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

@endsection
