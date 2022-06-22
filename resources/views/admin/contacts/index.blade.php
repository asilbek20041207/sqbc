@extends('admin.layout', ['title' => 'Контакты', 'active' => 'contacts'])

@section('content')
    <section class="content">
        <div class="container-fluid">
            @include('admin.includes.success-message')
            @if(is_null($contact))
                <div class="content__top">
                    <a href="{{ route('contacts.create') }}" class="add-button">
                        <svg class="add-button__icon">
                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-plus"></use>
                        </svg>
                    </a>
                </div>
            @else
                <div class="row top-section">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">Телефон</p>
                        <div class="card">
                            <span class="card__name">{{ $contact->phone }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">Время работы</p>
                        <div class="card">
                            <span class="card__name">{{ $contact->work_time_ru }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">Адрес</p>
                        <div class="card">
                            <span class="card__name">{{ $contact->address_ru }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <p class="card-title kirano-p1">Геолокация</p>
                        <div class="card">
                            <span class="card__name">{{ $contact->geolocation }}</span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xl-3 col-md-4 col-sm-5 mb-sm-0 mb-3">
                        <a href="{{ route('contacts.edit', $contact) }}" class="kirano-btn kirano-btn--filled-blue">
                            Редактировать
                        </a>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-5">
                        <button class="kirano-btn kirano-btn--outlined open-delete-modal"
                                data-path="{{ route('contacts.destroy', $contact) }}">
                            Удалить
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
