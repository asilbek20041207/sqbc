@extends('admin.layout', ['title' => 'Новости', 'active' => 'articles'])

@section('content')
    <section class="content content--mt">
        <div class="container-fluid">
            <div class="content__top kirano-w-100">
                <a href={{ route('articles.create') }} class="add-button">
                    <svg class="add-button__icon">
                        <use xlink:href="/admin/assets/icons/sprite.svg#icon-plus"></use>
                    </svg>
                </a>
            </div>
            @include('admin.includes.success-message')
            @if($articles->isNotEmpty())
                <div class="row">
                    <div class="col-12">
                        @foreach($articles as $article)
                            <div class="card card--image">
                                <span class="card__name card__name--image">
                                    <img src="{{ asset('storage/' . $article->preview) }}" alt="Article image">
                                    {{ $article->title_ru }}
                                </span>
                                <div class="card__actions">
                                    <a href="{{ route('articles.edit', $article) }}" class="card__edit">
                                        <svg class="card__icon card__icon--edit">
                                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-edit"></use>
                                        </svg>
                                    </a>
                                    <button class="card__delete open-delete-modal"
                                            data-path="{{ route('articles.destroy', $article) }}">
                                        <svg class="card__icon card__icon--delete">
                                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-delete"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @include('admin.includes.pagination', ['items' => $articles])
            @endif
        </div>
    </section>
@endsection
