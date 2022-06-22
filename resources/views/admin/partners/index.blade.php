@extends('admin.layout', ['title' => 'Партнеры', 'active' => 'partners'])

@section('content')
    <section class="content content--mt">
        <div class="container-fluid">
            <div class="content__top kirano-w-100">
                <a href="{{ route('partners.create') }}" class="add-button">
                    <svg class="add-button__icon">
                        <use xlink:href="/admin/assets/icons/sprite.svg#icon-plus"></use>
                    </svg>
                </a>
            </div>
            @include('admin.includes.success-message')
            @if($partners->isNotEmpty())
                <div class="row">
                    @foreach($partners as $partner)
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card card--square">
                                <span class="card__name">
                                    <img src="{{ asset('storage/' . $partner->image) }}" alt="Article image">
                                </span>
                                <div class="card__actions">
                                    <button class="card__delete open-delete-modal"
                                            data-path="{{ route('partners.destroy', $partner) }}">
                                        <svg class="card__icon card__icon--delete">
                                            <use xlink:href="/admin/assets/icons/sprite.svg#icon-delete"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                @include('admin.includes.pagination', ['items' => $partners])
            @endif
        </div>
    </section>
@endsection
