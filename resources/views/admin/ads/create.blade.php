@extends('admin.layout', ['title' => 'Объявления', 'active' => 'ads'])

@section('content')
    <section class="content content--mt">
        <form action="{{ route('ads.store') }}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row mb-sm-4">
                    <h1 class="kirano-title-h1 mb-4">Добавить объявление</h1>
                    <div class="col-xxl-4 col-md-6 mb-xxl-0 mb-4">
                        <div class="form__field">
                            <label for="title_ru" class="form__label form__label--sb">
                                Заголовок RU
                            </label>
                            <input type="text" id="title_ru" name="title_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ old('title_ru') }}">
                            @include('admin.includes.error-message', ['name' => 'title_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-xxl-0 mb-4">
                        <div class="form__field">
                            <label for="title_uz" class="form__label form__label--sb">
                                Sarlavha UZ
                            </label>
                            <input type="text" id="title_uz" name="title_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ old('title_uz') }}">
                            @include('admin.includes.error-message', ['name' => 'title_uz'])
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="description_ru" class="form__label">Абзац 1 RU</label>
                        <textarea rows="8" id="description_ru" name="description_ru" required
                                  placeholder="Введите текст"
                                  class="form__textarea kirano-w-100">{{ old('description_ru') }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'description_ru'])
                    </div>
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="description_uz" class="form__label">Loyiha tavsifi UZ</label>
                        <textarea rows="8" id="description_uz" name="description_uz" required
                                  placeholder="Matnni kiriting"
                                  class="form__textarea kirano-w-100">{{ old('description_uz') }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'description_uz'])
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-lg-0 mb-3">
                        <button type="submit" class="kirano-btn kirano-btn--filled-blue">Добавить</button>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <a href="{{ route('ads.index') }}" class="kirano-btn kirano-btn--outlined">Отмена</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
