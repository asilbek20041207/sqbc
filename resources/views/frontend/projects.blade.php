@extends('frontend.layout', ['title' => 'SQB Construction - Проекты', 'page' => 'portfolio'])

@section('content')
<section class="crumbs container-fluid">
	<ul>
		<li><a href="{{ route('home') }}">{{ __('dictionary.home') }}</a></li>
		<li><a>{{ __('dictionary.projects') }}</a></li>
	</ul>
</section>
@if($projects->isNotEmpty())
<section class="projects container-fluid">
	<div class="items_row">
		@foreach($projects as $project)
		<div class="item">
			<div class="content col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
				<div class="d-flex mb-1">
					<h4 class="mb-0 mr-1">{{ $project['address_' . app()->getLocale()] }},</h4>
					<h4 class="mb-0">
						{{ date('Y', strtotime($project->date)) }} {{ app()->getLocale() == 'ru' ? ' год' : ' yil' }}
					</h4>
				</div>
				<h3>{{ $project['title_' . app()->getLocale()] }}</h3>
				<h4>{{ $project['description_' . app()->getLocale()] }}</h4>
			</div>
			<div class="img col-xl-7 col-lg-6 col-md-6 col-sm-12 col-12">
				<img src="{{ asset('storage/' . $project->image) }}" alt="project">
			</div>
		</div>
		@endforeach
	</div>
</section>
@endif
@endsection