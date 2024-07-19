@extends('client.layout.master')
@section('content')
    <div class="page-wrapper">
        <section id="news-latest" class="section has-sidebar">
            <section class="section-content">
                <div class="article-list listing-layout responsive infinite-load" id="category-list-3">
                    @if ($results->isEmpty())
                        <p>No results found.</p>
                    @else
                        @foreach ($results as $item)
                            <article class="article-item  type-text">
                                <p class="article-thumbnail">
                                    <a
                                        href="{{ route('chitiet', ['id' => $item->id]) }}">

                                        <img src="{{ $item->img }}"
                                            alt="{{ $item->NoiDung }}">
                                    </a>
                                </p>
                                <header>
                                    <p class="article-title">
                                        <a
                                            href="{{ route('chitiet', ['id' => $item->id]) }}">{{ $item->TieuDe }}</a>
                                    </p>
                                    <p class="article-summary"> {{ $item->NoiDung }}.</p>
                                </header>
                        @endforeach
                </div>
                @endif
            @endsection
