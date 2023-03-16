<header>

    <div class="container-fluid">
        <a href="{{ route('/') }}" class="logo">
            <img src="/img/boekestijn_logo.png" alt="Logo">
        </a>
        <div class="nav-toggle">
            <div class="nav-btn">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>

        <nav>
            <ul class="navbar-nav">
                @foreach ($pages as $item)
                    @include('partials.navigation')
                @endforeach

                <a href="{{ route('appointment') }}" class="btn yellow">Afspraak maken</a>
            </ul>

        </nav>
    </div>
</header>
