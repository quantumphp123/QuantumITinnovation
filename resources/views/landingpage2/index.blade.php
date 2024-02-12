 @extends('landingpage2.layout.master') 
    @section('content')
        <div class="main">

        <!--hero section start-->
        <section class="ptb-100 bg-image overflow-hidden" image-overlay="8">
            <div class="background-image-wraper" style="background: url("{{asset('landing2/images/slider-bg-1.jpg')}}"); opacity: 1;"></div>
            <div class="hero-bottom-shape-two" style="background: url('public/landing2/images/wave-shap.svg')no-repeat bottom center"></div>
            <div class="effect-1 opacity-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 361.1 384.8" style="enable-background:new 0 0 361.1 384.8;" xml:space="preserve" class="injected-svg svg_img dark-color">
                    <path d="M53.1,266.7C19.3,178-41,79.1,41.6,50.1S287.7-59.6,293.8,77.5c6.1,137.1,137.8,238,15.6,288.9 S86.8,355.4,53.1,266.7z"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="hero-slider-content text-white py-5">
                            <h1 class="text-white">Best Way to Connect with Your Customers</h1>
                            <p class="lead">Holisticly procrastinate mission-critical convergence with reliable customer service. Assertively underwhelm idea-sharing for impactful solutions.</p>

                            <div class="action-btns mt-4">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="d-flex align-items-center app-download-btn btn btn-brand-02 btn-rounded">
                                            <span class="fab fa-apple icon-size-sm mr-3"></span>
                                            <div class="download-text text-left">
                                                <small>Download form</small>
                                                <h5 class="mb-0">App Store</h5>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="d-flex align-items-center app-download-btn btn btn-brand-02 btn-rounded">
                                            <span class="fab fa-google-play icon-size-sm mr-3"></span>
                                            <div class="download-text text-left">
                                                <small>Download form</small>
                                                <h5 class="mb-0">Google Play</h5>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6">
                        <div class="img-wrap">
                            <img src="{{asset('landing2/images/hero5-app.png')}}" alt="app image" class="img-fluid">
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <!--hero section end-->

        <!--promo section start-->
        <section class="promo-section ptb-100 position-relative overflow-hidden">
            <div class="effect-2 opacity-1">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 463.6 616" style="enable-background:new 0 0 463.6 616;" xml:space="preserve" class="injected-svg svg_img dark-color">
                    <path d="M148.4,608.3C25.7,572.5-3.5,442.2,0.3,375.8s24.8-117,124.8-166.5s125.7-77.4,165-129.6 c43.2-57.4,96.5-94.4,127.9-73c63,43,53.9,280,14,358s-68.9,75.5-98.9,118.7S271,644,148.4,608.3z"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-10">
                        <div class="section-heading">
                            <h2>We Will Helps You to Build Beautiful App</h2>
                            <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-concierge-bell icon-size-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Modular</h5>
                                    <p class="mb-0">All components are built to be used in combination.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-window-restore icon-size-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Responsive</h5>
                                    <p class="mb-0">Quick is optimized to work for most devices.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-sync-alt icon-size-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Scalable</h5>
                                    <p class="mb-0">Remain consistent while developing new features.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card border-0 single-promo-card single-promo-hover-2 p-2 mt-4">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="fas fa-bezier-curve icon-size-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Customizable</h5>
                                    <p class="mb-0">Change a few variables and the whole theme adapts.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--about us section start-->
        <section id="about" class="about-us ptb-100 position-relative gray-light-bg">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between justify-content-md-center">
                    <div class="col-md-5 col-lg-4">
                        <div class="about-content-right">
                            <img src="{{asset('landing2/images/app-mobile-image-2.png')}}" alt="about us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7">
                        <div class="about-content-left section-heading">
                            <h2>Use Our App to Manage Everything.</h2>

                            <ul class="check-list-wrap pt-3">
                                <li><strong>Big Data Consulting</strong> – Holisticly leverage existing tactical core competencies with error-free methods of empowerment. Holisticly foster client-centric partnerships.</li>
                                <li><strong>Machine Learning</strong> – Assertively engage backend web-readiness through efficient web services. Enthusiastically innovate frictionless e-commerce after prospective.</li>
                                <li><strong>Artificial Intelligence</strong> – Dynamically incubate transparent technologies after cost effective action items. Competently promote user-centric sources via empowered experiences.</li>
                                <li><strong>Big Data Analytics</strong> – Quickly incubate revolutionary data and effective infomediaries. Credibly transform high standards in convergence via market positioning interfaces.</li>
                            </ul>
                            <div class="action-btns mt-4">
                                <a href="#" class="btn btn-brand-02 mr-3">Get Start Now</a>
                                <a href="#" class="btn btn-outline-brand-02">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="position-relative feature-section ptb-100">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-12 col-lg-6">
                        <div class="feature-contents section-heading">
                            <h2>Share Your Photos With Friends Easily</h2>
                            <p>Objectively deliver professional value with diverse web-readiness.
                                Collaboratively transition wireless customer service without goal-oriented catalysts for
                                change. Collaboratively.</p>
                            <p>Uniquely simplify sustainable applications whereas adaptive schemas. Competently brand performance based content and.</p>
                            <ul class="dot-circle pt-2">
                                <li>The only way your business can to the information.</li>
                                <li>Your app will be used by a host and for different.</li>
                                <li>Intrinsicly innovate top-line collaborative benefits. </li>
                                <li>Efficiently redefine value-added sources without.</li>
                            </ul>
                            <div class="row pt-3">
                                <div class="col-4 col-lg-3 border-right">
                                    <div class="count-data text-center">
                                        <h4 class="count-number mb-0 color-primary font-weight-bold">1023</h4>
                                        <span>Customers</span>
                                    </div>
                                </div>
                                <div class="col-4 col-lg-3 border-right">
                                    <div class="count-data text-center">
                                        <h4 class="count-number mb-0 color-primary font-weight-bold">5470</h4>
                                        <span>Downloads</span>
                                    </div>
                                </div>
                                <div class="col-4 col-lg-3 border-right">
                                    <div class="count-data text-center">
                                        <h4 class="count-number mb-0 color-primary font-weight-bold">3560</h4>
                                        <span>Satisfied</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="download-img">
                            <img src="{{asset('landing2/images/mobile-pana.svg')}}" alt="download" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about us section end-->

        <!--features section start-->
        <section id="features" class="feature-section ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>App Features</h2>
                            <p class="text-muted para-desc mb-0 mx-auto">Start working with that can provide everything you need to generate awareness, drive traffic, connect. Efficiently transform granular value with client-focused content. Energistically redefine market.</p>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->

                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-layout p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Use On Any Device</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-themify-favicon-alt p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Themify Icon</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-eye p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Retina Ready</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-thumb-up p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">W3c Valid Code</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-mobile p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Fully Responsive</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                                    <span class="ti-world p-3 mr-4 mt-1 rounded-circle float-left"></span>
                                    <div class="features-single-content d-block overflow-hidden">
                                        <h5 class="mb-2">Browser Compatibility</h5>
                                        <p>composed in a pseudo-Latin language which more or less pseudo-Latin language corresponds.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="{{asset('landing2/images/app-mobile-image.png')}}" class="img-fluid mx-auto d-lg-block d-none" alt="app screen">
                    </div>
                </div>
            </div>
        </section>
        <!--features section end-->

        <!--video with download start-->
        <section class="position-relative overflow-hidden ptb-100">
            <div class="mask-65"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center text-white">
                            <h2 class="text-white">The Most Uses App Platform</h2>
                            <p>Start working with that can provide everything you need to generate awareness, drive traffic, connect. Efficiently transform granular value with client-focused content.</p>
                        </div>
                        <div class="video-promo-content my-5 pb-4">
                            <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon text-center m-auto"><span class="ti-control-play"></span> </a>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="row justify-content-md-center justify-content-sm-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bg-white p-5 rounded text-center shadow mt-lg-0 mt-4">
                            <div class="icon-text-wrap">
                                <i class="fab fa-apple icon-size-md color-primary mb-2"></i>
                                <h5>Apple Store</h5>
                            </div>
                            <div class="p-20px">
                                <p class="m-0px">Seamlessly foster fully researched convergence and interactive resources administrate data.</p>
                                <a class="btn btn-brand-02 btn-sm btn-rounded" href="#">Download Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bg-white p-5 rounded text-center shadow mt-lg-0 mt-4">
                            <div class="icon-text-wrap">
                                <i class="fab fa-google-play icon-size-md color-primary mb-2"></i>
                                <h5>Google Play</h5>
                            </div>
                            <div class="p-20px">
                                <p class="m-0px">Assertively build B2C manufactured products before front-end optimize frictionless communities tailers.</p>
                                <a class="btn btn-brand-02 btn-sm btn-rounded" href="#">Download Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="bg-white p-5 rounded text-center shadow mt-lg-0 mt-4">
                            <div class="icon-text-wrap">
                                <i class="fab fa-windows icon-size-md color-primary mb-2"></i>
                                <h5>Microsoft Store</h5>
                            </div>
                            <div class="p-20px">
                                <p class="m-0px">Completely engineer pandemic human capital via reconceptualize installed base niche markets.</p>
                                <a class="btn btn-brand-02 btn-sm btn-rounded" href="#">Download Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--video with download end-->

        <!--screenshots section start-->
        <section id="screenshots" class="screenshots-section pb-100  ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Apps Screenshots</h2>
                            <p>Proactively impact value-added channels via backend leadership skills. Efficiently revolutionize worldwide networks whereas strategic catalysts for change. </p>
                        </div>
                    </div>
                </div>
                <!--start app screen carousel-->
                <div class="screenshot-wrap">
                    <div class="screenshot-frame"></div>
                    <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                        <img src="{{asset('landing2/images/01.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('landing2/images/02.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('landing2/images/03.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('landing2/images/04.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('landing2/images/05.jpg')}}" class="img-fluid" alt="screenshots" />
                        <img src="{{asset('landing2/images/06.jpg')}}" class="img-fluid" alt="screenshots" />
                    </div>
                </div>
                <!--end app screen carousel-->
            </div>
        </section>


        <!--screenshots section end-->

        <!--work process start-->
        <section id="process" class="work-process-section position-relative  ptb-100 gray-light-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Work Process</h2>
                            <p>
                                Professional hosting at an affordable price. Distinctively recaptiualize principle-centered core competencies through client-centered core competencies.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center justify-content-md-center justify-content-sm-center">
                    <div class="col-md-12 col-lg-6">
                        <div class="work-process-wrap">
                            <div class="process-single-item">
                                <div class="process-icon-item left-shape">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon mr-4">
                                            <i class="fas fa-project-diagram color-primary"></i>
                                        </div>
                                        <div class="process-content text-left">
                                            <h5>Planning Idea</h5>
                                            <p>Holisticly architect sustainable meta-services for process-centric core competencies. Enthusiastically re-engineer best-of-breed outsourcing.</p>
                                        </div>
                                    </div>
                                    <svg x="0px" y="0px" width="312px" height="130px">
                                        <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338"></path>
                                        <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338 "></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="process-single-item">
                                <div class="process-icon-item right-shape">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon ml-4">
                                            <i class="fas fa-puzzle-piece color-primary"></i>
                                        </div>
                                        <div class="process-content text-right">
                                            <h5>Developed Final Product</h5>
                                            <p>Monotonectally harness holistic web-readiness after multimedia based catalysts for change. Completely brand front-end systems before visionary.</p>
                                        </div>
                                    </div>
                                    <svg x="0px" y="0px" width="312px" height="130px">
                                        <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                                        <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="process-single-item">
                                <div class="process-icon-item left-shape mb-0">
                                    <div class="d-flex align-items-center">
                                        <div class="process-icon mr-4">
                                            <i class="fas fa-truck color-primary"></i>
                                        </div>
                                        <div class="process-content text-left">
                                            <h5>Deliver to Customer</h5>
                                            <p>Monotonectally plagiarize synergistic e-business for stand-alone communities. Professionally enhance visionary manufactured products progressive.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="img-wrap">
                            <img src="{{asset('landing2/images/app-mobile-image-3.png')}}" alt="features" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--work process end-->

        <!--testimonial section start-->
       <section class="position-relative gradient-bg ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-5 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                        <div class="testimonial-heading text-white">
                            <h2 class="text-white">What Our Client Say About Apdash</h2>
                            <p>Collaboratively actualize excellent schemas without effective models. Synergistically engineer functionalized applications rather than backend e-commerce.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="testimonial-content-wrap">
                            <div class="owl-carousel owl-theme client-testimonial-1 dot-indicator testimonial-shape owl-loaded owl-drag">
                                
                                
                                
                                
                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2280px, 0px, 0px); transition: all 0.25s ease 0s; width: 4560px;"><div class="owl-item cloned" style="width: 540px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="{{asset('landing2/img/client/3.jpg')}}" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">Jeremy Jere</h5>
                                                <span>Team Leader</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Objectively synthesize client-centered e-tailers for maintainable channels. Holisticly administrate customer directed vortals whereas tactical functionalities. Energistically monetize reliable imperatives through client-centric.</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 540px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="{{asset('landing2/assets/img/client/4.jpg')}}" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">John Charles</h5>
                                                <span>Marketing Head</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Enthusiastically innovate B2C data without clicks-and-mortar convergence. Monotonectally deliver compelling testing procedures vis-a-vis B2B testing procedures. Competently evisculate integrated resources whereas global.</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 540px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="{{asset('landing2/assets/img/client/1.jpg')}}" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">John Charles</h5>
                                                <span>Head Of Admin</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Interactively optimize fully researched expertise vis-a-vis plug-and-play relationships. Intrinsicly develop viral core competencies for fully tested customer service. Enthusiastically create next-generation growth strategies and.</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 540px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="{{asset('landing2/assets/img/client/2.jpg')}}" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">Arabella Ora</h5>
                                                <span>HR Manager</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Rapidiously develop user friendly growth strategies after extensive initiatives. Conveniently grow innovative benefits through fully tested deliverables. Rapidiously utilize focused platforms through end-to-end schemas.</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 540px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="{{asset('landing2/assets/img/client/3.jpg')}}" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">Jeremy Jere</h5>
                                                <span>Team Leader</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Objectively synthesize client-centered e-tailers for maintainable channels. Holisticly administrate customer directed vortals whereas tactical functionalities. Energistically monetize reliable imperatives through client-centric.</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item" style="width: 540px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="{{asset('landing2/assets/img/client/4.jpg')}}" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">John Charles</h5>
                                                <span>Marketing Head</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Enthusiastically innovate B2C data without clicks-and-mortar convergence. Monotonectally deliver compelling testing procedures vis-a-vis B2B testing procedures. Competently evisculate integrated resources whereas global.</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 540px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="{{asset('landing2/assets/img/client/1.jpg')}}" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">John Charles</h5>
                                                <span>Head Of Admin</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Interactively optimize fully researched expertise vis-a-vis plug-and-play relationships. Intrinsicly develop viral core competencies for fully tested customer service. Enthusiastically create next-generation growth strategies and.</p>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 540px; margin-right: 30px;"><div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <img src="{{asset('landing2/img/client/2.jpg')}}" alt="client" class="img-fluid">
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white">Arabella Ora</h5>
                                                <span>HR Manager</span>
                                            </div>
                                            <i class="fas fa-quote-right text-white"></i>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>Rapidiously develop user friendly growth strategies after extensive initiatives. Conveniently grow innovative benefits through fully tested deliverables. Rapidiously utilize focused platforms through end-to-end schemas.</p>
                                        </div>
                                    </div>
                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial section end-->

       

       

        <!--our contact section start-->
        <section id="contact" class="contact-us-section ptb-100">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-12 pb-3 message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                 <div class="col-md-7 col-12 col-sm-5 ml-auto">
          <div class="contact-form-service-wrap">
            <div class="contact-title text-center section-space--mb_">
              <h4 class="">Get In Touch</h4>
              <p class="text">Tell us what's on your mind and we'll get right back to you !</p>
            </div>
            <form method="post" action="" class="form p-t-20 needs-validation" novalidate="" id="contactus">
              <div class="contact-form__two">
                <div class="contact-input">
                  <div class="contact-inner">
                    <input name="name" type="text" placeholder="Name *" class="cust-height" required="">
                  </div>
                  <div class="contact-inner">
                    <input name="email" type="email" placeholder="Email *" class="cust-height" required="">
                  </div>
                </div>
                <div class="contact-inner">
                  <input name="number" type="text" placeholder="Phone Number *" class="cust-height" required="">
                </div>
                <div class="contact-select">
                  <div class="form-item contact-inner"> <span class="inquiry">
                    <select name="enquiry_type" class="select-item cust-height" required="">
                      <option value="">Your Enquiry about</option>
                      <option value="Mobile App Development">Mobile App Development</option>
                      <option value="Website Design &amp; Development">Website Design &amp; Development</option>
                      <option value="Digital Marketing (SEO, PPC, SMO)">Digital Marketing (SEO, PPC, SMO)</option>
                      <option value="Artificial Intelligence">Artificial Intelligence</option>
                      <option value="Robotic Process Automation">Robotic Process Automation</option>
                    </select>
                    </span> </div>
                </div>
                <div class="contact-inner contact-message">
                  <textarea name="description" placeholder="Please describe what you need."></textarea>
                </div>
                <div class="submit-btn text-center">
                  <button class="ht-btn ht-btn-md cust-height-btn" type="submit">Send message</button>
                  <p class="form-messege"></p>
                </div>
                <br>
                
                <!--<div class="alert alert-danger alert-dismissible">--> 
                
                <!--</div>--> 
                
              </div>
            </form>
          </div>
        </div>
                    <div class="col-md-5 col-12 col-sm-5">
                        <div class="contact-us-content">
                            <h2 class="left-bottom-head">Looking for a excellent Business idea?</h2>
                            <p class="lead">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.</p>

                            <a href="#" class="btn btn-outline-brand-01 align-items-center" style="background-color: #fff;">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                            <hr class="my-5">

                            <ul class="contact-info-list">
                                <li class="d-flex pb-3">
                                    <div class="contact-icon mr-3">
                                        <span class="fas fa-location-arrow color-primary rounded-circle p-3"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h5 class="mb-1 top-text">Company Location</h5>
                                        <p class="top-para">
                                            100 Yellow House, Mn Factory, United State, 13420
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex pb-3">
                                    <div class="contact-icon mr-3">
                                        <span class="fas fa-envelope color-primary rounded-circle p-3"></span>
                                    </div>
                                    <div class="contact-text">
                                        <h5 class="mb-1 top-text">Email Address</h5>
                                        <p class="top-para">
                                            hello@yourdomain.com
                                        </p>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our contact section end-->
    </div>

    
    @endsection
