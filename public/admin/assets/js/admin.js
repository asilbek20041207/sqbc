$(document).ready(function () {
    // Mask for tel-input
    $('.form__input--mask').mask('+998 11 111 11 11')
    $('.form__input--mask').on('focus', function () {
        $('.form__input--mask').val('+998')
    })
    function limitTextLength(inputElem) {
        let symbolsRemaining = 0
        $(inputElem).each(function () {
            let attr = $(this).attr('maxlength')
            if (typeof attr !== 'undefined' && attr !== false) {
                let countingBlock = $(this).prev().children().children()
                $(this).on('input', function () {
                    symbolsRemaining =
                        $(this).attr('maxlength') - $(this).val().length
                    countingBlock.text(symbolsRemaining)
                })
                $(this).on('keydown', function () {
                    if (symbolsRemaining <= 0) {
                        countingBlock.addClass('over-limit')
                        setTimeout(function () {
                            countingBlock.removeClass('over-limit')
                        }, 100)
                    }
                })
            }
        })
    }
    function addCharacteristic() {
        $('.add-characteristic').on('click', function () {
            const temp = $(`<div class="mb-4" id="characteristic">
                                <div class="row mb-4">
                                    <div class="col-xl-5 col-md-6 mb-4">
                                        <div class="form__field">
                                            <label class="form__label form__label--sb">
                                                Название характеристики RU <span class="red">осталось символов: <i>21</i></span>
                                            </label>
                                            <input type="text" name="ch_name_ru[]" maxlength="21" placeholder="Введите название" class="form__input form__input--gray kirano-w-100">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-md-6 mb-4">
                                        <div class="form__field">
                                            <label class="form__label form__label--sb">
                                                Xususiyatlari nomi UZ <span class="red">belgilar qoldi: <i>21</i></span>
                                            </label>
                                            <input type="text" name="ch_name_uz[]" maxlength="21" placeholder="Nomini kiriting" class="form__input form__input--gray kirano-w-100">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-md-6">
                                        <div class="form__field">
                                            <label class="form__label form__label--sb">
                                                Feature name EN <span class="red">characters left: <i>21</i></span>
                                            </label>
                                            <input type="text" name="ch_name_en[]" maxlength="21" placeholder="Enter name" class="form__input form__input--gray kirano-w-100">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-5 col-md-6 mb-4">
                                        <div class="form__field">
                                            <label class="form__label form__label--sb">
                                                Описание характеристики RU <span class="red">осталось символов: <i>21</i></span>
                                            </label>
                                            <input type="text" name="ch_desc_ru[]" maxlength="21" placeholder="Введите описание" class="form__input form__input--gray kirano-w-100">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-md-6 mb-4">
                                        <div class="form__field">
                                            <label class="form__label form__label--sb">
                                                Tavsif xususiyatlari UZ <span class="red">belgilar qoldi: <i>21</i></span>
                                            </label>
                                            <input type="text" name="ch_desc_uz[]" maxlength="21" placeholder="Nomini kiriting" class="form__input form__input--gray kirano-w-100">
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-md-6">
                                        <div class="form__field">
                                            <label class="form__label form__label--sb">
                                                Description of characteristics EN <span class="red">characters left: <i>21</i></span>
                                            </label>
                                            <input type="text" name="ch_desc_en[]" maxlength="21" placeholder="Enter name" class="form__input form__input--gray kirano-w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>`)
            temp.insertAfter('#characteristic')
            $(this).closest('.row').prev().prev().removeAttr('id')
            limitTextLength('input')
        })
        $('.add-description').on('click', function () {
            const temp = $(`
                <div id="description">
                    <div class="row mb-4">
                        <div class="col-xl-5 col-md-6 mb-4">
                            <label for="subtitles_ru[]" class="form__label">Подзаголовок статьи RU</label>
                            <textarea rows="8" id="subtitles_ru[]" name="subtitles_ru[]" placeholder="Введите текст"
                                      class="form__textarea kirano-w-100"></textarea>
                        </div>
                        <div class="col-xl-5 col-md-6 mb-4">
                            <label for="subtitles_uz[]" class="form__label">Maqola sarlavhasi UZ</label>
                            <textarea rows="8" id="subtitles_uz[]" name="subtitles_uz[]" placeholder="Matnni kiriting"
                                      class="form__textarea kirano-w-100"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-5 col-md-6 mb-4">
                            <label for="descriptions_ru[]" class="form__label">Абзац RU</label>
                            <textarea rows="8" id="descriptions_ru[]" name="descriptions_ru[]"
                                      placeholder="Введите текст"
                                      class="form__textarea kirano-w-100"></textarea>
                        </div>
                        <div class="col-xl-5 col-md-6 mb-4">
                            <label for="descriptions_uz[]" class="form__label">Xatboshi UZ</label>
                            <textarea rows="8" id="descriptions_uz[]" name="descriptions_uz[]"
                                      placeholder="Matnni kiriting"
                                      class="form__textarea kirano-w-100"></textarea>
                        </div>
                    </div>
                    <div class="row mb-sm-4">
                        <div class="col-xl-3 col-md-4 mb-lg-0 mb-4">
                            <div class="form__field">
                                <label for="images[]" class="form__label">Файл</label>
                                <input type="file" id="images[]" name="images[]" multiple
                                       class="form__input--file kirano-w-100">
                            </div>
                        </div>
                    </div>
                </div>
            `)

            temp.insertAfter('#description')
            $(this).closest('.row').prev().prev().removeAttr('id')
        })
    }
    addCharacteristic()
    limitTextLength('input')
    limitTextLength('textarea')
})
const calcHeaderHeight = () => {
    const headerHeight = document.querySelector('.header__row').offsetHeight
    const body = document.querySelector('body')
    body.style.paddingTop = headerHeight + 'px'
}
calcHeaderHeight()
window.addEventListener('resize', () => calcHeaderHeight())
window.addEventListener('load', () => {
    const mobileBurger = () => {
        const openBtn = document.querySelector('.aside__open-btn')
        const closeBtn = document.querySelector('.aside__close-btn')
        const menu = document.querySelector('.aside')

        openBtn.addEventListener('click', () => {
            menu.classList.add('active')
            document.body.style.overflow = 'hidden'
        })

        closeBtn.addEventListener('click', () => {
            menu.classList.remove('active')
            document.body.style.overflow = ''
        })
    }
    const openModal = modal => {
        modal.classList.add('active')
        document.body.style.overflow = 'hidden'
    }
    const closeModal = modal => {
        modal.classList.remove('active')
        document.body.style.overflow = ''
    }
    const modalFunction = (
        modalClass,
        openModalButtonsClass,
        closeModalButtonsClass
    ) => {
        const modal = document.querySelector(modalClass)
        const openModalButtons = document.querySelectorAll(
            openModalButtonsClass
        )
        const closeModalButtons = document.querySelectorAll(
            closeModalButtonsClass
        )
        openModalButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                openModal(modal)

                if (btn.getAttribute('data-path')) {
                    const path = btn.getAttribute('data-path')
                    const form = modal.querySelector('form')
                    form.setAttribute('action', path)
                }
            })
        })
        closeModalButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                closeModal(modal)
            })
        })
    }
    mobileBurger()
    modalFunction('.exit-modal', '.open-exit-modal', '.close-exit-modal')
    modalFunction('.delete-modal', '.open-delete-modal', '.close-delete-modal')
})
