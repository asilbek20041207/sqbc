<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="mailru-domain" content="KSN2k52hl0V5ZEJV" />
	<link rel="icon" href="{{ asset('assets/icons/favicon.svg') }}" type="image/svg-xml">
	<link rel="stylesheet" href="{{ asset('assets/libraries/bootstrap-grid/bootstrap-grid.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/libraries/owl_carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/libraries/owl_carousel/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/libraries/fancy-box/jquery.fancybox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/styles/lightbox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/styles/navfooter.css?v=3') }}">
	@switch($page)
	@case('index')
	<link rel="stylesheet" href="{{ asset('assets/styles/servicesSection.css?v=2') }}">
	<link rel="stylesheet" href="{{ asset('assets/styles/index.css?v=2') }}">
	@break
	@case('servicesSection')
	<link rel="stylesheet" href="{{ asset('assets/styles/servicesSection.css?v=2') }}">
	<link rel="stylesheet" href="{{ asset('assets/styles/partners.css?v=1') }}">
	@break
	@case('servicesSectionTwo')
	<link rel="stylesheet" href="{{ asset('assets/styles/servicesSectionTwo.css?v=1') }}">
	<link rel="stylesheet" href="{{ asset('assets/styles/partners.css?v=2') }}">
	@break
	@case('news')
	<link rel="stylesheet" href="{{ asset('assets/styles/news.css?v=1') }}">
	@break
	@case('contacts')
	<link rel="stylesheet" href="{{ asset('assets/styles/contacts.css?v=1') }}">
	@break
	@case('partners')
	<link rel="stylesheet" href="{{ asset('assets/styles/partners.css?v=2') }}">
	@break
	@case('portfolio')
	<link rel="stylesheet" href="{{ asset('assets/styles/portfolio.css?v=1') }}">
	@break
	@case('about')
	<link rel="stylesheet" href="{{ asset('assets/styles/about.css?v=1') }}">
	@break
	@case('news-2')
	<link rel="stylesheet" href="{{ asset('assets/styles/news-2.css?v=1') }}">
	@break
	@case('advertisement')
	<link rel="stylesheet" href="{{ asset('assets/styles/advertisement.css?v=1') }}">
	@break
	@case('license')
	<link rel="stylesheet" href="{{ asset('assets/styles/license.css?v=1') }}">
	@break
	@case('calc')
	<link rel="stylesheet" href="{{ asset('assets/styles/calc.css?v=4') }}">
	@break
	@endswitch
	<title>{{ $title }}</title>
	<meta name="description" content="Контрольный обмер от дочерней компании 'УЗПРОМСТРОЙБАНК'. Проведение контрольного обмера, технического надзора и разработка проектно-сметной документации">
	@isset($counter->google_tag)
	{!! $counter->google_tag !!}
	@endisset
	@isset($counter->yandex_metrics)
	{!! $counter->yandex_metrics !!}
	@endisset
	@isset($counter->facebook_pixel)
	{!! $counter->facebook_pixel !!}
	@endisset
</head>

