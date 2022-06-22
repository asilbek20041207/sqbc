@extends('admin.layout', ['title' => 'О компании', 'active' => 'information'])

@section('content')
    <section class="content content--mt">
        <div class="container-fluid">
            @include('admin.includes.success-message')
            @if(is_null($information))
                <div class="content__top kirano-w-100">
                    <a href={{ route('information.create') }} class="add-button">
                        <svg class="add-button__icon">
                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-plus"></use>
                        </svg>
                    </a>
                </div>
            @else
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                                <span class="card__name">
                                    {{ $information->title_ru }}
                                </span>
                            <div class="card__actions">
                                <a href="{{ route('information.edit', $information) }}" class="card__edit">
                                    <svg class="card__icon card__icon--edit">
                                        <use xlink:href="/admin/assets/icons/sprite.svg#icon-edit"></use>
                                    </svg>
                                </a>
                                <button class="card__delete open-delete-modal"
                                        data-path="{{ route('information.destroy', $information) }}">
                                    <svg class="card__icon card__icon--delete">
                                        <use xlink:href="/admin/assets/icons/sprite.svg#icon-delete"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
