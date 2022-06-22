@extends('frontend.layout', ['title' => 'SQB Construction - О компании - Партнеры', 'page' => 'about'])

@section('content')
<section class="introduction container-fluid">
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
<a name="history"></a>
<section class="history container-fluid">
	<div class="content">
		<div class="history-box col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<h2>{{ __('dictionary.about_history2') }}</h2>
			<p>
				{!! $info['desc2_' . app()->getLocale()] !!}
			</p>
		</div>
		<div class="imgStaff-box col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<img src="{{ asset('storage/' . $info->image1) }}" alt="staff">
		</div>
		<div class="imgStaffTwo-box col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<img src="{{ asset('storage/' . $info->image2) }}" alt="staff">
		</div>
		<div class="about-box col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
			<h3>{{ __('dictionary.about_service_title') }}</h3>
			<p id="firstP"><span>01</span> {{ $info['service1_' . app()->getLocale()] }}</p>
			<p><span>02</span> {{ $info['service2_' . app()->getLocale()] }}</p>
			<p><span>03</span> {{ $info['service3_' . app()->getLocale()] }}</p>
			<h3>{{ __('dictionary.about_plan_title') }}</h3>
			<div class="circle">
				<img src="/assets/img/index/circleRed.svg" alt="">
				<p>{{ $info['plan1_' . app()->getLocale()] }}</p>
			</div>
			<div class="circle">
				<img src="/assets/img/index/circleRed.svg" alt="">
				<p>{{ $info['plan2_' . app()->getLocale()] }}</p>
			</div>
			<div class="circle">
				<img src="/assets/img/index/circleRed.svg" alt="">
				<p>{{ $info['plan3_' . app()->getLocale()] }}</p>
			</div>
			<div class="circle">
				<img src="/assets/img/index/circleRed.svg" alt="">
				<p>{{ $info['plan4_' . app()->getLocale()] }}</p>
			</div>
		</div>
	</div>
</section>
<section class="our-value container-fluid">
	<h3>{{ __('dictionary.our_values') }}</h3>
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
	<a name="charter"></a>
</section>
<section class="charter container-fluid align-items-center">
	<div class="title col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
		<h2>{{ __('dictionary.about_charter') }}</h2>
	</div>
	<div class="download col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
		<a href="{{ asset('storage/' . $info->charter) }}" download="" class="content">
			<img src="/assets/img/about/pdfDownload.svg" alt="">
			<p>{{ __('dictionary.sqb_charter') }} 2021 / {{ __('dictionary.download_pdf') }}</p>
		</a>
	</div>
</section>
@if ($licenses->isNotEmpty())
<section class="charterTwo container-fluid">
	<div class="charterTwo__img">
		@foreach ($licenses as $license)
		<a data-lightbox="test" href="{{ asset('storage/' . $license->image) }}" style="max-height: 800px; max-width: 600px; overflow: hidden">
			<img src="{{ asset('storage/' . $license->image) }}" alt="" style="object-fit: contain; height: 100%; width: 100%">
			<div><img src="/assets/img/about/search.svg" alt=""></div>
		</a>
		@endforeach
	</div>
</section>
@endif
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
<a name="structure"></a>
<section class="structure container-fluid">
	<div class="structure__h2 col-12">
		<h2>{{ __('dictionary.about_structure') }}</h2>
	</div>
	<div class="content col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
		<img src="{{ asset('storage/' . $info['company_structure_' . app()->getLocale()]) }}" alt="">
	</div>
</section>
<a name="ending"></a>
<section class="ending">
	<div class="soviet col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
		<h3>{{ __('dictionary.about_end') }}</h3>
		<p>{{ __('dictionary.sqb_team_title') }}</p>
	</div>
	<div class="download col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
		<a download="" href="{{ asset('storage/' . $info->supervisory_board) }}"><img src="/assets/img/about/pdfDownload.svg" alt="">
			{{ __('dictionary.sqb_team_subtitle') }}
		</a>
	</div>
	<div class="text col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
		<div class="text-downdrop">
			<div class="text-downdrop__line">
				<h4 class="text-downdrop__h4">
					{{ __('dictionary.sqb_team_leader') }}
				</h4>
				<div>
					<p>
						{{ __('dictionary.sqb_team_leader_name') }}
					</p>
				</div>
			</div>
		</div>
		<div id="text-downdrop2" class="text-downdrop">
			<div class="text-downdrop__line">
				<h4 class="text-downdrop__h4">{{ __('dictionary.sqb_team_members') }}</h4>
				<div>
					<p>{{ __('dictionary.sqb_member1') }}</p>
					<p>{{ __('dictionary.sqb_member2') }}</p>
					<p>{{ __('dictionary.sqb_member3') }}</p>
					<p>{{ __('dictionary.sqb_member4') }}</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection