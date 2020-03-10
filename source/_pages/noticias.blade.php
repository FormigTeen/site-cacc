---
pagination:
    collection: posts
    perPage: 12

priority: 0
is_published: true

title: Noticías
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
                            <li class="breadcrumb-item"><a href="{{ $page->baseUrl }}">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Blog</li>
                        </ol>
                    </nav>
                    <h1>Noticias</h1>
                    <div class="row">
                        <p class="col-lg-8">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.</p>
                    </div>
                    <div class="row mt-5 latest-news">

                        @foreach($noticias as $news)
                        <div class="col-lg-4">
                            <div class="news-block">
                                <div class="news-block-inner bg-gray">
                                    <small class="text-transform">{{ $page->dateToCarbon($news->date)->format('F d, Y') }}</small>
                                    <h4>{{ $news->title }}</h4>
                                    <p> {{ $news->description }}</p><a href="{{ $news->getUrl() }}" class="btn btn-outline-primary">Leia mais</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                        <ul class="pagination">
                            @if($pagination->previous)
                                <li class="page-item"><a href="{{ $page->baseUrl . $pagination->previous }}" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Anterior</span></a></li>
                            @endif
                            @for($i = $pagination->currentPage ; $i > 1 && $i >= $i - 3 ; $i-- )
                                <li class="page-item"><a href="{{ $pagination->path[$i] }}" class="page-link">{{ $i }}</a></li>
                            @endfor
                            <li class="page-item">{{ $pagination->currentPage }}</li>
                            @for($i = $pagination->currentPage ; $i < $pagination->totalPages && $i <= $i - 3 ; $i++ )
                                <li class="page-item"><a href="{{ $pagination->path[$i] }}" class="page-link">{{ $i }}</a></li>
                            @endfor
                            @if($pagination->next)
                                <li class="page-item"><a href="{{ $page->baseUrl . $pagination->previous }}" aria-label="Previous" class="page-link"><span aria-hidden="true">«</span><span class="sr-only">Próxima</span></a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection
