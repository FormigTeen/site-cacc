---
extends: _layouts.app
title: Professores
---

@section('root')
    <!-- Staff Section-->
    <section class="staff bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ $page->baseUrl . $page->ROUTES['home'] }}">Home</a></li>
                            <li aria-current="page" class="breadcrumb-item active">Professores</li>
                        </ol>
                    </nav>
                    <h1>Professores</h1>
                    <div class="row">
                        <p class="col-lg-8">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.</p>
                    </div>
                </div>
                @foreach($professores as $teacher)
                    <div class="col-lg-4">
                        <div class="staff-member">
                            <img src="{{ $teacher->image_url ?? "https://cdn3.iconfinder.com/data/icons/artificial-intelligence-1-4/48/51-512.png" }}" alt="{{ $teacher->name }}">
                            <div class="info">
                                <h3 class="h5 teacher mb-0">{{ $teacher->name }}</h3><span>{{ $teacher->short_description }}</span>
                            </div>
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <div class="overlay-inner">
                                    <p class="teacher-quote">
                                        "{{ $teacher->quote }}"
                                    </p>
                                    <a href="{{ $teacher->getUrl() }}" class="teacher-name">
                                        <h3 class="h5 mb-0 teacher">{{ $teacher->name }}</h3></a><span class="teacher-field">{{ $teacher->short_description }}</span>
                                        <ul class="social list-inline">
                                            @isset($teacher['social_media']['email'])
                                                <li class="list-inline-item"><a href="mailto:{{ $teacher->social_media['email'] }}" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                            @endisset
                                        </ul>
                                        <p class="teacher-see-profile">
                                            <a href="{{ $teacher->getUrl() }}" class="btn btn-outline-light">Perfil</a>
                                            @isset($teacher['lates_url'])
                                                <a href="{{ $teacher->lates_url }}" class="btn btn-outline-light">Lates</a>
                                            @endisset
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
