<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{ config('app.name') }}</title>
        <meta content="Laravel starter Admin Panel with User Role and Permissions." name="description">
        <meta content="Admin Panel" name="keywords">
        <!-- Favicons -->
        <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
        <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container">
                <a href="{{ route('welcome') }}" class="hero-logo" data-aos="zoom-in"><img src="assets/img/hero-logo.png" alt=""></a>
                <h1 data-aos="zoom-in">Welcome To {{ env('APP_NAME') }}</h1>
                <h2 data-aos="fade-up">We are team of talented designers making websites with Bootstrap</h2>
                <a data-aos="fade-up" href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
        </section>
        <!-- End Hero -->
        <!-- ======= Header ======= -->
        <header id="header" class="d-flex align-items-center">
            <div class="container">
                <!-- The main logo is shown in mobile version only. The centered nav-logo in nav menu is displayed in desktop view  -->
                <div class="logo d-block d-lg-none">
                    <a href="{{ route('welcome') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid">
                    </a>
                </div>
                <nav class="nav-menu d-none d-lg-block">
                    <ul class="nav-inner">
                        <li class="active">
                            <a href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li class="drop-down">
                            <a href="">User</a>
                            <ul>
                                <li>
                                    <a href="{{ route('login') }}">Login</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}">Register</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-logo">
                            <a href="{{ route('welcome') }}">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid" />
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.login') }}">Admin Login</a>
                        </li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                </nav>
                <!-- .nav-menu -->
            </div>
        </header>
        <!-- End Header -->
        <main id="main">
            <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>About Us</h2>
                        <p>Magnam dolores commodi suscipit eius consequatur</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="image">
                                <img src="{{ asset('assets/img/about.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left">
                            <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                                <h3>Voluptatem dignissimos provident quasi corporis</h3>
                                <p class="font-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Us Section -->
            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Services</h2>
                        <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1">
                            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up">
                                <i class="bx bx-receipt"></i>
                                <h4>Est labore ad</h4>
                                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Harum esse qui</h4>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-images"></i>
                                <h4>Aut occaecati</h4>
                                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-shield"></i>
                                <h4>Beatae veritatis</h4>
                                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                            </div>
                        </div>
                        <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("{{ asset('assets/img/services.jpg') }}");' data-aos="fade-left" data-aos-delay="100"></div>
                    </div>
                </div>
            </section>
            <!-- End Services Section -->
            <!-- ======= Featured Section ======= -->
            <section id="featured" class="featured">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-right">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tab-1">
                                    <figure>
                                        <img src="{{ asset('assets/img/featured-1.png') }}" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="tab-pane" id="tab-2">
                                    <figure>
                                        <img src="{{ asset('assets/img/featured-2.png') }}" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="tab-pane" id="tab-3">
                                    <figure>
                                        <img src="{{ asset('assets/img/featured-3.png') }}" alt="" class="img-fluid">
                                    </figure>
                                </div>
                                <div class="tab-pane" id="tab-4">
                                    <figure>
                                        <img src="{{ asset('assets/img/featured-4.png') }}" alt="" class="img-fluid">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
                            <ul class="nav nav-tabs flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                                        <h4>Modi sit est</h4>
                                        <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                                    </a>
                                </li>
                                <li class="nav-item mt-2">
                                    <a class="nav-link" data-toggle="tab" href="#tab-2">
                                        <h4>Unde praesentium sed</h4>
                                        <p>Voluptas vel esse repudiandae quo excepturi.</p>
                                    </a>
                                </li>
                                <li class="nav-item mt-2">
                                    <a class="nav-link" data-toggle="tab" href="#tab-3">
                                        <h4>Pariatur explicabo vel</h4>
                                        <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                                    </a>
                                </li>
                                <li class="nav-item mt-2">
                                    <a class="nav-link" data-toggle="tab" href="#tab-4">
                                        <h4>Nostrum qui quasi</h4>
                                        <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Featured Section -->
            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-stretch">
                            <div class="content" data-aos="fade-up">
                                <h3>Eum ipsam laborum deleniti <strong>velit pariatur architecto aut nihil</strong></h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                                </p>
                            </div>
                            <div class="accordion-list">
                                <ul>
                                    <li data-aos="fade-up" data-aos-delay="100">
                                        <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                                            <p>
                                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                            </p>
                                        </div>
                                    </li>
                                    <li data-aos="fade-up" data-aos-delay="200">
                                        <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                                            <p>
                                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                            </p>
                                        </div>
                                    </li>
                                    <li data-aos="fade-up" data-aos-delay="300">
                                        <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                                            <p>
                                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 order-1 order-lg-2 align-items-stretch video-box" style='background-image: url("{{ asset('assets/img/why-us.jpg') }}");' data-aos="zoom-in">
                            <a href="https://www.youtube.com/watch?v=LIqQNG_q2us" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Why Us Section -->
            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Team</h2>
                        <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="zoom-in">
                                <div class="member-img">
                                    <img src="{{ asset('assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Walter White</h4>
                                    <span>Chief Executive Officer</span>
                                    <p>Animi est delectus alias quam repellendus nihil nobis dolor. Est sapiente occaecati et dolore. Omnis aut ut nesciunt explicabo qui. Eius nam deleniti ut omnis</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                <div class="member-img">
                                    <img src="{{ asset('assets/img/team/team-2.jpg') }}" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>Sarah Jhonson</h4>
                                    <span>Product Manager</span>
                                    <p>Aspernatur iste esse aliquam enim et corporis. Molestiae voluptatem aut eligendi quis aut. Libero vel amet voluptatem eos rerum non doloremque</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                <div class="member-img">
                                    <img src="{{ asset('assets/img/team/team-3.jpg') }}" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>William Anderson</h4>
                                    <span>CTO</span>
                                    <p>Ut enim possimus nihil cupiditate beatae. Veniam facere quae non qui necessitatibus rerum eos vero. Maxime sit sunt quo dolor autem est qui quaerat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Team Section -->
            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <ul class="faq-list">
                        <li data-aos="fade-up">
                            <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                            <div id="faq1" class="collapse" data-parent=".faq-list">
                                <p>
                                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="100">
                            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                            <div id="faq2" class="collapse" data-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="200">
                            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                            <div id="faq3" class="collapse" data-parent=".faq-list">
                                <p>
                                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="300">
                            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                            <div id="faq4" class="collapse" data-parent=".faq-list">
                                <p>
                                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="400">
                            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                            <div id="faq5" class="collapse" data-parent=".faq-list">
                                <p>
                                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                                </p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="500">
                            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
                            <div id="faq6" class="collapse" data-parent=".faq-list">
                                <p>
                                    Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- End Frequently Asked Questions Section -->
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact section-bg">
                <div class="container">
                    <div class="section-title">
                        <h2>Contact</h2>
                        <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
                                <div class="address">
                                    <i class="icofont-google-map"></i>
                                    <h4>Location:</h4>
                                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                                </div>
                                <div class="email">
                                    <i class="icofont-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>
                                <div class="phone">
                                    <i class="icofont-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55s</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mt-5 mt-lg-0">
                            <form action="" method="post" role="form" class="php-email-form" data-aos="fade-left">
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validate"></div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Contact Section -->
        </main>
        <!-- End #main -->
        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <a href="#header" class="scrollto footer-logo"><img src="{{ asset('assets/img/hero-logo.png') }}" alt=""></a>
                            <h3>Knight</h3>
                            <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
                        </div>
                    </div>
                    <div class="row footer-newsletter justify-content-center">
                        <div class="col-lg-6">
                            <form action="" method="post">
                                <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="container footer-bottom clearfix">
                <div class="copyright">
                    &copy; Copyright <strong><span>{{ env('APP_NAME') }}</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by Mitesh Rathod
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>