@extends('master')

@section('content')
    <div id="hero">
        <figure>

            <img src="/img/header.jpg" alt="background">
            <div class="overlay"></div>
            <figcaption>
                <div class="container-fluid">
                    <h1>Aanbod auto's</h1>
                </div>
            </figcaption>
        </figure>
    </div>

    <section id="cars">
        <div class="container-fluid">
            <h1></h1><span class="amount"></span>
            <h1>Auto's :</h1><span class="amount">({{ $cars->count() }})</span>

            @if ($cars->count())
                <div class="row properties">
                    @foreach($cars as $car)
                        <div class="col-12 col-md-6 col-lg-4 car-holder">
                            @include('cars.partials.car', ['car' => $car])
                        </div>
                    @endforeach
                </div>
            @else
                <div id="messages">
                    <div class="message info">
                        Er zijn helaas geen auto's gevonden.
                    </div>
                </div>
            @endif

        </div>

    </section>
@stop
