@extends('admin.layout', ['title' => 'Видео Новости', 'active' => 'video-articles'])

@section('content')
    <section class="content content--mt">
        <form action="{{ route('video-articles.update', $videoArticle) }}" method="POST" class="form"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container-fluid">
                <div class="row mb-sm-4">
                    <h1 class="kirano-title-h1 mb-4">Редактировать новость</h1>
                    <div class="col-xxl-4 col-md-6 mb-xxl-0 mb-4">
                        <div class="form__field">
                            <label for="title_ru" class="form__label form__label--sb">
                                Главный заголовок RU
                            </label>
                            <input type="text" id="title_ru" name="title_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $videoArticle->title_ru }}" required>
                            @include('admin.includes.error-message', ['name' => 'title_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-xxl-0 mb-4">
                        <div class="form__field">
                            <label for="title_uz" class="form__label form__label--sb">
                                Asosiy sarlavha UZ
                            </label>
                            <input type="text" id="title_uz" name="title_uz"
                                   placeholder="Nomini kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $videoArticle->title_uz }}" required>
                            @include('admin.includes.error-message', ['name' => 'title_uz'])
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-5 mb-sm-4">
                    <div class="col-xl-3 col-md-4 mb-lg-0 mb-4">
                        <h2 class="kirano-title-h2 mb-4">Фотография превью</h2>
                        <div class="form__field">
                            <label for="preview" class="form__label">Файл 1</label>
                            <input type="file" id="preview" name="preview" required
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'preview'])
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 mb-lg-0 mb-4">
                        <h2 class="kirano-title-h2 mb-4">Ссылка на видео</h2>
                        <div class="form__field">
                            <label for="link" class="form__label">Ссылка</label>
                            <input type="text" id="link" placeholder="Вставьте ссылку" name="link" required
                                   class="form__input form__input--gray kirano-w-100" value="{{ $videoArticle->link }}">
                            @include('admin.includes.error-message', ['name' => 'link'])
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-5 mb-sm-4">
                    <div class="col-xl-3 col-md-4 mb-lg-0 mb-4">
                        <h2 class="kirano-title-h2 mb-4">Дата публикации</h2>
                        <div class="form__field">
                            <label for="date" class="form__label">Дата</label>
                            <input type="date" id="date" name="date" required
                                   class="form__input form__input--gray kirano-w-100" value="{{ $videoArticle->date }}">
                            @include('admin.includes.error-message', ['name' => 'date'])
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-lg-0 mb-3">
                        <button type="submit" class="kirano-btn kirano-btn--filled-blue">Добавить</button>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <a href="{{ route('video-articles.index') }}" class="kirano-btn kirano-btn--outlined">Отмена</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
