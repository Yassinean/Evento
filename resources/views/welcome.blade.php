<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>EventGrids - Conference and Event HTML Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="/assets/css/animate.css" />
    <link rel="stylesheet" href="/assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="/assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/images/logo/logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="index.html" class="active" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-1" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                        <ul class="sub-menu collapse" id="submenu-1-1">
                                            <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                            <li class="nav-item"><a href="mail-success.html">Mail Success</a></li>
                                            <li class="nav-item"><a href="404.html">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="schedule.html" aria-label="Toggle navigation">Schedule</a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                            @if (Route::has('login'))
                                                @auth
                                                    @if (Auth::user()->role == 'admin')
                                                        <a href="{{ url('/admin/dashboard') }}"
                                                            class="font-semibold text-gray-600 hover:text-gray-900">Dashboard</a>
                                                    @elseif(Auth::user()->role == 'organisateur')
                                                        <a href="{{ url('/organisateur/dashboard') }}"
                                                            class="font-semibold text-gray-600 hover:text-gray-900">Dashboard</a>
                                                    @else
                                                        <!-- Logout Form -->
                                                        <form method="POST" action="{{ route('logout') }}">
                                                            @csrf
                                                            <button type="submit"
                                                                class="font-semibold text-gray-600 hover:text-gray-900">Logout</button>
                                                        </form>
                                                    @endif
                                                @else
                                                    @if (Route::has('register'))
                                                        <a href="{{ route('register') }}"
                                                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900">Register</a>
                                                    @endif
                                                    <a href="{{ route('login') }}"
                                                        class="font-semibold text-gray-600 hover:text-gray-900">Log in</a>
                                                @endauth
                                            @endif
                                        </div>

                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            <div class="button">
                                <a href="pricing.html" class="btn">Get Tickets<i class="lni lni-ticket"></i></a>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    <!-- End Header Area -->

    <!-- Start Hero Area -->
    <section class="hero-area">
        <div class="main__circle"></div>
        <div class="main__circle2"></div>
        <div class="main__circle3"></div>
        <div class="main__circle4"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <div class="hero-content">
                        <h5 class="wow zoomIn" data-wow-delay=".2s"><i class="lni lni-map-marker"></i> Waterfront
                            Hotel,
                            London</h5>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">The largest conference in europe 2023</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. deleniti voluptatum! Natus
                            beatae laborum veniam distinctio.</p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="pricing.html" class="btn ">Buy Ticket Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Count Down Area -->
    <div class="count-down">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box-head">
                        <div class="box-content">
                            <div class="box">
                                <h1 id="days">000</h1>
                                <h2 id="daystxt">Days</h2>
                            </div>
                            <div class="box">
                                <h1 id="hours">00</h1>
                                <h2 id="hourstxt">Hours</h2>
                            </div>
                            <div class="box">
                                <h1 id="minutes">00</h1>
                                <h2 id="minutestxt">Minutes</h2>
                            </div>
                            <div class="box">
                                <h1 id="seconds">00</h1>
                                <h2 id="secondstxt">Secondes</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Count Down Area -->

    <!-- Start Features Area -->
    <section class="features section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Why join eventGrids?</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Why you should Join Event</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <form action="{{ route('searchname') }}" method="get">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8">
                        <form class="card card-sm">
                            <div class="card-body row no-gutters align-items-center">
                                <div class="col-auto">
                                    <i class="fas fa-search h4 text-body"></i>
                                </div>
                                <!--end of col-->
                                <div class="col">
                                    <input class="form-control form-control-lg form-control-borderless" type="search"
                                        name="search" placeholder="Search topics or keywords">
                                </div>
                                <!--end of col-->
                                <div class="col-auto">
                                    <button class="btn btn-lg btn-primary" type="submit">Search</button>
                                </div>
                                <!--end of col-->
                            </div>
                        </form>
                    </div>
                    <!--end of col-->
                </div>
            </form>
            @if (session()->has('eventSearchResults'))
                <div class="mt-4">
                    <h2 class="text-lg font-semibold mb-2">Evénement cherché:</h2>
                    <ul>
                        @foreach (session('eventSearchResults') as $event)
                            <article class="postcard light blue">
                                <a class="postcard__img_link" href="/event/{{ $event->id }}">
                                    <img class="postcard__img" src="{{ asset('images/' . $event->image) }}"
                                        alt="Image Title" />
                                </a>
                                <div class="postcard__text t-dark">
                                    <h1 class="postcard__title blue"><a
                                            href="/event/{{ $event->id }}">{{ $event->name }}</a></h1>
                                    <div class="postcard__subtitle small">
                                        <time datetime="2020-05-25 12:00:00">
                                            <i class="fas fa-calendar-alt mr-2"></i>{{ $event->date }}
                                        </time>
                                    </div>
                                    <div class="postcard__bar"></div>
                                    <div class="postcard__preview-txt"> {{ $event->description }} </div>
                                    <ul class="postcard__tagbox">
                                        <li class="tag__item"><i
                                                class="fas fa-tag mr-2"></i>{{ $event->categorie->name }}
                                        </li>
                                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>{{ $event->capacity }}
                                        </li>
                                        <li class="tag__item play blue">
                                            <a href="#"><i
                                                    class="fas fa-play mr-2"></i>{{ $event->organisateur->user->name }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="d-flex justify-content-evenly gap-2">
                @foreach ($categories as $cat)
                    <form action=" {{ route('filtername') }}" method="get">
                        @csrf
                        <input type="hidden" name="id" value="{{ $cat->id }}">
                        <button type="submit" class="service-icon" style="width: auto">
                            <span>{{ $cat->name }} : {{ $cat->event_count }}</span>
                        </button>
                    </form>
                @endforeach
            </div>
            <div class="row">
                <div class="container py-2">
                    <div class="h1 text-center text-dark" id="pageHeaderTitle">Events</div>
                    @foreach ($events as $event)
                        @if ($event->status)
                            <article class="postcard light blue">
                                <a class="postcard__img_link" href="/event/{{ $event->id }}">
                                    <img class="postcard__img" src="{{ asset('images/' . $event->image) }}"
                                        alt="Image Title" />
                                </a>
                                <div class="postcard__text t-dark">
                                    <h1 class="postcard__title blue"><a
                                            href="/event/{{ $event->id }}">{{ $event->name }}</a></h1>
                                    <div class="postcard__subtitle small">
                                        <time datetime="2020-05-25 12:00:00">
                                            <i class="fas fa-calendar-alt mr-2"></i>{{ $event->date }}
                                        </time>
                                    </div>
                                    <div class="postcard__bar"></div>
                                    <div class="postcard__preview-txt"> {{ $event->description }} </div>
                                    <ul class="postcard__tagbox">
                                        <li class="tag__item"><i
                                                class="fas fa-tag mr-2"></i>{{ $event->categorie->name }}
                                        </li>
                                        <li class="tag__item"><i class="fas fa-clock mr-2"></i>{{ $event->capacity }}
                                        </li>
                                        <li class="tag__item play blue">
                                            <a href="#"><i
                                                    class="fas fa-play mr-2"></i>{{ $event->organisateur->user->name }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        @endif
                    @endforeach
                    <div class="d-flex justify-content-center">{{ $events->links() }}</div>
                </div>
            </div>

        </div>
    </section>
    <!-- /End Features Area -->

    <!-- Start Pricing Table Area -->
    <section id="pricing" class="pricing-table section extra-page bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">pricing</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Pricing & Plans</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Single Table -->
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Regular</h4>
                            <p>Available tickets for this price</p>
                            <div class="price">
                                <h2 class="amount">$10</h2>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Get Ticket</a>
                        </div>
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <!-- Table List -->
                            <ul class="table-list">
                                <li>One Day Conference Ticket</li>
                                <li>Posters Session</li>
                                <li>Coffee-break & Networking
                                </li>
                                <li>Lunch & Networing</li>
                                <li>Keynote talk</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Single Table -->
                    <div class="single-table middle">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Exclusive</h4>
                            <p>Available tickets for this price</p>
                            <div class="price">
                                <h2 class="amount">$99</h2>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <div class="button">
                            <a href="javascript:void(0)" class="btn btn-alt">Get Ticket</a>
                        </div>
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <!-- Table List -->
                            <ul class="table-list">
                                <li>Three Day Conference Ticket</li>
                                <li>Posters Session</li>
                                <li>Coffee-break & Networking
                                </li>
                                <li>Lunch & Networing</li>
                                <li>Keynote talk</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".8s">
                    <!-- Single Table -->
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <h4 class="title">Premium</h4>
                            <p>Available tickets for this price</p>
                            <div class="price">
                                <h2 class="amount">$289</h2>
                            </div>
                        </div>
                        <!-- End Table Head -->
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Get Ticket</a>
                        </div>
                        <!-- Start Table Content -->
                        <div class="table-content">
                            <!-- Table List -->
                            <ul class="table-list">
                                <li>Five Day Conference Ticket</li>
                                <li>Posters Session</li>
                                <li>Coffee-break & Networking
                                </li>
                                <li>Lunch & Networing</li>
                                <li>Keynote talk</li>
                            </ul>
                            <!-- End Table List -->
                        </div>
                        <!-- End Table Content -->
                    </div>
                    <!-- End Single Table-->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Pricing Table Area -->

    <!-- Start Call Action Area -->
    <section class="call-action overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="inner-content">
                        <div class="text">
                            <h5 class="wow zoomIn" data-wow-delay=".2s">Free Lite Version</h5>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Currently you are using free LiteVersion of
                                EventGrids
                            </h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">Please, purchase full version of the template
                                to get all pages, features and commercial license.</p>
                        </div>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="javascript:void(0)" class="btn">Buy Now <i class="lni lni-cart-full"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call Action Area -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-about">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo/dark-logo.svg" alt="#">
                                    </a>
                                </div>
                                <p>A business conference organize by EventGrids In. World’s most influential media,
                                    entertainment & technology.</p>
                                <span class="social-title">
                                    Follow Us On:
                                </span>
                                <ul class="social">
                                    <li>
                                        <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="lni lni-twitter-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="lni lni-instagram-filled"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">Get Direction</a></li>
                                    <li><a href="javascript:void(0)">Sponsor</a></li>
                                    <li><a href="javascript:void(0)">What We Offer</a></li>
                                    <li><a href="javascript:void(0)">Ricent Projects</a></li>
                                    <li><a href="javascript:void(0)">Insights</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer f-link">
                                <h3>Know More</h3>
                                <ul>
                                    <li><a href="javascript:void(0)">About Us</a></li>
                                    <li><a href="javascript:void(0)">Our Pricing</a></li>
                                    <li><a href="javascript:void(0)">Faq</a></li>
                                    <li><a href="javascript:void(0)">Guides</a></li>
                                    <li><a href="javascript:void(0)">Contact Us</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer newsletter">
                                <h3>Subscribe to our newsletter</h3>
                                <form action="#" method="get" target="_blank" class="newsletter-form">
                                    <input name="name" placeholder="Your Name*" required="required"
                                        type="text">
                                    <input name="email" placeholder="Email address*" required="required"
                                        type="email">
                                    <div class="button">
                                        <button class="btn">Subscribe
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Start Copyright Area -->
        <div class="copyright">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-12">
                            <p class="copyright-text">Designed and Developed by <a href="https://graygrids.com/"
                                    rel="nofollow" target="_blank">GrayGrids</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=Gxw45q3Ga3k',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });

        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 3,
                }
            }
        });
    </script>
    <script>
        const finaleDate = new Date("February 15, 2023 00:00:00").getTime();

        const timer = () => {
            const now = new Date().getTime();
            let diff = finaleDate - now;
            if (diff < 0) {
                document.querySelector('.alert').style.display = 'block';
                document.querySelector('.container').style.display = 'none';
            }

            let days = Math.floor(diff / (1000 * 60 * 60 * 24));
            let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
            let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
            let seconds = Math.floor(diff % (1000 * 60) / 1000);

            days <= 99 ? days = `0${days}` : days;
            days <= 9 ? days = `00${days}` : days;
            hours <= 9 ? hours = `0${hours}` : hours;
            minutes <= 9 ? minutes = `0${minutes}` : minutes;
            seconds <= 9 ? seconds = `0${seconds}` : seconds;

            document.querySelector('#days').textContent = days;
            document.querySelector('#hours').textContent = hours;
            document.querySelector('#minutes').textContent = minutes;
            document.querySelector('#seconds').textContent = seconds;

        }
        timer();
        setInterval(timer, 1000);
    </script>
</body>

</html>
