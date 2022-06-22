@extends('admin.layout', ['title' => 'Соц. сети', 'active' => 'socials'])

@section('content')
    <section class="content">
        <div class="container-fluid">
            @include('admin.includes.success-message')
            @if(is_null($social))
                <div class="content__top">
                    <a href="{{ route('socials.create') }}" class="add-button">
                        <svg class="add-button__icon">
                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-plus"></use>
                        </svg>
                    </a>
                </div>
            @else
                <div class="row top-section">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">Telegram</p>
                        <div class="card">
                            <span class="card__name">{{ $social->telegram }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">Facebook</p>
                        <div class="card">
                            <span class="card__name">{{ $social->facebook }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">Instagram</p>
                        <div class="card">
                            <span class="card__name">{{ $social->instagram }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">LinkedIn</p>
                        <div class="card">
                            <span class="card__name">{{ $social->linkedin }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">Почта</p>
                        <div class="card">
                            <span class="card__name">{{ $social->mail }}</span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xl-3 col-md-4 col-sm-5 mb-sm-0 mb-3">
                        <a href="{{ route('socials.edit', $social) }}" class="kirano-btn kirano-btn--filled-blue">Редактировать</a>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-5">
                        <button class="kirano-btn kirano-btn--outlined open-delete-modal"
                                data-path="{{ route('socials.destroy', $social) }}">
                            Удалить
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
