@extends('admin.layout', ['title' => 'Проекты', 'active' => 'projects'])

@section('content')
    <section class="content content--mt">
        <div class="container-fluid">
            <div class="content__top kirano-w-100">
                <a href={{ route('projects.create') }} class="add-button">
                    <svg class="add-button__icon">
                        <use xlink:href="/admin/assets/icons/sprite.svg#icon-plus"></use>
                    </svg>
                </a>
            </div>
            @include('admin.includes.success-message')
            @if($projects->isNotEmpty())
                <div class="row">
                    <div class="col-12">
                        @foreach($projects as $project)
                            <div class="card card--image">
                                <span class="card__name card__name--image">
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="Article image">
                                    {{ $project->title_ru }}
                                </span>
                                <div class="card__actions">
                                    <a href="{{ route('projects.edit', $project) }}" class="card__edit">
                                        <svg class="card__icon card__icon--edit">
                                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-edit"></use>
                                        </svg>
                                    </a>
                                    <button class="card__delete open-delete-modal"
                                            data-path="{{ route('projects.destroy', $project) }}">
                                        <svg class="card__icon card__icon--delete">
                                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-delete"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @include('admin.includes.pagination', ['items' => $projects])
            @endif
        </div>
    </section>
@endsection