<body>
	<div class="wrapper">
		<header>
			<nav id="#header" class="header {{ $page == 'index' ? 'transparent' : '' }}">
				<div class="info col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<ul>
						@isset($contact->phone)
						<li>
							<a href="tel:{{ $contact->phone }}" class="d-xl-flex align-items-center">
								<img src="{{ asset('assets/icons/phone.svg') }}" alt="">
								{{ $contact->phone }}
							</a>
						</li>
						@endisset
						@isset($social->mail)
						<li>
							<a href="mailto:{{ $social->mail }}" class="d-xl-flex align-items-center">
								<img src="{{ asset('assets/icons/email.svg') }}" alt="">
								{{ $social->mail }}
							</a>
						</li>
						@endisset
						@isset($contact->address_ru)
						<li>
							<a class="header__ul-wrap d-xl-flex align-items-center">
								<img src="{{ asset('assets/icons/GeoLoaca.svg') }}" alt="">
								{{ $contact['address_' . app()->getLocale()] }}
							</a>
						</li>
						@endisset
					</ul>
					<div class="lang">
						<ul>
							<li><a class="{{ app()->getLocale() == 'ru' ? 'active' : '' }}"
									href="{{ route('changeLocale', 'ru') }}">RU</a></li>
							<div class="line">/</div>
							<li>
								<a class="{{ app()->getLocale() == 'uz' ? 'active' : '' }}"
									href="{{ route('changeLocale', 'uz') }}">UZ</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="dividingLine col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"></div>
				<div class="menu col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<a href="/"><img src="{{ asset('assets/img/navfooter/SQBlogo.svg') }}" alt=""></a>
					<ul class="links">
						<li>
							<div class="lang">
								<ul>
									<li><a class="{{ app()->getLocale() == 'ru' ? 'active' : '' }}"
											href="{{ route('changeLocale', 'ru') }}">RU</a></li>
									<div class="line">/</div>
									<li><a class="({{ app()->getLocale() == 'uz' ? 'active' : '' }})"
											href="{{ route('changeLocale', 'uz') }}">UZ</a></li>
								</ul>
							</div>
						</li>
						<li id="colordrop" class="dowm__drop">
							<a>
								{{ __('dictionary.services') }}
								<img class="dowm__drop-img" src="{{ asset('assets/icons/arrow.svg') }}" alt="">
							</a>
							<div>
								<ul class="slide">
									<li class="up_title">
										<a href="{{ route('control-measurement') }}">{{
											__('dictionary.control_measurement') }}</a>
									</li>
									<li class="down_title">
										<a href="{{ route('technical-supervision') }}">{{
											__('dictionary.technical_supervision') }}</a>
									</li>
									<li class="down_title">
										<a href="{{ route('design-and-estimate-documentation') }}">{{
											__('dictionary.design_and_estimate_documentation') }}</a>
									</li>
								</ul>
							</div>
						</li>
						<li {{ $page=='portfolio' ? 'class="active"' : '' }}>
							<a href="{{ route('projects') }}">{{ __('dictionary.projects') }}</a>
						</li>
						<li {{ $page=='partners' ? 'class="active"' : '' }}>
							<a href="{{ route('partners') }}">{{ __('dictionary.partners') }}</a>
						</li>
						<li {{ $page=='about' ? 'class="active"' : '' }}>
							<a href="{{ route('about') }}">{{ __('dictionary.about') }}</a>
						</li>
						{{-- <li {{ $page=='advertisement' ? 'class="active"' : '' }}>
							<a href="{{ route('ads') }}">{{ __('dictionary.ads') }}</a>
						</li> --}}
						<li {{ $page=='license' ? 'class="active"' : '' }}>
							<a href="{{ route('licenses') }}">{{ __('dictionary.licenses') }}</a>
						</li>
						<li {{ $page=='contacts' ? 'class="active"' : '' }}>
							<a href="{{ route('contacts') }}">{{ __('dictionary.contacts') }}</a>
						</li>
						@isset($contact->phone)
						<li class="phone">
							<a href="tel:{{ $contact->phone }}">
								<img src="{{ asset('assets/icons/phone.svg') }}" alt="">
								{{ $contact->phone }}
							</a>
						</li>
						@endisset
					</ul>
					<div class="support">
						<a href="#popup">
							{{ __('dictionary.call_to_us') }}
							<img src="{{ asset('assets/img/navfooter/arroow2right.svg') }}" alt="">
						</a>
					</div>
				</div>
				<div class="mobile-btns col-md-2 col-sm-2 col-3">
					<div class="mobile-button"></div>
				</div>
				<div id="popup" class="popup b24-form">
					<div class="popup__body">
						<a href="#header" class="popup__close"><img
								src="{{ asset('assets/img/navfooter/burgerXXX.svg') }}" alt=""></a>
						@include('frontend.components.bitrix-form')
					</div>
				</div>
			</nav>
		</header>

		<a href="https://t.me/jaxongir_fatxullaev" class="float-button">
			<svg viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M4.26492 8.00514L6.05591 12.4823L8.38754 10.1507L12.3852 13.3281L15.2 0.671875L0.800049 6.66997L4.26492 8.00514ZM11.0852 4.30308L6.67762 8.3233L6.12864 10.3924L5.11449 7.85649L11.0852 4.30308Z"
					fill="#ffffff" />
			</svg>
		</a>

		<main>
			@yield('content')
		</main>

		<footer>
			<div class="footer">
				<div class="about col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
					<img src="{{ asset('assets/img/navfooter/SQBlogoWhite.svg') }}" alt="">
					<p>{{ __('dictionary.footer_caption') }}</p>
				</div>
				<div class="links col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
					<ul>
						<li><a class="li_one">{{ __('dictionary.about') }}</a></li>
						<li><a href="{{ route('about') }}#history">{{ __('dictionary.about_history') }}</a></li>
						<li><a href="{{ route('about') }}#charter">{{ __('dictionary.about_charter') }}</a></li>
						<li><a href="{{ route('about') }}#structure">{{ __('dictionary.about_structure') }}</a></li>
						<li><a href="{{ route('about') }}#ending">{{ __('dictionary.about_end') }}</a></li>
					</ul>
					<ul>
						<li><a class="li_one">{{ __('dictionary.services') }}</a></li>
						<li>
							<a href="{{ route('control-measurement') }}">{{ __('dictionary.footer_control_measurement')
								}}</a>
						</li>
						<li>
							<a href="{{ route('technical-supervision') }}">{{
								__('dictionary.footer_technical_supervision') }}</a>
						</li>
						<li>
							<a href="{{ route('design-and-estimate-documentation') }}">{{
								__('dictionary.footer_design_and_estimate_documentation') }}</a>
						</li>
					</ul>
					<ul>
						<li><a href="{{ route('partners') }}">{{ __('dictionary.partners') }}</a></li>
						<li><a href="{{ route('projects') }}">{{ __('dictionary.projects') }}</a></li>
						<li><a href="{{ route('news') }}">{{ __('dictionary.news') }}</a></li>
						<li><a href="{{ route('contacts') }}">{{ __('dictionary.contacts') }}</a></li>
					</ul>
				</div>
				<div class="socials col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
					@isset($social->facebook)
					<a href="{{ $social->facebook }}">
						<img src="{{ asset('assets/img/navfooter/Facebook.svg') }}" alt="">
					</a>
					@endisset
					@isset($social->telegram)
					<a href="{{ $social->telegram }}">
						<img src="{{ asset('assets/img/navfooter/tg.svg') }}" alt="">
					</a>
					@endisset
					@isset($social->instagram)
					<a href="{{ $social->instagram }}">
						<img src="{{ asset('assets/img/navfooter/inst.svg') }}" alt="">
					</a>
					@endisset
					@isset($social->linkedin)
					<a href="{{ $social->linkedin }}">
						<img src="{{ asset('assets/icons/linked_in_grey.svg') }}" alt="">
					</a>
					@endisset
				</div>
			</div>
			<div class="developer">
				<a href="https://kirano.uz/">{{ __('dictionary.developer') }}</a>
			</div>
		</footer>
	</div>

	<script src="{{ asset('assets/libraries/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/libraries/phonemask/phonemask.min.js') }}"></script>
	<script src="{{ asset('assets/libraries/fancy-box/jquery.fancybox.min.js') }}"></script>
	<script src="{{ asset('assets/libraries/owl_carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/libraries/phonemask/phonemask.min.js') }}"></script>
	<script src="{{ asset('assets/libraries/light-box/lightbox.min.js') }}"></script>
	<script src="{{ asset('assets/scripts/main.min.js?v=2') }}"></script>

	@yield('custom-js')

</body>

</html>