import './bootstrap';
import './../css/app.css'
import './../css/media.css'
import 'animate.css';

function ajaxAsync({url, method, data, success, headers}) {
    let xhr = new XMLHttpRequest();

    xhr.open(method, url, true);
    if (headers) {
        xhr.setRequestHeader(headers[0], headers[1]);
    }
    if (data) {
        if(typeof data === 'string') {
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        }
        xhr.send(data)
    } else {
        xhr.send()
    }

    if (success) {
        xhr.addEventListener('load', function () {
            if (this.readyState === 4 && this.status === 200) {
                success(this.responseText);
            }
        });
    }

    return xhr;
}

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
mobileButton();

new Swiper('.swiper', {
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
            loop: true,
        },
        1520: {
            slidesPerView: 3,
            loop: false,
        }
    }
});

function preloader() {
    setTimeout(function () {
        let preloader = document.querySelector('.preloader-js');
        fadeOut(preloader)
    }, 2000)
    // window.addEventListener('load', function () {
    //     let preloader = document.querySelector('.preloader-js');
    //     fadeOut(preloader)
    // })
}

preloader();

function linkMenuScroll() {
    let buttons = document.querySelectorAll('.scroll-menu-js');

    buttons.forEach(function (elem) {
        elem.addEventListener('click', function (e) {
            e.preventDefault();
            let attr = this.getAttribute('data-menu');
            let block = document.getElementById(attr);
            if (!block) {
                location.href = '/#' + attr;
            }
            block.scrollIntoView({behavior: "smooth"});
        })
    })
}

linkMenuScroll();

function getCsrf() {
    let elem = document.querySelector('meta[name="csrf-token"]')

    return elem.getAttribute('content');
}

function contactForm() {
    let form = document.querySelector('.contacts-form-js');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            let values = new FormData(this);
            grecaptcha.ready(function() {
                grecaptcha.execute('6Lc-oQ8kAAAAAKV0kJwWZbv0YQ6PzsGh3VqGQFxB', {action: 'submit'}).then(function(token) {
                    ajaxAsync({
                        url: this.action,
                        method: 'POST',
                        data: values,
                        success,
                        headers: ['X-CSRF-TOKEN', getCsrf()]
                    })

                    function success(data) {
                        data = JSON.parse(data);
                        if (data.status) {
                            let popup = document.querySelector('.contact-popup');
                            fadeIn(popup, 'flex')
                            let close = document.querySelector('.contact-popup__close')
                            close.addEventListener('click', function () {
                                fadeOut(popup);
                            })
                        }
                    }
                });
            });

        })
    }
}

contactForm();

function customSelect() {
    let btn = document.querySelector('.custom-select');

    if (btn) {
        btn.addEventListener('click', function () {
            let status = this.getAttribute('data-open')
            let block = btn.nextElementSibling;

            if (status === 'false') {
                fadeIn(block, 'flex')
                this.setAttribute('data-open', 'true')
            } else {
                fadeOut(block)
                this.setAttribute('data-open', 'false')
            }
        })
    }
}

customSelect()




