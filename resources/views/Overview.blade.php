<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Inventaris Sarpras</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('dist/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('dist/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('dist/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Ninestars - v2.2.0
  * Template URL: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('include.header')

    @include('include.hero')


    <main id="main">

        @include('include.about')

        @include('include.service')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up" data-aos-delay="100">
                        <h3>SMK Taruna Bhakti</h3>
                        <p>
                            Jln. Pekapuran Kel. Curug .
                            Kec. Cimanggis. <br>
                            Depok, 16953<br>
                            Indonesia <br><br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Layanan</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
                        <h4>Layanan Kami</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Proyektor</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Peralatan Kebersihan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Peralatan Ekstrakulikuler</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Kunci Ruangan</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="400">
                        <h4>Sosial Media</h4>
                        <p>Ikuti Kami Untuk Mendapatkan Informasi Terbaru.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class='bx bxl-twitter bx-flashing'></i></a>
                            <a href="#" class="facebook"><i class='bx bxl-facebook bx-flashing'></i></a>
                            <a href="#" class="instagram"><i class='bx bxl-instagram bx-flashing'></i></a>
                            <a href="#" class="google-plus"><i class='bx bxl-skype bx-flashing'></i></a>
                            <a href="#" class="linkedin"><i class='bx bxl-linkedin bx-flashing'></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('dist/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dist/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('dist/js/main.js') }}"></script>

</body>

</html>
