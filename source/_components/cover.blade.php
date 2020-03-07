<!-- Hero Section-->
<section class="hero hero-home">
    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            @foreach($page->cover as $cover)
                <div class="swiper-slide">
                    <div style="background: url({{ $cover['image_url'] }});" class="hero-content has-overlay-dark">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h1>{{ $cover['title'] }}</h1>
                                    <p class="hero-text pr-5">{{ $cover['description'] }}</p>
                                    @isset($cover['button'])
                                        <a target="_blank" href="{{ $cover['button']['href'] }}" class="btn btn-outline-light">{{ $cover['button']['label'] }}</a>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Add Pagination-->
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- Info Boxes Section-->
<section class="info-boxes">
    <div class="container">
        <div class="row">
            <a href="#" style="background: url(img/boxes-img-1.jpeg);" class="info-box red col-lg-3">
                <div class="info-box-content">
                    <h3 class="text-uppercase">Programs</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </a>
            <a href="#" style="background: url(img/boxes-img-2.jpg);" class="info-box cyan col-lg-3">
                <div class="info-box-content">
                    <h3 class="text-uppercase">Affordability</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </a>
            <a href="#" style="background: url(img/boxes-img-3.jpeg);" class="info-box yellow col-lg-3">
                <div class="info-box-content">
                    <h3 class="text-uppercase">Certification</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </a>
            <a href="#" style="background: url(img/boxes-img-3.jpeg);" class="info-box green col-lg-3">
                <div class="info-box-content">
                    <h3 class="text-uppercase">Certification</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </a>
        </div>
</section>
