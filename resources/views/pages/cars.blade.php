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
            <iframe id="myiFrame" style="color: black !important; width: 100%; height: 900px"
                    src="https://occasionsv3.customerconnect.nl/isapi/ccdbv3.dll?site_id=2995&theme=garageboekestijn&orderby=merk,model,uitvoering" frameborder="0"></iframe>
        </div>
    </section>
@stop


