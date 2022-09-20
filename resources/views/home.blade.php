@extends('layout')
@section('page-stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('header')
    <header class="home-header">
        <h1 class="home-header__title">Portfolio website</h1>
        <div class="home-header__rectangle"></div>
        <figure class="home-header__image-container">
            <div class="image-container__left-text">
                <p class="left-text__p">
                    young professional developer<br>
                    amateur skateboarder
                </p>
            </div>
            <img src="{{ asset('assets/images/profile.jpg') }}" alt="" class="image-container__img">
            <div class="image-container__img-gradient">
                <h2 class="img-gradient__name">Jochem de Wit</h2>
                <p class="img-gradient__title">
                    Backend developer<br>
                    & graphic designer
                </p>
            </div>
        </figure>
    </header>
@endsection

@section('main')
    <main class="main">
        <p class="main__text">
            <span>Enthousiasme en motivatie zorgen ervoor dat ik elke dag nieuwe vaardigheden onder de knie krijg op het
                gebied van backend development.</span>
            <br><br>
            Na het afronden van de MBO 4: Media & Applicatie ontwikkelaar en het behalen van mijn propedeuse voor HBO
            Informatica streef ik ernaar om zelfstandiger software te kunnen ontwikkelen en ben ik op zoek naar een
            nieuwe uitdaging.
        </p>
        <p class="main__read-more" href="{{ url('/over-mij') }}">Lees meer...</p>
        <p class="main__portfolio" href="{{ url('/portfolio') }}">Bekijk mijn werk</p>
    </main>
@endsection
