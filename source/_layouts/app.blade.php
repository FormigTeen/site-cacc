<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $page->title ?? $page->name }} | {{ $page->project['title'] }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <link rel="stylesheet" href="{{ $page->baseUrl . mix('css/main.css', 'assets/build') }}"">

    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
</head>
<body>
<!-- header-->
<header class="header">
    <!-- top bar-->
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0"> <i class="icon-placeholder"></i>{{ $page->address }}</p>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="mailto:{{ $page->email }}"><i class="icon-envelope"></i>{{ $page->email }}</a></li>
                        <li class="list-inline-item"><a href="#"><i class="icon-telephone"></i>{{ $page->phone }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="{{ $page->baseUrl . $page->ROUTES['home'] }}" class="navbar-brand">
                <img class="logo" src="{{ $page->logo_url }}" alt="{{ $page->title }}" />
            </a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right mt-0"><span></span><span></span><span></span></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <div class="navbar-nav ml-auto">
                    <div class="nav-item">
                        <a href="{{ $page->baseUrl . $page->ROUTES['home'] }}" class="nav-link {{ $page->isActive($page->baseUrl . $page->ROUTES['home']) }}">
                            Home <span class="sr-only">(current)</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="{{ $page->baseUrl . $page->ROUTES['courses'] }}" class="nav-link {{ $page->isActive($page->baseUrl . $page->ROUTES['courses']) }}">
                            Cursos <span class="sr-only">(current)</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="{{ $page->baseUrl . $page->ROUTES['teachers'] }}" class="nav-link {{ $page->isActive($page->baseUrl . $page->ROUTES['teachers']) }}">
                            Professores <span class="sr-only">(current)</span>
                        </a>
                    </div>
                    <!-- multi-level dropdown-->
{{--                    <div class="nav-item dropdown"><a id="navbarDropdownMenuLink" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Dropdown <i class="fa fa-angle-down"></i></a>--}}
{{--                        <ul aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">--}}
{{--                            <li><a href="#" class="dropdown-item nav-link">Action</a></li>--}}
{{--                            <li><a href="#" class="dropdown-item nav-link">Another action</a></li>--}}
{{--                            <li class="dropdown-submenu"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">Dropdown link <i class="fa fa-angle-down"></i></a>--}}
{{--                                <ul aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu">--}}
{{--                                    <li><a href="#" class="dropdown-item nav-link">Action</a></li>--}}
{{--                                    <li class="dropdown-submenu"><a id="navbarDropdownMenuLink3" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link">--}}

{{--                                            Another action <i class="fa fa-angle-down"></i></a>--}}
{{--                                        <ul aria-labelledby="navbarDropdownMenuLink3" class="dropdown-menu">--}}
{{--                                            <li><a href="#" class="dropdown-item nav-link">Action</a></li>--}}
{{--                                            <li><a href="#" class="dropdown-item nav-link">Action</a></li>--}}
{{--                                            <li><a href="#" class="dropdown-item nav-link">Action</a></li>--}}
{{--                                            <li><a href="#" class="dropdown-item nav-link">Action</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#" class="dropdown-item nav-link">Something else here   </a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="nav-item"><a href="courses.html" class="nav-link">Courses </a></div>--}}
{{--                    <div class="list-inline-item dropdown menu-large"><a id="megamenu" href="#" data-toggle="dropdown" class="nav-link">Pages  <i class="fa fa-angle-down"></i></a>--}}
{{--                        <div aria-labelledby="megamenu" class="dropdown-menu megamenu">--}}
{{--                            <div class="container">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-3"><strong class="text-uppercase">Main</strong>--}}
{{--                                        <ul class="list-unstyled">--}}
{{--                                            <li><a href="index.html">Homepage</a></li>--}}
{{--                                            <li><a href="courses.html">Courses</a></li>--}}
{{--                                            <li><a href="courses-2.html">Courses - table</a></li>--}}
{{--                                            <li><a href="course-detail.html">Course detail</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-3"><strong class="text-uppercase">Blog & text</strong>--}}
{{--                                        <ul class="list-unstyled">--}}
{{--                                            <li><a href="blog.html">Blog</a></li>--}}
{{--                                            <li><a href="blog-post.html">Blog post</a></li>--}}
{{--                                            <li><a href="text.html">Text page</a></li>--}}
{{--                                            <li><a href="staff.html">Staff</a></li>--}}
{{--                                            <li><a href="staff-detail.html">Staff detail                                                                               </a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-3"><strong class="text-uppercase">Just demo </strong>--}}
{{--                                        <ul class="list-unstyled">--}}
{{--                                            <li><a href="#">Demo</a></li>--}}
{{--                                            <li><a href="#">Demo</a></li>--}}
{{--                                            <li><a href="#">Demo</a></li>--}}
{{--                                            <li><a href="#">Demo</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-3"><strong class="text-uppercase">Just demo </strong>--}}
{{--                                        <ul class="list-unstyled">--}}
{{--                                            <li><a href="#">Demo</a></li>--}}
{{--                                            <li><a href="#">Demo</a></li>--}}
{{--                                            <li><a href="#">Demo</a></li>--}}
{{--                                            <li><a href="#">Demo</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="nav-item"><a href="blog.html" class="nav-link">Blog</a></div>--}}
                </div>
            </div>
        </div>
    </nav>
</header>

@includeWhen(!empty($page['cover']), '_components.cover')

@section('root')
@show
<!-- News Section-->
<section class="latest-news">
    <div class="container">
        <header class="text-center">
            <h2> <small>Nossas notícias</small>Notícias Recentes</h2>
        </header>
        <ul id="pills-tab" role="tablist" class="nav nav-pills nav-justified">
            <li class="nav-item"><a id="students-tab" data-toggle="pill" href="#pills-students" role="tab" aria-controls="pills-students" aria-selected="true" class="nav-link active">Estudantes</a></li>
            <li class="nav-item"><a id="teachers-tab" data-toggle="pill" href="#pills-teachers" role="tab" aria-controls="pills-teachers" aria-selected="false" class="nav-link">Departamento</a></li>
            <li class="nav-item"><a id="prospects-tab" data-toggle="pill" href="#pills-prospects" role="tab" aria-controls="pills-prospects" aria-selected="false" class="nav-link">Comunidade</a></li>
        </ul>
        <div id="pills-tabContent" class="tab-content">
            <div id="pills-students" role="tabpanel" aria-labelledby="students-tab" class="tab-pane fade show active">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="news-block">
                            <div class="news-block-inner bg-gray"><small class="text-transform">February 24, 2017</small>
                                <h4>Globalization and Human Rights class</h4>
                                <p> Lommodo ligula eget dolor. Aenean massa. Cum sociis que</p><a href="#" class="btn btn-outline-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-block">
                            <div style="background: url(img/news-bg.jpg);" class="news-block-inner bg-image"><small class="text-transform">February 24, 2017</small>
                                <h4>Globalization and Human Rights class</h4>
                                <p> Lommodo ligula eget dolor. Aenean massa. Cum sociis que</p><a href="#" class="btn btn-outline-light">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-block">
                            <div class="news-block-inner bg-gray"><small class="text-transform">February 24, 2017</small>
                                <h4>Globalization and Human Rights class</h4>
                                <p> Lommodo ligula eget dolor. Aenean massa. Cum sociis que</p><a href="#" class="btn btn-outline-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pills-teachers" role="tabpanel" aria-labelledby="teachers-tab" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="news-block">
                            <div style="background: url(img/news-bg.jpg);" class="news-block-inner bg-image"><small class="text-transform">February 24, 2017</small>
                                <h4>Globalization and Human Rights class</h4>
                                <p> Lommodo ligula eget dolor. Aenean massa. Cum sociis que</p><a href="#" class="btn btn-outline-light">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-block">
                            <div class="news-block-inner bg-gray"><small class="text-transform">February 24, 2017</small>
                                <h4>Globalization and Human Rights class</h4>
                                <p> Lommodo ligula eget dolor. Aenean massa. Cum sociis que</p><a href="#" class="btn btn-outline-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-block">
                            <div class="news-block-inner bg-gray"><small class="text-transform">February 24, 2017</small>
                                <h4>Globalization and Human Rights class</h4>
                                <p> Lommodo ligula eget dolor. Aenean massa. Cum sociis que</p><a href="#" class="btn btn-outline-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="pills-prospects" role="tabpanel" aria-labelledby="prospects-tab" class="tab-pane fade">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="news-block">
                            <div class="news-block-inner bg-gray"><small class="text-transform">February 24, 2017</small>
                                <h4>Globalization and Human Rights class</h4>
                                <p> Lommodo ligula eget dolor. Aenean massa. Cum sociis que</p><a href="#" class="btn btn-outline-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-block">
                            <div class="news-block-inner bg-gray"><small class="text-transform">February 24, 2017</small>
                                <h4>Globalization and Human Rights class</h4>
                                <p> Lommodo ligula eget dolor. Aenean massa. Cum sociis que</p><a href="#" class="btn btn-outline-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="news-block">
                            <div style="background: url(img/news-bg.jpg);" class="news-block-inner bg-image"><small class="text-transform">February 24, 2017</small>
                                <h4>Globalization and Human Rights class</h4>
                                <p> Lommodo ligula eget dolor. Aenean massa. Cum sociis que</p><a href="#" class="btn btn-outline-light">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Statistics Section-->
<section class="statistics pt-0 pb-0 bg-primary has-pattern">
    <div class="container text-center">
        <div class="row">
            <div class="item col-lg-3 col-md-6"><strong>{{ $page->foundation_year }}</strong>
                <p>Ano de Fundação</p>
            </div>
            <div class="item col-lg-3 col-md-6"><strong>{{ $page->teachers_number }}</strong>
                <p>Professores</p>
            </div>
            <div class="item col-lg-3 col-md-6"><strong>{{ $page->students_number }}</strong>
                <p>Estudantes</p>
            </div>
            <div class="item col-lg-3 col-md-6"><strong>{{ $page->awards_number }}</strong>
                <p>Premiações</p>
            </div>
        </div>
    </div>
</section>
<!-- Events Section-->
<section class="events">
    <div class="container">
        <header class="text-center">
            <h2> <small>Todos os Nosso Eventos</small>Futuros Eventos
            </h2>
            <div class="row text-center">
                <p class="col-lg-8 mx-auto">
                    Você deseja publicar algum evento? Envie o arquivo para ...
                </p>
            </div>
        </header>
        <div class="swiper-container events-slider pb-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="event row align-items-center align-items-stretch">
                        <div class="col-lg-6 pr-lg-0">
                            <div class="image"><img src="img/events-img-2.jpeg" alt="Most part fantastic faculty members for the most students">
                                <div class="overlay d-flex align-items-end">
                                    <div class="date"><strong>27</strong><span>July 2018</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-lg-0">
                            <div class="text bg-gray d-flex align-items-center">
                                <div class="text-inner">
                                    <h4>Most part fantastic faculty members for the most students</h4>
                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi.</p><a href="#" class="btn btn-outline-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="event row align-items-center align-items-stretch">
                        <div class="col-lg-6 pr-lg-0">
                            <div class="image"><img src="img/events-img-3.jpeg" alt="Most part fantastic faculty members for the most students">
                                <div class="overlay d-flex align-items-end">
                                    <div class="date"><strong>27</strong><span>August 2018</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-lg-0">
                            <div class="text bg-gray d-flex align-items-center">
                                <div class="text-inner">
                                    <h4>Most part fantastic faculty members for the most students</h4>
                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi.</p><a href="#" class="btn btn-outline-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="event row align-items-center align-items-stretch">
                        <div class="col-lg-6 pr-lg-0">
                            <div class="image"><img src="img/events-img-1.jpeg" alt="Most part fantastic faculty members for the most students">
                                <div class="overlay d-flex align-items-end">
                                    <div class="date"><strong>27</strong><span>June 2018</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-lg-0">
                            <div class="text bg-gray d-flex align-items-center">
                                <div class="text-inner">
                                    <h4>Most part fantastic faculty members for the most students</h4>
                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi.</p><a href="#" class="btn btn-outline-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="event row align-items-center align-items-stretch">
                        <div class="col-lg-6 pr-lg-0">
                            <div class="image"><img src="img/events-img-2.jpeg" alt="Most part fantastic faculty members for the most students">
                                <div class="overlay d-flex align-items-end">
                                    <div class="date"><strong>27</strong><span>July 2018</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-lg-0">
                            <div class="text bg-gray d-flex align-items-center">
                                <div class="text-inner">
                                    <h4>Most part fantastic faculty members for the most students</h4>
                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi.</p><a href="#" class="btn btn-outline-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="event row align-items-center align-items-stretch">
                        <div class="col-lg-6 pr-lg-0">
                            <div class="image"><img src="img/events-img-3.jpeg" alt="Most part fantastic faculty members for the most students">
                                <div class="overlay d-flex align-items-end">
                                    <div class="date"><strong>27</strong><span>August 2018</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 pl-lg-0">
                            <div class="text bg-gray d-flex align-items-center">
                                <div class="text-inner">
                                    <h4>Most part fantastic faculty members for the most students</h4>
                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi.</p><a href="#" class="btn btn-outline-primary">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination-->
            <div class="swiper-pagination mt-5"></div>
        </div>
    </div>
</section>
<!-- Blog Section-->
<section class="blog bg-gray">
    <div class="container">
        <header class="text-center">
            <h2> <small>Do nosso Blog</small>Posts Recentes</h2>
            <div class="row text-center">
                <p class="col-lg-8 mx-auto">
                    Você sabia que você pode publicar um Post? Confira como!
                </p>
            </div>
        </header>
        <div class="row">
            <div class="col-lg-4">
                <div class="blog-post">
                    <div class="image"><img src="img/blog-img.jpg" alt="Projects aim to help those experiencing mental">
                        <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Read more</a></div>
                    </div>
                    <div class="author"><img src="img/avatar.jpg" alt="author" class="img-fluid"></div>
                    <div class="text"><a href="blog-post.html">
                            <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                        <ul class="post-meta list-inline">
                            <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                            <li class="list-inline-item"><i class="icon-chat"></i>340</li>
                        </ul>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-post">
                    <div class="image"><img src="img/blog-img-2.jpeg" alt="Projects aim to help those experiencing mental">
                        <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Read more</a></div>
                    </div>
                    <div class="author"><img src="img/avatar-2.jpg" alt="author" class="img-fluid"></div>
                    <div class="text"><a href="blog-post.html">
                            <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                        <ul class="post-meta list-inline">
                            <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                            <li class="list-inline-item"><i class="icon-chat"></i>340</li>
                        </ul>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-post">
                    <div class="image"><img src="img/blog-img-3.jpeg" alt="Projects aim to help those experiencing mental">
                        <div class="overlay d-flex align-items-center justify-content-center"><a href="blog-post.html" class="btn btn-outline-light">Read more</a></div>
                    </div>
                    <div class="author"><img src="img/avatar-3.jpg" alt="author" class="img-fluid"></div>
                    <div class="text"><a href="blog-post.html">
                            <h4 class="text-this">Projects aim to help those experiencing mental</h4></a>
                        <ul class="post-meta list-inline">
                            <li class="list-inline-item"><i class="icon-clock-1"></i> 14 August 2017</li>
                            <li class="list-inline-item"><i class="icon-chat"></i>340</li>
                        </ul>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Divider Section-->
<section style="background: url(img/divider-bg.jpg) fixed;" class="divider has-overlay-darker">
    <div class="container">
        <h2>Entre em Contato Conosco!</h2>
        <div class="row">
            <p class="col-lg-8">Você sabia que o Departamento de Computação tem um Bot no Instagram e com ele você pode interagar com esse Site? Em breve teremos mais informações, aguarde!</p>
        </div>
        <div class="CTAs"><a href="#" disabled class="btn btn-primary disabled">Conversar com o Bot</a></div>
    </div>
</section>
<!-- Testimonials Section-->
<section class="testimonials">
    <div class="container text-center">
        <header>
            <h2> <small>Confira alguns dos nossos testemunhos</small>Alguns Feedbacks</h2>
        </header>
        <div class="swiper-container testimonials-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial">
                        <div class="row">
                            <p class="feedback col-lg-8 mx-auto">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                        </div>
                        <div class="user d-flex align-items-center justify-content-center">
                            <div class="avatar"><img src="img/avatar.jpg" alt="Marco Antonio" class="img-fluid"></div>
                            <div class="title"><strong class="text-uppercase">Marco Antonio</strong><span>Gravida ultrices</span></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial">
                        <div class="row">
                            <p class="feedback col-lg-8 mx-auto">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                        </div>
                        <div class="user d-flex align-items-center justify-content-center">
                            <div class="avatar"><img src="img/avatar-2.jpg" alt="Marissa Spencer" class="img-fluid"></div>
                            <div class="title"><strong class="text-uppercase">Marissa Spencer</strong><span>Curabitur commodo</span></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial">
                        <div class="row">
                            <p class="feedback col-lg-8 mx-auto">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                        </div>
                        <div class="user d-flex align-items-center justify-content-center">
                            <div class="avatar"><img src="img/avatar-4.jpg" alt="Kate White" class="img-fluid"></div>
                            <div class="title"><strong class="text-uppercase">Kate White</strong><span>Gravida ultrices</span></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial">
                        <div class="row">
                            <p class="feedback col-lg-8 mx-auto">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                        </div>
                        <div class="user d-flex align-items-center justify-content-center">
                            <div class="avatar"><img src="img/avatar-3.jpg" alt="Marco Antonio" class="img-fluid"></div>
                            <div class="title"><strong class="text-uppercase">Marco Antonio</strong><span>Gravida ultrices</span></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial">
                        <div class="row">
                            <p class="feedback col-lg-8 mx-auto">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                        </div>
                        <div class="user d-flex align-items-center justify-content-center">
                            <div class="avatar"><img src="img/avatar-2.jpg" alt="Marissa Spencer" class="img-fluid"></div>
                            <div class="title"><strong class="text-uppercase">Marissa Spencer</strong><span>Curabitur commodo</span></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial">
                        <div class="row">
                            <p class="feedback col-lg-8 mx-auto">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                        </div>
                        <div class="user d-flex align-items-center justify-content-center">
                            <div class="avatar"><img src="img/avatar-4.jpg" alt="Kate White" class="img-fluid"></div>
                            <div class="title"><strong class="text-uppercase">Kate White</strong><span>Gravida ultrices</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination-->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!-- footer-->
<footer class="footer pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="logo">
                    <img src="{{ $page->logo_url }}" alt="{{ $page->title }}" />
                </div>
                <ul class="social list-inline">
                    <li class="list-inline-item">
                        @isset($page->social['facebook'])
                            <a href="{{ $page->social['facebook'] }}" target="_blank"><i class="fa fa-facebook"></i></a>
                        @endisset
                        @isset($page->social['twitter'])
                            <a href="{{ $page->social['twitter'] }}" target="_blank"><i class="fa fa-twitter"></i></a>
                        @endisset
                        @isset($page->social['instagram'])
                            <a href="{{ $page->social['instagram'] }}" target="_blank"><i class="fa fa-instagram"></i></a>
                        @endisset
                        @isset($page->social['youtube'])
                            <a href="{{ $page->social['youtube'] }}" target="_blank"><i class="fa fa-youtube-play"></i></a>
                        @endisset
                        @isset($page->social['telegram'])
                            <a href="{{ $page->social['telegram'] }}" target="_blank"><i class="fa fa-telegram"></i></a></li>
                        @endisset
                </ul>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos.</p>
            </div>
            <div class="col-lg-3">
                <h4 class="text-thin">Mapa do Site</h4>
                <div class="d-flex flex-wrap">
                    <ul class="navigation list-unstyled">
                        <li><a href="#">Home </a></li>
                        <li><a href="#">About </a></li>
                        <li><a href="#">Course</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Gallery</a></li>
                    </ul>
                    <ul class="navigation list-unstyled">
                        <li><a href="#">Blog </a></li>
                        <li><a href="#">Teachers </a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 newsletter">
                <h4 class="text-thin">Alguma outra coisa</h4>
                <p>Está escrito aqui</p>
            </div>
        </div>
    </div>
    <div class="copyrights">
        <div class="container text-center">
            <p>&copy; 2018 University</p>
        </div>
    </div>
</footer>
<!-- JavaScript files-->
<script src="{{ $page->baseUrl . mix('/js/manifest.js', 'assets/build') }}"></script>
<script src="{{ $page->baseUrl . mix('/js/vendor.js', 'assets/build') }}"></script>
<script src="{{ $page->baseUrl . mix('/js/main.js', 'assets/build') }}"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
<!---->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
</body>
</html>
