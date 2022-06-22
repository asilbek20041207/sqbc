@extends('admin.layout', ['title' => 'Объявления', 'active' => 'ads'])

@section('content')
    <section class="content content--mt">
        <div class="container-fluid">
            <div class="content__top kirano-w-100">
                <a href={{ route('ads.create') }} class="add-button">
                    <svg class="add-button__icon">
                        <use xlink:href="/admin/assets/icons/sprite.svg#icon-plus"></use>
                    </svg>
                </a>
            </div>
            @include('admin.includes.success-message')
            @if($ads->isNotEmpty())
                <div class="row">
                    <div class="col-12">
                        @foreach($ads as $ad)
                            <div class="card">
                                <span class="card__name">
                                    {{ $ad->title_ru }}
                                </span>
                                <div class="card__actions">
                                    <a href="{{ route('ads.edit', $ad) }}" class="card__edit">
                                        <svg class="card__icon card__icon--edit">
                                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-edit"></use>
                                        </svg>
                                    </a>
                                    <button class="card__delete open-delete-modal"
                                            data-path="{{ route('ads.destroy', $ad) }}">
                                        <svg class="card__icon card__icon--delete">
                                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-delete"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @include('admin.includes.pagination', ['items' => $ads])
            @endif
        </div>
    </section>
@endsection
