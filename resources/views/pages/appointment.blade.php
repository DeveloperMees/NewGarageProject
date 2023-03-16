@extends('master')

@section('content')
    <div id="show" class="appointment">
        <div id="hero">
            <figure>

                <img src="/img/header.jpg" alt="background">
                <div class="overlay"></div>
                <figcaption>
                    <div class="container-fluid">
                        <h1>Afspraak maken</h1>
                    </div>
                </figcaption>
            </figure>
        </div>
        <section id="content" class="last-item">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="form-blok">
                            <h2>Wil je een afspraak maken?</h2>
                            <p>Vul het onderstaande formulier in om een afspraak te maken</p>
                            @include('flash::message')

                            <form method="POST" action="{{ route('appointment.send') }}">

                                @csrf
                                <input placeholder="Naam *" class="form-control" id="name" name="name" type="text"
                                       value="">
                                @error('name')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <input placeholder="Telefoonnummer *" class="form-control" id="phone" name="phone"
                                       type="text" value="">
                                @error('phone')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <input placeholder="E-mailadres *" class="form-control" id="email" name="email"
                                       type="email" value="">
                                @error('email')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <input placeholder="Kenteken *" class="form-control" id="name" name="plate" type="text"
                                       value="">
                                @error('plate')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <select class="form-control" name="job" id="job">
                                    <option value="">Reden voor afspraak</option>
                                    <option value="Apk">Apk</option>
                                    <option value="apk">Geen van bovenstaande</option>
                                </select>
                                @error('job')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <input placeholder="De gewenste datum *" autocomplete="off" class="form-control" type="text" id="fecha"
                                       name="date"/>
                                @error('date')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <div><textarea placeholder="Opmerkingen" rows="6" class="form-control" id="msg"
                                               name="msg" cols="50"></textarea></div>
                                <div class="row bottom">
                                    <div class="col-12 col-md-8">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <div class="container-fluid">
                                                    <input class="form-check-input" style="width: auto;" type="checkbox"
                                                           value="true" name="avg" id="checkVoorwaarden" required="">
                                                </div>
                                                <label class="form-check-label" for="checkVoorwaarden">
                                                    Ik ga akkoord met de privacyverklaring.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <button class="btn yellow">
                                            Versturen
                                        </button>

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
