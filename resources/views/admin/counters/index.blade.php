@extends('admin.layout', ['title' => 'Счетчики', 'active' => 'counters'])

@section('content')
    <section class="content">
        <div class="container-fluid">
            @if(is_null($counter))
                <div class="content__top">
                    <a href="{{ route('counters.create') }}" class="add-button">
                        <svg class="add-button__icon">
                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-plus"></use>
                        </svg>
                    </a>
                </div>
            @else
                <div class="row top-section">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">Google Tag</p>
                        <div class="card">
                            <span class="card__name">{{ $counter->google_tag }}</span>
                        </div>
                    </div>
                </div>
                <div class="row top-section">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">Yandex Metrics</p>
                        <div class="card">
                            <span class="card__name">{{ $counter->yandex_metrics }}</span>
                        </div>
                    </div>
                </div>
                <div class="row top-section">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">Facebook Pixel</p>
                        <div class="card">
                            <span class="card__name">{{ $counter->facebook_pixel }}</span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xl-3 col-md-4 col-sm-5 mb-sm-0 mb-3">
                        <a href="{{ route('counters.edit', $counter) }}" class="kirano-btn kirano-btn--filled-blue">
                            Редактировать
                        </a>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-5">
                        <button class="kirano-btn kirano-btn--outlined open-delete-modal"
                                data-path="{{ route('counters.destroy', $counter) }}">
                            Удалить
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
