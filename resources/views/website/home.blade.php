@extends('website.layouts.master') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Digital Marketing Agencies & Services - Quantum IT Innovation offers next-gen mobile app, web development, and digital marketing solutions for businesses of all sizes. Contact us today">
    <meta name="keywords" content="Mobile app development company Digital Marketing Agency,Web Development Company, App development company in US, Digital marketing agency in US, Digital Marketing agency in India">
    <title>Digital Marketing Agencies & Services - Quantum It Innovation</title>   
@endsection
@section('content')

<div class="site-wrapper-reveal">
<!--============ Resolutions Hero Start ============-->
<div id="video-carousel-example2" class="carousel slide carousel-fade resolutions-hero-bg" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
        <li data-target="#video-carousel-example2" data-slide-to="1"></li>
        <li data-target="#video-carousel-example2" data-slide-to="2"></li>
        <li data-target="#video-carousel-example2" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view view1">
                <img width="100%" class="title_img" src="assets/images/hero/5.jpg" alt="title">
                <div class="mask rgba-purple-slight"></div>
                <div class="mask rgba-indigo-light"></div>
            </div>
            <div class="carousel-caption text-left">
                <div class="animated fadeInDown">
                    <h1 class="title_h1">Artificial<br>Intelligence</h1>
                    <p class="text-white title_p">
                        <span>Make your business future-ready with<br>Artificial Intelligence Development Services.</span>
                    </p>
                    <div class="button_cont">
                        <a class="banner_btn" href="{{url('/contact')}}" rel="nofollow noopener">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item ">
            <div class="view view1">
                <img width="100%" class="title_img" src="assets/images/hero/6.jpg" alt="titl">
                <div class="mask rgba-purple-slight"></div>
                <div class="mask rgba-purple-slight"></div>
            </div>
            <div class="carousel-caption text-left">
                <div class="animated fadeInDown">
                    <h1 class="title_h1">Web<br>Development</h1>
                </div>
                <div class="animated fadeInDown">
                    <p class="text-white title_p">
                        <span>We analyse your business to design a website<br>Which increases conversion rates and produces positive results.</span>
                    </p>
                    <div class="button_cont">
                        <a class="banner_btn" href="{{url('/contact')}}" rel="nofollow noopener">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="view view1">
                <img width="100%" class="title_img" src="assets/images/hero/305.jpg" alt="tt">
                <div class="mask rgba-purple-slight"></div>
                <div class="mask rgba-purple-slight"></div>
            </div>
            <div class="carousel-caption text-left">
                <div class="animated fadeInDown">
                    <h1 class="title_h1">Mobile App<br>Development</h1>
                    <p class="text-white title_p">
                        <span>Android, IOS, Swift and Cross-platform<br>Build an application that grow your business.</span>
                    </p>
                    <div class="button_cont">
                        <a class="banner_btn" href="{{url('/contact')}}" rel="nofollow noopener">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">

            <div class="view view1">

                <img width="100%" class="title_img" src="assets/images/hero/web_dev1.jpg" alt="tite">
                <div class="mask rgba-purple-slight"></div>
                <div class="mask rgba-purple-slight"></div>
            </div>

            <div class="carousel-caption text-left">

                <div class="animated fadeInDown">
                    <h1 class="title_h1">Digital<br>Marketing</h1>
                </div>
                <div class="animated fadeInDown">
                    <p class="text-white title_p">
                        <span>
                    We are a results driven top ranked<br>Marketing agency that delivers powerful results.
                  </span>
                    </p>
                    <div class="button_cont">
                        <a class="banner_btn" href="{{url('/contact')}}" rel="nofollow noopener">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev" style="display:none;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next" style="display:none;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!--============ Resolutions Hero End ============-->

    <!--===========  feature-images-wrapper  Start =============-->

    <div class="feature-images-wrapper bg-gray">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="feature-images__five resolutions-hero-bottom">
                        <div class="row">

                            <div class="col-lg-4 col-md-6 wow move-up" style="padding:1%;">
                                 <!--ht-box-icon Start -->
                                <div class="ht-box-images style-05">
                                    <div class="image-box-wrap" style="border-radius: 13px 13px 0px 0px;">
                                        <div class="box-image digital_sbox"></div>
                                        <div class="content sbox_content">
                                            <h5 class="heading">Digital<br>Marketing </h5>
                                            <div class="divider_san"></div>
                                            <div class="text" style="padding-top: 2%;">
                                                {{substr("We offer innovative Digital Marketing services. We based out of India, USA, and UK. We are catering to our clients based out of UK, USA, Singapore, Canada, Australia, UAE and other parts of the World",0,115)}}<strong>...</strong>
                                            </div>
                                            <div class="box-images-arrow">
                                                <!--<a href="#">-->
                                                <!--    <span class="button-text">Explore now</span>-->
                                                <!--    <i class="far fa-long-arrow-right"></i>-->
                                                <!--</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!--ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up" style="padding:1%;">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-05">
                                    <div class="image-box-wrap" style="border-radius: 13px 13px 0px 0px;">
                                        <div class="box-image web_sbox">
                                            <!--  -->
                                        </div>
                                        <div class="content sbox_content">
                                            <h5 class="heading">Web<br>Development</h5>
                                            <div class="divider_san"></div>
                                            <div class="text" style="padding-top: 2%;">{{substr("Quantum expertise in developing dynamic, robust and high-end CMS websites utilizing latest technologies like VB.Net, asp.net, PHP, Java, Python etc",0,115)}}<strong>...</strong>
                                            </div>
                                            <div class="box-images-arrow">
                                                <!--<a href="#">-->
                                                <!--    <span class="button-text">Explore now</span>-->
                                                <!--    <i class="far fa-long-arrow-right"></i>-->
                                                <!--</a>-->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up" style="padding:1%;">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-images style-05">
                                    <div class="image-box-wrap" style="border-radius: 13px 13px 0px 0px;">
                                        <div class="box-image mobile_sbox">
                                            <!--  -->
                                        </div>
                                        <div class="content sbox_content">
                                            <h5 class="heading">Mobile<br>Development</h5>
                                            <div class="divider_san"></div>
                                            <div class="text" style="padding-top: 2%;">{{substr("Quantum is one of the leading mobile application development company offices in India, USA & UK that started making Android, Windows, Swift and iOS apps",0,115)}}<strong>...</strong>
                                            </div>
                                            <div class="box-images-arrow">
                                          
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>

                        </div>
                    </div>

                    <div class="section-under-heading text-center section-space--mt_80"></div>

                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-images-wrapper  End =============-->

    <!--===========  Our Company History Start =============-->

    <div class="our-company-history section-space--ptb_100" style="padding-top:30px;padding-bottom:30px">
        <div class="container-fluid">
            <div class="grid-wrapper">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
                <div class="line line-3"></div>
                <div class="line line-4"></div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-custom-col">
                        <div class="section-title-wrap">
                            <h6 class="section-sub-title mb-20">Our company</h6>
                            <h3 class="heading">Why <span class="text-color-primary">Quantum</span> ?</h3>

                            <p class="text mt-30">Quantum wants you to feel comfortable with what we’re planning to make right choice for your business. We have been into this business since and our experts have gained a lot from working with hundreds of clients all over the world.</p>
                            <p class="text mt-30">You definitely need a digital marketing agency to help your product and services to sell online. Quantum understands your need and accordingly. Our experts will help you with marketing research, web design planning, data analytics, content strategy. We assure you to get customers on your website and want to stay...</p>

                            <div class="inner-button-box section-space--mt_60">
                                <a href="{{url('/why-quantumitinnovation')}}" class="ht-btn ht-btn-md">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rv-video-section">

                        <div class="ht-banner-01 ">
                            <img class="img-fluid border-radus-5 animation_images one wow fadeInDown" src="assets/images/banners/home-processing-video-intro-slider-slide-01-image-02.jpg" alt="6">
                        </div>

                        <div class="ht-banner-02">
                            <img class="img-fluid border-radus-5 animation_images two wow fadeInDown" src="assets/images/banners/home-processing-video-intro-slider-slide-01-image-03.jpg" alt="5">
                        </div>

                        <div class="main-video-box x_video-popup">
                            <a class="video-link  mt-30">
                                <div class="single-popup-wrap">
                                    <img class="img-fluid border-radus-5" src="assets/images/banners/home-processing-video-intro-slider-slide-01-image-01.jpg" alt="56">
                                    <div class="ht-popup-video video-button">
                                        <div class="video-mark">
                                            <div class="wave-pulse wave-pulse-1"></div>
                                            <div class="wave-pulse wave-pulse-2"></div>
                                        </div>
                                        <div class="">
                                            <div class="video-play">
                                                <span class="video-play-icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="ht-banner-03">
                            <img class="img-fluid border-radus-5 animation_images three wow fadeInDown" src="assets/images/banners/home-processing-video-intro-slider-slide-01-image-04.jpg" alt="ht">
                        </div>

                        <div class="ht-banner-04">
                            <img class="img-fluid border-radus-5 animation_images four wow fadeInDown" src="assets/images/banners/home-processing-video-intro-slider-slide-01-image-05.jpg" alt="rr">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--===========  Our Company History Start  End =============-->

    <div class="feature-icon-wrapper bg_lite_gray section-space--ptb_100">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_40">
                        <h3 class="heading">
                            Our 
                            <span class="text-color-primary">App</span>
                            & <span class="text-color-primary">Web</span>
                            <!--&<span class="text-color-primary">Digital Marketing</span>-->
                            <br>
                            Services and Offerings
                        </h3>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="feature-list__one">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-icon style-01">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                                <img src="{{asset('assets/images/Mobile app (1).png')}}" class="industry-one" title="automation" alt="title">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Mobile App</h5>
                                            <div class="text">
                                                <p class="service_def text-center">
                                                    {{substr("Quantum is one of the leading mobile application development company offices in India, USA & UK that started making Android, Windows, Swift and iOS apps. Mobile Application Development is an area that goes beyond the designing & developing of a compelling user interface.",0,147)}}<strong>...</strong>
                                                </p>
                                            </div>
                                            <div class="feature-btn">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-3 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-icon style-01">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                           <img src="{{asset('assets/images/web Development.png')}}" class="industry-one" title="automation" alt="title">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Web Development</h5>
                                            <div class="text">
                                                <p class="service_def text-center">
                                                    {{substr("Quantum expertise in developing dynamic, robust and high-end CMS websites utilizing latest technologies like VB.Net, asp.net, PHP, Java, Python etc. We offer a wide range of web design & development solutions covering E-commerce, Responsive Design and Branding, Custom video & Flash Development and Online Web Applications as per industry standard.",0,147)}}<strong>...</strong>
                                                </p>
                                            </div>
                                            <div class="feature-btn">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                             <div class="col-lg-3 col-md-6 wow move-up">
                                 <!--ht-box-icon Start -->
                                <div class="ht-box-icon style-01">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                              <img src="{{asset('assets/images/social Media optimization (1).png')}}" class="industry-one" alt="title" title="automation">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Social Media Optimization</h5>
                                            <div class="text">
                                                <p class="service_def text-center">
                                                    {{substr("Quantum provides experts team who are proficient in handling the dynamics of these sites. Social Media Marketing provides a tremendous opportunity to market products and services for all businesses. With our SMO services, you will gain attention and active leads that can easily be converted into sales opportunities.",0,120)}}<strong>...</strong>
                                                </p>
                                            </div>
                                            <div class="feature-btn">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!--ht-box-icon End -->
                            </div>
                            <div class="col-lg-3 col-md-6 wow move-up">
                                 <!--ht-box-icon Start -->
                                <div class="ht-box-icon style-01">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                             <img src="{{asset('assets/images/Digital Marketing (1).png')}}" class="industry-one" title="automation" alt="title">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Digital Marketing</h5>
                                            <div class="text">
                                                <p class="service_def text-center">
                                                    {{substr("We offer innovative Digital Marketing services. We based out of India, USA, and UK. We are catering to our clients based out of UK, USA, Singapore, Canada, Australia, UAE and other parts of the World. We develop online solutions that can help our clients to achieve a maximum ROI through our Digital Out Of Home (DOOH) Solutions that combine Designing and Development with Online Marketing, PPC, and Social Media embedding, which ensure a high impact online presence from the beginning.",0,146)}}<strong>...</strong>
                                                </p>
                                            </div>
                                            <div class="feature-btn">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!--ht-box-icon End -->
                            </div>
                            <div class="col-lg-3 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-icon style-01">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                           <img src="{{asset('assets/images/AI (1).png')}}" class="industry-one" title="automation" alt="title">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Artificial Intelligence</h5>
                                            <div class="text">
                                                <p class="service_def text-center">
                                                    {{substr("Ignoring AI means ignoring the future. Artificial Intelligence is the upcoming future, it has already penetrated in many sectors. It has come a long way and is a vital development area for future technology. Quantum it Innovation is one of the leading mobile app development company across the globe. We keep ourselves updated with the latest technologies and along with the mobile app, we also offer an AI feature. ",0,152)}}<strong>...</strong>
                                                </p>
                                            </div>
                                            <div class="feature-btn">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                           
                            <div class="col-lg-3 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-icon style-01">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                       <img src="{{asset('assets/images/website designing.png')}}" class="industry-one" title="automation" alt="itle">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Website Designing</h5>
                                            <div class="text">
                                                <p class="service_def text-center">
                                                    {{substr("Quantum Leverage its specialities across industries, we are able to deliver innovative, custom, and user-friendly layout solutions. Our certified experienced team of UI and UX Designers create design concepts based on industry & market trends and clients’ specific requirements. Get high quality website design & development at best prices.",0,157)}}<strong>...</strong>
                                                </p>
                                            </div>
                                            <div class="feature-btn">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-3 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-icon style-01">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                         <img src="{{asset('assets/images/software development.png')}}" class="industry-one" title="automation" alt="tle">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Software Development</h5>
                                            <div class="text">
                                                <p class="service_def text-center">
                                                    {{substr("The requirement of software has rapidly increased in IT. The advancement in IT has transformed business scenario like ERP Enterprise Resource Planning (ERP) software, Customer Relationship Management (CRM), Sales Force Automation, Inventory Management System, and E-commerce solutions. Many companies need them to manage their businesses. We offer the best Software solution to both small and large business entities.",0,112)}}<strong>...</strong>
                                                </p>
                                            </div>
                                            <div class="feature-btn">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-3 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <div class="ht-box-icon style-01">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                            <img src="{{asset('assets/images/IOT.png')}}" class="industry-one" title="automation" alt="tile">
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Internet Of Things</h5>
                                            <div class="text">
                                                <p class="service_def text-center">
                                                    {{substr("The IoT will permit things nearby you to update their status on the internet. With a personalized and experienced team of IoT developers, we develop customer-centric software programs. Our main goal is to deliver the programs that provide more value to our customers, improves the ease of doing business, increase sales, and generate more profit.",0,148)}}<strong>...</strong>
                                                </p>
                                            </div>
                                            <div class="feature-btn">
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ht-box-icon End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--=========== fun fact Wrapper Start ==========-->


