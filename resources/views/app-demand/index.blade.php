@extends('app-demand.layout.master') 
@section('after-style')
@endsection
@section('content')
<div class="main">
   <!--modal--> 
   <!-- Let's connect -->
   <div class="main"> 
  <!--modal--> 
  <!-- Let's connect -->
  <div class="main-modal">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="height: 228px;
         margin-top: 0em;
         width: 44px;
         border: 1px solid;
         letter-spacing: 1px;
         font-size: 19px;
         color: #000;
         background-color: #fff;
         text-transform: uppercase;
         padding: 0.78rem 0.35rem 0px 0px;
         border-radius: 25px 0 0 25px;"> <span style="writing-mode: vertical-rl;text-orientation: mixed;">Let's Connect</span><i class="fas fa-envelope" id="email-id"></i> </button>
  </div>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content"> 
        <!-- Modal Header -->
        <div class="modal-header" style="position: relative;background-color: #0d2933;"> <img src="{{asset('landing/images/services/logo.png')}}" title="logo" class="center-logo text-center">
          <button type="button" class="close text-white" data-dismiss="modal">×</button>
        </div>
        <div class="center-top-text" style="float: left; width: 100%; min-height: 0px;">
          <h2 class="center-text-cnt">App Design & Development <br>
            + <br>
            FREE Marketing Support</h2>
        </div>
        <span id="form-success-text"></span> 
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" class="form p-t-20 needs-validation" novalidate name="lets-connect" id="lets-connect">
            @csrf
            <div class="form-group">
              <label class="label-text">Your Name *</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Name">
              <span class="small-icon"><i class="fas fa-user msgic"></i></span> </div>
            <div class="form-group">
              <label class="label-text">Your Email*</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="Email">
              <span class="small-icon"><i class="fas fa-envelope-open msgic"></i></span> </div>
            <div class="form-group">
              <label class="label-text">Your Phone Number *</label>
              <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone No">
              <span class="small-icon"><i class="fas fa-mobile-alt msgic"></i></span> </div>
            <button type="submit" class="center-button mx-auto my-2" name="GetStarted" style="cursor:pointer;">
            <a>Get Started</a>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- let's connect --> 
    <div class="modal fade" id="form">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content"> 
        <!-- Modal Header -->
        <div class="modal-header" style="position: relative;background-color: #0d2933;"> <img src="{{asset('landing/images/services/logo.png')}}" title="logo" class="center-logo text-center">
          <button type="button" class="close text-white" data-dismiss="modal">×</button>
        </div>
        <div class="center-top-text" style="float: left; width: 100%; min-height: 0px;">
          <h2 class="center-text-cnt">App Design & Development <br>
            + <br>
            FREE Marketing Support</h2>
        </div>
        <span id="pop-form-success-text"></span> 
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" class="form p-t-20 needs-validation" novalidate name="pop-forms" id="pop-forms">
            @csrf
            <div class="form-group">
              <label class="label-text">Your Name *</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Name">
              <span class="small-icon"><i class="fas fa-user msgic"></i></span> </div>
            <div class="form-group">
              <label class="label-text">Your Email*</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="Email">
              <span class="small-icon"><i class="fas fa-envelope-open msgic"></i></span> </div>
            <div class="form-group">
              <label class="label-text">Your Phone Number *</label>
              <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone No">
              <span class="small-icon"><i class="fas fa-mobile-alt msgic"></i></span> </div>
            <button type="submit" class="center-button mx-auto my-2" name="GetStarted" style="cursor:pointer;">
            <a>Get Started</a>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--modal-end--> 
   <!--hero section start-->
   <section class="bg-image">
      <div class="background-image-wraper" 
         ></div>
      <div class="container">
         <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">
            <div class="col-md-12 col-lg-6">
               <div class="hero-slider-content text-white pt-5">
                  <p class="lead">Experience the power of our on demand app solutions that make your app idea into success</p>
                  <div class="text-left-1"> <a href="#" class="button button-icon" data-toggle="modal" data-target="#form" style="background-color: #002fa6 !important;
                     border-radius: 8px !important"><span class="btn-effect" style="color:#fff;"> Get Started</span></a> </div>
               </div>
            </div>
            <div class="row">
               <div class="medium-center" style="clear: both;">
                  <img src="{{asset('app-demand/images/new-award.png')}}" class="display-row">
               </div>
            </div>
            <!---- slider --->
            <div class="slideshow-container">
               <div class="col-md-6">
                  <div class="mySlides fade">
                     <h1 class="text-white-new">On-Demand Taxi Booking <br>App Development</h1>
                     <img src="{{asset('app-demand/images/phone-11.png')}}" class="new-img">
                  </div>
                  <div class="mySlides fade">
                     <h1 class="text-white-new">On-Demand Grocery <br> App Development</h1>
                     <img src="{{asset('app-demand/images/phone-15.png')}}" class="new-img">
                  </div>
                  <div class="mySlides fade">
                     <h1 class="text-white-new">On-Demand Food Delivery <br>App Development</h1>
                     <img src="{{asset('app-demand/images/phone-14.png')}}" class="new-img">
                  </div>
                  <div class="mySlides fade">
                     <h1 class="text-white-new">On-Demand Doctor App<br> Development</h1>
                     <img src="{{asset('app-demand/images/phone-12.png')}}" class="new-img">
                  </div>
               </div>
            </div>
            <br>
            <div style="text-align:center">
               <span class="dot"></span> 
               <span class="dot"></span> 
               <span class="dot"></span>
               <span class="dot"></span> 
            </div>
            <!-- ende -->
            <!--<div class="col-md-6 col-sm-6 col-lg-6">
               <div class="img-wrap"> <img src="{{asset('app-demand/images/hero5-app.png')}}" alt="app image" class="img-fluid" style="visibility: visible; animation-duration: 7s; animation-delay: 300ms; animation-iteration-count:infinite; animation-name:pulse;"> </div>
               </div>-->
         </div>
         <!--end of row--> 
      </div>
      <!--end of container--> 
   </section>
   <!--hero section end--> 
   <!--banner-footer-img-end--> 
   <!--promo section start-->
   <section class="promo-section ptb-100 position-relative overflow-hidden">
      <div class="container">
         <div class="row">
            <div class="col-lg-7 col-md-10">
               <div class="section-heading">
                  <h2>We Create On Demand app for these industries</h2>
               </div>
            </div>
         </div>
         <div class="row mt-3 wow fadeInUp align-items-center" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Beauty.png')}}" class="side-pic" title="beauty"> </div>
                  <h5 class="text-side-left">Beauty App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Dating.png')}}" class="side-pic" title="Dating"> </div>
                  <h5 class="text-side-left">Dating App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/E-commerce.png')}}" class="side-pic" title="E-commerce"> </div>
                  <h5 class="text-side-left">Ecommerce App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/e-learning.png')}}" class="side-pic" title="e-learning"> </div>
                  <h5 class="text-side-left">E-Learning App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Entertainment.png')}}" class="side-pic" title="Entertainment"> </div>
                  <h5 class="text-side-left">Entertainment App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Food or Restaurant.png')}}" class="side-pic" title="Food or Restaurant"> </div>
                  <h5 class="text-side-left">Food Delivery App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Gaming.png')}}" class="side-pic" title="Gaming"> </div>
                  <h5 class="text-side-left">Gaming App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Grocery.png')}}" class="side-pic" title="Grocery"> </div>
                  <h5 class="text-side-left">Grocery Delivery App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/health & Fitness.png')}}" class="side-pic" title="health & Fitness"> </div>
                  <h5 class="text-side-left">Health &amp; Fitness App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Laundry.png')}}" class="side-pic" title="Laundry"> </div>
                  <h5 class="text-side-left">Laundry App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/On-Demand Delivery.png')}}" class="side-pic" title="On-Demand Delivery"> </div>
                  <h5 class="text-side-left">Delivery App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/On-Demand Service.png')}}" class="side-pic" title="On-Demand Service"> </div>
                  <h5 class="text-side-left">Service App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Pharmacy.png')}}" class="side-pic" title="Pharmacy"> </div>
                  <h5 class="text-side-left">Pharmacy Delivery App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Photography.png')}}" class="side-pic" title="Photography"> </div>
                  <h5 class="text-side-left">Photography App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Pickup & Delivery.png')}}" class="side-pic" title="Pickup & Delivery"> </div>
                  <h5 class="text-side-left">Pickup Delivery App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Real Estate.png')}}" class="side-pic" title="Real Estate"> </div>
                  <h5 class="text-side-left">Real Estate App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Transport & Logistics.png')}}" class="side-pic" title="Transport & Logistics"> </div>
                  <h5 class="text-side-left">Transportation &amp; Logistic App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Travelling.png')}}" class="side-pic" title="Travelling"> </div>
                  <h5 class="text-side-left">Travel Booking App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Video Calling.png')}}" class="side-pic" title="Video Calling"> </div>
                  <h5 class="text-side-left">Video Calling App</h5>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 col-6">
               <div class="box-one">
                  <div class="b-image"> <img src="{{asset('app-demand/images/Video Streaming.png')}}" class="side-pic" title="Video Streaming"> </div>
                  <h5 class="text-side-left">Video Streaming App</h5>
               </div>
            </div>
            <p class="pt-4 text-center-para"> Didn’t find an app solutions for your industry</p>
         </div>
         <div class="center-btn-strt mt-2"> <a class="button button-icon" data-toggle="modal" data-target="#form"><span class="btn-effect" style="color: white;"> Discuss Your App</span></a> </div>
      </div>
   </section>
   <!--promo section end--> 
   <!----------------end----------------->
   <section class="mt-4 mb-5 feature-strip" style="background-color: #4379f112;">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
               <div class="row">
                  <h2 class="side-h2">Featured In:</h2>
                  <div class="center-row"> 
                     <img src="{{asset('app-demand/images/Layer 0.png')}}" class="center-image"> 
                     <img src="{{asset('app-demand/images/Logo 1.png')}}" class="center-image">
                     <img src="{{asset('app-demand/images/Logo 2.png')}}"class="center-image"> 
                     <img src="{{asset('app-demand/images/Logo 5.png')}}"class="center-image">
                     <img src="{{asset('app-demand/images/Logo3.png')}}"class="center-image">
                     <img src="{{asset('app-demand/images/Logo 6.png')}}" class="center-image"> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!---------new-section---------------->
   <section class="cta-two mb-5">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 mt-4">
               <div class="cta-two__content">
                  <div class="block-title text-left">
                     <div class="section-heading">
                        <h2>FREE Marketing Support in “Corona Crisis”</h2>
                     </div>
                     <div class="cta-two__text">
                        <p>To help you in this difficult time, boost your business with our freebies</p>
                     </div>
                     <!-- /.cta-two__text --> 
                  </div>
                  <!-- /.block-title text-left -->
                  <div class="cta-two__icon-wrap">
                     <div class="cta-two__icon-single">
                        <div class="cta-two__icon"> <i class="apton-icon-app-development"></i><img src="{{asset('app-demand/images/360.png')}}"class="top-img"> </div>
                        <!-- /.cta-two__icon -->
                        <h3>360 Competitors <br>
                           Teardown
                        </h3>
                     </div>
                     <!-- /.cta-two__icon-single -->
                     <div class="cta-two__icon-single">
                        <div class="cta-two__icon ml-2"> <i class="apton-icon-computer-graphic1"></i><img src="{{asset('app-demand/images/sales.png')}}" class="top-img-1"> </div>
                        <!-- /.cta-two__icon -->
                        <h3>Sales Exploding<br>
                           Blue Print
                        </h3>
                     </div>
                     <!-- /.cta-two__icon-single --> 
                  </div>
                  <!-- /.cta-two__icon-wrap -->
                  <div class="cta-two__icon-wrap">
                     <div class="cta-two__icon-single">
                        <div class="cta-two__icon"> <i class="apton-icon-app-development"></i> <img src="{{asset('app-demand/images/xray.png')}}" class="top-img-2"></div>
                        <!-- /.cta-two__icon -->
                        <h3>X Ray Conversion <br>
                           Audit
                        </h3>
                     </div>
                     <!-- /.cta-two__icon-single -->
                     <div class="cta-two__icon-single">
                        <div class="cta-two__icon"> <i class="apton-icon-computer-graphic1"></i><img src="{{asset('app-demand/images/add.png')}}" class="top-img-3"> </div>
                        <!-- /.cta-two__icon -->
                        <h3>Google and Facebook <br>
                           Ad Setup  
                        </h3>
                     </div>
                     <!-- /.cta-two__icon-single --> 
                  </div>
                  <!-- /.thm-btn cta-two__btn --> 
               </div>
               <!-- /.cta-two__content --> 
            </div>
            <!-- /.col-lg-6 -->
            <div class="col-md-6 mb-4">
               <div class="card">
                  <div class="card-body">
                      <form id="marketing-form" name="marketing-form" method="post">
                     @csrf
                     <h3 class="text-center default-text py-3"><i class="fa fa-lock"></i> Get In Touch</h3>
                     <span id="mark-message"></span>
                     <!--Body-->
                     <div class="md-form"> <i class="fa fa-user prefix grey-text"></i>
                        <input type="Name" id="defaultForm-pass" name="name" class="form-control" style="border: 1px solid #eff1fe !important;">
                        <label for="defaultForm-pass">Your Name</label>
                     </div>
                     <div class="md-form"> <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="text" id="defaultForm-email" name="email" class="form-control">
                        <label for="defaultForm-email">Your Email</label>
                     </div>
                     <div class="md-form"> <i class="fa fa-lock prefix grey-text"></i>
                        <input type="text" id="defaultForm-pass" name="phone" class="form-control">
                        <label for="defaultForm-pass">Your Phone Number</label>
                     </div>
                     <div class="text-left-4" style="margin-top: 5% !important;"> <button type="submit" class="btn-effect button button-icon" style="color:#fff !important;"> Get Started</button> </div>
                  </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.row --> 
      </div>
      <!-- /.container --> 
   </section>
   <!------------end------------> 
   <!---------------------Demand Apps-------------------->
   <section class="pt-0 pb-5">
      <div class="container">
         <div class="row">
            <div class="col-md-12 justify-content-center">
               <div class="col-md-12 col-lg-12">
                  <div class="section-heading text-center mb-5">
                     <h2>Customize on Demand Apps we can build</h2>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3" style="float:left !important;">
                  <div class="pic-one">
                     <div class="side-desc-left"> <img src="{{asset('app-demand/images/Phone Background/Group 1191.png')}}" class="slider-box" style="height: 100%; width: 100%;"> </div>
                     <div class="center-box">
                        <p class="description">Grocery Delivery App</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3" style="float:left !important;">
                  <div class="pic-one">
                     <div class="side-desc-left"> <img src="{{asset('app-demand/images/Phone Background/Group 1193.png')}}" class="slider-box" style="height: 100%; width: 100%;"> </div>
                     <div class="center-box">
                        <p class="description"> Food Delivery App</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3" style="float:left !important;">
                  <div class="pic-one">
                     <div class="side-desc-left"> <img src="{{asset('app-demand/images/Phone Background/Group 1195.png')}}" class="slider-box" style="height: 100%; width: 100%;"> </div>
                     <div class="center-box">
                        <p class="description"> Taxi Booking App</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-lg-3" style="float:left !important;">
                  <div class="pic-one">
                     <div class="side-desc-left"> <img src="{{asset('app-demand/images/Phone Background/Group 1196.png')}}" class="slider-box" style="height: 100%; width: 100%;"> </div>
                     <div class="center-box">
                        <p class="description"> Travel Booking App</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!---------------------end----------------------> 
   <!--------------------------------We offer Flexibilty------------------->
   <section class="xamin-blue-bg-one">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
               <div class="center-long" style="float: none; margin: 0px auto;">
                  <div class="row">
                     <div class="col-md-8">
                        <h2 class="center-text-left-1">Let's Start Your App Development</h2>
                        <p class="new-text">Get complete flexibility to customize your dream app</p>
                     </div>
                     <div class="col-md-4 col-12 mt-3">
                        <div class=" text-center text-md-left" style="margin-left: 3%;margin-top: 8% !important;"> <a href="#" class="button-3" data-toggle="modal" data-target="#form" style="background-color:#fff !important; color: #000 !important;"> <span class="btn-effect">Discuss Your App</span> </a> </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-----------3 pics----------->
   <section class="screenshots-section mt-5">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-12">
               <div class="section-heading text-center mb-5">
                  <h2>Some App We Have Handcrafted</h2>
               </div>
            </div>
            <div class="col-md-12 mt-3">
               <div class="row">
                  <div class="col-md-4 col-12 col-lg-4">
                     <img src="{{asset('app-demand/images/m1.png')}}" title="Good Sam" class="img-app">
                     <h5 class="btm-content"> Good Sam</h5>
                     <p class="btm-para">Download the latest version of the Good Sam Camping app and get essential i</p>
                  </div>
                  <div class="col-md-4 col-12 col-lg-4">
                     <img src="{{asset('app-demand/images/m2.png')}}" title="Mein Haus" class="img-app">
                     <h5 class="btm-content">Mein Haus</h5>
                     <p class="btm-para">MeinHaus Application help people to search high quality home maintenance service.</p>
                  </div>
                  <div class="col-md-4 col-12 col-lg-4">
                     <img src="{{asset('app-demand/images/m3.png')}}" title="Deliverease" class="img-app">
                     <h5 class="btm-content">Deliverease</h5>
                     <p class="btm-para">Tell us what, when and where you want to ship. Leave the rest to deliverease.</p>
                  </div>
                  <div class=" text-center-3 mt-5"> <a class="button button-icon" data-toggle="modal" data-target="#form" style="background-color:#002fa6 !important; color: #fff !important;"><span class="btn-effect">Lets Create Your App</span></a> </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-----------------end----------------> 
   <!--screenshots section start--
      <section id="screenshots" class="screenshots-section mb-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
              <div class="section-heading text-center mb-5 wow bounceInDown center" style="visibility: visible; animation-delay: 0.5s; animation-name: bounceInDown;">
                <h2>Glimpse of App UX, UI’s we build</h2>
              </div>
            </div>
          </div>
          <div class="screenshot-wrap">
            <div class="screenshot-frame"></div>
            <div class="screen-carousel owl-carousel owl-theme dot-indicator"> <a href="./images/Portfolio/10th-gate-tours.jpg"><img src="{{asset('app-demand/images/portfolio/10th-gate-tours.jpg')}}" class="img-responsive"></a> <a href="./images/Portfolio/adelphia.jpg"><img src="{{asset('app-demand/images/portfolio/adelphia.jpg')}}" class="img-responsive"></a> <a href="./images/Portfolio/bhamas.jpg"><img src="{{asset('app-demand/images/portfolio/bhamas.jpg')}}" class="img-responsive"></a> <a href="./images/Portfolio/kennebunkport.jpg"><img src="{{asset('app-demand/images/portfolio/kennebunkport.jpg')}}" class="img-responsive"></a> <a href="./images/Portfolio/healthycreations.jpg"><img src="{{asset('app-demand/images/portfolio/healthycreations.jpg')}}" class="img-responsive"></a> <a href="./images/Portfolio/jivala.jpg"><img src="{{asset('app-demand/images/portfolio/jivala.jpg')}}"class="img-responsive"></a> <a href="./images/Portfolio/peelhypnosis.jpg"><img src="{{asset('app-demand/images/portfolio/peelhypnosis.jpg')}}" class="img-responsive"></a> <a href="./images/Portfolio/remodel.jpg"><img src="{{asset('app-demand/images/portfolio/remodel.jpg')}}" class="img-responsive"></a> </div>
            <div class=" text-center-3 mt-5"> <a class="button button-icon" data-toggle="modal" data-target="#form" style="background-color:#002fa6 !important; color: #fff !important;"><span class="btn-effect">Lets Create Your Website</span></a> </div>
          </div>
        </div>
      </section>
      screenshots section end--> 
   <!--features section start-->
   <section id="features" class="feature-section gray-light-bg">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
               <div class="section-heading text-center mb-5">
                  <h2>Why Choose Us</h2>
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
                        <span class="ti-layout p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('app-demand/images/Transparency.png')}}" class="img-fluid-two" alt="Transparency"> </span>
                        <div class="features-single-content d-block overflow-hidden">
                           <h5 class="mb-2">Transparency </h5>
                           <p>We report you daily & weekly with all the project details & take suggestions if required.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-12">
                     <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                        <span class="ti-themify-favicon-alt p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('app-demand/images/150+ Clients.png')}}" class="img-fluid-two" alt="Clients"> </span>
                        <div class="features-single-content d-block overflow-hidden">
                           <h5 class="mb-2">150+ Clients</h5>
                           <p>Being in 6 Years in the industry, we have grown our client base to 150+ from 12 countries </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-12">
                     <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                        <span class="ti-eye p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('app-demand/images/Satisfaction.png')}}" class="img-fluid-two" alt="Satisfaction"> </span>
                        <div class="features-single-content d-block overflow-hidden">
                           <h5 class="mb-2">100% Satisfaction </h5>
                           <p>With all our project, we have delivered amazing apps which leads to 100% client satisfaction</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-12">
                     <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                        <span class="ti-thumb-up p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('app-demand/images/Skilled Developer.png')}}" class="img-fluid-two" alt="Skilled-developer"> </span>
                        <div class="features-single-content d-block overflow-hidden">
                           <h5 class="mb-2">Skilled Developer</h5>
                           <p>We pair you with our in-house app developers whose skillsets match with your needs </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-12">
                     <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                        <span class="ti-mobile p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('app-demand/images/Transparency.png')}}" class="img-fluid-two" alt="Transparency"> </span>
                        <div class="features-single-content d-block overflow-hidden">
                           <h5 class="mb-2">Innovative Approach</h5>
                           <p>We prefer to think differently and come up with creative ways to develop your dream app</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-12">
                     <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5">
                        <span class="ti-world p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('app-demand/images/Innovative Approach.png')}}" class="img-fluid-two" alt="Innovative-approach"> </span>
                        <div class="features-single-content d-block overflow-hidden">
                           <h5 class="mb-2">Affordable Pricing </h5>
                           <p>Our app quote will be a perfect balance of competitive pricing & uncompromising quality </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12"> <img src="{{asset('app-demand/images/app-mobile-image.png')}}" class="img-fluid mx-auto d-lg-block d-none" alt="app screen"> </div>
            <div class="text-center-5"> <a class="button button-icon" data-toggle="modal" data-target="#form" style="background-color:#002fa6 !important; color: #fff !important;"><span class="btn-effect">Get Started</span></a> </div>
         </div>
      </div>
   </section>
   <!--features section end-->
   <section class="position-relative feature-section ptb-100">
      <div class="container">
         <div class="row align-items-center justify-content-between">
            <div class="col-md-12 col-lg-6">
               <div class="feature-contents section-heading">
                  <h2>The Powerful Secrete that No App Developer will tell you</h2>
                  <p class="next-para"> In today’s digital world your app has become an online “hub” if done it right it will boosts the performance of ALL your marketing channels. Hence it makes no sense to leave it in the hands of a designer and not have it handcrafted by direct-response marketers and digital growth experts. </p>
                  <ul class="dot-circle pt-2 mb-4">
                     <li>Grow market share, while your competitors panic.</li>
                     <li>Be Position #1 on Google & Apple App Store.</li>
                     <li>Boost your Sales, Revenue. </li>
                  </ul>
                  <div class="text-left-2"> <a class="button button-icon" data-toggle="modal" data-target="#form"><span class="btn-effect"> Talk With Strategist</span></a> </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-6 wow bounceInRight center" style="visibility: visible; animation-name: bounceInRight;">
               <div class="download-img"> <img src="{{asset('app-demand/images/share.png')}}" alt="download" class="img-fluid" style="width: 90%;"> </div>
            </div>
         </div>
      </div>
   </section>
   <!--about us section end--> 
   <!--work process start-->
   <section id="process" class="work-process-section position-relative  ptb-100 gray-light-bg">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
               <div class="section-heading text-center mb-5">
                  <h2>Our Work Process</h2>
               </div>
            </div>
         </div>
         <div class="row align-items-center justify-content-md-center justify-content-sm-center">
            <div class="col-md-12 col-lg-6">
               <div class="work-process-wrap">
                  <div class="process-single-item">
                     <div class="process-icon-item left-shape">
                        <div class="d-flex align-items-center">
                           <div class="process-icon mr-4"> <img src="{{asset('app-demand/images/Project Analysis.png')}}" class="img-fluid-three" alt="Project Analysis"> </div>
                           <div class="process-content text-left">
                              <h5>Project Analysis</h5>
                              <ul>
                                 <li>Detail Client Requirement Analysis
                                 <li>Defining scalability & cost of your app</li>
                                 <li>Choosing the technology for app</li>
                              </ul>
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
                           <div class="process-icon ml-4"> <img src="{{asset('app-demand/images/Design.png')}}" class="img-fluid-three" alt="Design & Development"> </div>
                           <div class="process-content text-right">
                              <h5>Design & Development</h5>
                              <ul>
                                 <li>Wireframe Each Screens</li>
                                 <li>Designing & Coding the app</li>
                                 <li>Building Prototype for feedbacks </li>
                              </ul>
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
                           <div class="process-icon mr-4"> <img src="{{asset('app-demand/images/Development.png')}}" class="img-fluid-three" alt="Testing"> </div>
                           <div class="process-content text-left">
                              <h5>Testing & Deployment</h5>
                              <ul>
                                 <li>Test the application find bugs </li>
                                 <li>Remove bugs & take final approval</li>
                                 <li>Live app in android & ios app store</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-6">
               <div class="img-wrap"> <img src="{{asset('app-demand/images/At the office.png')}}" alt="features" class="img-fluid"> </div>
            </div>
         </div>
      </div>
   </section>

   <section class="xamin-custom-bg pb-0">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
               <div class="title-box wow fadeInUp text-center" style="visibility: visible; animation-name: fadeInUp;">
                  <!--<span class="center-head">TESTIMONIALS</span>-->
                  <h2>Here's What Our Clients Say</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
               <div class="owl-carousel testimonial-style owl-loaded owl-drag" data-dots="true" data-nav="true" data-autoplay="true" data-loop="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                  <div class="owl-stage-outer">
                     <div class="owl-stage" style="transform: translate3d(-3510px, 0px, 0px); transition: all 0.25s ease 0s; width: 8190px;">
                        <div class="owl-item cloned" style="width: 1140px; margin-right: 30px;">
                           <div class="item text-center">
                              <div class="iq-testimonial">
                                 <div class="testimonial-info">
                                    <img alt="#" class="img-fluid rounded-circle" src="{{asset('app-demand/images/testimonials/2.jpg')}}">
                                    <div class="testimonial-name">
                                       <h5>Garg Eagly</h5>
                                       <!-- 
                                          <span class="sub-title">Business Advisor</span> --> 
                                    </div>
                                 </div>
                                 <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                                 </svg>
                                 <!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                                 <p>I must say Quantumitinnovation have an outstanding technical team. We have been able to achieve a major milestone in this initiative so quickly because of the undying dedication that your team maintained throughout the project cycle.</p>
                              </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1140px; margin-right: 30px;">
                           <div class="item text-center">
                              <div class="iq-testimonial">
                                 <div class="testimonial-info">
                                    <img alt="#" class="img-fluid rounded-circle" src="{{asset('app-demand/images/testimonials/3.jpg')}}">
                                    <div class="testimonial-name">
                                       <h5>JBonnie Schaffer</h5>
                                       <!-- <span class="sub-title">COO</span> --> 
                                    </div>
                                 </div>
                                 <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                                 </svg>
                                 <!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                                 <p>Team Quantumitinnovation consistently went above and beyond in terms of responsiveness, adaptability to new requirements, and dedication to client and concept.</p>
                              </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 1140px; margin-right: 30px;">
                           <div class="item text-center">
                              <div class="iq-testimonial">
                                 <div class="testimonial-info">
                                    <img alt="#" class="img-fluid rounded-circle" src="{{asset('app-demand/images/testimonials/1.jpg')}}">
                                    <div class="testimonial-name">
                                       <h5>Peter Albert</h5>
                                       <!--  <span class="sub-title">CEO</span> --> 
                                    </div>
                                 </div>
                                 <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                                 </svg>
                                 <!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                                 <p>First of all, I want to recommend Quantumitinnovation, because they stay connected with you even after the project is delivered to ensure the maximum ROI. The team is efficient in responding and in dealing with new challenges.</p>
                              </div>
                           </div>
                        </div>
                        <div class="owl-item active" style="width: 1140px; margin-right: 30px;">
                           <div class="item text-center">
                              <div class="iq-testimonial">
                                 <div class="testimonial-info">
                                    <img alt="#" class="img-fluid rounded-circle" src="{{asset('app-demand/images/testimonials/2.jpg')}}">
                                    <div class="testimonial-name">
                                       <h5>Garg Eagly</h5>
                                       <!-- 
                                          <span class="sub-title">Business Advisor</span> --> 
                                    </div>
                                 </div>
                                 <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                                 </svg>
                                 <!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                                 <p>I must say Quantumitinnovation have an outstanding technical team. We have been able to achieve a major milestone in this initiative so quickly because of the undying dedication that your team maintained throughout the project cycle.</p>
                              </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 1140px; margin-right: 30px;">
                           <div class="item text-center">
                              <div class="iq-testimonial">
                                 <div class="testimonial-info">
                                    <img alt="#" class="img-fluid rounded-circle" src="{{asset('app-demand/images/testimonials/3.jpg')}}">
                                    <div class="testimonial-name">
                                       <h5>JBonnie Schaffer</h5>
                                       <!-- <span class="sub-title">COO</span> --> 
                                    </div>
                                 </div>
                                 <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                                 </svg>
                                 <!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                                 <p>Team Quantumitinnovation consistently went above and beyond in terms of responsiveness, adaptability to new requirements, and dedication to client and concept.</p>
                              </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1140px; margin-right: 30px;">
                           <div class="item text-center">
                              <div class="iq-testimonial">
                                 <div class="testimonial-info">
                                    <img alt="#" class="img-fluid rounded-circle" src="{{asset('app-demand/images/testimonials/1.jpg')}}">
                                    <div class="testimonial-name">
                                       <h5>Peter Albert</h5>
                                       <!--  <span class="sub-title">CEO</span> --> 
                                    </div>
                                 </div>
                                 <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                                 </svg>
                                 <!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                                 <p>First of all, I want to recommend Quantumitinnovation, because they stay connected with you even after the project is delivered to ensure the maximum ROI. The team is efficient in responding and in dealing with new challenges.</p>
                              </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 1140px; margin-right: 30px;">
                           <div class="item text-center">
                              <div class="iq-testimonial">
                                 <div class="testimonial-info">
                                    <img alt="#" class="img-fluid rounded-circle" src="{{asset('app-demand/images/testimonials/2.jpg')}}">
                                    <div class="testimonial-name">
                                       <h5>Garg Eagly</h5>
                                       <!-- 
                                          <span class="sub-title">Business Advisor</span> --> 
                                    </div>
                                 </div>
                                 <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                                 </svg>
                                 <!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                                 <p>I must say Quantumitinnovation have an outstanding technical team. We have been able to achieve a major milestone in this initiative so quickly because of the undying dedication that your team maintained throughout the project cycle.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="owl-dots">
                     <button role="button" class="owl-dot"><span></span></button>
                     <button role="button" class="owl-dot active-1"><span></span></button>
                     <button role="button" class="owl-dot"><span></span></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--new testimonial end--> 
   <!--clients-->
   <section class="pt-0">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="title-box wow fadeInUp  text-center" style="visibility: visible; animation-name: fadeInUp;">
                  <br>
                  <!--<span class="title-design">Our Clients</span>-->
                  <h2 class="center-head">Our Clients</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="false" data-items="6" data-items-laptop="4" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-autoplay="true" data-loop="true" data-margin="30">
                  <div class="owl-stage-outer">
                     <div class="owl-stage" style="transform: translate3d(-3705px, 0px, 0px); transition: all 0.25s ease 0s; width: 5265px;">
                        <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/7.png')}}" alt="image6"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/1.png')}}" alt="image7"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/2.png')}}" alt="image8"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/3.png')}}" alt="image9"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/4.png')}}" alt="image10"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/5.png')}}" alt="image11"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/6.png')}}" alt="image12"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/1.png')}}" alt="image0"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/2.png')}}" alt="image1"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/3.png')}}" alt="image2"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/4.png')}}" alt="image3"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/5.png')}}" alt="image4"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/6.png')}}" alt="image5"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/7.png')}}" alt="image6"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/1.png')}}" alt="image7"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/2.png')}}" alt="image8"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/3.png')}}" alt="image9"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/4.png')}}" alt="image10"> </div>
                           </div>
                        </div>
                        <div class="owl-item" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/5.png')}}" alt="image11"> </div>
                           </div>
                        </div>
                        <div class="owl-item active" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/6.png')}}" alt="image12"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/1.png')}}" alt="image0"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/2.png')}}" alt="image1"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/3.png')}}" alt="image2"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/4.png')}}" alt="image3"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/5.png')}}" alt="image4"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/6.png')}}" alt="image5"> </div>
                           </div>
                        </div>
                        <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                           <div class="item">
                              <div class="clients-box"> <img class="img-fluid client-img" src="{{asset('app-demand/images/partners/7.png')}}" alt="image6"> </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="owl-nav disabled">
                     <button type="button" role="presentation" class="owl-prev">
                        <svg class="svg-inline--fa fa-angle-left fa-w-8 fa-2x" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="angle-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z"></path>
                        </svg>
                        <!-- <i class="fa fa-angle-left fa-2x"></i> --> 
                     </button>
                     <button type="button" role="presentation" class="owl-next">
                        <svg class="svg-inline--fa fa-angle-right fa-w-8 fa-2x" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                        </svg>
                        <!-- <i class="fa fa-angle-right fa-2x"></i> --> 
                     </button>
                  </div>
                  <div class="owl-dots disabled"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--clients-end--> 
   <!--our contact section start-->
   <section id="contact" class="contact-us-section ptb-100">
      <div class="container">
         <div class="row justify-content-around">
            <div class="col-12 pb-3 message-box d-none">
               <div class="alert alert-danger"></div>
            </div>
            <div class="col-md-5 col-12">
               <div class="contact-info sytle-one service-contact text-left">
                  <div class="contact-info-title-wrap">
                     <h3 class="heading-one mb-10">4.9/5.0</h3>
                     <div class="ht-star-rating lg-style">
                        <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                        <!-- <span class="fa fa-star"></span> --> 
                        <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                        <!-- <span class="fa fa-star"></span> --> 
                        <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                        <!-- <span class="fa fa-star"></span> --> 
                        <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                        <!-- <span class="fa fa-star"></span> --> 
                        <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                           <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                        </svg>
                        <!-- <span class="fa fa-star"></span> --> 
                     </div>
                     <p class="sub-text"> Global Presence <br>
                        Worldwide 400+ Clients <br>
                        1000+ Projects Delivered 
                     </p>
                  </div>
                  <div class="contact-list-item">
                     <a class="single-contact-list"> </a>
                     <div class="content-wrap">
                        <a class="single-contact-list"> </a>
                        <div class="content">
                           <a class="single-contact-list">
                              <div class="icon">
                                 <svg class="svg-inline--fa fa-phone fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
                                 </svg>
                                 <!-- <span class="fa fa-phone"></span> --> 
                              </div>
                           </a>
                           <div class="main-content">
                              <a class="single-contact-list">
                                 <h6 class="heading">Call for advice now!</h6>
                              </a>
                              <div class="text" style="font-size: 1.5em;"><a class="single-contact-list"> </a><a href="tel:+ 91 859 571 57 45" style="color:#d2a98e!important;">+ 91 859 571 57 45</a> </div>
                           </div>
                        </div>
                     </div>
                     <a class="single-contact-list"> </a>
                     <div class="content-wrap">
                        <a class="single-contact-list"> </a>
                        <div class="content">
                           <a class="single-contact-list">
                              <div class="icon">
                                 <svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                                 </svg>
                                 <!-- <span class="fa fa-envelope"></span> --> 
                              </div>
                           </a>
                           <div class="main-content">
                              <a class="single-contact-list">
                                 <h6 class="heading">Say hello</h6>
                              </a>
                              <div class="text" style="font-size:18px;"><a class="single-contact-list"> </a><a href="mailto:sales@quantumitinnovation.com" style="color:#d2a98e!important;word-break: break-all;">sales@quantumitinnovation.com</a> </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-7 col-12 col-sm-5">
               <div class="contact-form-service-wrap">
                  <div class="contact-title text-center section-space--mb_">
                     <h4 class="">Get In Touch</h4>
                     <p class="text-one">Tell us what's on your mind and we'll get right back to you !</p>
                  </div>
                  <form method="post" action="" class="form p-t-20 needs-validation" novalidate id="contactus">
                      @csrf
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
                           <input name="phone" type="text" placeholder="Phone Number *" class="cust-height" required>
                        </div>
                        <div class="contact-select">
                           <div class="form-item contact-inner">
                              <span class="inquiry">
                                 <select name="enquiry_type" class="select-item cust-height" required="">
                                    <option value="">Your Enquiry about</option>
                                    <option value="Mobile App Development">Mobile App Development</option>
                                    <option value="Website Design &amp; Development">Website Design &amp; Development</option>
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
                           <p class="form-messege" id="contactus-message"></p>
                        </div>
                        <br>
                        <!--<div class="alert alert-danger alert-dismissible">--> 
                        <!--</div>--> 
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--our contact section end--> 
</div>
<script>
   var slideIndex = 0;
   showSlides();
   
   function showSlides() {
     var i;
     var slides = document.getElementsByClassName("mySlides");
     var dots = document.getElementsByClassName("dot");
     for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
     }
     slideIndex++;
     if (slideIndex > slides.length) {slideIndex = 1}    
     for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" active", "");
     }
     slides[slideIndex-1].style.display = "block";  
     dots[slideIndex-1].className += " active";
     setTimeout(showSlides, 2000); // Change image every 2 seconds
   }
