@extends('admin.layout', ['title' => 'Проекты', 'active' => 'projects'])

@section('content')
    <section class="content content--mt">
        <form action="{{ route('projects.store') }}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row mb-sm-4">
                    <h1 class="kirano-title-h1 mb-4">Добавить проект</h1>
                    <div class="col-xxl-4 col-md-6 mb-xxl-0 mb-4">
                        <div class="form__field">
                            <label for="title_ru" class="form__label form__label--sb">
                                Название проекта RU
                            </label>
                            <input type="text" id="title_ru" name="title_ru"
                                   placeholder="Введите название" class="form__input form__input--gray kirano-w-100"
                                   value="{{ old('title_ru') }}">
                            @include('admin.includes.error-message', ['name' => 'title_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-xxl-0 mb-4">
                        <div class="form__field">
                            <label for="title_uz" class="form__label form__label--sb">
                                Loyiha nomi UZ
                            </label>
                            <input type="text" id="title_uz" name="title_uz"
                                   placeholder="Nomini kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ old('title_uz') }}">
                            @include('admin.includes.error-message', ['name' => 'title_uz'])
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-5 mb-sm-4">
                    <div class="col-xl-3 col-md-4 mb-lg-0 mb-4">
                        <h2 class="kirano-title-h2 mb-4">Фотография проекта</h2>
                        <div class="form__field">
                            <label for="image" class="form__label">Файл 1</label>
                            <input type="file" id="image" name="image" required
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'image'])
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="description_ru" class="form__label">Описание проекта RU</label>
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
                <div class="row mb-sm-4">
                    <div class="col-xxl-4 col-md-6 mb-xxl-0 mb-4">
                        <div class="form__field">
                            <label for="address_ru" class="form__label form__label--sb">
                                Адрес проекта RU
                            </label>
                            <input type="text" id="address_ru" name="address_ru"
                                   placeholder="Введите адрес" class="form__input form__input--gray kirano-w-100"
                                   value="{{ old('address_ru') }}">
                            @include('admin.includes.error-message', ['name' => 'address_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-xxl-0 mb-4">
                        <div class="form__field">
                            <label for="address_uz" class="form__label form__label--sb">
                                Loyiha manzili UZ
                            </label>
                            <input type="text" id="address_uz" name="address_uz"
                                   placeholder="Nomini kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ old('address_uz') }}">
                            @include('admin.includes.error-message', ['name' => 'address_uz'])
                        </div>
                    </div>
                </div>
                <div class="row mb-sm-4">
                    <div class="col-xxl-4 col-md-6 mb-xxl-0 mb-4">
                        <div class="form__field">
                            <label for="date" class="form__label form__label--sb">
                                Год выполнения
                            </label>
                            <input type="date" id="date" name="date" class="form__input form__input--gray kirano-w-100"
                                   value="{{ old('date') }}">
                            @include('admin.includes.error-message', ['name' => 'date'])
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-lg-0 mb-3">
                        <button type="submit" class="kirano-btn kirano-btn--filled-blue">Добавить</button>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <a href="{{ route('projects.index') }}" class="kirano-btn kirano-btn--outlined">Отмена</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
