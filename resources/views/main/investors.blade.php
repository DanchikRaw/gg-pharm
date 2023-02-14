@extends("layouts.main")
@section("title")
    Green Grow Pharmaceuticals | Investors
@endsection
@section("content")
    <section class="investors">
        <img src="images/investors/img.webp" alt="" class="investors__cannabis">
        <div class="container">
            <a href="/" class="back-btn">{{__('landing.back_btn')}}</a>
            <div class="row row-justify-between">
                <div class="col col-7 col-m-12 col-m-margin-b">
                    <div class="title-2 investors__title">{{__('landing.investors_title')}}</div>
                    <div class="row">
                        <div class="col col-6 col-m-12">
                            <p class="text investors__phar">{{__('landing.investors_text-1')}}</p>
                            <p class="text investors__phar">{{__('landing.investors_text-2')}}</p>
                        </div>
                    </div>
                    <div class="profit-about">
                        <span class="title-3 profit-about__text">{{__('landing.profit-about')}}</span>
                        <a href="#" class="button">{{__('landing.learn_more')}}</a>
                    </div>
                </div>
                <div class="col col-5 col-m-12">
                    <img src="images/g_word.svg" alt="" class="investors__g">
                </div>
            </div>
        </div>
    </section>
@endsection
