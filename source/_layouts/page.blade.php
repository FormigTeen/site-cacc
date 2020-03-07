@extends('_layouts.app')


@section('root')
    <!-- Intro Section-->
    <section class="intro">
        <div class="container text-center">
            <header>
                <h2>
                    @isset($page->summary['description'])
                        <small>{{ $page->summary['description'] }}</small>
                    @endisset
                    @isset($page->summary['title'])
                        {{ $page->summary['title'] }}
                    @endisset
                </h2>
            </header>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    @yield('content')
                </div>
            </div>
            @isset($page->author['image_url'])
                <div class="signature mx-auto">
                    <img src="{{ $page->author['image_url'] }}" alt="{{ $page->author['name'] }}" class="img-fluid img-rounded">
                </div>
            @endisset
            <div class="author"><strong>{{ $page->author['name'] }}</strong><span>{{ $page->author['description'] }}</span></div>
        </div>
    </section>

@endsection