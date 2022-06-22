@extends('admin.layout', ['title' => 'Счетчики', 'active' => 'counters'])

@section('content')
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('counters.update', $counter) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row top-section mb-3">
                    <h1 class="kirano-title-h1 mb-4">Добавить счетчик</h1>
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="google_tag" class="form__label">Google Tag</label>
                        <input type="text" id="google_tag" name="google_tag" value="{{ $counter->google_tag }}"
                               placeholder="Вставьте ссылку"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'google_tag'])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="yandex_metrics" class="form__label">Yandex Metrics</label>
                        <input type="text" id="yandex_metrics" name="yandex_metrics" value="{{ $counter->yandex_metrics }}"
                               placeholder="Вставьте ссылку"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'yandex_metrics'])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="facebook_pixel" class="form__label">Facebook Pixel</label>
                        <input type="text" id="facebook_pixel" name="facebook_pixel" value="{{ $counter->facebook_pixel }}"
                               placeholder="Вставьте ссылку"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'facebook_pixel'])
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xl-3 col-md-4 col-sm-5 mb-sm-0 mb-3">
                        <button type="submit" class="kirano-btn kirano-btn--filled-blue">Добавить</button>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-5">
                        <a href="{{ route('counters.index') }}" class="kirano-btn kirano-btn--outlined">
                            Отмена
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
