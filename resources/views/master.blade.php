<!doctype html>
<html lang="nl">
<head>
    @include('partials.head')
</head>

<body>
<div class="popup" style="top: 0;
    position: relative;
    padding: 20px 15px;
    background: #F9C728;">
    <div class="container-fluid">
        <h2 style="color: #2C3146 !important;">Wij zoeken een collega automonteur!
            Heb je interesse bel ons op 0181-414002
        </h2>
    </div>
</div>
@include('partials.header')
<div id="app">

    @yield('content')
</div>
@include('partials.footer')

@section('scripts')
    <script src="pikaday.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
@show
</body>
</html>
