@extends('frontend.layout', ['title' => 'Статья - Партнеры', 'page' => 'news'])

@section('content')
    <section class="inner-intro container-fluid">
        <img src="{{ asset('storage/' . $article->banner) }}" alt="intro news">
    </section>
    <section class="inner-content container-fluid">
        <div class="content col-xl-10">
            <div class="titling-part">
                <div class="category">
                    <p>{{ __('dictionary.blog') }}</p>
                    <div class="date">
                        <span>{{ date('d.m.Y', strtotime($article->date)) }}</span>
                    </div>
                </div>
                <h2>{{ $article['title_' . app()->getLocale()] }}</h2>
            </div>
            <div class="information-part">
                @foreach(unserialize($article['subtitles_' . app()->getLocale()]) as $key => $value)
                    <p>{{ $value }}</p>
                    <p>{{ unserialize($article['descriptions_' . app()->getLocale()])[$key] }}</p>
                    @if(unserialize($article->images))
                        @isset(unserialize($article->images)[$key])
						<img src="{{ asset('storage/' . unserialize($article->images)[$key]) }}" alt="news img">
						@endisset
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
