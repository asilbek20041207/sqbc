@extends('frontend.layout', ['title' => 'Статья', 'page' => 'news-2'])

@section('content')
    <section class="inner-content container-fluid">
        <div class="col-xl-10 col-lg-10 col-12">
            <div class="video" style="background: url('{{ asset('storage/' . $videoArticle->preview) }}') center center no-repeat; background-size: cover">
                <a data-fancybox href="{{ $videoArticle->link }}"><span></span></a>
            </div>
            <div class="inner-content-text">
                <h2>{{ $videoArticle['title_' . app()->getLocale()] }}</h2>
            </div>
        </div>
    </section>
@endsection
