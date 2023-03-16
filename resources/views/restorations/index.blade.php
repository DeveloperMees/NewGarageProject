@extends('master')

@section('content')
    <div id="show" class="restorations">
        <div id="hero">
            <figure>

                <img src="/img/header.jpg" alt="background">
                <div class="overlay"></div>
                <figcaption>
                    <div class="container-fluid">
                        <h1>Alle restauraties</h1>
                    </div>
                </figcaption>
            </figure>
        </div>
        <section id="restoration">

            <div class="container-fluid">
                <div class="row">
                    @foreach($restorations as $restoration)
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <a href="{{ route('restoration.show', ['name' => $restoration->getSlug()]) }}"
                               class="object">
                                <img
                                    src="/storage/uploads/{{ $restoration->medias->first() ? $restoration->medias->first()->uuid : '' }}"
                                    alt="{{ $restoration->medias->first()->alt_text }}">
                                <div class="details">
                                    <i class="icon-tools"></i>
                                    <div class="text">
                                        <p>{{ $restoration->title }}</p>
                                        <span>07/10/2022</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach()
                </div>
            </div>
        </section>
    </div>
@stop
