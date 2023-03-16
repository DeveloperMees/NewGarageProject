@extends('master')

@section('content')
    <div id="show" class="restoration">
        <div id="hero">
            <figure>

                <img src="/img/header.jpg" alt="background">
                <div class="overlay"></div>
                <figcaption>
                    <div class="container-fluid">
                        <h1>{{ $restoration->title }}</h1>
                    </div>
                </figcaption>
            </figure>
        </div>
        <section id="content" style="padding-top: 60px">
            <div class="container-fluid">
                @if($restoration->description != null or '')
                    <div class="content-text">
                        <h2>Informatie</h2>
                        {!! $restoration->description !!}
                    </div>
                @endif
                <div class="row">
                    @foreach($restoration->medias as $image)
                        <div class="col-12 col-md-6 col-lg-3">
                            <a href="/storage/uploads/{{ $image->uuid }}" class="luminous">
                                <img style="width: 100%; margin-bottom: 20px;" src="/storage/uploads/{{ $image->uuid }}"
                                     alt="">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@stop
