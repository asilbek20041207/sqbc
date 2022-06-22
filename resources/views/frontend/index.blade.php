@extends('frontend.layout', ['title' => 'SQB Construction', 'page' => 'index'])

@section('content')
<section class="introduction-section container-fluid">
	<div class="img-carousel owl-carousel">
		<div class="item">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/headerImg3.webp') }}" alt="headerImg">
			<div class="fix-title">
				<div class="title col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
					<h2>{{ __('dictionary.slider_title1') }}</h2>
					<h3>{{ __('dictionary.slider_subtitle1') }}</h3>
					<a href="{{ route('control-measurement') }}">{{ __('dictionary.more') }}</a>
					<a href="{{ route('calc') }}" class="orange px-4 ml-sm-3 ml-0">{{ __('dictionary.leave_req_btn3') }}</a>
				</div>
				<div class="img col-xl-5 col-lg-5 col-md-5">
					<div class="content">
						<p class="up_number">95%</p>
						<p>{{ __('dictionary.slider_result1') }}</p>
					</div>
					<div class="content">
						<p class="up_number2">{{ app()->getLocale() == 'ru' ? 'до 30%' : '30% gacha' }}</p>
						<p>{{ __('dictionary.slider_result2') }}</p>
					</div>
					<div class="content">
						<p class="up_number3">100%</p>
						<p>{{ __('dictionary.slider_result3') }}</p>
					</div>
				</div>
			</div>
			<span class="counts">01 / 03</span>
		</div>
		<div class="item">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/headerImg2.webp?v=1') }}" alt="headerImg">
			<div class="fix-title">
				<div class="title col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
					<h2>{{ __('dictionary.slider_title2') }}</h2>
					<h3>{{ __('dictionary.slider_subtitle2') }}</h3>
					<a href="{{ route('technical-supervision') }}">{{ __('dictionary.more') }}</a>
				</div>
				<div class="img col-xl-5 col-lg-5 col-md-5">
					<div class="content">
						<p class="up_number">95%</p>
						<p>{{ __('dictionary.slider_result1') }}</p>
					</div>
					<div class="content">
						<p class="up_number2">{{ app()->getLocale() == 'ru' ? 'до 30%' : '30% gacha' }}</p>
						<p>{{ __('dictionary.slider_result2') }}</p>
					</div>
					<div class="content">
						<p class="up_number3">100%</p>
						<p>{{ __('dictionary.slider_result3') }}</p>
					</div>
				</div>
			</div>
			<span class="counts">02 / 03</span>
		</div>
		<div class="item">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/headerImg1.webp') }}" alt="headerImg">
			<div class="fix-title">
				<div class="title col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
					<h2>{{ __('dictionary.slider_title3') }}</h2>
					<h3>{{ __('dictionary.slider_subtitle3') }}</h3>
					<a href="{{ route('design-and-estimate-documentation') }}">{{ __('dictionary.more') }}</a>
				</div>
				<div class="img col-xl-5 col-lg-5 col-md-5">
					<div class="content">
						<p class="up_number">95%</p>
						<p>{{ __('dictionary.slider_result1') }}</p>
					</div>
					<div class="content">
						<p class="up_number2">{{ app()->getLocale() == 'ru' ? 'до 30%' : '30% gacha' }}</p>
						<p>{{ __('dictionary.slider_result2') }}</p>
					</div>
					<div class="content">
						<p class="up_number3">100%</p>
						<p>{{ __('dictionary.slider_result3') }}</p>
					</div>
				</div>
			</div>
			<span class="counts">03 / 03</span>
		</div>
	</div>
