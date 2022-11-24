@extends('web.default')

@section('content')

<section id="kosong">
    <div class="container">
    </div>
</section>

<section id="title-article">
    <div class="container">
        <h3>Articles</h3>
    </div>
</section>

<section id="data-article">
    <div class="container">
    @foreach ($articles as $article)
        <div class="loop row">
            <div class="col-md-8 pt-3 mx-auto">
                <h4>{{ $article->title }}</h4>
                <p>({{ $article->user->name }}, {{ $article->created_at->format('d M Y') }})</p>
                <br>
                <p>{!! words($article->description) !!}</p>
            </div>
            <div class="data col-md-2">
                <a href="{{ route('articles.show', $article->slug) }}" class="btn btn-secondary btn-sm">Read More</a>
            </div>
            <div class="col-10 mx-auto">
                <hr>
            </div>
        </div>
    @endforeach
    </div>
</section>

@endsection