<!------modal--------->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="position: relative;background-color: #0d2933;">
        
          <h4 class="modal-title text-white ml-auto">Leave A Message</h4>  <img src="{{asset('assets/images/mobile-icon.gif')}}" class="mobile-i" title="automation" alt="title"
          <button type="button" class="close text-white" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            
                <form  method="post" action="{{ route('user_post_inquiry') }}" 
                         class="form p-t-20 needs-validation" novalidate name="leavemessage" id="leavemessage">
                            {{csrf_field()}}
                  
               <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                                <span class="small-icon"><i class="fas fa-user"></i></span> </div>
                                <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
                                <span class="small-icon"><i class="fas fa-envelope-open"></i></span> </div>
                                <div class="form-group">
                                <input type="text" name="phone" id="phone" onkeypress="return isNumber(event)" class="form-control" placeholder="Enter Contact">
                                <span class="small-icon"><i class="fas fa-mobile-alt"></i></span> </div>

                                <div class="form-group mb-20">
                      <div class="styled-select">
                        <select id="person_select" name="enquiry_type" class="form-control" required="" aria-required="true">
                          <option value="">Choose Services</option>
                          <option value="Mobile App Development">Mobile App Development</option>
                          <option value="Website Design & Development">Website Design & Development </option>
                          <option value="Digital Marketing (SEO, PPC, SMO)">Digital Marketing (SEO, PPC, SMO)</option>
                          <option value="Artificial Intelligence">Artificial Intelligence</option>
                          <option value="Robotic Process Automation">Robotic Process Automation</option>
                        </select>
                      </div>
                    </div>
                                <div class="form-group">
                                <textarea name="description" placeholder="Message Here.." style="    width: 100%;
    border: 1px solid #ccc;
    padding: 3px 11px;
    font-size: 15px;
    font-weight: 500;"></textarea></div>

    <button class="center-button mx-auto my-2" name="GetStarted"><a>Submit</a></button>

                </form>
        </div>
        
      </div>
    </div>
  </div>
  <div class="main-modal">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="height: 228px;
   margin-top: 6em;
    width: 44px;
    border: 1px solid;
    letter-spacing: 1px;
    font-size: 19px;
    color: #000;
    background-color: #fff;
    text-transform: uppercase;
    padding: 0.78rem 0.35rem 0px 0px;
    border-radius: 25px 0 0 25px;">
    <span style="writing-mode: vertical-rl;text-orientation: mixed;">Let's Connect</span><i class="fas fa-envelope" id="email-id"></i>
  </button>
