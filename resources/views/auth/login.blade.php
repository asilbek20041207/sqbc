@extends('admin.layout', ['title' => 'Логин', 'active' => 'login'])

@section('content')
    <div class="login" style="position: fixed; top: 0">
        <h1 class="login__title .kirano-title-h1">Вход в админ панель</h1>
        <form action="{{ route('authenticate') }}" method="POST" class="login__form form col-sm-4 col-12">
            @csrf
            @error('login')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form__field">
                <label for="kr-login" class="form__label form__label--white">Логин</label>
                <input type="text" id="kr-login" name="login" required placeholder="Введите логин"
                       class="form__input form__input--white kirano-w-100">
            </div>
            <div class="form__field">
                <label for="kr-password" class="form__label form__label--white">Пароль</label>
                <input type="password" id="kr-password" name="password" required placeholder="Введите логин"
                       class="form__input form__input--white kirano-w-100">
            </div>
            <button class="kirano-btn kirano-btn--filled-blue">Войти</button>
        </form>
        <div class="login__footer">
            <a href="tel:+998 97 717 22 03" class="login__text">Техническая поддержка +998 97 717 22 03</a>
            <a href="mailto:office@kirano.uz" class="login__link">office@kirano.uz</a>
        </div>
    </div>
@endsection
