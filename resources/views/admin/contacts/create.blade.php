@extends('admin.layout', ['title' => 'Контакты', 'active' => 'contacts'])

@section('content')
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('contacts.store') }}" method="POST">
                @csrf
                <div class="row mb-3 top-section">
                    <h1 class="kirano-title-h1 mb-4">Добавить контакты</h1>
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="phone" class="form__label">Телефон 1</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+998"
                               class="form__input form__input--mask form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'phone'])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="work_time_ru" class="form__label">Время работы (RU)</label>
                        <input type="text" id="work_time_ru" name="work_time_ru" value="{{ old('work_time_ru') }}"
                               placeholder="Время работы"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'work_time_ru'])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="work_time_uz" class="form__label">Время работы (UZ)</label>
                        <input type="text" id="work_time_uz" name="work_time_uz" value="{{ old('work_time_uz') }}"
                               placeholder="Время работы"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'work_time_uz'])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="address_ru" class="form__label">Адрес (RU)</label>
                        <input type="text" id="address_ru" name="address_ru" value="{{ old('address_ru') }}"
                               placeholder="Адрес"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'address_ru'])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="address_uz" class="form__label">Адрес (UZ)</label>
                        <input type="text" id="address_uz" name="address_uz" value="{{ old('address_uz') }}"
                               placeholder="Адрес"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'address_uz'])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="geolocation" class="form__label">Геолокация</label>
                        <input type="text" id="geolocation" name="geolocation" value="{{ old('geolocation') }}"
                               placeholder="Геолокация"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'geolocation'])
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xl-3 col-md-4 col-sm-5 mb-sm-0 mb-3">
                        <button type="submit" class="kirano-btn kirano-btn--filled-blue">Добавить</button>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-5">
                        <a href="{{ route('contacts.index') }}" class="kirano-btn kirano-btn--outlined">Отмена</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
