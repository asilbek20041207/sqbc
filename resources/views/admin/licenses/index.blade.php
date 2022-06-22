@extends('admin.layout', ['title' => 'Лицензии', 'active' => 'licenses'])

@section('content')
    <section class="content content--mt">
        <div class="container-fluid">
            <div class="content__top kirano-w-100">
                <a href="{{ route('licenses.create') }}" class="add-button">
                    <svg class="add-button__icon">
                        <use xlink:href="/admin/assets/icons/sprite.svg#icon-plus"></use>
                    </svg>
                </a>
            </div>
            @include('admin.includes.success-message')
            @if($licenses->isNotEmpty())
                <div class="row">
                    @foreach($licenses as $license)
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card card--square">
                                <span class="card__name">
                                    <img src="{{ asset('storage/' . $license->image) }}" alt="Article image">
                                </span>
                                <div class="card__actions">
                                    <button class="card__delete open-delete-modal"
                                            data-path="{{ route('licenses.destroy', $license) }}">
                                        <svg class="card__icon card__icon--delete">
                                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-delete"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @include('admin.includes.pagination', ['items' => $licenses])
            @endif
        </div>
    </section>
@endsection