</section>
<section class="measurment-section container-fluid">
	<div class="box-text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<h2>{{ __('dictionary.section2_title') }}</h2>
		<p>{{ __('dictionary.section2_subtitle') }}</p>
		<h3>{{ __('dictionary.section2_list_title') }}</h3>
		<div class="cross-p">
			<div class="box">
				<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/tick-red.svg') }}" alt="">
				<p>{{ __('dictionary.section2_list_item1') }}</p>
			</div>
			<div class="box">
				<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/tick-red.svg') }}" alt="">
				<p>{{ __('dictionary.section2_list_item2') }}</p>
			</div>
			<div class="box">
				<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/tick-red.svg') }}" alt="">
				<p>{{ __('dictionary.section2_list_item3') }}</p>
			</div>
		</div>
		<a href="{{ route('control-measurement') }}">
			{{ __('dictionary.more') }}
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/navfooter/arroow2rightOrange.svg') }}" alt="">
		</a>
	</div>
	<div class="box-img col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/measurmentjpg.webp') }}" alt="measurment">
		<div class="text">
			<p class="text-number">{{ $info->projects_count }}+</p>
			<p>{{ __('dictionary.section2_image_caption') }}</p>
		</div>
		<div class="line">
			<p>01</p>
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/lineNumber.svg') }}" alt="">
		</div>
	</div>
</section>
<section class="supervision-section container-fluid">
	<div class="box-img col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/supervision.webp') }}" alt="supervision">
		<div class="line">
			<p>02</p>
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/lineNumber.svg') }}" alt="">
		</div>
	</div>
	<div class="box-text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<h2>{{ __('dictionary.section3_title') }}</h2>
		<h3>{{ __('dictionary.section3_list_title') }}</h3>
		<div class="circle align-items-center">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/circleSupervision.svg') }}" alt="">
			<p>{{ __('dictionary.section3_list_item1') }}</p>
		</div>
		<div class="circle align-items-center">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/circleSupervision.svg') }}" alt="">
			<p>{{ __('dictionary.section3_list_item2') }}</p>
		</div>
		<div class="circle align-items-center">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/circleSupervision.svg') }}" alt="">
			<p>{{ __('dictionary.section3_list_item3') }}</p>
		</div>
		<div class="circle align-items-center">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/circleSupervision.svg') }}" alt="">
			<p>{{ __('dictionary.section3_list_item4') }}</p>
		</div>
	</div>
</section>
<section class="supervision-sectionTwo container-fluid">
	<div class="lineOr col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<div class="orangeLine"></div>
		<h2>{{ __('dictionary.section4_title') }}</h2>
	</div>
	<div class="text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<p>{{ __('dictionary.section4_text') }}</p>
	</div>
