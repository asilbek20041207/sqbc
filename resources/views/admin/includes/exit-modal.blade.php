<div class="modal exit-modal">
    <div class="modal__body">
        <button class="modal__close-btn close-exit-modal"></button>
        <h1 class="modal__title kirano-title-h1">Выйти из аккаунта?</h1>
        <div class="modal__row">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="kirano-btn kirano-btn--filled-white">Выйти</button>
            </form>
            <button class="kirano-btn kirano-btn--outlined-white close-exit-modal">Отмена</button>
        </div>
    </div>
</div>
