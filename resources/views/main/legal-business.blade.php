@extends("layouts.main")
@section("title")
    Green Grow Pharmaceuticals | Who we are
@endsection
@section("content")
    <section class="legal-business">
        <div class="container">
            <a href="/" class="back-btn">{{__('landing.back_btn')}}</a>
            <div class="row">
                <div class="col col-6">
                    <h2 class="title-2 legal-business__title">{{__('landing.legal_title')}}</h2>
                    <div class="legal-business__text">
                        <p class="text legal-business__phar">{{__('landing.legal_text-1')}}</p>
                        <p class="text legal-business__phar">{{__('landing.legal_text-2')}}</p>
                        <p class="text legal-business__phar">{{__('landing.legal_text-3')}}</p>
                        <p class="text legal-business__phar">{{__('landing.legal_text-4')}}</p>
                    </div>
                    <div class="profit-about">
                        <span class="title-3 profit-about__text">{{__('landing.profit-about')}}</span>
                        <a href="#" class="button">{{__('landing.learn_more')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