</div>
<!---------modal--------------->
    <div class="bg_achievement projects-wrapper" style="padding-top:3%;padding-bottom:3%">
        <div class="container">
            <!--  <div class="section-under-heading text-center  section-space--mt_80" style="margin-top:0px;padding-top:0%;">
                <h5 style="color:white;font-size:2em;">Achievement is appreciation for us.</h5>
            </div> -->
            <div class="fun-fact-wrapper section-space--ptb_120" style="padding:0% 1%">

                <div class="row">

                    <div class="col-lg-4 offset-lg-1">
                        <div class="modern-number-01 mr-5">
                            <h2 class="heading" style="color:white"><span class="mark-text">10</span>Years’ Experience in IT</h2>
                            <h3 class="heading" style="color:white">Learn more about our <span class="text-color-primary">Success Stories</span></h3>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 wow move-up">
                                <div class="fun-fact--three text-center">
                                    <div class="fun-fact__count counter" style="display:inline">400</div><i class="fa fa-plus" style="font-size:1.5em;color:#d2a98e;"></i>
                                    <h6 class="fun-fact__text" style="color:white">Clients World Wide</h6>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 wow move-up">
                                <div class="fun-fact--three text-center">
                                    <div class="fun-fact__count counter" style="display:inline">1000</div><i class="fa fa-plus" style="font-size:1.5em;color:#d2a98e;"></i>
                                    <h6 class="fun-fact__text" style="color:white">Finished Projects</h6>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 wow move-up">
                                <div class="fun-fact--three text-center">
                                    <div class="fun-fact__count counter" style="display:inline">150</div><i class="fa fa-plus" style="font-size:1.5em;color:#d2a98e;"></i>
                                    <h6 class="fun-fact__text" style="color:white">Web Solutions Delivered</h6>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 wow move-up">
                                <div class="fun-fact--three text-center">
                                    <div class="fun-fact__count counter" style="display:inline">50</div><i class="fa fa-plus" style="font-size:1.5em;color:#d2a98e;"></i>
                                    <h6 class="fun-fact__text" style="color:white">Mobile Solutions</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--=========== fun fact Wrapper End ==========-->

    <!-- 
