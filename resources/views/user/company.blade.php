@extends('layouts.user.appuser')
@section('content')

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg mt-5">
      <div class="container mt-5" data-aos="fade-up">

        <div class="section-title mt-5">
          <h2>Zunder Zifflin</h2>
          <h3>Find Out More <span>About Us</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{url('template user/assets/img/team/perusahaan.jpeg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Growing Paper Company</h3>
            <p class="font-italic">
            Zunder Zifflin is a growing paper company  based in Alexandra, Virginia. This company was formed in November 2002. 
            Zunder Zifflin not only provides paper for their customers, but also office supplies, printers, and various stuff. Zunder Zifflin has been known to be one of the companies in the US to be on the lookout as their numbers are off the charts, even without the help of online shopping/e-commerce.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

@endsection

