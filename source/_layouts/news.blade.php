@extends('_layouts.app')

@section('root')

    <section class="blogpost-full">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ $page->baseUrl . $page->ROUTES['home'] }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ $page->baseUrl . $page->ROUTES['news'] }}">Notícias</a></li>
                            <li aria-current="page" class="breadcrumb-item active">{{ $page->dateToStr($page->date) }}</li>
                        </ol>
                    </nav>
                    <h2 class="mb-5">{{ $page->title }}</h2>
                    @if($page->banner_url)
                        <p><img src="{{ $page->banner_url }}" alt{{ $page->title }} class="img-fluid"></p>
                    @endif
                    <div class="post-meta d-flex align-items-center flex-wrap">
                        <div class="date">
                            <i class="fa fa-calendar"></i>{{ $page->dateToStr($page->date) }}
                        </div>
                        <div class="comments"><i class="fa fa-tag"></i>{{ $page->category }}</div>
                    </div>
                    <div class="text-content markdown">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
