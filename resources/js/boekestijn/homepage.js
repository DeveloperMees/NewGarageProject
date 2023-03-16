import Swiper, {Navigation, Pagination} from 'swiper';

export default class Service {

    constructor() {
        this.serviceSlider();
        this.restorationSlider();
        this.smoothScroll()
        this.removePopuop();
    }

    smoothScroll() {
        const buttons = document.querySelectorAll('.smooth-scroll');

        buttons.forEach(function (el, i) {
            el.addEventListener('click', function (ev) {
                ev.preventDefault();

                let item = document.querySelector(el.getAttribute('href'));
                let offset = item.offsetTop - document.querySelector('header').offsetHeight;

                if (document.querySelector('#property')) {
                    offset -= document.querySelector('#property nav').offsetHeight;
                }
                window.scrollTo({
                    'behavior': 'smooth',
                    'left': 0,
                    'top': offset
                });
            });
        });
    }

    serviceSlider() {
        if (document.querySelector('#homepage #services')) {

            const swiper = new Swiper('#homepage #services .swiper', {
                    modules: [Navigation],

                    sliderPerView: 1,
                    spaceBetween: 20,

                    navigation: {
                        nextEl: '#services .next',
                        prevEl: '#services .prev',
                    },

                    breakpoints: {
                        670: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },

                        980: {
                            slidesPerView: 4,
                            spaceBetween: 30
                        },
                    }
                }
            );
        }
    }

    restorationSlider() {
        if (document.querySelector('#homepage #restoration')) {

            const swiper = new Swiper('#homepage #restoration .swiper', {
                    modules: [Navigation],

                    sliderPerView: 1,
                    spaceBetween: 20,

                    navigation: {
                        nextEl: '#homepage #restoration .next',
                        prevEl: '#homepage #restoration .prev',
                    },

                    breakpoints: {
                        670: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },

                        980: {
                            slidesPerView: 3,
                            spaceBetween: 30
                        },
                    }
                }
            );
        }
    }

    removePopuop() {
        const popup = document.querySelector('.popup');
        const html = document.querySelector('html');
        const close = document.querySelector('.nav-toggle');

        if (popup) {
            close.addEventListener('click', function (ev) {
                ev.preventDefault();
                if (popup.style.display === 'none') {
                    popup.style.display = 'block';
                } else {
                    if (html.style.overflow === 'hidden') {
                        popup.style.display = 'none';
                    } else {
                        popup.remove();
                    }
                }
            });
        }
    }

}
