@extends('admin.layout', ['title' => 'Видео Новости', 'active' => 'video-articles'])

@section('content')
    <section class="content content--mt">
        <div class="container-fluid">
            <div class="content__top kirano-w-100">
                <a href={{ route('video-articles.create') }} class="add-button">
                    <svg class="add-button__icon">
                        <use xlink:href="/admin/assets/icons/sprite.svg#icon-plus"></use>
                    </svg>
                </a>
            </div>
            @include('admin.includes.success-message')
            @if($videoArticles->isNotEmpty())
                <div class="row">
                    <div class="col-12">
                        @foreach($videoArticles as $videoArticle)
                            <div class="card card--image">
                                <span class="card__name card__name--image">
                                    <img src="{{ asset('storage/' . $videoArticle->preview) }}" alt="Article image">
                                    {{ $videoArticle->title_ru }}
                                </span>
                                <div class="card__actions">
                                    <a href="{{ route('video-articles.edit', $videoArticle) }}" class="card__edit">
                                        <svg class="card__icon card__icon--edit">
                                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-edit"></use>
                                        </svg>
                                    </a>
                                    <button class="card__delete open-delete-modal"
                                            data-path="{{ route('video-articles.destroy', $videoArticle) }}">
                                        <svg class="card__icon card__icon--delete">
                                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-delete"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @include('admin.includes.pagination', ['items' => $videoArticles])
            @endif
        </div>
    </section>
@endsection
