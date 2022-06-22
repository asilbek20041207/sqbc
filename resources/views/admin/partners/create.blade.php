@extends('admin.layout', ['title' => 'Партнеры', 'active' => 'partners'])

@section('content')
    <section class="content content--mt">
        <form action="{{ route('partners.store') }}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            <div class="container-fluid">
                <div class="row mb-4">
                    <h1 class="kirano-title-h1 mb-4">Добавить партнера</h1>
                    <h2 class="kirano-title-h2 mb-4">Логотип партнера (SVG)</h2>
                    <div class="col-xxl-3 col-md-6">
                        <div class="form__field">
                            <label for="image" class="form__label">Файл 1</label>
                            <input type="file" id="image" name="image" required
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'image'])
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-lg-0 mb-3">
                        <button type="submit" class="kirano-btn kirano-btn--filled-blue">Добавить</button>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <a href="{{ route('articles.index') }}" class="kirano-btn kirano-btn--outlined">Отмена</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