</section>
<section class="column-section container-fluid">
	<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<div class="circle">
			<svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M31.9654 9.92974C31.4631 9.89336 30.9597 9.87514 30.4561 9.87511V7C31.0321 7.00028 31.6079 7.02137 32.1823 7.06325L31.9654 9.92974ZM37.8387 11.2235C36.8992 10.8679 35.9344 10.5806 34.9519 10.3639L35.5937 7.55777C36.7162 7.80503 37.8211 8.13279 38.8938 8.54106L37.8387 11.2235ZM41.8539 13.2649C41.4349 12.9907 41.0057 12.7318 40.5673 12.4886L42.0121 9.98724C43.0142 10.5442 43.9732 11.1727 44.8814 11.8676L43.0789 14.136C42.6816 13.8319 42.273 13.5423 41.8539 13.2677V13.2649ZM47.2289 18.4113C46.6492 17.6033 46.0096 16.8384 45.3151 16.1227L47.437 14.1389C48.2283 14.9583 48.961 15.8352 49.6263 16.7552L47.2289 18.4113ZM49.4094 22.2985C49.2171 21.8426 49.0079 21.3938 48.7823 20.9529L51.3995 19.6591C51.917 20.6685 52.3578 21.7141 52.7183 22.7872L49.9341 23.6871C49.7766 23.2181 49.6016 22.7549 49.4094 22.2985ZM50.9628 29.5064C50.9391 28.5183 50.8411 27.5333 50.6697 26.5594L53.5565 26.0706C53.7529 27.1804 53.8672 28.3074 53.8965 29.4345L50.9657 29.5064H50.9628ZM50.5788 33.9283C50.6755 33.4395 50.7547 32.9536 50.8162 32.462L53.7265 32.8156C53.5857 33.9373 53.3604 35.0473 53.0524 36.1364L50.2271 35.3687C50.362 34.8943 50.4792 34.4142 50.5788 33.9283ZM47.7887 40.7682C48.328 39.9344 48.8028 39.0603 49.2131 38.1576L51.8918 39.322C51.4229 40.357 50.8807 41.3518 50.2652 42.3063L47.7887 40.7682ZM44.9634 44.2327C45.321 43.8819 45.6639 43.5196 45.9892 43.1459L48.2108 45.0233C47.8345 45.4512 47.4425 45.8655 47.0355 46.2654L44.9634 44.2327Z"
					fill="#C76A1D" />
				<path
					d="M30.4554 9.87511C27.0818 9.87535 23.7602 10.6918 20.785 12.2521C17.8097 13.8124 15.2726 16.0684 13.3984 18.8203C11.5242 21.5722 10.3707 24.7351 10.0402 28.0287C9.70957 31.3224 10.2121 34.6452 11.5032 37.7029C12.7942 40.7605 14.8341 43.4586 17.442 45.5582C20.0498 47.6578 23.1453 49.0941 26.4541 49.7398C29.763 50.3856 33.1831 50.2209 36.4116 49.2602C39.64 48.2996 42.5772 46.5728 44.9628 44.2327L47.0349 46.2654C44.3085 48.9415 40.9513 50.9165 37.2608 52.0156C33.5704 53.1146 29.6605 53.3037 25.8777 52.5661C22.095 51.8285 18.556 50.187 15.5745 47.787C12.593 45.3869 10.261 42.3025 8.78502 38.807C7.30907 35.3115 6.73479 31.5128 7.11306 27.7476C7.49133 23.9823 8.81047 20.3667 10.9536 17.2211C13.0967 14.0755 15.9977 11.497 19.3994 9.71411C22.8012 7.93123 26.5987 6.999 30.4554 7V9.87511Z"
					fill="#C76A1D" />
				<path
					d="M28.9898 15.625C29.3785 15.625 29.7512 15.7765 30.026 16.0461C30.3008 16.3156 30.4552 16.6813 30.4552 17.0626V32.0419L39.9744 37.3781C40.302 37.572 40.5394 37.8839 40.6357 38.2472C40.732 38.6105 40.6796 38.9963 40.4898 39.3222C40.2999 39.6481 39.9877 39.8883 39.6197 39.9913C39.2518 40.0944 38.8573 40.0521 38.5207 39.8737L28.263 34.1235C28.0387 33.9978 27.8523 33.8162 27.7226 33.597C27.5929 33.3779 27.5245 33.129 27.5244 32.8757V17.0626C27.5244 16.6813 27.6788 16.3156 27.9536 16.0461C28.2284 15.7765 28.6012 15.625 28.9898 15.625Z"
					fill="#C76A1D" />
			</svg>
		</div>
		<h2>{{ __('dictionary.section5_title1') }}</h2>
		<h3>{{ __('dictionary.section5_subtitle1') }}</h3>
	</div>
	<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<div class="circle">
			<svg width="61" height="62" viewBox="0 0 61 62" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_126_1059)">
					<path d="M40.9779 44.8687H19.7705V46.5H40.9779V44.8687Z" fill="#C76A1D" />
					<path d="M31.1899 20.3989H19.7705V22.0303H31.1899V20.3989Z" fill="#C76A1D" />
					<path d="M40.9779 39.9746H19.7705V41.606H40.9779V39.9746Z" fill="#C76A1D" />
					<path d="M31.1899 15.5044H19.7705V17.1357H31.1899V15.5044Z" fill="#C76A1D" />
					<path
						d="M36.0834 8.97949H35.2678H18.1387C16.3441 8.97949 14.876 10.4477 14.876 12.2422V49.763C14.876 51.5575 16.3441 53.0257 18.1387 53.0257H42.6088C44.4032 53.0257 45.8715 51.5575 45.8715 49.763V21.2146V20.399L36.0834 8.97949ZM36.0834 11.4265L43.7508 20.399H37.7148C36.8991 20.399 36.0834 19.5833 36.0834 18.7676V11.4265ZM44.2401 49.763C44.2401 50.5787 43.5876 51.3944 42.6088 51.3944H18.1387C17.323 51.3944 16.5073 50.7418 16.5073 49.763V12.2422C16.5073 11.4265 17.1599 10.6108 18.1387 10.6108H34.4521V18.7675C34.4521 20.5621 35.9203 22.0302 37.7148 22.0302H44.2401V49.763Z"
						fill="#C76A1D" />
					<path d="M40.9779 35.0806H19.7705V36.7119H40.9779V35.0806Z" fill="#C76A1D" />
					<path d="M40.9779 25.293H19.7705V26.9243H40.9779V25.293Z" fill="#C76A1D" />
					<path d="M40.9779 30.1875H19.7705V31.8188H40.9779V30.1875Z" fill="#C76A1D" />
				</g>
				<defs>
					<clipPath id="clip0_126_1059">
						<rect width="44.0462" height="44.0462" fill="white" transform="translate(8.35254 8.97803)" />
					</clipPath>
				</defs>
			</svg>
		</div>
		<h2>{{ __('dictionary.section5_title2') }}</h2>
		<h3>{{ __('dictionary.section5_subtitle2') }}</h3>
	</div>
	<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<div class="circle">
			<svg width="61" height="62" viewBox="0 0 61 62" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_126_1082)">
					<path
						d="M21.2409 56.7494H5.04395V50.1045H21.2409V56.7494ZM6.70517 55.0882H19.5797V51.7657H6.70517V55.0882Z"
						fill="#C76A1D" />
					<path
						d="M38.2692 56.7494H22.0723V50.1045H38.2692V56.7494ZM23.7335 55.0882H36.608V51.7657H23.7335V55.0882Z"
						fill="#C76A1D" />
					<path
						d="M55.2966 56.7494H39.0996V50.1045H55.2966V56.7494ZM40.7608 55.0882H53.6353V51.7657H40.7608V55.0882Z"
						fill="#C76A1D" />
					<path
						d="M29.5466 49.2733H13.3496V42.6284H29.5466V49.2733ZM15.0108 47.6121H27.8853V44.2896H15.0108V47.6121Z"
						fill="#C76A1D" />
					<path
						d="M46.5749 49.2728H30.3779V42.6279H46.5749V49.2728ZM32.0392 47.6116H44.9137V44.2892H32.0392V47.6116Z"
						fill="#C76A1D" />
					<path d="M55.2951 49.2728H47.4043V42.6279H55.2951V44.2892H49.0655V47.6116H55.2951V49.2728Z"
						fill="#C76A1D" />
					<path d="M12.5195 49.2733H5.04395V47.6121H10.8582V44.2896H5.04395V42.6284H12.5195V49.2733Z"
						fill="#C76A1D" />
					<path
						d="M21.2409 41.7977H5.04395V35.1528H21.2409V41.7977ZM6.70517 40.1365H19.5797V36.8141H6.70517V40.1365Z"
						fill="#C76A1D" />
					<path
						d="M38.2692 41.7977H22.0723V35.1528H38.2692V41.7977ZM23.7335 40.1365H36.608V36.8141H23.7335V40.1365Z"
						fill="#C76A1D" />
					<path
						d="M55.2966 41.7977H39.0996V35.1528H55.2966V41.7977ZM40.7608 40.1365H53.6353V36.8141H40.7608V40.1365Z"
						fill="#C76A1D" />
					<path
						d="M29.5475 34.3231H13.3506V27.6782H29.5475V34.3231ZM15.0118 32.6619H27.8863V29.3394H15.0118V32.6619Z"
						fill="#C76A1D" />
					<path
						d="M46.5749 34.3231H30.3779V27.6782H46.5749V34.3231ZM32.0392 32.6619H44.9137V29.3394H32.0392V32.6619Z"
						fill="#C76A1D" />
					<path d="M55.2951 34.3231H47.4043V27.6782H55.2951V29.3394H49.0655V32.6619H55.2951V34.3231Z"
						fill="#C76A1D" />
					<path d="M12.5195 34.3231H5.04395V32.6619H10.8582V29.3394H5.04395V27.6782H12.5195V34.3231Z"
						fill="#C76A1D" />
					<path
						d="M21.2409 26.8471H5.04395V20.2021H21.2409V26.8471ZM6.70517 25.1858H19.5797V21.8634H6.70517V25.1858Z"
						fill="#C76A1D" />
					<path
						d="M38.2692 26.8471H22.0723V20.2021H38.2692V26.8471ZM23.7335 25.1858H36.608V21.8634H23.7335V25.1858Z"
						fill="#C76A1D" />
					<g opacity="0.3">
						<path opacity="0.3" d="M55.297 25.186H39.9307V26.8473H55.297V25.186Z" fill="#C76A1D" />
					</g>
					<path d="M12.5195 19.3724H5.04395V17.7112H10.8582V14.3888H5.04395V12.7275H12.5195V19.3724Z"
						fill="#C76A1D" />
					<path
						d="M41.1348 17.1287L38.8506 10.8991L54.0508 5.37549L56.335 11.6051L41.1348 17.1287ZM41.0102 11.8543L42.1315 14.9691L54.2169 10.5668L53.0956 7.45202L41.0102 11.8543Z"
						fill="#C76A1D" />
				</g>
				<defs>
					<clipPath id="clip0_126_1082">
						<rect width="53.1592" height="53.1592" fill="white" transform="translate(3.79688 4.42041)" />
					</clipPath>
				</defs>
			</svg>
		</div>
		<h2>{{ __('dictionary.section5_title3') }}</h2>
		<h3>{{ __('dictionary.section5_subtitle3') }}</h3>
	</div>
	<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
		<div class="circle">
			<svg width="61" height="62" viewBox="0 0 61 62" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M30.377 36.3164C30.377 38.7734 29.5435 41.0356 28.1439 42.8361L37.9562 52.6483C38.4753 53.1674 38.4753 54.0089 37.9562 54.5277C37.4371 55.0468 36.5958 55.0468 36.0767 54.5277L26.2644 44.7156C24.4641 46.115 22.2019 46.9483 19.7451 46.9483C13.8733 46.9483 9.11328 42.1881 9.11328 36.3164C9.11328 30.4446 13.8733 25.6846 19.7451 25.6846C25.6169 25.6846 30.377 30.4446 30.377 36.3164ZM19.7451 44.2903C24.149 44.2903 27.719 40.7204 27.719 36.3164C27.719 31.9124 24.149 28.3425 19.7451 28.3425C15.3413 28.3425 11.7712 31.9124 11.7712 36.3164C11.7712 40.7204 15.3413 44.2903 19.7451 44.2903Z"
					fill="#C76A1D" />
				<path
					d="M18.4157 12.3943C17.6817 12.3943 17.0867 12.9893 17.0867 13.7233V23.292C16.1622 23.4796 15.2726 23.7632 14.4287 24.132V13.7233C14.4287 11.5213 16.2137 9.73633 18.4157 9.73633H31.9335C32.9909 9.73633 34.0049 10.1564 34.7526 10.9041L45.1566 21.3079C45.9043 22.0556 46.3243 23.0697 46.3243 24.1271V48.2768C46.3243 50.4786 44.5392 52.2637 42.3373 52.2637H40.7776C40.586 51.7178 40.2718 51.2051 39.8351 50.7683L38.6725 49.6058H42.3373C43.0712 49.6058 43.6663 49.0106 43.6663 48.2768V25.6841H34.3634C32.1616 25.6841 30.3765 23.8991 30.3765 21.6972V12.3943H18.4157ZM33.0344 12.9448V21.6972C33.0344 22.4311 33.6296 23.0261 34.3634 23.0261H43.1158L33.0344 12.9448Z"
					fill="#C76A1D" />
			</svg>
		</div>
		<h2>{{ __('dictionary.section5_title4') }}</h2>
		<h3>{{ __('dictionary.section5_subtitle4') }}</h3>
	</div>
