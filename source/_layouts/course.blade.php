@extends('_layouts.app')

@section('root')
    <!-- Course Details-->
    <section class="course-details">
        <div class="container">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ $page->baseUrl . $page->ROUTES['home'] }}">Início</a></li>
                    <li class="breadcrumb-item"><a href="{{ $page->baseUrl . $page->ROUTES['courses'] }}">Cursos</a></li>
                    <li aria-current="page" class="breadcrumb-item active">{{ $page->title }}</li>
                </ol>
            </nav>
            <div class="course-details-header">
                <h2 class="mb-4">{{ $page->title }}</h2>
                <div class="d-flex justify-content-between align-items-start mb-4 flex-column flex-lg-row">
                    <div class="course-information d-flex flex-wrap mt-4 mt-lg-0">
                        <div class="cell border-left-0 border-top-0"><small>Categoria</small><strong>{{ $page->category }}</strong></div>
                        <div class="cell border-top-0"><small>Duration</small><strong>{{ $page->duration }}</strong></div>
                    </div>
                    <div class="course-price text-left text-lg-right">
                        <div class="CTAs">
                            @isset($page['grade_url'])
                                <a href="{{ $page->grade_url }}" target="_blank" class="btn btn-primary">Grade Curricular</a>
                            @endisset
                            @isset($page['site_ufba_url'])
                                <a href="{{ $page->site_ufba_url }}" target="_blank"  class="btn btn-outline-primary">Institucional</a>
                            @endisset
                        </div>
                    </div>
                </div>
                @isset($page['banner_url'])
                    <p>
                        <img src="{{ $page->banner_url }}" alt="{{ $page->title }}" class="img-fluid">
                    </p>
                @endisset
            </div>
            <div class="course-details-body markdown">
                @yield('content')
            </div>
        </div>
    </section>
    @if($cursos->where('title', '!=', $page->title)->count() )
        <section class="related-courses bg-gray">
        <div class="container">
            <header>
                <h2><small>Você talvez queira conhecer</small>Cursos Relacionados</h2>
            </header>
            <div class="row">
                @foreach($cursos->where('title', '!=', $page->title) as $course)
                    <div class="col-lg-4 col-md-6">
                    <div class="course">
                        <div class="course-image"><img src="{{ $course->banner_url }}" alt="{{ $course->title }}">
                            <div class="overlay flex-column d-flex align-items-center justify-content-center">
                                <a href="{{ $course->getUrl() }}" class="watch-btn"><i class="fa fa-eye"></i>Veja Mais</a>
                            </div>
                        </div>
                        <div class="course-header pb-1"><a href="course-detail.html" class="no-anchor-style">
                            <h3 class="h5">{{ $course->title }}</h3></a>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="category"><i class="fa fa-tags"></i><a href="#">{{ $course->category }}</a></div>
                            </div>
                        </div>
                        <div class="course-body">
                            {{ $course->description }}
                        </div>
                        <hr>
                        <div class="course-footer d-flex align-items-center justify-content-between">
                            <div class="duration"><i class="fa fa-clock-o"></i><span>{{ $course->duration }}</span></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection
