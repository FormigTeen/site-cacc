@extends('_layouts.app')

@section('root')

    <section class="blogpost-full">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ $page->baseUrl }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ $pages->where('title', 'Blog')->first() }}">Blog</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Post</li>
                        </ol>
                    </nav>
                    <h2 class="mb-5">{{ $page->title }}</h2>
                    @if($page->banner_url)
                        <p><img src="{{ $page->banner_url }}" alt{{ $page->title }} class="img-fluid"></p>
                    @endif
                    <div class="post-meta d-flex align-items-center flex-wrap">
                        <div class="author d-flex align-items-center">
                            <div class="avatar cover"><img src="{{ $page->author_image_url }}" alt="{{ $page->author_name }}" class="img-fluid"></div>><i class="fa fa-user"></i>{{ $page->author_name }}
                        </div>
                        <div class="date"><i class="fa fa-calendar"></i>{{ $page->dateToStr($page->date) }}</div>
                        <div class="comments"><i class="fa fa-tag"></i>{{ $page->category }}</div>
                    </div>
                    <div class="text-content markdown">
                        @yield('content')
                    </div>
                    <div class="post-author mt-5">
                        <div class="d-flex">
                            <div class="avatar cover"><img src="{{ $page->author_image_url }}" alt="{{ $page->author_name }}" class="img-fluid"></div>
                            <div class="info d-flex justify-content-between">
                                <div class="left">
                                    <small>Postado por</small><strong>{{ $page->author_name }}</strong>
                                </div>
                                <div class="right d-none d-sm-block">
                                    <ul class="list-inline social">
                                        @if($page->author_facebook)
                                            <li class="list-inline-item"><a href="{{ $page->author_facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        @endif
                                        @if($page->author_twitter)
                                            <li class="list-inline-item"><a href="{{ $page->author_twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        @endif
                                        @if($page->author_github)
                                            <li class="list-inline-item"><a href="{{ $page->author_github }}" target="_blank"><i class="fa fa-github"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <p>{{ $page->author_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
