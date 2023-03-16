@extends('master')

@section('content')
    <section id="homepage">

        <section id="hero">
            <img src="/img/header_resize.jpg" alt="Header.jpg">
            <div class="container-fluid">
                <div class="text-content">
                    <span class="lineHero">WELKOM BIJ</span>
                    <h1>Garage Boekestijn</h1>
                </div>
            </div>

            <div class="overlay"></div>
            <a href="#content" class="scroll smooth-scroll">
                        <span class="button-scroll">
                        <i class="icon-scroll"></i>
                        </span>
                <span class="dotted-line">

                        </span>
            </a>
        </section>

        <section id="content">
            <div class="container-fluid">
                <div class="text-content">
                    <h2>Welkom bij Garage Boekestijn</h2>
                    <div class="line-main"></div>
                    <p>Garage Boekestijn staat al bijna 30 jaar voor hoge kwaliteit en goede service. Bij ons kunt u
                        terecht voor alle reparaties, schadeherstel, APK en voor een nieuwe of gebruikte auto. Wij zijn
                        gespecialiseerd in personenauto's maar natuurlijk kunt u ook bij ons terecht met uw
                        bedrijfsauto's en klassiekers. Neem gerust een kijkje in ons assortiment.
                        Services en diensten:
                    <ul>
                        <li>Reparatie, onderhoud,laswerk, schade en advies</li>
                        <li>Haal – en breng service en event. Gratis leen auto</li>
                        <li>APK alle merken, ook klassiekers</li>
                        <li>In- en verkoop gebruikte auto’s</li>
                    </ul>
                    </p>

                    <a href="{{ route('contact') }}" class="btn yellow">Contact</a>
                </div>

                <div class="image-wrapper">
                    <img src="/img/carfixingimg.jpg" alt="content-img">
                </div>
            </div>
        </section>
        <section id="services" class="grey-wrapper">
            <div class="container-fluid">
                <div class="top">
                    <div class="arrow prev">
                        <i class="icon icon-chevron-left"></i>
                    </div>
                    <h2>Diensten</h2>
                    <div class="arrow next">
                        <i class="icon icon-chevron-right"></i>
                    </div>

                </div>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="{{ route('show', ['name' => 'apk']) }}" class="object">
                                <div class="image-wrapper">
                                    <img src="/img/apkcheck.jpg" alt="Object">
                                </div>
                                <div class="details">
                                    <div class="text">
                                        <p>APK</p>
                                        <span>Alle merken, ook klassiekers</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('show', ['name' => 'Haal – en breng service']) }}" class="object">
                                <div class="image-wrapper">
                                    <img src="/img/carfixingimg.jpg" alt="Object">
                                </div>
                                <div class="details">
                                    <div class="text">
                                        <p>Haal – en breng service en event</p>
                                        <span>Gratis leen auto</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('assortment') }}" class="object">
                                <div class="image-wrapper">
                                    <img src="/img/bmw.jpg" alt="Object">
                                </div>
                                <div class="details">
                                    <div class="text">
                                        <p>In- en verkoop gebruikte auto’s</p>
                                        <span>Ook klassiekers</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="{{ route('show', ['name' => 'Reparatie']) }}" class="object">
                                <div class="image-wrapper">
                                    <img src="/img/repairingcar.jpg" alt="Object">
                                </div>
                                <div class="details">

                                    <div class="text">
                                        <p>Reparatie</p>
                                        <span>Onderhoud, laswerk, schade en advies</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        @if(count($restorations))
            <section id="restoration" class="light_grey-wrapper">
                <div class="container-fluid">

                    <div class="top">
                        <div class="arrow prev">
                            <i class="icon icon-chevron-left"></i>
                        </div>
                        <h2>Projecten</h2>
                        <div class="arrow next">
                            <i class="icon icon-chevron-right"></i>
                        </div>
                    </div>
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach($restorations as $restoration)
                                @php
                                    $date = strtotime($restoration->created_at)
                                @endphp
                                <div class="swiper-slide">
                                    <a href="{{ route('restoration.show', ['name' => $restoration->getSlug()]) }}"
                                       class="object">
                                        <img
                                            src="/storage/uploads/{{ $restoration->medias->first() ? $restoration->medias->first()->uuid : '' }}"
                                            alt="{{ $restoration->medias->first() ? $restoration->medias->first()->alt_text : ''}}">
                                        <div class="details">
                                            <i class="icon-tools"></i>
                                            <div class="text">
                                                <p>{{ $restoration->title }}</p>
                                                <span>{{ date('M d, Y',$date) }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach()
                        </div>
                    </div>
                    <div class="btn-wrapper">
                        <a href="{{ route('restorations') }}" class="btn yellow">BEKIJK ALLE RESTAURATIES</a>
                    </div>
                </div>
            </section>
        @endif
    </section>

@stop
