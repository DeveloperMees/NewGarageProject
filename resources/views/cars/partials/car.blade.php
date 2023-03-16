<a href="{{ route('car.show', ['id' => $car->id]) }}" class="car">
    <figure>
        <img src="/storage/uploads/{{ $car->medias->first() ? $car->medias->first()->uuid : '' }}" alt="">
        <figcaption>
            <h3 class="title">{{ $car->title}}</h3>
            <h4 class="price">€ {{ $car->price }}</h4>

            <div class="footer">
                <span>{{ $car->construction_year }}</span>
                <span>{{ $car->mileage }} km</span>
                <span>{{ $car->fuel }}</span>
            </div>
        </figcaption>
    </figure>

</a>