</section>
<section class="leave-req">
	<div class="container-fluid">
		<div class="leave-req__row">
			<h2 class="leave-req__title">{{ __('dictionary.leave_req_title') }}</h2>
			<a href="#popup" class="leave-req__btn">{{ __('dictionary.leave_req_btn') }}</a>
		</div>
	</div>
</section>
<section class="supervision-section whymeasurment-section container-fluid py-sm-5 py-4 mb-4">
	<div class="box-text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<h2>{{ __('dictionary.section6_title') }}</h2>
		<p>{{ __('dictionary.section6_subtitle') }}</p>
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
		<img class="lazy-image" src="" data-src="{{ asset('assets/img/servicesSection/3.webp') }}" alt="staff">
		<div class="line" style="right: -60px; left: unset">
			<p>03</p>
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/lineNumber.svg') }}" alt="">
		</div>
	</div>
	<div class="text col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
		<h2></h2>
	</div>
</section>
<section class="hoWorkExpert-section container-fluid">
	<h3>{{ __('dictionary.section7_title') }}</h3>
	<div class="boxes_expert">
		<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/checklists1.svg') }}" alt="">
			<p>{{ __('dictionary.section7_item1') }}</p>
		</div>
		<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/teamwork1.svg') }}" alt="">
			<p>{{ __('dictionary.section7_item2') }}</p>
		</div>
		<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/engineer1.svg') }}" alt="">
			<p>{{ __('dictionary.section7_item3') }}</p>
		</div>
		<div class="box col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/emptyChecklist.svg') }}" alt="">
			<p>{{ __('dictionary.section7_item4') }}</p>
		</div>
	</div>
	<h4 class="mb-2">{{ __('dictionary.section8_title') }}</h4>
	<h5 class="d-block">{{ __('dictionary.section8_subtitle') }}</h5>
	<script type="text/javascript" charset="utf-8" async
		src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8f2df010c6d773c7a280d4d813d04fc18e69694de0239d775832432dc798e158&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true">
	</script>
