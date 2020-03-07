---
extends: _layouts.app
title: Cursos
---

@section('root')

    <!-- Course Listing Section-->
    <section class="courses-listing bg-gray pt-10">
        <div class="container">
            <div class="row">
                @foreach($cursos as $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="course">
                            <div class="course-image">
                                <img src="{{ $course->banner_url }}" alt="{{ $course->title }}">
                                <div class="overlay flex-column d-flex align-items-center justify-content-center">
                                    <a href="{{ $page->baseUrl . $course->getUrl() }}" class="watch-btn">
                                        <i class="fa fa-eye">
                                        </i>Mais Detalhes
                                    </a>
                                </div>
                            </div>
                            <div class="course-header pb-1">
                                <a href="{{ $page->baseUrl . $course->getUrl() }}" class="no-anchor-style">
                                <h3 class="h5">{{ $course->title }}</h3></a>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="category"><i class="fa fa-tags"></i><a href="#">{{ $course->category }}</a></div>
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
