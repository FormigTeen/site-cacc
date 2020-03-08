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
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 d-none d-md-block">
                    <p class="mb-0"><i class="fa fa-map-marker"></i>{{ $page->address }}</p>
                </div>
                <div class="col text-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="mailto:{{ $page->email }}"><i class="fa fa-envelope"></i>{{ $page->email }}</a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i>{{ $page->phone }}</a></li>
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

                    <div class="list-inline-item dropdown menu-large">
                        <a id="cursos" href="#" data-toggle="dropdown" class="nav-link">Cursos  <i class="fa fa-angle-down"></i></a>
                        <div aria-labelledby="cursos" class="dropdown-menu megamenu">
                            <div class="container">
                                <div class="row">
                                    @foreach($cursos->groupBy('category') as $category=>$courses)
                                        <div class="col"><strong class="text-uppercase">{{ $category }}</strong>
                                            <ul class="list-unstyled">
                                                @foreach($courses as $course)
                                                    <li><a href="{{ $course->getUrl() }}">{{ $course->title }}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="nav-item">
                        <a href="{{ $page->baseUrl . $page->ROUTES['teachers'] }}" class="nav-link {{ $page->isActive($page->baseUrl . $page->ROUTES['teachers']) }}">
                            Professores <span class="sr-only">(current)</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="{{ $page->baseUrl . $page->ROUTES['news'] }}" class="nav-link {{ $page->isActive($page->baseUrl . $page->ROUTES['news']) }}">
                            Notícias <span class="sr-only">(current)</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="{{ $page->baseUrl . $page->ROUTES['blog'] }}" class="nav-link {{ $page->isActive($page->baseUrl . $page->ROUTES['blog']) }}">
                            Blog <span class="sr-only">(current)</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="{{ $page->baseUrl . $page->ROUTES['colabore'] }}" class="nav-link {{ $page->isActive($page->baseUrl . $page->ROUTES['colabore']) }}">
                            Colabore <span class="sr-only">(current)</span>
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
{{--                    <div class="nav-item"><a href="blog.html" class="nav-link">Blog</a></div>--}}
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark mx-0 px-0 bg-primary">
        <a class="btn btn-primary btn-block btn-lg font-500 br-0" target="blank" href="{{ $page->bot_url }}">
            <i class="fa fa-telegram m-r-10"></i> FALE CONOSCO
        </a>

    </nav>
</header>

<div class="d-none d-md-block">
    @includeWhen(!empty($page['cover']), '_components.cover')
</div>

@section('root')
@show

@if(!($page->show_events == "false"))
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

                    @foreach($eventos as $event)
                        <div class="swiper-slide">
                            <div class="event row align-items-center align-items-stretch">
                                <div class="col-md-6 pr-lg-0">
                                    <div class="image cover">
                                        <img src="{{ $event->banner_url }}" alt="{{ $event->title }}">
                                        <div class="overlay d-flex align-items-end">
                                            <div class="date">
                                                <strong>{{ $page->dateToCarbon($event->date)->day }}</strong>
                                                <span>{{ $page->dateToCarbon($event->date)->format('F Y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-lg-0">
                                    <div class="text bg-gray d-flex align-items-center">
                                        <div class="text-inner">
                                            <h4>{{ $event->title }}</h4>
                                            <p>{{ $event->description }}
                                            </p><a href="{{ $event->link }}" target="_blank" class="btn btn-outline-primary">Saiba mais!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- Add Pagination-->
                <div class="swiper-pagination mt-5"></div>
            </div>
        </div>
    </section>
@endif
@if(!($page->show_news == "false"))
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

                    @foreach($noticias->where('scope', 0)->take(3) as $news)
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
            </div>
            <div id="pills-teachers" role="tabpanel" aria-labelledby="teachers-tab" class="tab-pane fade">
                <div class="row">
                    @foreach($noticias->where('scope', 1)->take(3) as $news)
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
            </div>
            <div id="pills-prospects" role="tabpanel" aria-labelledby="prospects-tab" class="tab-pane fade">
                <div class="row">
                    @foreach($noticias->where('scope', 1)->take(3) as $news)
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
            </div>
        </div>
    </div>
</section>
@endif

@if(!($page->show_statics == "false"))
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
@endif

@if(!($page->show_blog == "false"))
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
            @foreach($posts->take(3) as $post)
                <div class="col-lg-4">
                <div class="blog-post">
                    @if($post->banner_url)
                        <div class="image cover">
                            <img src="{{ $post->banner_url }}" alt="{{ $post->title }}">
                            <div class="overlay d-flex align-items-center justify-content-center"><a href="{{ $post->getUrl() }}" class="btn btn-outline-light">Leia mais</a></div>
                        </div>
                    @endif
                    <div class="author cover"><img src="{{ $post->author_image_url }}" alt="{{ $post->author_name }}" class="img-fluid"></div>
                    <div class="text">
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
    </div>
</section>
@endif


<!-- Divider Section-->
<section style="background: url(img/divider-bg.jpg) fixed;" class="divider has-overlay-darker">
    <div class="container">
        <h2>Entre em Contato Conosco!</h2>
        <div class="row">
            <p class="col-lg-8">Você sabia que o Departamento de Computação tem um Bot no Instagram e com ele você pode interagar com esse Site? Em breve teremos mais informações, aguarde!</p>
        </div>
        <div class="CTAs"><a href="{{ $site->bot_url }}" target="_blank" class="btn btn-primary"><i class="fa fa-telegram"></i> Conversar com o Bot</a></div>
    </div>
</section>

@if(!($page->show_feedbacks == "false"))
<!-- Testimonials Section-->
<section class="testimonials">
    <div class="container text-center">
        <header>
            <h2> <small>Confira alguns dos nossos testemunhos</small>Alguns Feedbacks</h2>
        </header>
        <div class="swiper-container testimonials-slider">
            <div class="swiper-wrapper">

                @foreach($feedbacks->shuffle()->take(10) as $feedback)
                    <div class="swiper-slide">
                        <div class="testimonial">
                            <div class="row">
                                <p class="feedback col-lg-8 mx-auto">{{ $feedback->text }}</p>
                            </div>
                            <div class="user d-flex align-items-center justify-content-center">
                                <div class="avatar cover">
                                    <img src="{{ $feedback->author_image_url }}" alt="{{ $feedback->author_name }}" class="img-fluid">
                                </div>
                                <div class="title">
                                    <strong class="text-uppercase">{{ $feedback->author_name }}</strong><span>{{ $feedback->author_description }}</span></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Add Pagination-->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
@endif

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
