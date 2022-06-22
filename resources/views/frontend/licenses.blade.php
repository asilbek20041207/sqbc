@extends('frontend.layout', ['title' => 'SQB Construction - Лицензии - Партнеры', 'page' => 'license'])

@section('content')
    <section class="license">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-flex flex-column">
                    <ul class="license__breadcrumbs breadcrumbs">
                        <li class="breadcrumbs__item">
                            <a href="{{ route('home') }}" class="breadcrumbs__link">{{ __('dictionary.home') }}</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <span class="breadcrumbs__link breadcrumbs__link--active">{{ __('dictionary.licenses') }}</span>
                        </li>
                    </ul>
                    <h2 class="license__title">{{ __('dictionary.licenses_title') }}</h2>
                </div>
            </div>
            @if($licenses->isNotEmpty())
                <div class="row justify-content-center">
                    @foreach($licenses as $license)
                        <div class="col-lg-4 col-sm-6 mb-lg-0 mb-3">
                            <a href="{{ asset('storage/' . $license->image) }}" data-lightbox="test" class="license__image" style="max-height: 800px; height: 100%">
                                <img src="{{ asset('storage/' . $license->image) }}" style="height: 100%; width: 100%; object-fit: cover">
                                <img src="/assets/img/about/search.svg" class="search-icon">
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
