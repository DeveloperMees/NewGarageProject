@extends('master')


@section('content')
    <div id="car">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-7 col-xl-8">
                    <div id="car-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                @foreach($car->medias as $image)
                                    <div class="swiper-slide">
                                        <img src="/storage/uploads/{{ $image ? $image->uuid : '' }}"
                                             alt="{{ $car->title }}">
                                    </div>
                                @endforeach
                            </div>

                            <div class="swiper-button-prev"><i class="icon icon-chevron-left"></i></div>
                            <div class="swiper-button-next"><i class="icon icon-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 offset-md-3 col-lg-5 offset-lg-0 col-xl-4">
                    <div id="info">
                        <div class="top">
                            <h1>{{ $car->title }}</h1><br>

                            <h3 class="price">€ {{ $car->price}}</h3>
                        </div>
                        <div class="bottom">
                            <h3>Interesse?</h3>
                            <p>Neem contact met ons op!</p>

                            <div class="row">
                                <div class="col-12">
                                    <p>
                                        <b>T:</b> <a href="tel:+0181 414002">0181 414002</a><br/>
                                        <b>E:</b> <a
                                            href="mailto:garageboekestijn@yahoo.com">garageboekestijn@yahoo.com</a><br/>
                                    </p>
                                </div>
                            </div>
                            <a href="#contact" class="btn text-black">Neem contact met ons op</a>
                        </div>
                    </div>
                </div>
            </div>

            <section id="omschrijving">
                <div class="row">
                    <div class="col-12 col-lg-5 col-xl-4">
                        <h2>Opmerkingen</h2>
                    </div>

                    <div class="col-12 col-lg-7 col-xl-8">
                        <div class="text">
                            {!! nl2br($car->description) !!}
                        </div>
                        <a href="#" class="read-more"><i class="icon icon-plus-circle"></i> Lees meer</a>
                    </div>
                </div>
            </section>


            <section id="details">
                <div class="row">
                    <div class="col-12">
                        <h2>Kenmerken</h2>
                        <div class="row details">
                            <div class="col-12 col-lg-6">
                                <h3>Occasion gegevens</h3>
                                <dl>
                                    <dt>Brandstof:</dt>
                                    <dd>
                                        {{ $car->fuel }}
                                    </dd>
                                    <dt>Aantal deuren:</dt>
                                    <dd>{{ $car->doors }}</dd>
                                    <dt>Transmissie:</dt>
                                    <dd>{{ $car->transmission }}</dd>
                                    <dt>Kleur:</dt>
                                    <dd>{{ $car->color }}</dd>
                                    <dt>Kilometerstand:</dt>
                                    <dd>{{ $car->mileage }} km</dd>
                                    <dt>Bouwjaar:</dt>
                                    <dd>{{ $car->construction_year }}</dd>
                                    <dt>Daum deel 1:</dt>
                                    <dd>{{ $car->date }}</dd>
                                    <dt>BTW Aftrekbaar:</dt>
                                    <dd>{{ $car->btw }}</dd>
                                </dl>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h3>Technische specificaties</h3>
                                <dl>
                                    <dt>Aantal cilinders:</dt>
                                    <dd>
                                        {{ $car->cylinder }}
                                    </dd>
                                    <dt>Motorinhoud:</dt>
                                    <dd>{{ $car->engine_size }}cc</dd>
                                    <dt>Vermogen:</dt>
                                    <dd>{{ $car->power }}Pk</dd>
                                    <dt>Gewicht:</dt>
                                    <dd>{{ $car->weight }}Kg</dd>

                                </dl>
                                <h3>Aanwezige opties</h3>
                                {!! $car->options !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @if(count($car->medias))
                <section id="fotos">
                    <div class="row">
                        <div class="col-12">
                            <h2>Foto's</h2>
                            <div class="row">
                                @foreach($car->medias as $foto)
                                    <div class="col-6 col-md-4 col-lg-3 foto">
                                        <a href="/storage/uploads/{{ $foto->uuid }}" target="_blank" class="luminous"
                                           title="{{ $car->title }}">
                                            <img src="/storage/uploads/{{ $foto->uuid }}"
                                                 alt="{{ $car->title }}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            @endif


            <section id="contact" class="last-item">
                <div class="container-fluid">
                    <div class="form">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <h2>Neem contact met ons op!</h2>
                                {{-- <p>Vul uw gegevens in en wij nemen zo spoedig mogelijk contact met u op.</p> --}}
                            </div>
                            <div class="col-12 col-lg-8">
                                <form method="POST" action="">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <input placeholder="Naam *" name="name" type="text" value="">
                                            <input placeholder="Telefoonnummer *" name="phone" type="text" value="">
                                            <input placeholder="E-mailadres *" name="email" type="email" value="">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <textarea placeholder="Uw vraag *" rows="6" name="msg" cols="50"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-8">
                                            <div class="container-fluid">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="true" name="avg" id="checkVoorwaarden" required="">
                                                        <label class="form-check-label" for="checkVoorwaarden">
                                                            Ik ga akkoord met de <a href="https://www.edhm.nl/privacy-statement">privacyverklaring</a>.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <button class="btn text-black">Versturen</button>

                                        </div>
                                    </div>


                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@stop

