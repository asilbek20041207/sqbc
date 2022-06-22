@extends('admin.layout', ['title' => 'Соц. сети', 'active' => 'socials'])

@section('content')
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('socials.store') }}" method="POST">
                @csrf
                <div class="row mb-3 top-section">
                    <h1 class="kirano-title-h1 mb-4">Добавить соц. сети</h1>
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="telegram" class="form__label">Telegram</label>
                        <input type="text" id="telegram" name="telegram" value="{{ old('telegram') }}"
                               placeholder="Вставьте ссылку"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'telegram'])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="facebook" class="form__label">Facebook</label>
                        <input type="text" id="facebook" name="facebook" value="{{ old('facebook') }}"
                               placeholder="Вставьте ссылку"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'facebook'])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="instagram" class="form__label">Instagram</label>
                        <input type="text" id="instagram" name="instagram" value="{{ old('instagram') }}"
                               placeholder="Вставьте ссылку"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'instagram'])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="linkedin" class="form__label">LinkedIn</label>
                        <input type="text" id="linkedin" name="linkedin" value="{{ old('linkedin') }}"
                               placeholder="Вставьте ссылку"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'linkedin'])
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-xxl-5 col-xl-6 col-md-8 col-sm-10">
                        <label for="mail" class="form__label">Почта</label>
                        <input type="text" id="mail" name="mail" value="{{ old('mail') }}"
                               placeholder="Вставьте ссылку"
                               class="form__input form__input--gray kirano-w-100">
                        @include('admin.includes.error-message', ['name' => 'mail'])
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-xl-3 col-md-4 col-sm-5 mb-sm-0 mb-3">
                        <button type="submit" class="kirano-btn kirano-btn--filled-blue">Добавить</button>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-md-4 col-sm-5">
                        <a href="{{ route('socials.index') }}" class="kirano-btn kirano-btn--outlined">Отмена</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
