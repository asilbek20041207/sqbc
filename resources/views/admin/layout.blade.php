<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/libraries/bootstrap-grid/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libraries/normalize/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <title>{{ $title }}</title>
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="container-fluid">
            <div class="header__row">
                <a href="/" class="logo">
                    <img src="{{ asset('admin/assets/icons/logo.svg') }}" alt="Logo">
                </a>
                <button class="nav__link nav__link--active nav__link--hoverable fw-600 open-exit-modal">Выйти</button>
            </div>
            <aside class="header__aside aside">
                <button class="aside__open-btn">
                    <span></span>
                </button>
                <nav class="nav">
                    <button class="aside__close-btn"></button>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="{{ route('articles.index') }}"
                               class="nav__link {{ $active === 'articles' ? 'nav__link--active' : 'nav__link--hoverable' }}">
                                Новости
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('video-articles.index') }}"
                               class="nav__link {{ $active === 'video-articles' ? 'nav__link--active' : 'nav__link--hoverable' }}">
                                Видео Новости
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('projects.index') }}"
                               class="nav__link {{ $active === 'projects' ? 'nav__link--active' : 'nav__link--hoverable' }}">
                                Проекты
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('information.index') }}"
                               class="nav__link {{ $active === 'information' ? 'nav__link--active' : 'nav__link--hoverable' }}">
                                О компании
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('licenses.index') }}"
                               class="nav__link {{ $active === 'licenses' ? 'nav__link--active' : 'nav__link--hoverable' }}">
                                Лицензии
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('partners.index') }}"
                               class="nav__link {{ $active === 'partners' ? 'nav__link--active' : 'nav__link--hoverable' }}">
                                Партнеры
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('ads.index') }}"
                               class="nav__link {{ $active === 'ads' ? 'nav__link--active' : 'nav__link--hoverable' }}">
                                Объявления
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('socials.index') }}"
                               class="nav__link {{ $active === 'socials' ? 'nav__link--active' : 'nav__link--hoverable' }}">
                                Соц. сети
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('contacts.index') }}"
                               class="nav__link {{ $active === 'contacts' ? 'nav__link--active' : 'nav__link--hoverable' }}">
                                Контакты
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="{{ route('counters.index') }}"
                               class="nav__link {{ $active === 'counters' ? 'nav__link--active' : 'nav__link--hoverable' }}">
                                Счетчики
                            </a>
                        </li>
                        <li class="nav__item nav__item--bottom">
                            <a href="https://kirano.uz" class="nav__link nav__link--hoverable">kirano.uz</a>
                        </li>
                    </ul>
                </nav>
            </aside>
        </div>
    </header>

    <main style="{{ $active === 'login' ? 'z-index: 2;' : '' }}">
        @yield('content')
    </main>

    @include('admin.includes.exit-modal')
    @include('admin.includes.delete-modal')

</div>
<!-- /.wrapper -->

<script src="{{ asset('assets/libraries/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libraries/phonemask/phonemask.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/admin.js') }}"></script>

@yield('custom-js')

</body>

</html>