</section>
@if($projects->isNotEmpty())
<section class="result-section container-fluid">
	<h3>{{ __('dictionary.section9_title') }}</h3>
	<div class="content-carousel owl-carousel">
		@foreach($projects as $project)
		<div class="content">
			<div class="row">
				<div class="result-section__title col-xl-4 col-lg-4 col-12">
					<h4><span>{{ $loop->iteration < 10 ? '0' . $loop->iteration : $loop->iteration }}</span>
					</h4>
				</div>
				<div class="result-section__city col-xl-7 col-lg-7 col-12">
					<p class="pr-1">{{ $project['address_' . app()->getLocale()] }},</p>
					<p>{{ date('Y', strtotime($project->date)) }} {{ app()->getLocale() == 'ru' ? ' год' : ' yil' }}</p>
				</div>
				<div class="result-section__text col-xl-4 col-lg-4 col-12">
					<h4>{{ $project['title_' . app()->getLocale()] }}</h4>
					<p>{{ $project['description_' . app()->getLocale()] }}</p>
				</div>
				<div class="result-section__img col-xl-7 col-lg-7 col-12">
					<img class="lazy-image" src="" data-src="{{ asset('storage/' . $project->image) }}" alt="">
				</div>
			</div>
		</div>
		@endforeach
	</div>
	<div id="owl-nav">
		<div class="owl-prev" id="prevItem4">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/arrowOrange.svg') }}" alt="">
		</div>
		<div class="owl-next" id="nextItem4">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/arrowOrange.svg') }}" alt="">
		</div>
	</div>
