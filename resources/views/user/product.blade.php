@extends('layouts.user.appuser')
@section('content')

<div class="mt-5">
    <!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

    <div class="section-title mt-5" style="margin-top: 20%;">
        <div class="col-lg-12 mt-5">
            <h2>Product</h2>
            <h3>Check our <span>Product</span></h3>
        </div>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-office tools">office tools</li>
            <li data-filter=".filter-tools">tools</li>
            <li data-filter=".filter-office stuff">office stuff</li>
        </ul>
        </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-office tools">
        <img src="{{url('template user/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>office tools 1</h4>
            <p>office tools</p>
            <a href="{{url('template user/assets/img/portfolio/portfolio-1.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="office tools 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-office stuff">
        <img src="{{url('template user/assets/img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>office stuff 3</h4>
            <p>office stuff</p>
            <a href="{{url('template user/assets/img/portfolio/portfolio-2.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="office stuff 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-office tools">
        <img src="{{url('template user/assets/img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>office tools 2</h4>
            <p>office tools</p>
            <a href="{{url('template user/assets/img/portfolio/portfolio-3.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="office tools 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-tools">
        <img src="{{url('template user/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>tools 2</h4>
            <p>tools</p>
            <a href="{{url('template user/assets/img/portfolio/portfolio-4.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="tools 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-office stuff">
        <img src="{{url('template user/assets/img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>office stuff 2</h4>
            <p>office stuff</p>
            <a href="{{url('template user/assets/img/portfolio/portfolio-5.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="office stuff 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-office tools">
        <img src="{{url('template user/assets/img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>office tools 3</h4>
            <p>office tools</p>
            <a href="{{url('template user/assets/img/portfolio/portfolio-6.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="office tools 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-tools">
        <img src="{{url('template user/assets/img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>tools 1</h4>
            <p>tools</p>
            <a href="{{url('template user/assets/img/portfolio/portfolio-7.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="tools 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-tools">
        <img src="{{url('template user/assets/img/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>tools 3</h4>
            <p>tools</p>
            <a href="{{url('template user/assets/img/portfolio/portfolio-8.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="tools 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-office stuff">
        <img src="{{url('template user/assets/img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt="">
        <div class="portfolio-info">
            <h4>office stuff 3</h4>
            <p>office stuff</p>
            <a href="{{url('template user/assets/img/portfolio/portfolio-9.jpg')}}" data-gall="portfolioGallery" class="venobox preview-link" title="office stuff 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
        </div>

    </div>

    </div>
</section><!-- End Portfolio Section --><!-- ======= Portfolio Section ======= -->
</div>

@endsection

