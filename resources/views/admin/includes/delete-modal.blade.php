<div class="modal delete-modal">
    <div class="modal__body">
        <button class="modal__close-btn close-delete-modal"></button>
        <h1 class="modal__title kirano-title-h1">Вы действительно хотите удалить?</h1>
        <p class="modal__text kirano-p1">После удаления данные будут потеряны.</p>
        <div class="modal__row">
            <form method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="kirano-btn kirano-btn--filled-white">Удалить</button>
            </form>
            <button class="kirano-btn kirano-btn--outlined-white close-delete-modal">Отмена</button>
        </div>
    </div>
</div>
