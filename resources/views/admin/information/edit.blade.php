@extends('admin.layout', ['title' => 'О компании', 'active' => 'information'])

@section('content')
    <section class="content content--mt">
        <form action="{{ route('information.update', $information) }}" method="POST" class="form"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="container-fluid">
                {{-- BLOCK 1 --}}
                <div class="row">
                    <h1 class="kirano-title-h1 mb-4">О компании</h1>
                    <h2 class="kirano-title-h2 mb-4">Блок 1</h2>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="title_ru" class="form__label form__label--sb">
                                Заголовок RU
                            </label>
                            <input type="text" id="title_ru" name="title_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->title_ru }}">
                            @include('admin.includes.error-message', ['name' => 'title_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="title_uz" class="form__label form__label--sb">
                                Sarlavha UZ
                            </label>
                            <input type="text" id="title_uz" name="title_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->title_uz }}">
                            @include('admin.includes.error-message', ['name' => 'title_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="desc1_ru" class="form__label form__label--sb">
                            Абзац 1 RU
                        </label>
                        <textarea rows="8" id="desc1_ru" name="desc1_ru" required
                                  placeholder="Введите текст"
                                  class="form__textarea kirano-w-100">{{ $information->desc1_ru }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'desc1_ru'])
                    </div>
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="desc1_uz" class="form__label form__label--sb">
                            Loyiha tavsifi UZ
                        </label>
                        <textarea rows="8" id="desc1_uz" name="desc1_uz" required
                                  placeholder="Matnni kiriting"
                                  class="form__textarea kirano-w-100">{{ $information->desc1_uz }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'desc1_uz'])
                    </div>
                </div>
                <div class="row mb-sm-4">
                    <div class="col-xxl-4 col-md-6 mb-xxl-0 mb-4">
                        <div class="form__field">
                            <label for="specialists_count" class="form__label form__label--sb">
                                Количество специалистов
                            </label>
                            <input type="text" id="specialists_count" name="specialists_count"
                                   placeholder="Введите количество" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->specialists_count }}">
                            @include('admin.includes.error-message', ['name' => 'specialists_count'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-xxl-0 mb-4">
                        <div class="form__field">
                            <label for="projects_count" class="form__label form__label--sb">
                                Количество выполненных проектов
                            </label>
                            <input type="text" id="projects_count" name="projects_count"
                                   placeholder="Введите количество" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->projects_count }}">
                            @include('admin.includes.error-message', ['name' => 'projects_count'])
                        </div>
                    </div>
                </div>
                {{-- BLOCK 1--}}

                {{-- BLOCK 2 --}}
                <div class="row">
                    <h2 class="kirano-title-h2 mb-4">Блок 2. История компании</h2>
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="desc2_ru" class="form__label form__label--sb">
                            Абзац 2 RU
                        </label>
                        <textarea rows="8" id="desc2_ru" name="desc2_ru" required
                                  placeholder="Введите текст"
                                  class="form__textarea kirano-w-100">{{ $information->desc2_ru }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'desc2_ru'])
                    </div>
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="desc2_uz" class="form__label form__label--sb">
                            Loyiha tavsifi UZ
                        </label>
                        <textarea rows="8" id="desc2_uz" name="desc2_uz" required
                                  placeholder="Matnni kiriting"
                                  class="form__textarea kirano-w-100">{{ $information->desc2_uz }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'desc2_uz'])
                    </div>
                </div>
                <div class="row">
                    <h2 class="kirano-title-h2 mb-4">Фотография блока 2</h2>
                    <div class="col-xxl-3 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="image1" class="form__label">
                                Файл 1 @include('admin.includes.has-file', ['file' => $information->image1])
                            </label>
                            <input type="file" id="image1" name="image1"
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'image1'])
                        </div>
                    </div>
                </div>
                {{-- BLOCK 2 --}}

                {{-- BLOCK 3 --}}
                <div class="row">
                    <h2 class="kirano-title-h2 mb-4">Блок 3</h2>
                    <p class="mb-4">Основными видами оказываемых услуг на сегодняшний день являются:</p>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="service1_ru" class="form__label form__label--sb">
                                Услуга 1 RU
                            </label>
                            <input type="text" id="service1_ru" name="service1_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->service1_ru }}">
                            @include('admin.includes.error-message', ['name' => 'service1_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="service1_uz" class="form__label form__label--sb">
                                Xizmat 1 UZ
                            </label>
                            <input type="text" id="service1_uz" name="service1_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->service1_uz }}">
                            @include('admin.includes.error-message', ['name' => 'service1_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="service2_ru" class="form__label form__label--sb">
                                Услуга 2 RU
                            </label>
                            <input type="text" id="service2_ru" name="service2_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->service2_ru }}">
                            @include('admin.includes.error-message', ['name' => 'service2_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="service2_uz" class="form__label form__label--sb">
                                Xizmat 2 UZ
                            </label>
                            <input type="text" id="service2_uz" name="service2_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->service2_uz }}">
                            @include('admin.includes.error-message', ['name' => 'service2_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="service3_ru" class="form__label form__label--sb">
                                Услуга 3 RU
                            </label>
                            <input type="text" id="service3_ru" name="service3_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->service3_ru }}">
                            @include('admin.includes.error-message', ['name' => 'service3_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="service3_uz" class="form__label form__label--sb">
                                Xizmat 3 UZ
                            </label>
                            <input type="text" id="service3_uz" name="service3_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->service3_uz }}">
                            @include('admin.includes.error-message', ['name' => 'service3_uz'])
                        </div>
                    </div>
                </div>

                <div class="row">
                    <p class="mb-4">В планах развития Компании предусмотрены внедрение таких услуг, как:</p>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="plan1_ru" class="form__label form__label--sb">
                                План 1 RU
                            </label>
                            <input type="text" id="plan1_ru" name="plan1_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->plan1_ru }}">
                            @include('admin.includes.error-message', ['name' => 'plan1_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="plan1_uz" class="form__label form__label--sb">
                                Reja 1 UZ
                            </label>
                            <input type="text" id="plan1_uz" name="plan1_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->plan1_uz }}">
                            @include('admin.includes.error-message', ['name' => 'plan1_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="plan2_ru" class="form__label form__label--sb">
                                План 2 RU
                            </label>
                            <input type="text" id="plan2_ru" name="plan2_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->plan2_ru }}">
                            @include('admin.includes.error-message', ['name' => 'plan2_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="plan2_uz" class="form__label form__label--sb">
                                Reja 2 UZ
                            </label>
                            <input type="text" id="plan2_uz" name="plan2_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->plan2_uz }}">
                            @include('admin.includes.error-message', ['name' => 'plan2_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="plan3_ru" class="form__label form__label--sb">
                                План 3 RU
                            </label>
                            <input type="text" id="plan3_ru" name="plan3_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->plan3_ru }}">
                            @include('admin.includes.error-message', ['name' => 'plan3_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="plan3_uz" class="form__label form__label--sb">
                                Reja 3 UZ
                            </label>
                            <input type="text" id="plan3_uz" name="plan3_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->plan3_uz }}">
                            @include('admin.includes.error-message', ['name' => 'plan3_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="plan4_ru" class="form__label form__label--sb">
                                План 4 RU
                            </label>
                            <input type="text" id="plan4_ru" name="plan4_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->plan4_ru }}">
                            @include('admin.includes.error-message', ['name' => 'plan4_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="plan4_uz" class="form__label form__label--sb">
                                Reja 4 UZ
                            </label>
                            <input type="text" id="plan4_uz" name="plan4_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->plan4_uz }}">
                            @include('admin.includes.error-message', ['name' => 'plan4_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h2 class="kirano-title-h2 mb-4">Фотография блока 3</h2>
                    <div class="col-xxl-3 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="image2" class="form__label">
                                Файл 1 @include('admin.includes.has-file', ['file' => $information->image2])
                            </label>
                            <input type="file" id="image2" name="image2"
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'image2'])
                        </div>
                    </div>
                </div>
                {{-- BLOCK 3 --}}

                {{-- BLOCK 4 --}}
                <div class="row">
                    <h2 class="kirano-title-h2 mb-4">Блок 4. Наши ценности</h2>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="values_title1_ru" class="form__label form__label--sb">
                                Заголовок ценности 1 RU
                            </label>
                            <input type="text" id="values_title1_ru" name="values_title1_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->values_title1_ru }}">
                            @include('admin.includes.error-message', ['name' => 'values_title1_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="values_title1_uz" class="form__label form__label--sb">
                                Qiymat sarlavhasi 1 UZ
                            </label>
                            <input type="text" id="values_title1_uz" name="values_title1_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->values_title1_uz }}">
                            @include('admin.includes.error-message', ['name' => 'values_title1_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="values_desc1_ru" class="form__label form__label--sb">
                            Описание ценности 1 RU
                        </label>
                        <textarea rows="8" id="values_desc1_ru" name="values_desc1_ru" required
                                  placeholder="Введите текст"
                                  class="form__textarea kirano-w-100">{{ $information->values_desc1_ru }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'values_desc1_ru'])
                    </div>
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="values_desc1_uz" class="form__label form__label--sb">
                            Qiymati tavsifi UZ
                        </label>
                        <textarea rows="8" id="values_desc1_uz" name="values_desc1_uz" required
                                  placeholder="Matnni kiriting"
                                  class="form__textarea kirano-w-100">{{ $information->values_desc1_uz }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'values_desc1_uz'])
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="values_title2_ru" class="form__label form__label--sb">
                                Заголовок ценности 2 RU
                            </label>
                            <input type="text" id="values_title2_ru" name="values_title2_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->values_title2_ru }}">
                            @include('admin.includes.error-message', ['name' => 'values_title2_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="values_title2_uz" class="form__label form__label--sb">
                                Qiymat sarlavhasi 2 UZ
                            </label>
                            <input type="text" id="values_title2_uz" name="values_title2_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->values_title2_uz }}">
                            @include('admin.includes.error-message', ['name' => 'values_title2_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="values_desc2_ru" class="form__label form__label--sb">
                            Описание ценности 2 RU
                        </label>
                        <textarea rows="8" id="values_desc2_ru" name="values_desc2_ru" required
                                  placeholder="Введите текст"
                                  class="form__textarea kirano-w-100">{{ $information->values_desc2_ru }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'values_desc2_ru'])
                    </div>
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="values_desc2_uz" class="form__label form__label--sb">
                            Qiymati tavsifi UZ
                        </label>
                        <textarea rows="8" id="values_desc2_uz" name="values_desc2_uz" required
                                  placeholder="Matnni kiriting"
                                  class="form__textarea kirano-w-100">{{ $information->values_desc2_uz }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'values_desc2_uz'])
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="values_title3_ru" class="form__label form__label--sb">
                                Заголовок ценности 3 RU
                            </label>
                            <input type="text" id="values_title3_ru" name="values_title3_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->values_title3_ru }}">
                            @include('admin.includes.error-message', ['name' => 'values_title3_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="values_title3_uz" class="form__label form__label--sb">
                                Qiymat sarlavhasi 3 UZ
                            </label>
                            <input type="text" id="values_title3_uz" name="values_title3_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->values_title3_uz }}">
                            @include('admin.includes.error-message', ['name' => 'values_title3_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="values_desc3_ru" class="form__label form__label--sb">
                            Описание ценности 3 RU
                        </label>
                        <textarea rows="8" id="values_desc3_ru" name="values_desc3_ru" required
                                  placeholder="Введите текст"
                                  class="form__textarea kirano-w-100">{{ $information->values_desc3_ru }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'values_desc3_ru'])
                    </div>
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="values_desc3_uz" class="form__label form__label--sb">
                            Qiymati tavsifi UZ
                        </label>
                        <textarea rows="8" id="values_desc3_uz" name="values_desc3_uz" required
                                  placeholder="Matnni kiriting"
                                  class="form__textarea kirano-w-100">{{ $information->values_desc3_uz }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'values_desc3_uz'])
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="values_title4_ru" class="form__label form__label--sb">
                                Заголовок ценности 4 RU
                            </label>
                            <input type="text" id="values_title4_ru" name="values_title4_ru"
                                   placeholder="Введите заголовок" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->values_title4_ru }}">
                            @include('admin.includes.error-message', ['name' => 'values_title4_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="values_title4_uz" class="form__label form__label--sb">
                                Qiymat sarlavhasi 4 UZ
                            </label>
                            <input type="text" id="values_title4_uz" name="values_title4_uz"
                                   placeholder="Sarlavha kiriting" class="form__input form__input--gray kirano-w-100"
                                   value="{{ $information->values_title4_uz }}">
                            @include('admin.includes.error-message', ['name' => 'values_title4_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="values_desc4_ru" class="form__label form__label--sb">
                            Описание ценности 4 RU
                        </label>
                        <textarea rows="8" id="values_desc4_ru" name="values_desc4_ru" required
                                  placeholder="Введите текст"
                                  class="form__textarea kirano-w-100">{{ $information->values_desc4_ru }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'values_desc4_ru'])
                    </div>
                    <div class="col-xl-5 col-md-6 mb-4">
                        <label for="values_desc4_uz" class="form__label form__label--sb">
                            Qiymati tavsifi UZ
                        </label>
                        <textarea rows="8" id="values_desc4_uz" name="values_desc4_uz" required
                                  placeholder="Matnni kiriting"
                                  class="form__textarea kirano-w-100">{{ $information->values_desc4_uz }}</textarea>
                        @include('admin.includes.error-message', ['name' => 'values_desc4_uz'])
                    </div>
                </div>
                {{-- BLOCK 4 --}}

                {{-- BLOCK 5 --}}
                <div class="row">
                    <h2 class="kirano-title-h2 mb-4">Устав компании</h2>
                    <div class="col-xxl-3 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="charter" class="form__label">
                                Файл 1 @include('admin.includes.has-file', ['file' => $information->charter])
                            </label>
                            <input type="file" id="charter" name="charter"
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'charter'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h2 class="kirano-title-h2 mb-4">Лицензии</h2>
                    <div class="col-xxl-3 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="image3" class="form__label">
                                Файл 1 @include('admin.includes.has-file', ['file' => $information->image3])
                            </label>
                            <input type="file" id="image3" name="image3"
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'image3'])
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="image4" class="form__label">
                                Файл 2 @include('admin.includes.has-file', ['file' => $information->image4])
                            </label>
                            <input type="file" id="image4" name="image4"
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'image4'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h2 class="kirano-title-h2 mb-4">Структура компании</h2>
                    <div class="col-xxl-3 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="company_structure_ru" class="form__label">
                                Файл 1
                                RU @include('admin.includes.has-file', ['file' => $information->company_structure_ru])
                            </label>
                            <input type="file" id="company_structure_ru" name="company_structure_ru"
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'company_structure_ru'])
                        </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="company_structure_uz" class="form__label">
                                Файл 1
                                UZ @include('admin.includes.has-file', ['file' => $information->company_structure_uz])
                            </label>
                            <input type="file" id="company_structure_uz" name="company_structure_uz"
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'company_structure_uz'])
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h2 class="kirano-title-h2 mb-4">Наблюдательный совет</h2>
                    <div class="col-xxl-3 col-md-6 mb-4">
                        <div class="form__field">
                            <label for="supervisory_board" class="form__label">
                                Файл 1 @include('admin.includes.has-file', ['file' => $information->supervisory_board])
                            </label>
                            <input type="file" id="supervisory_board" name="supervisory_board"
                                   class="form__input--file kirano-w-100">
                            @include('admin.includes.error-message', ['name' => 'supervisory_board'])
                        </div>
                    </div>
                </div>
                {{-- BLOCK 5 --}}

                <div class="row mb-4">
                    <div class="col-xl-3 col-md-6 mb-lg-0 mb-3">
                        <button type="submit" class="kirano-btn kirano-btn--filled-blue">Сохранить</button>
                    </div>
                    <div class="col-xl-2 col-md-4">
                        <a href="{{ route('information.index') }}" class="kirano-btn kirano-btn--outlined">Отмена</a>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

@section('custom-js')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
        const textAreas = document.querySelectorAll('textarea');
        CKEDITOR.replace('desc1_ru');
        CKEDITOR.replace('desc1_uz');
        CKEDITOR.replace('desc2_ru');
        CKEDITOR.replace('desc2_uz');
    </script>
@endsection
