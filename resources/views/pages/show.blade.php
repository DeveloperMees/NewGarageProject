
@extends('master')

@section('content')
    <div id="show">
        @include('partials.hero')
        <section id="content" class="last-item">
            <div class="container-fluid">
                <div class="content-blok">
                    <h2 class="title">{{ $page->title }}</h2>
                    {!! $page->description !!}
                </div>
            </div>
        </section>
    </div>
@stop
