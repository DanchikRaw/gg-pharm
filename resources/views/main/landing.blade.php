@extends("layouts.main")
@section("title")
    Green Grow Pharmaceuticals | Cannabis
@endsection

@section("content")
    <section class="start">
        <div class="container start__container">
            <div class="row row-justify-end">
                <div class="col col-6 col-xxl-8 col-m-12">
                    <div class="start__text-wrap">
                        <h2 class="start__title title-1">{{__('landing.start_title')}}</h2>
                        <a class="button" href="/#making">{{__('landing.learn_more')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row row-align-center">
                <div class="col col-4 col-m-12 col-m-margin-b">
                    <h3 class="title-2 about__title">{{__('landing.about_title')}}</h3>
                    <h4 class="title-3 about__sub-title">Green Grow Pharmaceuticals</h4>
                    <p class="text about__text">{{__('landing.about_text')}}</p>
                    <a class="button button_yellow" href="/about">{{__('landing.learn_more')}}</a>
                </div>
                <div class="col col-8 col-m-12">
                    <img src="images/about/img_{{__('landing.this_lang')}}.webp" alt="about us" class="about__img">
                </div>
            </div>
        </div>
    </section>
    <section class="tabs">
        <div class="container tabs__container">
            <div class="tabs__green"></div>
            <div class="tabs__block">
                <div class="tabs__menu">
                    <div class="tab-js tabs__menu-item" data-tab="tab_one">{{__('landing.tabs_menu_1')}}</div>
                    <div class="tab-js tabs__menu-item tabs__menu-item_active" data-tab="tab_two">{{__('landing.tabs_menu_2')}}</div>
                    <div class="tab-js tabs__menu-item" data-tab="tab_three">{{__('landing.tabs_menu_3')}}</div>
                    <div class="tab-js tabs__menu-item" data-tab="tab_four">{{__('landing.tabs_menu_4')}}</div>
                </div>
                <div class="tabs__content">
                    <div class="tabs__item tab-block-js animate__animated" id="tab_one">
                        <div class="row tabs__row row-justify-around">
                            <div class="col col-5 col-m-12 col-m-margin-b">
                                <h4 class="title-3 tabs__title">{{__('landing.tabs_1_title')}}</h4>
                                <p class="text tabs__text">{{__('landing.tabs_1_text_1')}}</p>
                                <p class="text tabs__text">{{__('landing.tabs_1_text_2')}}</p>
                            </div>
                            <div class="col col-5 col-m-12">
                                <p class="text tabs__text">{{__('landing.tabs_1_text_3')}}</p>
                                <p class="text tabs__text">{{__('landing.tabs_1_text_4')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__item tab-block-js animate__animated tabs__item_active" id="tab_two">
                        <div class="row tabs__row row-justify-around">
                            <div class="col col-5 col-m-12 col-m-margin-b">
                                <p class="text tabs__text">{{__('landing.tabs_2_text_1')}}</p>
                                <p class="text tabs__text">{{__('landing.tabs_2_text_2')}}</p>
                                <a href="#" class="button">{{__('landing.learn_more')}}</a>
                            </div>
                            <div class="col col-5 col-m-12">
                                <img src="images/tabs/canna.webp" alt="cannabis" class="tabs__img">
                            </div>
                        </div>
                    </div>
                    <div class="tabs__item tab-block-js animate__animated" id="tab_three">
                        <div class="row row-justify-around">
                            <div class="col col-5 col-m-12 col-m-margin-b">
                                <img src="images/tabs/thai.webp" alt="cannabis" class="tabs__img">
                            </div>
                            <div class="col col-5 col-m-12">
                                <div class="text tabs__text">
                                    <p class="text tabs__text">{{__('landing.tabs_3_text_1')}}</p>
                                    <p class="text tabs__text">{{__('landing.tabs_3_text_2')}}</p>
                                    <p class="text tabs__text">{{__('landing.tabs_3_text_3')}}</p>
                                </div>
                                <a href="{{ route('legal') }}" class="button">{{__('landing.learn_more')}}</a>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__item tab-block-js animate__animated" id="tab_four">
                        <div class="row tabs__row row-justify-around">
                            <div class="col col-5 col-m-12 col-m-margin-b">
                                <div class="text tabs__text">
                                    <p class="text tabs__text">{{__('landing.tabs_4_text_1')}}</p>
                                    <p class="text tabs__text">{{__('landing.tabs_4_text_2')}}</p>
                                    <p class="text tabs__text">{{__('landing.tabs_4_text_3')}}</p>
                                </div>
                                <a href="#" class="button">{{__('landing.learn_more')}}</a>
                            </div>
                            <div class="col col-5 col-m-12">
                                <img src="images/tabs/map.webp" alt="cannabis" class="tabs__img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="products" class="products">
        <div class="container">
            <div class="product__title title-2">{{__('landing.products_title')}}</div>
            <div class="swiper products__swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide products__slide">
                        <div class="products__yellow"></div>
                        <a href="#" class="products__item">
                            <div class="products__img-wrap">
                                <img src="images/products/icon_1.svg" alt="cannabis" class="products__img">
                            </div>
                            <div class="products__text-wrap">
                                <div class="title-3 products__title">{{__('landing.product_1_title')}}</div>
                                <div class="title-3 products__sub-title">{{__('landing.product_1_text')}}</div>
                                <p class="products__desc text">{{__('landing.product_1_desc')}}</p>
                            </div>
                            <div class="products__btn-wrap">
                                <div class="products__ico-wrap">
                                    <img src="images/products/icons/tea 1 (Traced).png" alt="tea" class="products__ico">
                                    <img src="images/products/icons/food.png" alt="food" class="products__ico">
                                    <img src="images/products/icons/free-icon-cookies-6880442 1 (Traced).png" alt="cookie" class="products__ico">
                                </div>
                                <div class="button button_yellow products__btn">{{__('landing.learn_more')}}</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide products__slide">
                        <div class="products__yellow"></div>
                        <a href="#" class="products__item">
                            <div class="products__img-wrap">
                                <img src="images/products/icon_2.svg" alt="cannabis" class="products__img">
                            </div>
                            <div class="products__text-wrap">
                                <div class="title-3 products__title">{{__('landing.product_2_title')}}</div>
                                <div class="title-3 products__sub-title">{{__('landing.product_2_text')}}</div>
                                <p class="products__desc text">{{__('landing.product_2_desc')}}</p>
                            </div>
                            <div class="products__btn-wrap">
                                <div class="products__ico-wrap">
                                    <img src="images/products/icons/bong 1 (Traced).png" alt="tea" class="products__ico">
                                    <img src="images/products/icons/pipe 1 (Traced).png" alt="food" class="products__ico">
                                    <img src="images/products/icons/free-icon-cigar-1938804 1 (Traced).png" alt="cookie" class="products__ico">
                                </div>
                                <div class="button button_yellow products__btn">{{__('landing.learn_more')}}</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide products__slide">
                        <div class="products__yellow"></div>
                        <a href="#" class="products__item">
                            <div class="products__img-wrap">
                                <img src="images/products/icon_3.svg" alt="cannabis" class="products__img">
                            </div>
                            <div class="products__text-wrap">
                                <div class="title-3 products__title">{{__('landing.product_3_title')}}</div>
                                <div class="title-3 products__sub-title">{{__('landing.product_3_text')}}</div>
                                <p class="products__desc text">{{__('landing.product_3_desc')}}</p>
                            </div>
                            <div class="products__btn-wrap">
                                <div class="products__ico-wrap">
                                    <img src="images/products/icons/pills 1 (Traced).png" alt="tea" class="products__ico">
                                    <img src="images/products/icons/free-icon-mortar-3997278 1 (Traced).png" alt="food" class="products__ico">
                                    <img src="images/products/icons/cbd-oil 1 (Traced).png" alt="cookie" class="products__ico">
                                </div>
                                <div class="button button_yellow products__btn">{{__('landing.learn_more')}}</div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide products__slide">
                        <div class="products__yellow"></div>
                        <a href="#" class="products__item">
                            <div class="products__img-wrap">
                                <img src="images/products/icon_4.svg" alt="cannabis" class="products__img">
                            </div>
                            <div class="products__text-wrap">
                                <div class="title-3 products__title">{{__('landing.product_4_title')}}</div>
                                <div class="title-3 products__sub-title">{{__('landing.product_4_text')}}</div>
                                <p class="products__desc text">{{__('landing.product_4_desc')}}</p>
                            </div>
                            <div class="products__btn-wrap">
                                <div class="products__ico-wrap">
                                    <img src="images/products/icons/tea 1 (Traced).png" alt="tea" class="products__ico">
                                    <img src="images/products/icons/food.png" alt="food" class="products__ico">
                                    <img src="images/products/icons/free-icon-cookies-6880442 1 (Traced).png" alt="cookie" class="products__ico">
                                </div>
                                <div class="button button_yellow products__btn">{{__('landing.learn_more')}}</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="making" class="making">
        <div class="container">
            <div class="row">
                <div class="col col-4 col-m-12 col-m-margin-b">
                    <div class="title-2 making__title">{{__('landing.making_title')}}</div>
                    <div class="making__text">
                        <p class="making__phar text">{{__('landing.making_text_1')}}</p>
                        <p class="making__phar text">{{__('landing.making_text_2')}}</p>
                        <p class="making__phar text">{{__('landing.making_text_3')}}</p>
                        <p class="making__phar text">{{__('landing.making_text_4')}}</b></p>
                    </div>
                </div>
                <div class="col col-8 col-m-12">
                    <div class="row">
                        <div class="col col-8 making__photo-col col-m-6">
                            <img src="images/making/img_1.webp" alt="" class="making__img">
                        </div>
                        <div class="col col-4 making__photo-col col-m-6">
                            <img src="images/making/img_2.webp" alt="" class="making__img">
                        </div>
                        <div class="col col-3 making__photo-col col-m-6">
                            <img src="images/making/img_3.webp" alt="" class="making__img">
                        </div>
                        <div class="col col-5 making__photo-col col-m-6">
                            <img src="images/making/img_4.webp" alt="" class="making__img">
                        </div>
                        <div class="col col-4 making__photo-col col-m-12">
                            <img src="images/making/img_5.webp" alt="" class="making__img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="software">
        <div class="container">
            <div class="row software__row row-justify-between row-align-center">
                <div class="col col-4 col-m-12 col-m-margin-b">
                    <h3 class="title-2 software__title">Global Software</h3>
                    <p class="text software__text">{{__('landing.software_text_1')}}</p>
                    <a href="https://weed-finder.store/" class="button button_yellow">{{__('landing.learn_more')}} Weed Finder</a>
                </div>
                <div class="col col-6 col-m-12">
                    <img class="software__img" src="images/software/telephone.webp" alt="phone weed finder application">
                </div>
            </div>
            <div class="row software__row row-justify-between row-align-center">
                <div class="col col-6 col-m-12 col-m-margin-b">
                    <img class="software__img" src="images/software/laptop.webp" alt="phone weed finder application">
                </div>
                <div class="col col-4 col-m-12">
                    <p class="text software__text">{{__('landing.software_text_2')}}</p>
                    <a href="https://profitonweed.com/" class="button button_yellow">{{__('landing.learn_more')}} Profit-on-Weed</a>
                </div>
            </div>
        </div>
    </section>
    <section id="mission" class="mission">
        <div class="container">
            <h3 class="title-2 mission__title">{{__('landing.mission_title')}}</h3>
            <div class="row row-justify-between">
                <div class="col col-4 col-m-12">
                    <div class="mission__info">
                        <div class="mission__dot"></div>
                        <p class="mission__text text">{{__('landing.mission_1_text')}}</p>
                    </div>
                    <div class="mission__info">
                        <div class="mission__dot"></div>
                        <p class="mission__text text">{{__('landing.mission_2_text')}}</p>
                    </div>
                    <div class="mission__info">
                        <div class="mission__dot"></div>
                        <p class="mission__text text">{{__('landing.mission_3_text')}}</p>
                    </div>
                </div>
                <div class="col col-7 col-m-12">
                    <div class="mission__video-wrap">
                        <img class="mission__word" src="images/g_word.svg" alt="g">
                        <video class="mission__video" width="100%" height="500px" preload="auto" no-controls autoplay loop playsinline muted>
                            <source src="videos/V3NC35A.mov" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="values">
        <div class="container">
            <h3 class="title-2 values__title">{{__('landing.values_title')}}</h3>
            <div class="row">
                <div class="col col-4 col-m-12">
                    <div class="values__text-wrap">
                        <p class="text values__phar">{{__('landing.values_desc_1')}}</p>
                        <p class="values__phar text">{{__('landing.values_desc_2')}}</p>
                        <p class="values__phar text">{{__('landing.values_desc_3')}}</p>
                    </div>
                </div>
                <div class="col col-8 col-m-12">
                    <div class="values__list">
                        <div class="values__item">
                            <div class="values__dot"></div>
                            <div class="values__item-title title-3">{{__('landing.values_1_title')}}</div>
                            <p class="values__item-text">{{__('landing.values_1_text')}}</p>
                        </div>
                        <div class="values__item">
                            <div class="values__dot"></div>
                            <div class="values__item-title title-3">{{__('landing.values_2_title')}}</div>
                            <p class="values__item-text">{{__('landing.values_2_text')}}</p>
                        </div>
                        <div class="values__item">
                            <div class="values__dot"></div>
                            <div class="values__item-title title-3">{{__('landing.values_3_title')}}</div>
                            <p class="values__item-text">{{__('landing.values_3_text')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contacts" class="contacts">
        <div class="container">
            <div class="row">
                <div class="col col-6 col-m-12 col-m-margin-b">
                    <div class="title-2 contacts__title">{{__('landing.contacts_title')}}</div>
                    <p class="text contacts__text">{{__('landing.contacts_desc')}}</p>
{{--                    <div>--}}
{{--                        <a href="tel:+0964691190" class="contacts__info text">+0964691190</a>--}}
{{--                        <a href="#" class="contacts__info text">18, 98 M.6 Soi Sreekor, Kathu, Kathu District, Phuket 83120</a>--}}
{{--                    </div>--}}
                </div>
                <div class="col col-6 col-m-12">
                    <form action="/mail/send" method="POST" class="contacts__form contacts-form-js">
                        @csrf
                        <input required minlength="3" placeholder="{{__('landing.contacts_name')}}" name="name" type="text" class="contacts__input">
                        <input placeholder="{{__('landing.contacts_phone')}}" name="phone" type="text" class="contacts__input">
                        <input placeholder="{{__('landing.contacts_mail')}}" name="email" type="email" class="contacts__input">
                        <div class="contacts__btn-wrap">
                            <button class="button contacts__btn">{{__('landing.contacts_btn')}}</button>
                            <span class="contacts__error">{{__('landing.contacts_error')}}</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-popup animate__animated">
        <div class="close contact-popup__close"></div>
        <div class="contact-popup__text">
            <div class="contact-popup__title title-2">{{__('landing.request_title')}}</div>
            <div class="contact-popup__desc">{{__('landing.request_subtitle')}}</div>
        </div>
    </div>
@endsection
