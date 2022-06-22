@extends('frontend.layout', ['title' => 'Технический надзор', 'page' => 'servicesSectionTwo'])

@section('content')
<section class="introduction-section container-fluid">
	<div class="introduction">
		<div class="title-absolute">
			<a href="/">{{ __('dictionary.home') }}</a>
			<img src="/assets/img/servicesSection/servicesSection.svg" alt="">
			<a>{{ __('dictionary.technical_supervision_breadcrumb') }}</a>
		</div>
		<div class="title">
			<h1>{{ __('dictionary.technical_supervision') }}</h1>
			<p>{{ __('dictionary.technical_supervision_text') }}</p>
		</div>
	</div>
</section>
<section class="whymeasurment-section container-fluid">
	<div class="box-text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<h2>{{ __('dictionary.service_page3_title') }}</h2>
		<p>{{ __('dictionary.service_page3_text') }}</p>
		<h3>{{ __('dictionary.service_page3_list_title') }}</h3>
		<div class="cross-p">
			<div class="box">
				<img src="/assets/img/servicesSection/circleSecTwo.svg" alt="">
				<p>{{ __('dictionary.service_page3_list_item1') }}</p>
			</div>
			<div class="box">
				<img src="/assets/img/servicesSection/circleSecTwo.svg" alt="">
				<p>{{ __('dictionary.service_page3_list_item2') }}</p>
			</div>
			<div class="box">
				<img src="/assets/img/servicesSection/circleSecTwo.svg" alt="">
				<p>{{ __('dictionary.service_page3_list_item3') }}</p>
			</div>
			<div class="box">
				<img src="/assets/img/servicesSection/circleSecTwo.svg" alt="">
				<p>{{ __('dictionary.service_page3_list_item4') }}</p>
			</div>
		</div>
	</div>
	<div class="box-img col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<img src="/assets/img/servicesSection/img-measuementTwo.png" alt="staff">
	</div>
	<div class="text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<div class="line"></div>
		<h2>{{ __('dictionary.section4_title') }}</h2>
	</div>
	<div class="textunderImg col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<p>{{ __('dictionary.section4_text') }}</p>
	</div>
</section>
<section class="column-section container-fluid">
	<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<div class="circle">
			<img src="/assets/img/index/circleRed.svg" alt="">
			<p>01</p>
		</div>
		<h2>{{ __('dictionary.section5_title1') }}</h2>
		<h3>{{ __('dictionary.section5_subtitle1') }}</h3>
	</div>
	<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<div class="circle">
			<img src="/assets/img/index/circleRed.svg" alt="">
			<p>02</p>
		</div>
		<h2>{{ __('dictionary.section5_title2') }}</h2>
		<h3>{{ __('dictionary.section5_subtitle2') }}</h3>
	</div>
	<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<div class="circle">
			<img src="/assets/img/index/circleRed.svg" alt="">
			<p>03</p>
		</div>
		<h2>{{ __('dictionary.section5_title3') }}</h2>
		<h3>{{ __('dictionary.section5_subtitle3') }}</h3>
	</div>
	<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<div class="circle">
			<img src="/assets/img/index/circleRed.svg" alt="">
			<p>04</p>
		</div>
		<h2>{{ __('dictionary.section5_title4') }}</h2>
		<h3>{{ __('dictionary.section5_subtitle4') }}</h3>
	</div>
</section>
<section class="hoWorkExpert-section container-fluid">
	<h3>{{ __('dictionary.section7_title') }}</h3>
	<div class="boxes_expert">
		<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			<img src="/assets/img/index/checklists1.svg" alt="">
			<p>{{ __('dictionary.section7_item1') }}</p>
		</div>
		<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			<img src="/assets/img/index/teamwork1.svg" alt="">
			<p>{{ __('dictionary.section7_item2') }}</p>
		</div>
		<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			<img src="/assets/img/index/engineer1.svg" alt="">
			<p>{{ __('dictionary.section7_item3') }}</p>
		</div>
		<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			<img src="/assets/img/index/emptyChecklist.svg" alt="">
			<p>{{ __('dictionary.section7_item4') }}</p>
		</div>
	</div>
	<h4>{{ __('dictionary.section8_title') }}</h4>
	<h5>{{ __('dictionary.section8_subtitle') }}</h5>
	<div class="map">
		<script type="text/javascript" charset="utf-8" async
			src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8f2df010c6d773c7a280d4d813d04fc18e69694de0239d775832432dc798e158&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true">
		</script>
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
				<input type="hidden" name="page" value="Технический надзор">
				<div class="form-box">
					<label style="width: 100%">{{ __('dictionary.form_label1') }}
						<input type="text" name="name" class="phonenumber mt-2"
							placeholder="{{ __('dictionary.form_placeholder1') }}" required>
					</label>
				</div>
				<div class="form-box">
					<label style="width: 100%">{{ __('dictionary.form_label2') }}
						<input type="tel" pattern="[+]{1}[8-9]{3} [0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}" name="phone" class="phonenumber mt-2 phonemask" placeholder="+998" required>
					</label>
				</div>
				<button type="submit">Отправить запрос <img src="/assets/img/index/Arrow2RightOrange.svg"
						alt=""></button>
			</form>
		</div>
	</div>
</section>
@endsection