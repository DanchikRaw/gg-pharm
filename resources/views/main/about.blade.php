@extends("layouts.main")
@section("title")
    Green Grow Pharmaceuticals | Who we are
@endsection
@section("content")
    <section class="about-page">
        <div class="container">
            <a href="/" class="back-btn">{{__('landing.back_btn')}}</a>
            <div class="row row-justify-between">
                <div class="col col-8 col-m-12 col-m-margin-b">
                    <div class="title-2 about-page__title">{{__('landing.who_title')}}</div>
                    <div class="row about-page__text-wrap">
                        <div class="col col-6 col-s-12">
                            <p class="text about-page__text">{{__('landing.who_text-1')}}</p>
                            <p class="text about-page__text">{{__('landing.who_text-2')}}</p>
                        </div>
                        <div class="col col-6 col-s-12">
                            <p class="text about-page__text">{{__('landing.who_text-3')}}</p>
                            <p class="text about-page__text">{{__('landing.who_text-4')}}</p>
                        </div>
                    </div>
                    <div class="profit-about about-page__profit">
                        <span class="title-3 profit-about__text">{{__('landing.profit-about')}}</span>
                        <a href="#" class="button">{{__('landing.learn_more')}}</a>
                    </div>
                    <p class="text about-page__clear">{{__('landing.who_clean')}}</p>
                    <div class="about-page__cam">
                        <img src="images/about-page/camera.svg" alt="camera" class="about-page__cam-img">
                        <p class="about-page__cam-text text">{{__('landing.who_cam')}}</p>
                    </div>
                </div>
                <div class="col col-4 col-m-12">
                    <div class="about-page__img-wrap">
                        <img src="images/about-page/img_1.png" alt="Farm cannabis" class="about-page__img">
                        <img src="images/about-page/img_2.png" alt="Farm cannabis 2" class="about-page__img_sm">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