</script>
@endsection
@section('after-script')
<script>
      $(function () {

        $('#lets-connect').on('submit', function (e) {

          e.preventDefault();
            
          $.ajax({
            type: 'post',
            url: '{{url('contactus-appdemand/post')}}',
            data: $('#lets-connect').serialize(),
            success: function (result) {
                console.log(result);
              if(result.status == 200){
                console.log('dvfdsf')
                  $('#form-success-text').html('Thank You . Your request has been submitted successfully.');
              }else{
                  $('#form-success-text').html('Please Try Again.')
              }
            }
          });

        });

      });
    </script>
    <script>
      $(function () {

        $('#pop-forms').on('submit', function (e) {

          e.preventDefault();
            
          $.ajax({
            type: 'post',
            url: '{{url('contactus-appdemand/post')}}',
            data: $('#pop-forms').serialize(),
            success: function (result) {
              if(result.status == 200){
                  $('#pop-form-success-text').html('Thank You . Your request has been submitted successfully.');
              }else{
                  $('#pop-form-success-text').html('Please Try Again.')
              }
            }
          });

        });

      });
    </script>
    <script>
      $(function () {

        $('#marketing-form').on('submit', function (e) {

          e.preventDefault();
            
          $.ajax({
            type: 'post',
            url: '{{url('contactus-appdemand/post')}}',
            data: $('#marketing-form').serialize(),
            success: function (result) {
              if(result.status == 200){
                  $('#mark-message').html('Thank You . Your request has been submitted successfully.');
              }else{
                  $('#mark-message').html('Please Try Again.')
              }
            }
          });

        });

      });
    </script>
        <script>
      $(function () {

        $('#contactus').on('submit', function (e) {

          e.preventDefault();
            
          $.ajax({
            type: 'post',
            url: '{{url('contactus-appdemand/form/post')}}',
            data: $('#contactus').serialize(),
            success: function (result) {
              if(result.status == 200){
                  $('#contactus-message').html('Thank You . Your request has been submitted successfully.');
              }else{
                  $('#contactus-message').html('Please Try Again.')
              }
            }
          });

        });

      });
    </script>

@endsection