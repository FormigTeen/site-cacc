@extends('_layouts.app')

@section('root')


    <section>
        <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ $page->baseUrl . $page->ROUTES['home'] }}">Início</a></li>
                    <li class="breadcrumb-item"><a href="{{ $page->baseUrl . $page->ROUTES['teachers'] }}">Professores</a></li>
                    <li aria-current="page" class="breadcrumb-item active">{{ $page->name }}</li>
                </ol>
            </nav>
            <div class="row">
                <div class="col-md-8 col-lg-7 text-content">
                    <h2>{{ $page->name }}</h2>
                    <p class="lead">
                        {{ $page->description }}
                    </p>
                    @yield('content')
                    @isset($page['quote'])
                        <blockquote class="blockquote">
                            <p class="mb-0">{{ $page->quote }}</p>
                            <div class="author">{{ $page->name }}</div>
                        </blockquote>
                    @endisset
                    @isset($page['social_media'])
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="mr-3"><strong>Minhas Redes</strong></div>
                            <ul class="social-buttons list-inline mb-0">
                                @isset($page['social_media']['twitter'])
                                    <li class="list-inline-item">
                                        <a href="mailto:{{ $page['social_media']['email'] }}" target="_blank" class="mb-0">
                                            <div class="icon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                        </a>
                                    </li>
                                @endisset
                                @isset($page['social_media']['twitter'])
                                    <li class="list-inline-item">
                                        <a href="{{ $page['social_media']['twitter'] }}" target="_blank" class="twitter mb-0">
                                            <div class="icon">
                                                <i class="fa fa-twitter"></i>
                                            </div>
                                        </a>
                                    </li>
                                @endisset
                                @isset($page['social_media']['facebook'])
                                    <li class="list-inline-item">
                                        <a href="{{ $page['social_media']['facebook'] }}" target="_blank" class="facebook mb-0">
                                            <div class="icon">
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                        </a>
                                    </li>
                                @endisset
                                @isset($page['social_media']['google-plus'])
                                    <li class="list-inline-item">
                                        <a href="{{ $page['social_media']['linkedin'] }}" target="_blank" class="google-plus mb-0">
                                            <div class="icon">
                                                <i class="fa fa-linkedin"></i>
                                            </div>
                                        </a>
                                    </li>
                                @endisset
                            </ul>
                        </div>
                    @endisset
                </div>
                @isset($page['image_url'])
                    <div class="col-md-4 col-lg-5">
                        <div class="cover cover-circle">
                            <img src="{{ $page->image_url }}" alt="{{ $page->name }}" class="img-fluid">
                        </div>
                    </div>
                @endisset
            </div>
        </div>
    </section>


@endsection