</section>
@endif
<section class="orangeAndVideo container-fluid">
	<div class="statistics col-xl-5 col-lg-6 col-md-7 col-sm-12 col-12">
		<h3>{{ $info['title_' . app()->getLocale()] }}</h3>
		<div class="items_row">
			<div class="item">
				<span>{{ $info->specialists_count }}+</span>
				<p>{{ __('dictionary.specialists_count') }}</p>
			</div>
			<div class="item">
				<span>{{ $info->projects_count }}+</span>
				<p>{{ __('dictionary.project_count') }}</p>
			</div>
		</div>
	</div>
	<div class="about-short col-xl-5 col-lg-6 col-md-5 col-sm-12 col-12">
		{!! $info['desc1_' . app()->getLocale()] !!}
	</div>
</section>
<section class="our-value container-fluid">
	<h3>{{ __('dictionary.section10_title') }}</h3>
	<div class="row">
		<div class="our-value__block col-xl-3 col-lg-3 col-md-6 col-12 col-12">
			<span>1</span>
			<div>{{ $info['values_title1_' . app()->getLocale()] }}</div>
			<p>{!! $info['values_desc1_' . app()->getLocale()] !!}</p>
		</div>
		<div class="our-value__block col-xl-3 col-lg-3 col-md-6 col-12 col-12">
			<span>2</span>
			<div>{{ $info['values_title2_' . app()->getLocale()] }}</div>
			<p>{!! $info['values_desc2_' . app()->getLocale()] !!}</p>
		</div>
		<div class="our-value__block col-xl-3 col-lg-3 col-md-6 col-12 col-12">
			<span>3</span>
			<div>{{ $info['values_title3_' . app()->getLocale()] }}</div>
			<p>{!! $info['values_desc3_' . app()->getLocale()] !!}</p>
		</div>
		<div class="our-value__block col-xl-3 col-lg-3 col-md-6 col-12">
			<span>4</span>
			<div>{{ $info['values_title4_' . app()->getLocale()] }}</div>
			<p>{!! $info['values_desc4_' . app()->getLocale()] !!}</p>
		</div>
	</div>