<div class="jumbotron jumbotron-fluid">
<video autoplay muted loop poster="https://dummyimage.com/900x400/000/fff">    
    <source src="https://s3.ap-south-1.amazonaws.com/grappus-website/Slowed.mp4" data-src="https://s3.ap-south-1.amazonaws.com/grappus-website/Slowed.mp4" type="video/mp4">
</video>
  <div class="container text-white">
    <h1 class="display-4">Hello, world!</h1>
</div>
</div> -->

    <!--======== Tabs Wrapper Start ======== -->
    <!--===========  Projects wrapper Start =============-->
    <!--  <div class="projects-wrapper projectinfotechno-bg section-space--ptb_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h6 class="section-sub-title mb-20">Case studies</h6>
                            <h3 class="heading">It’s Not What We Say, <span class="text-color-primary">  It’s What We Do</span></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="projects-wrap swiper-container projects-slider__container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <a href="#" class="projects-wrap style-01 wow move-up">
                                        <div class="projects-image-box">
                                            <div class="projects-image text-center">
                                                <img class="img-fluid" src="assets/images/case/healthy-creations-1.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="heading">Healthy Creations Meal</h6>
                                                <div class="text">{{substr("The concept of this website is to provides delicious, best sourced, ready-to-cook Meal Kits, Grab n Go meals, and ready to cook meal components. Organic meal, delivery available in San Diego, part of Orange and Riverside Countries.",0,147)}}...
                                                </div>
                                                <div class="box-projects-arrow">
                                                    <span class="button-text">View case study</span>
                                                    <i class="fa fa-long-arrow-right ml-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#" class="projects-wrap style-01 wow move-up">
                                        <div class="projects-image-box">
                                            <div class="projects-image text-center">
                                                <img class="img-fluid" src="assets/images/case/Gastrot1.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="heading">Gastroexpertuae</h6>
                                                <div class="text">{{substr("This website is of Dr. Affan, he is the gastroenterologist in Abu Dhabi. For the convenience of his patients from Dubai and other part of UAE, he wants to give them the option to make an online appointment to his clinic via this website. which we made possible and also give his patient, the option of his blogs in which they educate themselves about digestive health",0,147)}}... 
                                                </div>
                                                <div class="box-projects-arrow">
                                                    <span class="button-text">View case study</span>
                                                    <i class="fa fa-long-arrow-right ml-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#" class="projects-wrap style-01 wow move-up">
                                        <div class="projects-image-box">
                                            <div class="projects-image text-center">
                                                <img class="img-fluid" src="assets/images/case/10-th-gate-1.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="heading">10th gate Tour</h6>
                                                <div class="text">{{substr("This website wants people to make a hassle-free tour booking in all of India's famous locations, especially hill stations and monuments. Quantum Web development team created an amazing looking website, which truly fulfills the real tour and travel website theme",0,147)}}...
                                                </div>
                                                <div class="box-projects-arrow">
                                                    <span class="button-text">View case study</span>
                                                    <i class="fa fa-long-arrow-right ml-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="swiper-slide">
                                    <a href="#" class="projects-wrap style-01 wow move-up">
                                        <div class="projects-image-box">
                                            <div class="projects-image text-center">
                                                <img class="img-fluid" src="assets/images/case/Celebrity-scene-1.png" alt="">
                                            </div>
                                            <div class="content">
                                                <h6 class="heading">Celebrity Scene</h6>
                                                <div class="text">{{substr("It is a website which wants to cater the latest happenings & news of Hollywood celebs to its crazy fans, they wanted a website which is full of videos just like a youtube of celebrities, which only discuss the news and happening of there life. Quantum made it possible an",0,147)}}...
                                                </div>
                                                <div class="box-projects-arrow">
                                                    <span class="button-text">View case study</span>
                                                    <i class="fa fa-long-arrow-right ml-1"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="swiper-pagination swiper-pagination-project mt_20"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div> -->
    <!--======== Tabs Wrapper end ======== -->
    <!--========== Call to Action Area Start ============-->
    <!--  <div class="bg_talk cta-image-area_one section-space--ptb_80">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                            <h3 class="heading text-white">We run all kinds of IT services that vow your <span class="text-color-secondary"> success</span></h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-button-group--one text-center">
                            <a href="#" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                            <a href="#" class="btn btn--secondary  btn-two"><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!--========== Call to Action Area End ============-->

    <!--======== Tabs Wrapper Start ======== -->
    <div class="tabs-wrapper bg_lite_gray section-space--ptb_100" style="padding-bottom:0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                        <h6 class="section-sub-title mb-20">Our Recent Projects</h6>
                        <h3 class="section-title">We’ve come a long way in <span class="text-color-primary"> 10 years</span> </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 ht-tab-wrap">
                    <div class="text-center  ">
                        <ul class="nav justify-content-center ht-tab-menu ht-tab-menu_two" role="tablist">

                            <li class="tab__item nav-item">
                                <a class="nav-link" id="nav-tab1" data-toggle="tab" href="#tab_list_06" role="tab" aria-selected="true">Web Application</a>
                            </li>
                            <li class="tab__item nav-item active">
                                <a class="nav-link active" id="nav-tab2" data-toggle="tab" href="#tab_list_07" role="tab" aria-selected="false">Mobile App</a>
                            </li>
                            <!--<li class="tab__item nav-item ">-->
                            <!--    <a class="nav-link" id="nav-tab3" data-toggle="tab" href="#tab_list_08" role="tab" aria-selected="false">Digital Marketing</a>-->
                            <!--</li>-->

                        </ul>
                    </div>

                    <div class="tab-content ht-tab__content">

                        <div class="tab-pane fade" id="tab_list_06" role="tabpanel">
                            <div class="tab-history-wrap section-space--mt_60">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6">
                                        <!-- ht-box-icon Start -->
                                        <a href="#" class="ht-large-box-images style-04">
                                            <div class="large-image-box">
                                                <div class="box-image">
                                                    <div class="default-image port_img_box">
                                                        <img class="img-fluid fix-height" src="{{asset('assets/images/portfolio/w1.png')}}" alt="title">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Beco & Associates Global</h5>
                                                    <div class="text">
                                                        {{substr("BECO GLOBAL is a worldwide consultancy, shipping and freight forwarding company focusing on international trade, commodity movement globally with entry compliance to all destinations around the world",0,120)}}
                                                        <strong>...</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <!-- ht-box-icon Start -->
                                        <a href="#" class="ht-large-box-images style-04">
                                            <div class="large-image-box">
                                                <div class="box-image">
                                                    <div class="default-image port_img_box">
                                                        <img class="img-fluid" src="{{asset('assets/images/portfolio/w2.png')}}" alt="title">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Treatment Tours India</h5>
                                                    <div class="text">
                                                        {{substr("Treatment Tours India is a Medical Tourism company that assists the patients coming to India for treatment. The Company is a one-stop-shop managing all the requirements starting from visa facilitation, receiving the patients, arranging for their stay, admitting to the hospital, facilitating everyday care and seeing them off during their departure",0,120)}}
                                                        <strong>...</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <!-- ht-box-icon Start -->
                                        <a href="#" class="ht-large-box-images style-04">
                                            <div class="large-image-box">
                                                <div class="box-image">
                                                    <div class="default-image port_img_box">
                                                        <img class="img-fluid" src="{{asset('assets/images/portfolio/w3.png')}}" alt="hjh">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Arome Global</h5>
                                                    <div class="text">
                                                        {{substr("Arome Global is an online shopping site for products like Essential Oil blends, Bath Salts, Sprays, Soaps, and Roll-Ons, and many more. The products are completely free of harmful chemicals like Paraben and SLS and provide you with the real goodness of nature",0,120)}}
                                                        <strong>...</strong>
                                                    </div>
                                                    <!--<div href="#" class="box-images-arrow">-->
                                                    <!--    <span class="button-text">Explore now</span>-->
                                                    <!--    <i class="far fa-long-arrow-right"></i>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                        </a>
                                        <!-- ht-box-icon End -->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show active" id="tab_list_07" role="tabpanel">
                            <div class="tab-history-wrap section-space--mt_60">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6">
                                        <!-- ht-box-icon Start -->
                                        <a href="#" class="ht-large-box-images style-04">
                                            <div class="large-image-box">
                                                <div class="box-image">
                                                    <div class="default-image text-center">
                                                        <img class="img-phone" src="{{asset('assets/images/portfolio/m1.png')}}" alt="ujyhgiu">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Good Sam</h5>
                                                    <div class="text">
                                                        {{substr("Download the latest version of the Good Sam Camping app and get essential information, directions and discounts for campgrounds, RV parks, attractions and service centers across North America. FREE, easy-to-use, with NO membership login required. The app is the perfect companion for your next RV trip",0,75)}}
                                                        <strong>...</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <!-- ht-box-icon Start -->
                                        <a href="#" class="ht-large-box-images style-04">
                                            <div class="large-image-box">
                                                <div class="box-image">
                                                    <div class="default-image text-center">
                                                        <img class="img-phone" src="{{asset('assets/images/portfolio/m2.png')}}" alt="fgdfg">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Mein haus</h5>
                                                    <div class="text">
                                                        {{substr("MeinHaus Application help people to search high quality home maintenance services",0,80)}}
                                                        <strong>...</strong>
                                                    </div>
                                                    <!--<div href="#" class="box-images-arrow">-->
                                                    <!--    <span class="button-text">Explore now</span>-->
                                                    <!--    <i class="far fa-long-arrow-right"></i>-->
                                                    <!--</div>-->
                                                </div>
                                            </div>
                                        </a>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <!-- ht-box-icon Start -->
                                        <a href="#" class="ht-large-box-images style-04">
                                            <div class="large-image-box">
                                                <div class="box-image">
                                                    <div class="default-image text-center">
                                                        <img class="img-phone" src="{{asset('assets/images/portfolio/m3.png')}}" alt="jmhjhg">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Deliverease</h5>
                                                    <div class="text">
                                                        {{substr("Tell us what, when and where you want to ship. Leave the rest to deliverease",0,80)}}
                                                       
                                                        <strong>...</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- ht-box-icon End -->
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab_list_08" role="tabpanel">
                            <div class="tab-history-wrap section-space--mt_60">
                                <div class="row">

                                    <div class="col-lg-4 col-md-6">
                                        <!-- ht-box-icon Start -->
                                        <a href="#" class="ht-large-box-images style-04">
                                            <div class="large-image-box">
                                                <div class="box-image">
                                                    <div class="default-image port_img_box">
                                                        <img class="img-fluid" src="{{asset('assets/images/portfolio/d1.jpg')}}" alt="rtret">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Cancercare Mena</h5>
                                                    <div class="text">
                                                        {{substr("Cancer Care Specialties Mena bring the best cancer, and critical non-cancer care for all patients in the MENA region delivered by excellent and highly qualified staff.",0,110)}}
                                                        <strong>...</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <!-- ht-box-icon Start -->
                                        <a href="#" class="ht-large-box-images style-04">
                                            <div class="large-image-box">
                                                <div class="box-image">
                                                    <div class="default-image port_img_box">
                                                        <img class="img-fluid" src="{{asset('assets/images/portfolio/d2.jpg')}}" alt="fds">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Gastroenterology</h5>
                                                    <div class="text">
                                                        {{substr("This website is of Dr. Affan, he is the gastroenterologist in Abu Dhabi. For the convenience of his patients from Dubai and other part of UAE, he wants to give them the option to make an online appointment to his clinic via this website. which we made possible and also give his patient, the option of his blogs in which they educate themselves about digestive health.",0,100)}}
                                                        <strong>...</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- ht-box-icon End -->
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <!-- ht-box-icon Start -->
                                        <a href="#" class="ht-large-box-images style-04">
                                            <div class="large-image-box">
                                                <div class="box-image">
                                                    <div class="default-image port_img_box">
                                                        <img class="img-fluid" src="{{asset('assets/images/portfolio/d3.jpg')}}" alt="hgrh">
                                                    </div>
                                                </div>
                                                <div class="content">
                                                    <h5 class="heading">Female Surgeon</h5>
                                                    <div class="text">
                                                        {{substr("This website is owned by Dr. Humaa darr, she is part of the Al Zahra Cancer Center’s multidisciplinary tumor board for breast cancer patients. For the convenience of her patients from the UAE and other parts of the world, she wants to give them the option to make an online appointment to her hospital via this website on which we made possible and also give her patient, the option of her blogs in which they educate themselves about the various health disease. She wants to rank her website in the top 10 for every search engine, which we made possible. We make her brand socially presence in every social media platform with beautiful and informative posts. All this possible with our best SEO packages.",0,105)}}
                                                        <strong>...</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- ht-box-icon End -->
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--======== Tabs Wrapper End ======== -->

    <!--====================  gradation process area ====================-->

    <div class="bg_success gradation-process-area section-space--ptb_100" style="padding-top: 4%;padding-bottom: 3%;">
      
        <div class="container">

            <div class="row ">
                <div class="col-lg-12">
                    <div class="gradation-title-wrapper section-space--mb_60">
                        <div class="gradation-title-wrap ">
                            <h6 class="section-sub-title text-black mb-20" style="color:white!important">How we works</h6>
                            <h4 class="heading" style="color:white">How it helps <span class="text-color-primary">your <br> business succeed</span></h4>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="ht-gradation style-01">
                        <!-- Single item gradation Start -->
                        <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.1s">
                            <div class="line"></div>
                            <div class="circle-wrap">
                                <div class="mask">
                                    <div class="wave-pulse wave-pulse-1"></div>
                                    <div class="wave-pulse wave-pulse-2"></div>
                                    <div class="wave-pulse wave-pulse-3"></div>
                                </div>

                                <h6 class="circle">1</h6>
                            </div>

                            <div class="content-wrap">

                                <h6 class="heading" style="color:white">01. Discussion</h6>

                                <div class="text" style="color:white">We meet customers in set place to discuss the details about needs and demands before proposing a plan.</div>

                                <!--<a class="gradation-btn" href="#">-->
                                    <!--<span class="button-text" data-text="Look more">-->
                                    <!--    Look more </span>-->
                                    <!--<span class="button-icon far fa-long-arrow-right"></span>-->
                                <!--</a>-->
                            </div>
                        </div>
                        <!-- Single item gradation End -->

                        <!-- Single item gradation Start -->
                        <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.15s">
                            <div class="line"></div>
                            <div class="circle-wrap">
                                <div class="mask">
                                    <div class="wave-pulse wave-pulse-1"></div>
                                    <div class="wave-pulse wave-pulse-2"></div>
                                    <div class="wave-pulse wave-pulse-3"></div>
                                </div>

                                <h6 class="circle">2</h6>
                            </div>

                            <div class="content-wrap">

                                <h6 class="heading" style="color:white">02. Concepts &amp; Initatives</h6>

                                <div class="text" style="color:white">Our experts come up with all kinds of ideas and initiatives for delivering the best solutions for IT services chosen.</div>
                            </div>
                        </div>
                        <!-- Single item gradation End -->

                        <!-- Single item gradation Start -->
                        <div class="item item-1 animate  wow fadeInRight" data-wow-delay="0.20s">
                            <div class="line"></div>
                            <div class="circle-wrap">
                                <div class="mask">
                                    <div class="wave-pulse wave-pulse-1"></div>
                                    <div class="wave-pulse wave-pulse-2"></div>
                                    <div class="wave-pulse wave-pulse-3"></div>
                                </div>

                                <h6 class="circle">3</h6>
                            </div>

                            <div class="content-wrap">

                                <h6 class="heading" style="color:white">03. Testing &amp; Trying</h6>

                                <div class="text" style="color:white">After agreeing on the ideas and plans, we will conduct as scheduled and give comments on the results &amp; adaptations.</div>
                            </div>
                        </div>
                        <!-- Single item gradation End -->

                        <!-- Single item gradation Start -->
                        <div class="item item-1 animate wow fadeInRight" data-wow-delay="0.25s">
                            <div class="line"></div>
                            <div class="circle-wrap">
                                <div class="mask">
                                    <div class="wave-pulse wave-pulse-1"></div>
                                    <div class="wave-pulse wave-pulse-2"></div>
                                    <div class="wave-pulse wave-pulse-3"></div>
                                </div>

                                <h6 class="circle">4</h6>
                            </div>

                            <div class="content-wrap">

                                <h6 class="heading" style="color:white">04. Execute &amp; install</h6>

                                <div class="text" style="color:white">Once the final plan is approved, everything will be conducted according to the agreed contract.</div>
                            </div>
                        </div>
                        <!-- Single item gradation End -->
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <!--====================  End of gradation process area  ====================-->
    <!--=========== Service Projects Wrapper Start =============-->
    <!--====================  testimonial section ====================-->
    <div class="testimonial-slider-area section-space--ptb_120 bg-gray-3">
        <div class="container-fluid container-fluid--cp-80">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_60">
                        <h6 class="section-sub-title mb-20">Testimonials</h6>
                        <h3 class="heading">Here's What Our <span class="text-color-primary">Clients Say</span></h3>
                    </div>

                    <div class="testimonial-slider">
                        <div class="swiper-container testimonial-slider__container-two">
                            <div class="swiper-wrapper testimonial-slider__wrapper">
                                <!--testimonial box-->
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__single wow move-up">
                                        <!-- <h6 class="testimonial-subject">???????????????</h6> -->
                                        <div class="testimonial-slider__text"><i class="fa fa-quote-left left_quote"></i>First of all, I want to recommend Quantumitinnovation, because they stay connected with you even after the project is delivered to ensure the maximum ROI. The team is efficient in responding and in dealing with new challenges.</div>

                                        <div class="author-info">
                                            <div class="testimonial-slider__media">
                                                <img src="{{asset('assets/images/testimonial/1.jpg')}}" class="img-fluid" alt="">
                                            </div>
                                            <div class="testimonial-slider__author">
                                                <h6 class="name">Peter Albert</h6>
                                                <!-- <span class="designation">WEB DESIGNER</span> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--testimonial box-->
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__single wow move-up">
                                        <!-- <h6 class="testimonial-subject">???????????????</h6> -->
                                        <div class="testimonial-slider__text"><i class="fa fa-quote-left left_quote"></i>I must say Quantumitinnovation have an outstanding technical team. We have been able to achieve a major milestone in this initiative so quickly because of the undying dedication that your team maintained throughout the project cycle.</div>
                                        <div class="author-info">
                                            <div class="testimonial-slider__media">
                                                <img src="{{asset('assets/images/testimonial/2.jpg')}}" class="img-fluid" alt="dd">
                                            </div>
                                            <div class="testimonial-slider__author">
                                                <h6 class="name">Gary Eagly</h6>
                                                <!-- <span class="designation">Marketing</span> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--testimonial box-->
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__single wow move-up">
                                        <!-- <h6 class="testimonial-subject">???????????????</h6> -->
                                        <div class="testimonial-slider__text"><i class="fa fa-quote-left left_quote"></i>Team Quantumitinnovation consistently went above and beyond in terms of responsiveness, adaptability to new requirements, and dedication to client and concept.</div>
                                        <div class="author-info">
                                            <div class="testimonial-slider__media">
                                                <img src="{{asset('assets/images/testimonial/3.jpg')}}" class="img-fluid" alt="fgdf">
                                            </div>
                                            <div class="testimonial-slider__author">
                                                <h6 class="name">Bonnie Schaffer</h6>
                                                <!-- <span class="designation">PR Officer</span> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--testimonial box-->
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__single wow move-up">
                                        <!-- <h6 class="testimonial-subject">???????????????</h6> -->
                                        <div class="testimonial-slider__text"><i class="fa fa-quote-left left_quote"></i>I had a plain boring website until I got it redesigned from Quantum IT Innovation. The team of designers and developers at Quantum IT Innovation is truly professional and certainly cares about its clients’ needs. Highly recommended!</div>
                                        <div class="author-info">
                                            <div class="testimonial-slider__media">
                                                <img src="{{asset('assets/images/testimonial/4.jpg')}}" class="img-fluid" alt="tert">
                                            </div>
                                            <div class="testimonial-slider__author">
                                                <h6 class="name">Milbrey Thompson</h6>
                                                <!-- <span class="designation">PR Officer</span> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__single wow move-up">
                                        <!-- <h6 class="testimonial-subject">???????????????</h6> -->
                                        <div class="testimonial-slider__text"><i class="fa fa-quote-left left_quote"></i>Quantum IT Innovation gave value to my business website. I highly recommend Quantum IT Innovations a web development company that is professional, talented, and competent. </div>
                                        <div class="author-info">
                                            <div class="testimonial-slider__media">
                                                <img src="{{asset('assets/images/testimonial/5.jpg')}}" class="img-fluid" alt="ggr">
                                            </div>
                                            <div class="testimonial-slider__author">
                                                <h6 class="name">Phillis Marshall</h6>
                                                <!-- <span class="designation">PR Officer</span> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-slider__single wow move-up">
                                        <!-- <h6 class="testimonial-subject">???????????????</h6> -->
                                        <div class="testimonial-slider__text"><i class="fa fa-quote-left left_quote"></i>Can't speak highly enough of Quantum IT Innovation and their team. Assisted me understand what exactly I needed. The web application they developed is everything I needed. Thanks a ton guys, keep up the good work!</div>
                                        <div class="author-info">
                                            <div class="testimonial-slider__media">
                                                <img src="{{asset('assets/images/testimonial/6.jpg')}}" class="img-fluid" alt="htryhty">
                                            </div>
                                            <div class="testimonial-slider__author">
                                                <h6 class="name">Kristopher Neuvirth</h6>
                                                <!-- <span class="designation">PR Officer</span> -->
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-t0 section-space--mt_30"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of testimonial section  ====================-->

    <!--=========== Service Projects Wrapper End =============-->

    <!--============ Contact Us Area Start =================-->
    <div class="contact-us-area service-contact-bg section-space pb-3">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-4">
                    <div class="contact-info sytle-one service-contact text-left">

                        <div class="contact-info-title-wrap">
                            <h3 class="heading text-white mb-10">4.9/5.0</h3>
                            <div class="ht-star-rating lg-style">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class="sub-text" style="text-align: left !important;">
                                Global Presence
                                <br> Worldwide 400+ Clients
                                <br> 1000+ Projects Delivered
                            </p>
                        </div>

                        <div class="contact-list-item">
                            <a class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-phone"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Call for advice now!</h6>
                                            <div class="text" style="font-size: 1.5em;">
                                                <a href="tel:+91 9717998517">+91 971 799 8517</a>
                                            </div>
                                            <div class="text" style="font-size: 1.5em;">
                                                <a href="tel:+1 8778773644">+1 877 877 3644</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-envelope"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Say hello</h6>
                                            <div class="text" style="font-size:18px;"><a href ="mailto:sales@quantumitinnovation.com">sales@quantumitinnovation.com</a></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7 ml-auto mt-3">
                    <div class="contact-form-service-wrap">
                     
                        @if(Session::has('success'))
                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                            @endif

                        <div class="contact-title text-center section-space--mb_">
                            <h4 class="">Get In Touch</h4>
                            <p class="text">Tell us what's on your mind and we'll get right back to you !</p>
                        </div>
                        <form  method="post" action="{{ route('user_post_inquiry') }}" 
                         class="form p-t-20 needs-validation" novalidate id="contactus">
                            {{csrf_field()}}
                               
                    
                            <div class="contact-form__two">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input name="name" type="text" placeholder="Name *" class="cust-height" required>
                                    </div>
                                    <div class="contact-inner">
                                        <input name="email" type="email" placeholder="Email *" class="cust-height" required>
                                    </div>
                                </div>
                                <div class="contact-inner">
                                    <input name="number" type="text" placeholder="Phone Number *" class="cust-height" required>
                                </div>
                                <div class="contact-select">
                                    <div class="form-item contact-inner">
                                        <span class="inquiry">
                                        <select name="enquiry_type" class="select-item cust-height" required>
                                            <option value="">Your Enquiry about</option>
                                            <option value="Mobile App Development">Mobile App Development</option>
                                            <option value="Website Design & Development">Website Design & Development</option>
                                            <option value="Digital Marketing (SEO, PPC, SMO)">Digital Marketing (SEO, PPC, SMO)</option>
                                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                                            <option value="Robotic Process Automation">Robotic Process Automation</option>
                                        </select>
                                    </span>
                                    </div>
                                </div>
                                <div class="contact-inner contact-message">
                                    <textarea name="description" placeholder="Please describe what you need."></textarea>
                                </div>
                                <div class="submit-btn text-center">
                                    <button class="ht-btn ht-btn-md cust-height-btn" type="submit">Send message</button>
                                    <p class="form-messege"></p>
                                </div>
                                
                                <br/>
                            @if($errors->first())
								<div class="alert alert-danger alert-dismissible">
								    {{$errors->first()}}
								</div>
							@endif
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--============ Contact Us Area End =================-->
    <!--====================  brand logo slider area ====================-->
    <div class="brand-logo-slider-area section-space--ptb_60" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- brand logo slider -->
                    <div class="brand-logo-slider__container-area">
                        <div class="swiper-container brand-logo-slider__container">
                            <div class="swiper-wrapper brand-logo-slider__one">
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{asset('assets/images/brand/real/1.png')}}" class="img-fluid" alt="gfg">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{asset('assets/images/brand/gray/g1.png')}}" class="img-fluid" alt="gfdg">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{asset('assets/images/brand/real/2.png')}}" class="img-fluid" alt="gfg">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{asset('assets/images/brand/gray/g2.jpg')}}" class="img-fluid" alt="vbcxb">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{asset('assets/images/brand/real/3.png')}}" class="img-fluid" alt="dd">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{asset('assets/images/brand/gray/g3.png')}}" class="img-fluid" alt="bgb">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{asset('assets/images/brand/real/4.png')}}" class="img-fluid" alt="dsf">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{asset('assets/images/brand/gray/g4.png')}}" class="img-fluid" alt="aweqw">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{asset('assets/images/brand/real/5.png')}}" class="img-fluid" alt="hgjg">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{asset('assets/images/brand/gray/g5.png')}}" class="img-fluid" alt="gbnhgfb">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{asset('assets/images/brand/real/6.png')}}" class="img-fluid" alt="fxzcv">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{asset('assets/images/brand/gray/g6.png')}}" class="img-fluid" alt="dsds">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="{{asset('assets/images/brand/real/7.png')}}" class="img-fluid" alt="ewqedw">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="{{asset('assets/images/brand/gray/g7.png')}}" class="img-fluid" alt="wew">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of brand logo slider area  ====================-->

</div>

</div>


@endsection