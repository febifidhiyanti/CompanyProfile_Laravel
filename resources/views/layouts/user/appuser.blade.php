
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Zunder Zifflin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('template user/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('template user/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{url('template user/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('template user/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('template user/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{url('template user/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('template user/assets/css/style.css')}}" rel="stylesheet">
    @section('css')
    @show
    <!-- =======================================================
    * Template Name: BizLand - v1.2.0
    * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
  </head>

  <body>

    <!-- ======= Header ======= -->
      @include('layouts.user.navbar')
      
    <!-- End Header -->

    <!-- Main -->
      <main id="main">
          @yield('content')
      </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
      @include('layouts.user.footer')
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{url('template user/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('template user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('template user/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('template user/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{url('template user/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('template user/assets/vendor/counterup/counterup.min.js')}}"></script>
    <script src="{{url('template user/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
    <script src="{{url('template user/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('template user/assets/vendor/venobox/venobox.min.js')}}"></script>
    <script src="{{url('template user/assets/vendor/aos/aos.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{url('template user/assets/js/main.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    
    
      <script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        </script>
        @section('js')
        @show

  </body>

</html>
