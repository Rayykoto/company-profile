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
        <h4> {{ $articles->title }} </h4>
        <p> ({{ $articles->user->name }}, {{ $articles->created_at }})
    </div>

    <div class="col-md-8 mx-auto">
        <img src="{{ $articles->image }}" class="img-fluid">
    </div>

    <div class="col-md-10 mx-auto">
        <blockquote class="blockquote">
            <p class="mb-2">{!! $articles->description !!}</p>
            {{-- <footer class="blockquote-footer">Someone famous in<cite title="Source Title">Source Title</cite></footer> --}}
        </blockquote>
    </div>

</section>

@endsection
