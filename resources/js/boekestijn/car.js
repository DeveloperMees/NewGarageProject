// import Glide from '@glidejs/glide';
import Luminous, { LuminousGallery } from 'luminous-lightbox';
import Swiper, {Navigation, Pagination} from 'swiper';

export default class Car {

    constructor() {
        this.detailSlider();
        this.readmore();
        this.luminous();
    }

    detailSlider() {
        if (document.querySelector('#car #car-slider')) {


            const swiper = new Swiper('#car #car-slider .swiper-container', {
                modules: [Navigation],
                sliderPerView: 1,

                navigation: {
                    nextEl: '#car-slider .swiper-button-next',
                    prevEl: '#car-slider .swiper-button-prev',
                },
            });

        }
    }

    readmore() {
        if (document.querySelector('#car')) {
            const text = document.querySelector('#omschrijving .text');
            const height = text.offsetHeight;
            const readmore = document.querySelector('#omschrijving .read-more');

            // Set height of description
            text.style.height = '285px';

            readmore.addEventListener('click', function(ev) {
                ev.preventDefault();

                text.style.height = height + 'px';

                readmore.style.display = 'none';
            });
        }
    }

    luminous() {
        new LuminousGallery(document.querySelectorAll('#fotos .foto .luminous'));
        new LuminousGallery(document.querySelectorAll('#plattegronden .foto .luminous'));
    }
}
