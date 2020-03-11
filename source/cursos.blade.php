---
extends: _layouts.app
title: Cursos
---

@section('root')

    <!-- Course Listing Section-->
    <section class="courses-listing bg-gray pt-10">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-5">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ $page->baseUrl . $page->ROUTES['home'] }}">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Cursos</li>
                        </ol>
                    </nav>
                    <h1>Todos os Cursos</h1>
                    <div class="row">
                        <p class="col-lg-8">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.</p>
                    </div>
                </div>

                @foreach($cursos as $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="course">
                            <div class="course-image cover">
                                <img src="{{ $course->banner_url }}" alt="{{ $course->title }}">
                                <div class="overlay flex-column d-flex align-items-center justify-content-center">
                                    <a href="{{  $course->getUrl() }}" class="watch-btn">
                                        <i class="fa fa-eye">
                                        </i>Mais Detalhes
                                    </a>
                                </div>
                            </div>
                            <div class="course-header pb-1">
                                <a href="{{ $course->getUrl() }}" class="no-anchor-style">
                                <h3 class="h5">{{ $course->title }}</h3></a>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="category"><i class="fa fa-tags"></i>{ $course->category }}</div>
                                </div>
                            </div>
                            <div class="course-body">
                                <p>{{ $course->description }}</p>
                            </div>
                            <hr>
                            <div class="course-footer d-flex align-items-center justify-content-between">
                                <div class="duration"><i class="icon-clock-1"></i><span>{{ $course->duration }}</span></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
