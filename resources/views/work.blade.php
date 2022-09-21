@extends('layout')
@section('main')
    <main class="work-main">
        <article class="work-main__article">
            <h3 class="article__header">
                Tijdens mijn MBO opleiding Media- en applicatie ontwikkelaar heb ik twee keer stage gelopen.
            </h3>
            <p class="article__body">
                Het eerste half jaar was gericht op front-end en grafisch ontwerpen en de tweede half jaar was gericht
                op back-end development, met name webshops en web administratiesystemen.<br><br>
                Na de opleiding heb ik nog een half jaar part-time gewerkt voor het bedrijf van mijn eerste stage en
                naast mijn studie en part-time job heb ik een hoop klusjes gedaan voor de lokale skatewinkel. Hiervoor
                heb ik de webshop bijgehouden en projecten gedaan in vormgeving zoals het maken van flyers.
            </p>
            <p class="article__cta orange-button" onclick="location.href='#workexperience'">
                Bekijk mijn werkervaringen
            </p>
        </article>
        <article class="work-main__article">
            <h3 class="article__header">
                Naast de stages heb ik ook veel projecten gedaan op het MBO en het HBO.
            </h3>
            <p class="article__body">
                Toen ik de basis van programmeren onder de knie kreeg werd ik erg enthousiast en bouwde ik verschillende
                websites, webshops, commandline-applicaties en apps voor de smartphone.<br><br>

                Hierdoor bouwde ik kennis op van HTML, CSS, Javascript, PHP, SQL, Java, Python, Dart. Hierbij leerde ik
                ook gebruik maken van frameworks zoals Laravel, React, JavaFX, Flutter en JQuery.
            </p>
            <p class="article__cta orange-button" onclick="location.href='#projects'">Bekijk mijn projecten</p>
        </article>
        <div class="test" id="workexperience"></div>
    </main>
@endsection
