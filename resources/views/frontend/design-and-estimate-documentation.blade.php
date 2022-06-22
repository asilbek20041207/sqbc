@extends('frontend.layout', ['title' => 'Проектно-сметная документация', 'page' => 'servicesSection'])

@section('content')
    <section class="introduction-section container-fluid">
        <div class="introduction"
             style="background: url('/assets/img/servicesSection/three-intro.jpg') no-repeat; background-size: cover;">
            <div class="title-absolute">
                <a href="/">{{ __('dictionary.home') }}</a>
                <img src="/assets/img/servicesSection/servicesSection.svg" alt="">
                <a>{{ __('dictionary.design_and_estimate_documentation') }}</a>
            </div>
            <div class="title">
                <h1>{{ __('dictionary.design_and_estimate_documentation') }}</h1>
                <p>{{ __('dictionary.service_page2_text') }}</p>
            </div>
        </div>
    </section>
    <section class="whymeasurment-section container-fluid">
        <div class="box-text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
            <h2>{{ __('dictionary.service_page2_title') }}</h2>
            <p>{{ __('dictionary.service_page2_subtitle') }}</p>
            <h3>{{ __('dictionary.section6_list_title') }}</h3>
            <div class="cross-p">
                <div class="box">
                    <p>01</p>
                    <p>{{ __('dictionary.section6_list_item1') }}</p>
                </div>
                <div class="box">
                    <p>02</p>
                    <p>{{ __('dictionary.section6_list_item2') }}</p>
                </div>
                <div class="box">
                    <p>03</p>
                    <p>{{ __('dictionary.section6_list_item3') }}</p>
                </div>
            </div>
        </div>
        <div class="box-img col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
            <img src="/assets/img/servicesSection/3.jpg" alt="staff">
        </div>
        <div class="text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
            <h2></h2>
        </div>
        <div class="textunderImg col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
            <p>{{ __('dictionary.service_page2_image_caption') }}</p>
        </div>
    </section>
    <section class="column-section container-fluid mb-5">
        <div class="box box-one col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <h4>{{ __('dictionary.service_page2_list_title') }}</h4>
        </div>
        <div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="circle">
                <img src="/assets/img/index/circleRed.svg" alt="">
                <p>01</p>
            </div>
            <h3>{{ __('dictionary.service_page2_list_item1') }}</h3>
        </div>
        <div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="circle">
                <img src="/assets/img/index/circleRed.svg" alt="">
                <p>02</p>
            </div>
            <h3>{{ __('dictionary.service_page2_list_item2') }}</h3>
        </div>
        <div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="circle">
                <img src="/assets/img/index/circleRed.svg" alt="">
                <p>03</p>
            </div>
            <h3>{{ __('dictionary.service_page2_list_item3') }}</h3>
        </div>
    </section>
    <section class="orange-section container-fluid">
		<div class="orange col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
			<div class="box">
				<img src="/assets/img/servicesSection/orangePic1.svg" alt="">
				<p>{{ __('dictionary.service_page1_adv1') }}</p>
			</div>
			<div class="box ">
				<img src="/assets/img/servicesSection/orangePic2.svg" alt="">
				<p>{{ __('dictionary.service_page1_adv2') }}</p>
			</div>
			<div class="box">
				<img src="/assets/img/servicesSection/orangePic3.svg" alt="">
				<p>{{ __('dictionary.service_page1_adv3') }}</p>
			</div>
			<div class="box">
				<img src="/assets/img/servicesSection/orangePic4.svg" alt="">
				<p>{{ __('dictionary.service_page1_adv4') }}</p>
			</div>
		</div>
		<div class="absolut col-xl-10">
			<div class="img">
				<img src="/assets/img/servicesSection/formimgThree.jpg" alt="partners">
			</div>
			<div class="form d-flex flex-column justify-content-center">
				<h3>{{ __('dictionary.form_title') }}</h3>
				<form action="{{ asset('assets/libraries/kiranosend/kiranosend.php') }}" method="POST">
					<input type="hidden" name="page" value="Проектно-сметная документация">
					<div class="form-box">
						<label style="width: 100%">{{ __('dictionary.form_label1') }}
							<input type="text" name="name" class="phonenumber mt-2"
								placeholder="{{ __('dictionary.form_placeholder1') }}" required>
						</label>
					</div>
					<div class="form-box">
						<label style="width: 100%">{{ __('dictionary.form_label2') }}
							<input type="tel" name="phone" class="phonenumber mt-2 phonemask" placeholder="+998" required>
						</label>
					</div>
					<button type="submit">Отправить запрос <img src="/assets/img/index/Arrow2RightOrange.svg"
							alt=""></button>
				</form>
			</div>
		</div>
	</section>
@endsection
