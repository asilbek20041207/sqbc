@extends('frontend.layout', ['title' => 'SQB Construction - Объявления, вакансии - Партнеры', 'page' => 'advertisement'])

@section('content')
    @if($ads->isNotEmpty())
        <section class="ads container-fluid">
            <div class="ads__content row">
                @foreach($ads as $ad)
                    <div class="col-xl-6 col-lg-6 col-md-10 col-12 my-3">
                        <div class="ads__card">
                            <div class="ads__card-text">
                                <p class="ads__card-p">
                                    {{ $ad['title_' . app()->getLocale()] }}
                                </p>
                                {!! $ad['description_' . app()->getLocale()] !!}
                            </div>
                            <div class="ads__card-btn mt-3">
                                <a href="#popup-ads">
                                    {{ __('dictionary.call_to_us') }}
                                    <img src="/assets/img/navfooter/arroow2right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="popup-ads" class="popup">
                <div class="popup__body">
                    <a href="#header" class="popup__close"><img src="/assets/img/navfooter/burgerXXX.svg" alt=""></a>
                    <div class="popup__form">
                        <div class="content">
                            <form action="{{ asset('assets/libraries/kiranosend/kiranosend.php') }}" method="POST">
                                <h3>{{ __('dictionary.ads_form_title') }}</h3>
                                <p>{{ __('dictionary.ads_form_subtitle') }}</p>
                                <input type="text" name="user_type" value="Консультация" class="hidden">
                                <div class="input">
                                    <label for="popup-ads-name">{{ __('name') }}</label>
                                    <input id="popup-ads-name" type="text" name="user_name" required>
                                </div>
                                <div class="input">
                                    <label for="popup-ads-tel">{{ __('dictionary.your_phone') }}</label>
                                    <input id="popup-ads-tel" type="tel" pattern="[+]{1}[8-9]{3} [0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}" name="user_phone" class="phonenumber" required>
                                </div>
                                <button type="submit" class="btn-default">
                                    <p>{{ __('dictionary.send_request') }}</p>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