</section>
@if($partners->isNotEmpty())
<section class="partners container-fluid">
	<div class="box-text col-xl-10 col-12">
		<h2>{{ __('dictionary.section11_title') }}</h2>
	</div>
	<div class="box-img col-xl-10 col-12">
		@for($i = 0; $i < 6; $i++) @isset($partners[$i]) <div class="box col-xl-2 col-lg-4 col-6">
			<img class="lazy-image" src="" data-src="{{ asset('storage/' . $partners[$i]->image) }}" alt=""
				style="width: 120px; max-height: 100px">
	</div>
	@endisset
	@endfor
	</div>
	<div class="box-img col-xl-10 col-12">
		@for($i = 6; $i < 12; $i++) @isset($partners[$i]) <div class="box col-xl-2 col-lg-4 col-6">
			<img class="lazy-image" src="" data-src="{{ asset('storage/' . $partners[$i]->image) }}" alt=""
				style="width: 120px; max-height: 100px">
	</div>
	@endisset
	@endfor
	</div>
	@isset($partners[12])
	<div class="box-img col-xl-10 col-12">
		@for($i = 12; $i < 18; $i++) @isset($partners[$i]) <div class="box col-xl-2 col-lg-4 col-6">
			<img class="lazy-image" src="" data-src="{{ asset('storage/' . $partners[$i]->image) }}" alt=""
				style="width: 120px; max-height: 100px">
	</div>
	@endisset
	@endfor
	</div>
	@endisset
	@isset($partners[18])
	<div class="box-img col-xl-10 col-12">
		@for($i = 18; $i < 24; $i++) @isset($partners[$i]) <div class="box col-xl-2 col-lg-4 col-6">
			<img class="lazy-image" src="" data-src="{{ asset('storage/' . $partners[$i]->image) }}" alt=""
				style="width: 120px; max-height: 100px">
	</div>
	@endisset
	@endfor
	</div>
	@endisset
</section>
@endif
@if($articles->isNotEmpty())
<section class="lastNews-section container-fluid">
	<div class="news-carousel col-xl-11 col-lg-11 col-md-12 col-sm-12 col-12">
		<div class="box-text">
			<h3>{{ __('dictionary.section12_title') }}</h3>
		</div>
		<div class="lastNews-carousel owl-carousel">
			@foreach($articles as $article)
			<a href="{{ route('showArticle', $article) }}" class="box">
				<div class="no-video">
					<img class="lazy-image" src="" data-src="{{ asset('storage/' . $article->preview) }}" alt="news">
				</div>
				<div>
					<h2>{{ \Illuminate\Support\Str::limit($article['title_' . app()->getLocale()], 50) }}</h2>
					<p class="data">{{ date('d.m.Y', strtotime($article->date)) }}</p>
				</div>
			</a>
			@endforeach
			{{-- <a href="/innerpages/news/news-4.php" class="box">--}}
				{{-- <div class="">--}}
					{{-- <img class="lazy-image" src="" data-src="/assets/img/index/newsSection6webp.webp"
						alt="news">--}}
					{{-- </div>--}}
				{{-- <div>--}}
					{{-- <h2>Президент ознакомился с презентацией проектов в сфере здравоохранения и ЖКХ...</h2>--}}
					{{-- <p class="data">14.06.2021</p>--}}
					{{-- </div>--}}
				{{-- </a>--}}
		</div>
		<div class="owl-nav">
			<div class="owl-next" id="nextItem2">
				<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/arrowOrange.svg') }}" alt="">
			</div>
			<div class="owl-prev" id="prevItem2">
				<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/arrowOrange.svg') }}" alt="">
			</div>
		</div>
	</div>
