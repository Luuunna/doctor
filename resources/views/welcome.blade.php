<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Hospital Jin Hernandez</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 d-md-flex">
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-mobile"></i></span> Numero de emergencia +505 87089341</h6>
                        <h6 class="mr-3"><span class="mr-2"><i class="fa fa-envelope-o"></i></span>carlosjinhernadez@gmail.com</h6>
                        <h6><span class="mr-2"><i class="fa fa-map-marker"></i></span>Descubre donde estamos ubicados</h6>
                    </div>
                    <div class="col-lg-3">
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header" id="home">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="index.html">Inicio</a></li>
                        <li><a href="{{route('services.index')}}">Servicios</a></li>
                        <li><a href="{{route('doctors.index')}}">Doctores</a></li>
                        <li class=><a href="{{route('patients.index')}}">Programar Cita</a>
                            {{-- <ul> --}}
                                {{-- <li><a href="about.html">Acerca de</a></li>
                                <li><a href="elements.html">elements</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="menu-has-children"><a href="">blog</a>
                            <ul>
                                <li><a href="blog-home.html">blog home</a></li>
                                <li><a href="blog-details.html">blog details</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li><a href="contact.html">Contactanos</a></li>			          				           --}}
                    </ul>
                </nav><!-- #nav-menu-container -->		    		
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h4>Bienvenido a</h4>
                    <h1>Jin Hernandez</h1>
                    <p> Aquí encontrarás información sobre nuestras especialidades, médicos destacados y los servicios que ofrecemos. </p>
                    <a href="{{ route('patients.create') }}" class="template-btn mt-3">Registro</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Feature Area Starts -->
    <section class="feature-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding">
                        <img src="assets/images/feature1.png" alt="">
                        <h3>Tegnologia avanzada</h3>
                        <p class="pt-3"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-md-0">
                        <img src="assets/images/feature2.png" alt="">
                        <h3>Espacios comodos</h3>
                        <p class="pt-3"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="assets/images/feature3.png" alt="">
                        <h3>Equipo de calidad</h3>
                        <p class="pt-3"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding mt-4 mt-lg-0">
                        <img src="assets/images/feature4.png" alt="">
                        <h3>trabajadores amigables</h3>
                        <p class="pt-3"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Area End -->

    <!-- Welcome Area Starts -->
    <section class="welcome-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="welcome-img">
                        <img src="assets/images/welcome.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="welcome-text mt-5 mt-lg-0">
                        <h2>Bienvenido a nuestro hospital</h2>
                        <p class="pt-3"></p>
                        <p>Gracias por visitar la página web de nuestro hospital.
                            Somos un centro médico comprometido con brindar atención de calidad y cuidado integral a nuestros pacientes. Nuestra misión es promover la salud y el bienestar de la comunidad, ofreciendo servicios médicos especializados
                         </p>
                        {{-- <a href="#" class="template-btn mt-3"></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Department Area Starts -->
    <section class="department-area section-padding4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Nuestros Servicios</h2>
                        <p>Aquí podrás encontrar los servicios que ofrecemos en cada hospital.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-slider owl-carousel">
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/department1.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Cirugias</h3>
                                <p>Cirugias esteticas</p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/pediatra.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="departments.html"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Pediatría</h3>
                                <p>Servicios de pediatría</p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/department3.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="departments.html"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Odontología</h3>
                                <p>Servicios de Odontologia.</p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/ggg.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href=""><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>Psiquiátria</h3>
                                <p>Servicios  psiquiátrico</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Department Area Starts -->

    <!-- Patient Area Starts -->
    {{-- <section class="patient-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Algunas opiniones de pacientes</h2>
                        <p>Comentarios</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="single-patient mb-4">
                        <img src="assets/images/aaa.jpg" alt="">
                        <h3>Maria perez</h3>
                        <h5>Servisio de Odontología</h5>
                        <p class="pt-3">Muy buena atencion Y muy buen trabajo.</p>
                    </div>
                    <div class="single-patient">
                        <img src="assets/images/patient2.png" alt="">
                        <h3>Alisson Goméz</h3> --}}
                        {{-- <h5>Oftalmologia</h5>
                        <p class="pt-3">muy buen servicio</p>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-5 offset-lg-1 align-self-center">
                    <div class="appointment-form text-center mt-5 mt-lg-0">
                        <h3 class="mb-5">Programar una cita</h3>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" placeholder="Nombre" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" required>
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required> 
                            </div>
                            <div class="form-group">
                                <input type="text" id="datepicker" placeholder="Fecha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Fecha'" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" cols="20" rows="7"  placeholder="Descripcion" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Descripcion'" required></textarea>
                            </div>
                            <a href="{{route('patients.index')}}"class="template-btn">Reservar visita medica</a> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Patient Area Starts -->

    <!-- Specialist Area Starts -->
    <section class="specialist-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Nuestros especialistas</h2>
                        <p>Doctores especialistas destacados de su area.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr.Goméz</h3>
                                <h6>Cirugano</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p></p>
                                <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr.Alejandro</h3>
                                <h6>Pediatra</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p></p>
                                <ul class="doctor-icon">
                                    <li><a href="{{ route('hospitals.index') }}"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-sm-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>D.ra Alicia blandon</h3>
                                <h6>Oftagmología</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p></p>
                                <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor">
                        <div class="doctor-img">
                            <img src="assets/images/doctor4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>Dr Alvaro</h3>
                                <h6>Odontologia</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p></p>
                                <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Specialist Area Starts -->

    <!-- Hotline Area Starts -->
    <section class="hotline-area text-center section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Numero Emergencia</h2>
                    <span>+505 87099476</span>
                    <p class="pt-3">Atendemos la 24 horas del día <br>En caso de emergencia.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotline Area End -->

    <!-- News Area Starts -->
    <section class="news-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Programas de prevencion</h2>
                        <p>Aqui encontraras programas de prevencion de algunas enfermedades o padecimientos.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="news-img">
                            <img src="assets/images/news1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="news-text">
                            <div class="news-date">
                                22 July 2018
                            </div>
                        <h3><a href="blog-details.html">Como tratar la diabetes?</a></h3>
                            <p>La diabetes es una enfermedad metabólica crónica caracterizada por niveles elevados de glucosa en sangre o azúcar en sangre, que con el tiempo conduce a daños graves en el corazón, los vasos sanguíneos, los ojos, los riñones y los nervios.</p>
                            <a href="blog-details.html" class="news-btn">read more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mt-5 mt-md-0">
                        <div class="news-img">
                            <img src="assets/images/news2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="news-text">
                            <div class="news-date">
                                22 Oct 2018
                            </div>
                            <h3><a href="blog-details.html">Como evitar el aumento de la miopía.</a></h3>
                            <p>Anomalía del ojo que produce una visión borrosa o poco clara de los objetos lejanos; se debe a una curvatura excesiva del cristalino que hace que las imágenes de los objetos se formen un poco antes de llegar a la retina.

                            </p>
                            <a href="blog-details.html" class="news-btn">read more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news mt-5 mt-lg-0">
                        <div class="news-img">
                            <img src="assets/images/news3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="news-text">
                            <div class="news-date">
                                22 Sep 2018
                            </div>
                            <h3><a href="blog-details.html">Dientes de leche</a></h3>
                            <p>¿Qué es el diente de leche?
                                Los dientes de leche son aquellos que erupcionan en primer lugar en la boca de los niños para, posteriormente, dejar paso a los definitivos.</p>
                            <a href="blog-details.html" class="news-btn">read more<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Area Starts -->
    
    <!-- Footer Area Starts -->
    <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-3">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">top products</h3>
                            <ul>
                                <li class="mb-2"><a href="#">managed website</a></li>
                                <li class="mb-2"><a href="#">managed reputation</a></li>
                                <li class="mb-2"><a href="#">power tools</a></li>
                                <li><a href="#">marketing service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">newsletter</h3>
                            <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>  
                            <form action="#">
                                <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                <button type="submit" class="template-btn">Registrarce</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 offset-xl-1 col-lg-3">
                        <div class="single-widge-home">
                            <h3 class="mb-4">instagram feed</h3>
                            <div class="feed">
                                <img src="assets/images/feed1.jpg" alt="feed">
                                <img src="assets/images/feed2.jpg" alt="feed">
                                <img src="assets/images/feed3.jpg" alt="feed">
                                <img src="assets/images/feed4.jpg" alt="feed">
                                <img src="assets/images/feed5.jpg" alt="feed">
                                <img src="assets/images/feed6.jpg" alt="feed">
                                <img src="assets/images/feed7.jpg" alt="feed">
                                <img src="assets/images/feed8.jpg" alt="feed">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
