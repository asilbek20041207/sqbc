@extends('admin.layout', ['title' => 'Новости', 'active' => 'articles'])

@section('content')
    <section class="content content--mt">
        <form action="{{ route('articles.update', $article) }}" method="POST" class="form"
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
                                   value="{{ $article->title_ru }}">
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
                                   value="{{ $article->title_uz }}">
                            @include('admin.includes.error-message', ['name' => 'title_uz'])
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-5 mb-sm-4">
                    <div class="col-xl-3 col-md-4 mb-lg-0 mb-4">
                        <h2 class="kirano-title-h2 mb-4">
                            Фотография превью
                        </h2>
                        <div class="form__field">
                            <label for="preview" class="form__label">
                                Файл 1 @include('admin.includes.has-file', ['file' => $article->preview])
                            </label>
                            <input type="file" id="preview" name="preview"
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'preview'])
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-4 mb-lg-0 mb-4">
                        <h2 class="kirano-title-h2 mb-4">Большое фото статьи</h2>
                        <div class="form__field">
                            <label for="banner" class="form__label">
                                Файл 1 @include('admin.includes.has-file', ['file' => $article->banner])
                            </label>
                            <input type="file" id="banner" name="banner"
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'banner'])
                        </div>
                    </div>
                </div>
                <div class="row mt-sm-5 mb-sm-4">
                    <div class="col-xl-3 col-md-4 mb-lg-0 mb-4">
                        <div class="form__field">
                            <label for="date" class="form__label">Дата публикации</label>
                            <input type="date" id="date" name="date" required value="{{ $article->date }}"
                                   class="form__input form__input--gray kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'date'])
                        </div>
                    </div>
                </div>
                @foreach(unserialize($article->subtitles_ru) as $key => $value)
                    <div>
                        <div class="row mb-4">
                            <div class="col-xl-5 col-md-6 mb-4">
                                <label for="subtitles_ru[]" class="form__label">Подзаголовок статьи RU</label>
                                <textarea rows="8" id="subtitles_ru[]" name="subtitles_ru[]" required
                                          placeholder="Введите текст"
                                          class="form__textarea kirano-w-100">{{ $value }}</textarea>
                            </div>
                            <div class="col-xl-5 col-md-6 mb-4">
                                <label for="subtitles_uz[]" class="form__label">Maqola sarlavhasi UZ</label>
                                <textarea rows="8" id="subtitles_uz[]" name="subtitles_uz[]" required
                                          placeholder="Matnni kiriting"
                                          class="form__textarea kirano-w-100">{{ unserialize($article->subtitles_uz)[$key] }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-xl-5 col-md-6 mb-4">
                                <label for="descriptions_ru[]" class="form__label">Абзац RU</label>
                                <textarea rows="8" id="descriptions_ru[]" name="descriptions_ru[]" required
                                          placeholder="Введите текст"
                                          class="form__textarea kirano-w-100">{{ unserialize($article->descriptions_ru)[$key] }}</textarea>
                            </div>
                            <div class="col-xl-5 col-md-6 mb-4">
                                <label for="descriptions_uz[]" class="form__label">Xatboshi UZ</label>
                                <textarea rows="8" id="descriptions_uz[]" name="descriptions_uz[]" required
                                          placeholder="Matnni kiriting"
                                          class="form__textarea kirano-w-100">{{ unserialize($article->descriptions_uz)[$key] }}</textarea>
                            </div>
                        </div>
                        <div class="row mb-sm-4">
                            <div class="col-xl-3 col-md-4 mb-lg-0 mb-4">
                                <div class="form__field">
                                    <label for="images[]" class="form__label">
                                        Файл @include('admin.includes.has-file', ['file' => unserialize($article->images)[$key]])
                                    </label>
                                    <input type="file" id="images[]" name="images[]" multiple
                                           class="form__input--file kirano-w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div id="description"></div>
                <div class="row mb-4">
                    <div class="col-12">
                        <a href="javascript:void(0)" type="button" class="add-characteristic add-description">
                            Добавить еще описание
                            <svg>
                                <use xlink:href="/admin/assets/icons/sprite.svg#icon-plus"></use>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-lg-0 mb-3">
                        <button type="submit" class="kirano-btn kirano-btn--filled-blue">Сохранить</button>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <a href="{{ route('articles.index') }}" class="kirano-btn kirano-btn--outlined">Отмена</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
