import './bootstrap';
import './../css/app.css'
import './../css/media.css'
import 'animate.css';

function tabs() {
    let buttons = document.querySelectorAll('.tab-js');

    function clear() {
        buttons.forEach((elem) => elem.classList.remove('tabs__menu-item_active'));
        let blocks = document.querySelectorAll('.tab-block-js');
        blocks.forEach((elem) => {
            elem.classList.remove('animate__fadeIn')
            elem.style.display = 'none';
        });
    }

    if (buttons) {
        buttons.forEach(function (elem) {
            elem.addEventListener('click', function () {
                let attr = this.getAttribute('data-tab');
                if (!this.classList.contains('tabs__menu-item_active')) {
                    clear();
                    this.classList.add('tabs__menu-item_active');
                    let block = document.getElementById(attr);
                    fadeIn(block)
                }
            })
        })
    }
}

tabs()

function fadeIn(elem, display = 'block') {
    elem.style.display = display;
    elem.classList.add('animate__fadeIn');
    elem.classList.remove('animate__fadeOut');
}

function fadeOut(elem, display = 'block') {
    elem.classList.remove('animate__fadeIn');
    elem.classList.add('animate__fadeOut');
    elem.addEventListener('animationend', function () {
        elem.style.display = 'none';
        console.log('ok')
    }, {
        capture: false,
        once: true,
        passive: false
    })
}

function mobileButton() {
    let button = document.querySelector('.mobile-menu-btn-js'),
        block = document.querySelector('.mobile-menu-block-js');

    button.addEventListener('click', function (e) {
        e.preventDefault();
        if (this.classList.contains("is-active") === true) {
            this.classList.remove("is-active")
            fadeOut(block)
        } else {
            this.classList.add("is-active");
            fadeIn(block);
        }
    })
}
mobileButton()

const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 100,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        1000: {
            slidesPerView: 2,
            spaceBetween: 50,
        },
        1520: {
            slidesPerView: 3,

        }
    }
});

function preloader() {

}

function linkMenuScroll() {
    let buttons = document.querySelectorAll('.scroll-menu-js');

    buttons.forEach(function (elem) {
        elem.addEventListener('click', function (e) {
            e.preventDefault();
            let block = this.getAttribute('data-menu');
            block = document.getElementById(block);
            block.scrollIntoView({behavior: "smooth"});
        })
    })
}

linkMenuScroll()
