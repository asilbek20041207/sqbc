@extends('frontend.layout', ['title' => 'SQB Construction - Новости - Партнеры', 'page' => 'news'])

@section('content')
    <section class="crumbs container-fluid">
        <ul>
            <li><a href="{{ route('home') }}">{{ __('dictionary.home') }}</a></li>
            <li><a>{{ __('dictionary.news') }}</a></li>
        </ul>
    </section>
    @if($articles->isNotEmpty())
        <section class="news container-fluid">
            <div class="items_row">
                @foreach($articles as $article)
                    <div class="item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('showArticle', $article) }}" class="content">
                            <div class="img no-video">
                                <img src="{{ asset('storage/' . $article->preview) }}" alt="news image">
                            </div>
                            <div class="text">
                                <h3>{{ \Illuminate\Support\Str::limit($article['title_' . app()->getLocale()], 50) }}</h3>
                                <div class="date">
                                    <span>{{ $article->date }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    @if($videoArticles->isNotEmpty())
        <section class="news container-fluid">
            <div class="items_row">
                @foreach($videoArticles as $videoArticle)
                    <div class="item col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                        <a href="{{ route('showVideoArticle', $videoArticle) }}" class="content">
                            <div class="img">
                                <img src="{{ asset('storage/' . $videoArticle->preview) }}" alt="news image">
                            </div>
                            <div class="text">
                                <h3>{{ \Illuminate\Support\Str::limit($videoArticle['title_' . app()->getLocale()], 50) }}</h3>
                                <div class="date">
                                    <span>{{ date('d.m.Y', strtotime($videoArticle->date)) }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
@endsection
