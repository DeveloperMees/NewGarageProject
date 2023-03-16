@extends('master')

@section('content')
    <div id="contact-pagina">
        {{--        @include('partials.hero')--}}
        <section id="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2462.4334793789913!2d4.160592015935643!3d51.88955299051008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c44d8a037dd327%3A0x84dc91abda3658f3!2sAutomobiel-%20en%20Garagebedrijf%20Boekestijn!5e0!3m2!1snl!2snl!4v1665070001549!5m2!1snl!2snl"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>
        <section id="content" class="last-item">

            <div class="container-fluid pt-5">
                <div class="row wrapper">
                    <div class="col-12 col-lg-4 left">
                        <div class="text">
                            <h2>Adresgegevens</h2>
                            <p><b>Boekestijn Brielle</b><br>
                                't Woud 3 <br>
                                3232 LN Brielle
                            </p>
                            <dl>
                                <dt>Telefoon</dt>
                                <dd><a href="tel:+0181 414002">0181 414002</a></dd>
                                <dt>Email</dt>
                                <dd>
                                    <a href="mailto:garageboekestijn@yahoo.com">garageboekestijn@yahoo.com</a>
                                </dd>
                            </dl>

                            <h3>Openingstijden</h3>
                            <dl>
                                <dt style="display: block !important;">Ma - vr</dt>
                                <dd style="white-space: nowrap;">9:00u - 18:00u</dd>
                                <dt style="display: block !important;">Zaterdag</dt>
                                <dd style="white-space: nowrap;">10:00u - 16:00u</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 right">
                        <div class="form">
                            <h2>Neem contact met ons op!</h2>
                            <p>Vul je gegevens in en wij nemen zo spoedig mogelijk contact met je op.</p>
                            @include('flash::message')

                            <form method="POST" action="{{ route('boekestijn.send') }}">
                                @csrf
                                <input placeholder="Naam *" class="form-control" id="name" name="name" type="text"
                                       value="" >
                                @error('name')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <input placeholder="Telefoonnummer *" class="form-control" id="phone" name="phone"
                                       type="text" value="" >
                                @error('phone')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <input placeholder="E-mailadres *" class="form-control" id="email" name="email"
                                       type="email" value="" >
                                @error('email')
                                <div class="error">{{ $message }}</div>
                                @enderror
                                <div><textarea placeholder="Uw vraag *" rows="6" class="form-control" id="msg"
                                               name="msg" cols="50" ></textarea></div>
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

