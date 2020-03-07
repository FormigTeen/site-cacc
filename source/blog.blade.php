---
title: Blog
---
@extends('_layouts.app')

@section('root')

    <!-- Blog Listings-->
    <section class="blog-listings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ $page->baseUrl . $page->ROUTES['home'] }}">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Blog</li>
                        </ol>
                    </nav>
                    <h1>Blog</h1>
                    <div class="row">
                        <p class="col-lg-8">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.</p>
                    </div>
                    <div class="row mt-5">

                        @foreach($posts as $post)
                        <div class="col-md-6">
                            <div class="blog-post">
                                <div class="image">
                                    @if($post->banner_url)
                                        <img src="{{ $post->banner_url }}" alt="{{ $post->title }}">
                                    @endif
                                    <div class="overlay d-flex align-items-center justify-content-center">
                                        <a href="{{ $post->getUrl() }}" class="btn btn-outline-light">Leia mais</a>
                                    </div>
                                </div>
                                <div class="author">
                                    <img src="{{ $post->author_image_url }}" alt="author" class="img-fluid">
                                </div>
                                <div class="text bg-gray">
                                    <a href="{{ $post->getUrl() }}">
                                        <h4 class="text-this">{{ $post->title }}</h4>
                                    </a>
                                    <ul class="post-meta list-inline">
                                        <li class="list-inline-item"><i class="icon-clock-1"></i> {{ $page->dateToStr($post->date) }}</li>
                                    </ul>
                                    <p>{{ $post->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                        <ul class="pagination">
                            <li class="page-item"><a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Previous</span></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">»</span><span class="sr-only">Next</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection
