@extends('frontend.layout', ['title' => 'SQB Construction - Контакты - Партнеры', 'page' => 'contacts'])

@section('content')
<section class="crumbs container-fluid">
	<ul>
		<li><a href="{{ route('home') }}">{{ __('dictionary.home') }}</a></li>
		<li><a>{{ __('dictionary.contacts') }}</a></li>
	</ul>
</section>
<section class="contacts container-fluid">
	<div class="items_row">
		@isset($contact->phone)
		<a href="tel:{{ $contact->phone }}" class="item">
			<span>{{ __('dictionary.phone') }}</span>
			<p>{{ $contact->phone }}</p>
		</a>
		@endisset
		@isset($contact->address_ru)
		<div class="item">
			<span>{{ __('dictionary.address') }}</span>
			<p>{{ $contact['address_' . app()->getLocale()] }}</p>
		</div>
		@endisset
		@isset($social->mail)
		<a href="mailto:$social->mail" class="item">
			<span>{{ __('dictionary.mail') }}</span>
			<p>{{ $social->mail }}</p>
		</a>
		@endisset
		@isset($contact->work_time_ru)
		<div class="item">
			<span>{{ __('dictionary.work_time') }}</span>
			<p>{{ $contact['work_time_' . app()->getLocale()] }}</p>
		</div>
		@endisset
	</div>
</section>
<section class="map container-fluid">
	<script type="text/javascript" charset="utf-8" async
		src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8f2df010c6d773c7a280d4d813d04fc18e69694de0239d775832432dc798e158&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true">
	</script>
</section>
<section class="form-consultation container-fluid">
	<div class="b24-form content col-xl-6 col-lg-8 col-md-10 col-sm-12 col-12">
		<form action="{{ asset('assets/libraries/kiranosend/kiranosend.php') }}" method="POST">
			<h3>{{ __('dictionary.form_title') }}</h3>
			<p>{{ __('dictionary.form_subtitle') }}</p>
			<input type="hidden" name="page" value="Контакты">
			<div class="input">
				<label style="width: 100%">{{ __('dictionary.form_label1') }}
					<input type="text" name="name" class="phonenumber mt-2" placeholder="{{ __('dictionary.form_placeholder1') }}" required>
				</label>
			</div>
			<div class="input">
				<label style="width: 100%">{{ __('dictionary.form_label2') }}
					<input type="tel" pattern="[+]{1}[8-9]{3} [0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}" name="phone" class="phonenumber phonemask mt-2" placeholder="+998" required>
				</label>
			</div>
			<button class="btn-default">
				<p>{{ __('dictionary.form_btn') }}</p>
			</button>
		</form>
	</div>
</section>
@endsection