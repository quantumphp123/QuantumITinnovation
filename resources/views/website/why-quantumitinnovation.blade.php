@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="keywords" content="">
	<meta name="description" content="">
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<div class="site-wrapper-reveal">
  <!------modal--------->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="position: relative;background-color: #0d2933;">
        
          <h4 class="modal-title text-white ml-auto">Leave Ad Message</h4>  <img src="{{asset('assets/images/mobile-icon.gif')}}" class="mobile-i" title="automation">
          <button type="button" class="close text-white" data-dismiss="modal">×</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

                <form action="#" method="POST" id="leavemessage">
                  
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
                        <select id="person_select" name="person_select" class="form-control" required="" aria-required="true">
                          <option value="">Choose Services</option>
                          <option value="1 Person">Mobile App Development</option>
                          <option value="2 Person">Seo</option>
                          <option value="3 Person">Web Development</option>
                          <option value="Family Pack">PPC</option>
                        </select>
                      </div>
                    </div>
                                <div class="form-group">
                                <textarea name="lt_message" placeholder="Message Here.." style="    width: 100%;
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
    /* text-align: center; */
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
<!---------modal-end--------------->
        <!--<div class="about-banner-wrap banner-space about-us-bg">-->
        <!--    <div class="container">-->
        <!--        <div class="row">-->
        <!--            <div class="col-lg-8 ml-auto mr-auto">-->
        <!--                <div class="about-banner-content text-center">-->
        <!--                    <h1 class="mb-15 text-white">WHY QUANTUMITINNOVATION</h1>-->
        <!--                    <h5 class="font-weight--normal text-white">Quantum wants you to feel comfortable with what we’re planning to make right choice for your business. We have been into this business since and our experts have gained a lot from working with hundreds of clients all over the world.</h5>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <!--===========  feature-large-images-wrapper  Start =============-->
        <div class="feature-large-images-wrapper section-space--pt_100">
            <div class="container">
                <!--<h1 class="mb-15">WHY QUANTUMITINNOVATION</h1>-->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_60">
                            <h6 class="section-sub-title mb-20">Our company</h6>
                            <h3 class="heading">We run all kinds of IT services that <br> vow your <span class="text-color-primary"> success</span></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

                <div class="cybersecurity-about-box section-space--pb_70">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-1">
                            <div class="modern-number-01">
                                <h2 class="heading  mr-5"><span class="mark-text">10</span>Years’ Experience in IT</h2>
                                <h6 class="heading">More About Our Success Stories</h6>
                            </div>
                        </div>

                        <div class="col-lg-5 offset-lg-1">
                            <div class="cybersecurity-about-text">
                                <div class="text">Quantum wants you to feel comfortable with what we’re planning to make right choice for your business. We have been into this business since and our experts have gained a lot from working with hundreds of clients all over the world.</div>
                                <div class="text">You definitely need a digital marketing agency to help your product and services to sell online. Quantum understands your need and accordingly. Our experts will help you with marketing research, web design planning, data analytics, content strategy. We assure you to get customers on your website and want to stay.</div>
                                <div class="text">Our experts at Quantum will search for your customer and will look where they roam online and what all they are searching for. Website design and content generation will help the visitors to find your site and by staying at your website, we will get to know what he really wants. Now when you have made things in place, it the time for data analytics, data analyst will see where the traffic to your website is coming from and experts will even make sure that what will work for you and what will not.</div>
                                <div class="button-text">
                                    <!--<a href="#" class="btn-text">-->
                                    <!--    Discover now-->
                                    <!--    <span class="button-icon ml-1">-->
                                    <!--        <i class="far fa-long-arrow-right"></i>-->
                                    <!--    </span>-->
                                    <!--</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="site-wrapper-reveal">
        <!--===========  feature-large-images-wrapper  Start =============-->
        <div class="feature-large-images-wrapper bg-gray section-space--pt_100">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_30">
                            <h6 class="section-sub-title mb-20">Quantum IS THE BEST IT PARTNER THAT HELP YOU PROSPER</h6>
                            <!--<h3 class="heading">How we claim to<span class="text-color-primary">  excel?</span></h3>-->
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>
                <div class="row">
                        <div id="owl-4" class="owl-carousel owl-theme">
                               <div class="item item-bg">
                                    <img src="assets/img/icons/why_technical_prowess-1.png" class="box-icons" alt="">
                                        <div class="content">
                                            <h6 class="text-center clr-wht mt-4">
                                                Technical Prowess
                                            </h6>
                                            <p class="txt-wht">Quantum conducts extensive research to find out what’s trending in the market. We combine expertise and the latest technology to exceed the clients’ expectations. We use global best practices to deliver excellent services.</p>
                                        </div>
                                </div>
                                <div class="item item-bg">
                                    <img src="assets/img/icons/why_accountability.png" class="box-icons" alt="">
                                        <div class="content">   
                                         <h6 class="text-center clr-wht mt-4">
                                                Accountability
                                         </h6>
                                        <p class="txt-wht">We keep you acquainted with every phase of your project. We send you project update every week as well as the plan of the following week, via email. It helps you keep track of status and costs.</p>
                                        </div>    
                                </div>
                                <div class="item item-bg">
                                    <img src="assets/img/icons/why_box_solutions.png" class="box-icons" alt="">
                                    <div class="content">   
                                         <h6 class="text-center clr-wht mt-4">
                                                Out of the Box Solutions
                                         </h6>
                                         <p class="txt-wht">We offer you cutting-edge technical solutions that suit the goals of your business as well increase your market value. Our custom solutions are tailored to fulfill your specifications.</p>
                                    </div>   
                                </div>
                                <div class="item item-bg">
                                    <img src="assets/img/icons/why_designers_developers.png" class="box-icons" alt="">
                                        <div class="content">
                                            <h6 class="text-center clr-wht mt-4">
                                                Dedicated Designers & Developers
                                            </h6>
                                            <p class="txt-wht">Our experienced and dedicated team provide you proactive support and help to redefine your business processes. They offer high-end quality mobile and web application development solutions that set you apart from your competitors.</p>
                                        </div>
                                </div>
                                <div class="item item-bg">
                                    <img src="assets/img/icons/why_long_client_engagement.png" class="box-icons" alt="">
                                        <div class="content">
                                            <h6 class="text-center clr-wht mt-4">
                                                Strive for Long Client Engagement
                                            </h6>
                                            <p class="txt-wht">We always look forward to creating a long-term relationship with our clients. We are committed and extremely responsive to our clients and leave no stone unturned to meet the given deadlines.</p>
                                        </div>
                                </div>
                                <div class="item item-bg">
                                    <img src="assets/img/icons/why_pricing.png" class="box-icons" alt="">
                                        <div class="content">
                                            <h6 class="text-center clr-wht mt-4">
                                                Affordable Pricing
                                            </h6>
                                            <p class="txt-wht"> Quantum offers flexible pricing models to the clients. We use cost-effective methodologies to deliver you result-driven solutions. We deliver the project within your budget, without compromising the quality.</p>
                                        </div>
                                </div>
                                <div class="item item-bg">
                                    <img src="assets/img/icons/why_consulting.png" class="box-icons" alt="">
                                        <div class="content">
                                            <h6 class="text-center clr-wht mt-4">
                                               Consulting
                                            </h6>
                                            <p class="txt-wht">You can consult us for your IT related problems. From inception to execution of your project, we will guide you at every step and let you know what will work best for you.</p>
                                        </div>
                                </div>
                                <div class="item item-bg">
                                    <img src="assets/img/icons/why_experienced_evelopers.png" class="box-icons" alt="">
                                        <div class="content">
                                            <h6 class="text-center clr-wht mt-4">
                                               Experienced Developers
                                            </h6>
                                            <p class="txt-wht">We have a team of experienced and deft developers who offer solutions that best fit your business. What makes us distinctive from the rest is the passion of our developers for the technology.</p>
                                        </div>
                                </div>
                        </div>    
                        <!--<div class="section-under-heading text-center section-space--mt_40">Challenges are just opportunities in disguise. <a href="#">Take the challenge!</a></div>-->
                </div>
        </div>
        <!--===========  feature-large-images-wrapper  End =============-->


        <div class="container mt-5 mb-3">
                 <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_40">
                                <h3 class="heading">Proud projects that<span class="text-color-primary"> make us stand out</span></h3>
                            </div>
                        </div>
                        	<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a href="{{url('/10th-gate-tours')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/10th-gate-tours.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/10th-gate-tours')}}">10th gate tours</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a href="{{url('/adelphia')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/adelphia.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/adelphia')}}">adelphia</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a href="{{url('/bhamas')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/bhamas.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/bhamas')}}">bhamas</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a href="{{url('/canahemp')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/canahemp.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/canahemp')}}">canahemp</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                 </div>
            </div> 

        <!--===========  feature-icon-wrapper  Start =============-->
        <div class="feature-icon-wrapper section-space--pb_80 section-space--pt_80 border-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-list__three">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="icon">
                                                        <i class="fal fa-life-ring"></i>
                                                    </div>
                                                    <h5 class="heading">
                                                        Quality Assurance System
                                                    </h5>
                                                </div>
                                                <div class="content">
                                                    <div class="text">Our service offerings enhance customer experience throughout secure & highly functional end-to-end warranty management.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="icon">
                                                        <i class="fal fa-lock-alt"></i>
                                                    </div>
                                                    <h5 class="heading">
                                                        Accurate Testing Processes
                                                    </h5>
                                                </div>
                                                <div class="content">
                                                    <div class="text">Develop and propose product improvements through periodical and accurate testing, repairing & refining every version.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="icon">
                                                        <i class="fal fa-globe"></i>
                                                    </div>
                                                    <h5 class="heading">
                                                        Smart API Generation
                                                    </h5>
                                                </div>
                                                <div class="content">
                                                    <div class="text">Develop and propose product improvements through periodical and accurate testing, repairing & refining every version.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="grid-item animate">
                                        <div class="ht-box-icon style-03">
                                            <div class="icon-box-wrap">
                                                <div class="content-header">
                                                    <div class="icon">
                                                        <i class="fal fa-medal"></i>
                                                    </div>
                                                    <h5 class="heading">
                                                        Infrastructure Integration Technology
                                                    </h5>
                                                </div>
                                                <div class="content">
                                                    <div class="text">At Mitech, we have a holistic and integrated approach towards core modernization to experience technological evolution.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-icon-wrapper  End =============-->



        <!--=========== fun fact Wrapper Start ==========-->
        <div class="fun-fact-wrapper bg-theme-default section-space--ptb_60">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 wow move-up">
                        <div class="fun-fact--three text-center mt-30">
                            <div class="fun-fact__count counter" style="display:inline; color: #fff;">400</div><i class="fa fa-plus" style="font-size:1.5em;color:#d2a98e;"></i>
                            <h6 class="fun-fact__text" style="color:white">Clients World Wide</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow move-up">
                        <div class="fun-fact--three text-center mt-30">
                            <div class="fun-fact__count counter" style="display:inline; color: #fff;">1000</div><i class="fa fa-plus" style="font-size:1.5em;color:#d2a98e;"></i>
                            <h6 class="fun-fact__text" style="color:white">Finished Projects</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow move-up">
                        <div class="fun-fact--three text-center mt-30">
                            <div class="fun-fact__count counter" style="display:inline; color: #fff;">150</div><i class="fa fa-plus" style="font-size:1.5em;color:#d2a98e;"></i>
                            <h6 class="fun-fact__text" style="color:white">Web Solutions Delivered</h6>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow move-up">
                        <div class="fun-fact--three text-center mt-30">
                            <div class="fun-fact__count counter" style="display:inline; color: #fff;">50</div><i class="fa fa-plus" style="font-size:1.5em;color:#d2a98e;"></i>
                            <h6 class="fun-fact__text" style="color:white">Mobile Solutions</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========== fun fact Wrapper End ==========-->
        <!--============ Contact Us Area Start =================-->
        <div class="contact-us-area service-contact-bg section-space--ptb_100">
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
                            <a href="tel:190068668" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-phone"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Call for advice now!</h6>
                                            <div class="text" style="font-size: 1.5em;">+91 971 799 8517</div>
                                            <div class="text" style="font-size: 1.5em;">+1 877 877 3644</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="mailto:hello@Quantum.com" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-envelope"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Say hello</h6>
                                            <div class="text" style="font-size: 1.3em;">sales@quantumitinnovation.com</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-7 ml-auto">
                    <div class="contact-form-service-wrap">
                        <div class="contact-title text-center section-space--mb_40">
                             @if(Session::has('success'))
                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                            @endif
                            <h3 class="mb-10">Get In Touch</h3>
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
                                            <!--<option value="Digital Marketing (SEO, PPC, SMO)">Digital Marketing (SEO, PPC, SMO)</option>-->
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
    <div class="brand-logo-slider-area section-space--ptb_60">
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
                                            <img src="assets/images/brand/real/1.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/gray/g1.png" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/real/2.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/gray/g2.jpg" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/real/3.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/gray/g3.png" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/real/4.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/gray/g4.png" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/real/5.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/gray/g5.png" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/real/6.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/gray/g6.png" class="img-fluid" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide brand-logo brand-logo--slider">
                                    <a href="#">
                                        <div class="brand-logo__image">
                                            <img src="assets/images/brand/real/7.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="brand-logo__image-hover">
                                            <img src="assets/images/brand/gray/g7.png" class="img-fluid" alt="">
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
</div>
</div>
</div>

@endsection