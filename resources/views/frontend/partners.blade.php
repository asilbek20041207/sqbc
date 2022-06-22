@extends('frontend.layout', ['title' => 'SQB Construction - Партнеры', 'page' => 'partners'])

@section('content')
<section class="crumbs container-fluid">
	<ul>
		<li><a href="{{ route('home') }}">{{ __('dictionary.home') }}</a></li>
		<li><a>{{ __('dictionary.partners') }}</a></li>
	</ul>
</section>
@if($partners->isNotEmpty())
<section class="partners container-fluid">
	<div class="box-text col-xl-10 col-12">
		<h2>{{ __('dictionary.partners_title') }}</h2>
	</div>
	<div class="box-img col-xl-10 col-12">
		@for($i = 0; $i < 6; $i++) @isset($partners[$i]) <div class="box col-xl-2 col-lg-4 col-6">
			<img src="{{ asset('storage/' . $partners[$i]->image) }}" alt="" style="width: 120px; max-height: 100px">
	</div>
	@endisset
	@endfor
	</div>
	<div class="box-img col-xl-10 col-12">
		@for($i = 6; $i < 12; $i++) @isset($partners[$i]) <div class="box col-xl-2 col-lg-4 col-6">
			<img src="{{ asset('storage/' . $partners[$i]->image) }}" alt="" style="width: 120px; max-height: 100px">
	</div>
	@endisset
	@endfor
	</div>
	@isset($partners[12])
	<div class="box-img col-xl-10 col-12">
		@for($i = 12; $i < 18; $i++) @isset($partners[$i]) <div class="box col-xl-2 col-lg-4 col-6">
			<img src="{{ asset('storage/' . $partners[$i]->image) }}" alt="" style="width: 120px; max-height: 100px">
	</div>
	@endisset
	@endfor
	</div>
	@endisset
	@isset($partners[18])
	<div class="box-img col-xl-10 col-12">
		@for($i = 18; $i < 24; $i++) @isset($partners[$i]) <div class="box col-xl-2 col-lg-4 col-6">
			<img src="{{ asset('storage/' . $partners[$i]->image) }}" alt="" style="width: 120px; max-height: 100px">
	</div>
	@endisset
	@endfor
	</div>
	@endisset
</section>
@endif
<section class="be-partner container-fluid">
	<div class="advantages col-xl-8 col-lg-10 col-md-12 col-sm-12 col-12">
		<div class="item">
			<img src="/assets/img/servicesSection/orangePic1.svg" alt="">
			<p>{{ __('dictionary.partners_item1') }}</p>
		</div>
		<div class="item">
			<img src="/assets/img/servicesSection/orangePic2.svg" alt="">
			<p>{{ __('dictionary.partners_item2') }}</p>
		</div>
		<div class="item">
			<img src="/assets/img/servicesSection/orangePic3.svg" alt="">
			<p>{{ __('dictionary.partners_item3') }}</p>
		</div>
	</div>
	<div class="bep-form col-xl-10">
		<div class="img">
			<img src="/assets/img/partners/form.jpg" alt="partners">
		</div>
		<div class="content b24-form">
			<form action="{{ asset('assets/libraries/kiranosend/kiranosend.php') }}" method="POST">
				<input type="hidden" name="page" value="Партнеры">
				<h3>{{ __('dictionary.form_title') }}</h3>
				<p>{{ __('dictionary.form_subtitle') }}</p>
				<div class="input">
					<label style="width: 100%">{{ __('dictionary.form_label1') }}
						<input type="text" name="name" class="phonenumber mt-2"
							placeholder="{{ __('dictionary.form_placeholder1') }}" required>
					</label>
				</div>
				<div class="input">
					<label style="width: 100%">{{ __('dictionary.form_label2') }}
						<input type="tel" pattern="[+]{1}[8-9]{3} [0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}" name="phone" class="phonenumber mt-2 phonemask" placeholder="+998" required>
					</label>
				</div>
				<button type="submit" class="btn-default">
					<p>{{ __('dictionary.form_btn') }}</p>
				</button>
			</form>
		</div>
	</div>
</section>
@endsection