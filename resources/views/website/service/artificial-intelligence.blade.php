@extends('website.layouts.master') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Artificial Intelligence | Quantum IT Innovation</title>
    <meta name="keywords" content="Artificial Intelligence, AI services, Artificial Intelligence company">
	<meta name="description" content="Quantum IT Innovation is a leading AI development company in India, UK, & USA. Our artificial intelligence services help your business to become smarter.">
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<div class="site-wrapper-reveal">
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="position: relative;background-color: #0d2933;">
        
          <h4 class="modal-title text-white ml-auto">Leave A Message</h4>  <img src="{{asset('assets/images/mobile-icon.gif')}}" class="mobile-i" title="automation">
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
<!---------modal--------------->
     <div class="title_image" role="listbox" style="background-image:url({{asset('assets/images/4.jpg')}});">
        <div class="carousel-caption text-left">
            <div class="animated fadeInDown">
                <h1 class="title_h1 h1_banner">Artificial Intelligence <br> Development Company</h1>
                <div id="line"></div>
                 <div class="row">
                    <div class="col-lg-7">
                        <p class="text-white title_p">
                            <span> Make Your Enterprise AI-Ready</span>
                        </p>
                        <div class="button_cont">
                            <div class="eft-1"></div>
                              <a href="{{url('/contact')}}" class="f-btn">Hire Developers</a>
                              <a href="{{url('/contact')}}" class="s-btn">Discuss Your Project</a>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-5">
                <div class="top_sec">
                    <h5>WE TURN THE INSIGHTS FROM CONNECTED DEVICES INTO ACTION WITH ADVANCED AI DEVELOPMENT</h5>
                    <p class="mt-4" style="text-align: left !important;">
                        Internet of Things or AI is an ecosystem of connected physical objects and devices that are accessible through the internet. The ‘thing’ in AI could be a person or an automobile with attached or inbuilt sensors i.e. objects that have been assigned an IP address and have the ability to collect and transfer data over a network without manual assistance. Quantum’s internet of things services enables organizations to transform business needs into competitive advantages by delivering innovative AI powered solutions. We provide comprehensive AI development services to our clients like integrating the right sensors, deriving insights and choosing the best development platform. Quantum’s AI solutions allow businesses to focus on outcomes while we facilitate their digital transformation journey. As a leading AI development company, our end-to-end AI solutions portfolio with coverage over sensors, gateways, connectivity, cloud, user experience and analytics provide immense benefits to organizations. We help you improve business value, enhance efficiency and reduce operations and maintenance cost. We have partnered with leading innovators like Microsoft Azure, AWS AI, MongoDB, WindRiver, Intel and various other device and sensor providers and deliver best-of-class solutions for all of your Internet of Things (AI) requirements.
                    </p>
                </div>    
            </div>
            <div class="col-lg-7 plr-30">
                <div class="rgt_sec">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{asset('assets/img/icons/mobile-app-strategy.png')}}">
                            <h6 class="ser-sec">AI CONSULTING</h6>
                            <p class="txt-algn" style="text-align: left !important;">Quantum’s AI consulting service helps you embark on the AI journey while we guide you in assessment of your organizational readiness, technology stack, domain based value chain mapping, roadmap creation and building complete market strategy.</p>
                        </div>
                        <div class="col-lg-6">
                            <img src="{{asset('assets/img/icons/mobile-app-designs.png')}}">
                            <h6 class="ser-sec">AI APP DEVELOPMENT</h6>
                            <p class="txt-algn" style="text-align: left !important;">Boost your business and streamline your operations with Quantum’s high-end AI application development services with tight integration of hardware and software technologies for superior performance.</p>
                        </div>
                         <div class="col-lg-6 mt-5">
                            <img src="{{asset('assets/img/icons/mobile-app-testing.png')}}">
                            <h6 class="ser-sec">AI TESTING</h6>
                            <p class="txt-algn" style="text-align: left !important;">Quantum’s AI testing service provides end-to-end validation services for testing AI implementations which includes functional validation, device simulation, performance testing, load testing, API testing, automation and security verification.</p>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <img src="{{asset('assets/img/icons/mobile-app-development.png')}}">
                            <h6 class="ser-sec">DATA ANALYTICS</h6>
                            <p class="txt-algn" style="text-align: left !important;">Derive intelligence from data using Quantum’s expert AI Data Analytics services and stay ahead of the competition. Our AI data analysts extract business intelligence from AI data using machine learning and neural network algorithms.</p>
                        </div>
                         <div class="col-lg-6 mt-5">
                            <img src="{{asset('assets/img/icons/iot-integrations.png')}}">
                            <h6 class="ser-sec">AI INTEGRATIONS</h6>
                            <p class="txt-algn" style="text-align: left !important;">We provide successful AI environment which can integrate and enable new business processes. Our experience rich services can help you in successful AI deployment. We leverage robust analytics, machine learning and big data and can help you integrate solutions that provide secure AI experience.</p>
                        </div>
                        <div class="col-lg-6 mt-5">
                            <img src="{{asset('assets/img/icons/iot-extension.png')}}">
                            <h6 class="ser-sec" style="text-align: left !important;">AI EXTENSION</h6>
                            <p class="txt-algn" style="text-align: left !important;">Quantum has relevant experience in turning existing hardware into smart AI enabled devices and can help you in sensor selection, quick prototyping, full stack software development, security protocols implementation and firmware updates management.</p>
                        </div>
                    </div>
                </div>    
            </div>        
          </div>
        </div>
        <div class="container mt-3 mb-3">
            <h4 class="text-center"><span>OUR DEVELOPMENT PROCESS</h4>
            <p class="text-center">We deliver highest level of customer service by deploying innovative and collaborative project management systems to build the most professional, robust and highly scalable web & mobile solutions with highest quality standards.</p>
             <div class="row mt-5">
                <div class="col-lg-3 text-center">
                    <img src="{{asset('assets/img/icons/post-project-requirements.png')}}" class="img-icon">
                    <h6 class="mt-5">POST YOUR PROJECT REQUIREMENTS</h6>
                    <p class="text-justify">Our analysts will thoroughly review your project requirements and select the most experienced resource that is best-suited for your project.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="{{asset('assets/img/icons/discuss-project.png')}}" class="img-icon">
                     <h6 class="mt-5">DISCUSS PROJECT DETAILS WITH OUR ANALYSTS</h6>
                    <p class="text-justify">Our experts will contact you within no time to discuss your project related queries and to offer the best solution for your project development.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="{{asset('assets/img/icons/engagement-terms.png')}}" class="img-icon">
                     <h6 class="mt-5">CHOOSE ENGAGEMENT TERMS & TIMELINES</h6>
                    <p class="text-justify">Based on the project consultation provided by our experts, you can choose the engagement timelines for your project execution.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <img src="{{asset('assets/img/icons/secure-payment.png')}}" class="img-icon">
                     <h6 class="mt-5">SECURELY PAY ONLINE AND GET STARTED!</h6>
                    <p class="text-justify">Make payment through our 100% secure online system and our team shall immediately get started on your project within 24 hours.</p>
                </div>
             </div>
        </div>
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-lg-6 nopadding">
                    <img src="{{asset('assets/img/service-images/software.jpg')}}" class="img-fluid">
                </div>
                <div class="col-lg-6 nopadding back-clr">
                    <div class="cust-container">
                        <h4 class="clr-wht">OUR CHARTER IS TO MAKE IT THINK, TALK AND PERFORM  LIKE A BUSINESS.</h4>
                        <p class="clr-wht">Quantum exhibits expertise in deploying AI solutions for a wide array of business domains spread globally. We provide quick and cost-effective customized AI solutions and services that help enterprises address their technical limitations and exert better control over their business.</p>
                    </div>    
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h4 class="text-center">OUR COMMITMENT & GUARANTEE</h4>
            <p class="text-center">Quantum delivers robust, scalable and high performance software, web and mobile app development services to help you harness the power of technology, consulting and maximize your online business investment.</p>
            <div class="row mt-5">
                <div class="col-lg-3 text-center">
                    <h6 class="mt-5">100% TRANSPARENCY</h6>
                    <p class="text-justify">At Quantum, we believe in complete transparency with our clients and we keep them fully updated during the entire development production cycle.</p>
                </div>
                <div class="col-lg-3 text-center bdr-lft">
                     <h6 class="mt-5">95% ONTIME DELIVERY</h6>
                    <p class="text-justify">Our pursuit of agile development methodology have resulted in an enviable 95% on-time delivery track record for the past of our operations.</p>
                </div>
                <div class="col-lg-3 text-center bdr-lft">
                     <h6 class="mt-5">FLEXIBLE ENGAGEMENTS</h6>
                    <p class="text-justify">Quantum offers tailor-made engagement models, hand crafted to meet the exact requirements of clients with diverse business needs.</p>
                </div>
                <div class="col-lg-3 text-center bdr-lft">
                     <h6 class="mt-5">24X7 SUPPORT</h6>
                    <p class="text-justify">Our communication channels are open 24/7 that connects you with the appropriate team of experts to ensure smooth execution of your project.</p>
                </div>
             </div>
        </div>
        <hr class="mt-5 mb-5">
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-lg-5">
                    <h4>WHY CUSTOMERS IN OVER 50+ COUNTRIES CHOOSE QUANTUM?</h4>
                    <table class="mt-5 table-responsive" style="width:100%">
                      <tr>
                        <td class="pad-20">FLEXIBLE ENGAGEMENT MODELS</td>
                        <td class="pad-20">24X7 SUPPORT ACROSS ALL TIMEZONES</td>
                        <td class="pad-20">COMPETITIVE PRICING & ONTIME DELIVERY</td>
                      </tr>
                      <tr>
                        <td class="pad-20">STATE OF THE ART IT INFRASTRUCTURE</td>
                        <td class="pad-20">STRONG TECHNOLOGY COMPETENCY</td>
                        <td class="pad-20">SEAMLESS COMMUNICATION COMPANY</td>
                      </tr>
                    </table>
                </div>
                <div class="col-lg-7 mt-5">
                    <img src="{{asset('assets/img/service-images/customer-bg1.jpg')}}" class="img-fluid">
                </div>
            </div>
        </div>
        
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
@endsection