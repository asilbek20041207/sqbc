@extends('frontend.layout', ['title' => 'Контрольный обмер', 'page' => 'servicesSection'])

@section('content')
<section class="introduction-section container-fluid">
	<div class="introduction">
		<div class="title-absolute">
			<a href="{{ route('home') }}">{{ __('dictionary.home') }}</a>
			<img src="/assets/img/servicesSection/servicesSection.svg" alt="">
			<a>{{ __('dictionary.control_measurement_breadcrumb') }}</a>
		</div>
		<div class="title">
			<h1>{{ __('dictionary.control_measurement') }}</h1>
			<p>{{ __('dictionary.control_measurement_text') }}</p>
		</div>
	</div>
</section>
<section class="whymeasurment-section container-fluid">
	<div class="box-text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<h2>{{ __('dictionary.service_page1_title') }}</h2>
		<p>{{ __('dictionary.service_page1_text') }}</p>
		<h3>{{ __('dictionary.service_page1_list_title') }}</h3>
		<div class="cross-p">
			<div class="box">
				<p>01</p>
				<p>{{ __('dictionary.service_page1_list_item1') }}</p>
			</div>
			<div class="box">
				<p>02</p>
				<p>{{ __('dictionary.service_page1_list_item2') }}</p>
			</div>
			<div class="box">
				<p>03</p>
				<p>{{ __('dictionary.service_page1_list_item3') }}</p>
			</div>
		</div>
	</div>
	<div class="box-img col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<img src="/assets/img/index/measurmentjpg.png" alt="staff">
	</div>
	<div class="text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<h2></h2>
	</div>
	<div class="textunderImg col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<p>{{ __('dictionary.service_page1_image_caption') }}</p>
	</div>
</section>
<section class="column-section container-fluid">
	<div class="box box-one col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<h4>{{ __('dictionary.service_page1_list2_title') }}</h4>
	</div>
	<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<div class="circle">
			<img src="/assets/img/index/circleRed.svg" alt="">
			<p>01</p>
		</div>
		<h3>{{ __('dictionary.service_page1_list2_item1') }}</h3>
	</div>
	<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<div class="circle">
			<img src="/assets/img/index/circleRed.svg" alt="">
			<p>02</p>
		</div>
		<h3>{{ __('dictionary.service_page1_list2_item2') }}</h3>
	</div>
	<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<div class="circle">
			<img src="/assets/img/index/circleRed.svg" alt="">
			<p>03</p>
		</div>
		<h3>{{ __('dictionary.service_page1_list2_item3') }}</h3>
	</div>
</section>
<section class="leave-req">
	<div class="container-fluid">
		<div class="leave-req__row">
			<h2 class="leave-req__title">{{ __('dictionary.leave_req_title2') }}</h2>
			<div class="leave-req__image">
				<img src="{{ asset('assets/img/servicesSection/calc.png') }}" alt="Calculator image">
			</div>
			<a href="{{ route('calc') }}" class="leave-req__btn">{{ __('dictionary.leave_req_btn2') }}</a>
		</div>
	</div>
</section>
<section class="measurment-section container-fluid">
	<div class="box-img col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<img src="/assets/img/servicesSection/img-measuement.png" alt="staff">
		<div class="text">
			<p class="text-number">{{ $info->projects_count }}+</p>
			<p>{{ __('dictionary.section2_image_caption') }}</p>
		</div>
	</div>

	<div class="box-text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<h3>{{ __('dictionary.service_page1_list3_title') }}</h3>
		<div class="cross-p">
			<div class="box">
				<img src="/assets/img/index/tick-red.svg" alt="">
				<p>{{ __('dictionary.service_page1_list3_item1') }}</p>
			</div>
			<div class="box">
				<img src="/assets/img/index/tick-red.svg" alt="">
				<p>{{ __('dictionary.service_page1_list3_item2') }}</p>
			</div>
			<div class="box">
				<img src="/assets/img/index/tick-red.svg" alt="">
				<p>{{ __('dictionary.service_page1_list3_item3') }}</p>
			</div>
		</div>
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
				<input type="hidden" name="page" value="Контрольный обмер">
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