</section>
@endif
<section class="form-section container-fluid align-items-center">
	<div class="box-form b24-form col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
		<h3>{{ __('dictionary.form_title') }}</h3>
		<p class="mt-2">{{ __('dictionary.form_subtitle') }}</p>
		<form action="{{ asset('assets/libraries/kiranosend/kiranosend.php') }}" method="POST">
			<input type="hidden" name="page" value="Главная">
			<div class="form-box">
				<label>{{ __('dictionary.form_label1') }}
					<input type="text" name="name" class="phonenumber mt-2"
						placeholder="{{ __('dictionary.form_placeholder1') }}" required>
				</label>
			</div>
			<div class="form-box">
				<label>{{ __('dictionary.form_label2') }}
					<input type="tel" pattern="[+]{1}[8-9]{3} [0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}" name="phone" class="phonenumber mt-2 phonemask" placeholder="+998" required>
				</label>
			</div>
			<button type="submit">{{ __('dictionary.form_btn') }} <img src="/assets/img/index/Arrow2RightOrange.svg"
					alt=""></button>
		</form>
		{{-- @include('frontend.components.bitrix-form') --}}
	</div>
	<div class="box-text col-xl-5 col-lg-5 col-md-10 col-sm-12 col-12">
		<div class="box">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/hotel.svg') }}" alt="">
			<div>
				<p class="top-p">{{ __('dictionary.section13_item1') }}</p>
				<p>{{ __('dictionary.section13_text1') }}</p>
			</div>
		</div>
		<div class="box">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/map.svg') }}" alt="">
			<div>
				<p class="top-p">{{ __('dictionary.section13_item2') }}</p>
				<p>{{ __('dictionary.section13_text2') }}</p>
			</div>
		</div>
		<div class="box pb-0">
			<img class="lazy-image" src="" data-src="{{ asset('assets/img/index/operator.svg') }}" alt="">
			<div>
				<p class="top-p">{{ __('dictionary.section13_item3') }}</p>
				<p>{{ __('dictionary.section13_text3') }}</p>
			</div>
		</div>
	</div>
</section>
<section class="contact-section container-fluid">
	<div class="boxes">
		@isset($contact->phone)
		<a href="tel:{{ $contact->phone }}" class="box col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
			<div>
				<img class="lazy-image" src="" data-src="/assets/img/index/circleRed.svg" alt="">
				<h2>{{ __('dictionary.phone') }}</h2>
			</div>
			<p>{{ $contact->phone }}</p>
		</a>
		@endisset
		<div class="line"></div>
		@isset($contact->address_ru)
		<div class="box col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
			<div>
				<img class="lazy-image" src="" data-src="/assets/img/index/circleRed.svg" alt="">
				<h2>{{ __('dictionary.address') }}</h2>
			</div>
			<p>{{ $contact['address_' . app()->getLocale()] }}</p>
		</div>
		@endisset
		<div class="line"></div>
		@isset($social->mail)
		<a href="mailto:{{ $social->mail }}" class="box col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
			<div>
				<img class="lazy-image" src="" data-src="/assets/img/index/circleRed.svg" alt="">
				<h2>{{ __('dictionary.mail') }}</h2>
			</div>
			<p>{{ $social->mail }}</p>
		</a>
		@endisset
		<div class="line"></div>
		@isset($contact->work_time_ru)
		<div class="box col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
			<div>
				<img class="lazy-image" src="" data-src="/assets/img/index/circleRed.svg" alt="">
				<h2>{{ __('dictionary.work_time') }}</h2>
			</div>
			<p>{{ $contact['work_time_' . app()->getLocale()] }}</p>
		</div>
		@endisset
	</div>
</section>
@endsection

@section('custom-js')
<script>
	$(window).scroll(function () {
            if ($(this).scrollTop() >= 1) {
                $('.header').removeClass('transparent');
            } else {
                $('.header').addClass('transparent');
            }
        });
</script>
@endsection