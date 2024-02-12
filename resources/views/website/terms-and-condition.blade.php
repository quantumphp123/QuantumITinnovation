@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Terms and Condition - Quantum IT Innovation</title>
    <meta name="keywords" content="Terms and Condition">
	<meta name="description" content="Terms and Condition Policy of the Quantum IT Innovation">
	
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
<!---------modal-end--------------->
    <div class="container pt-5">
        <h5 class="text-center">TERMS AND CONDITION</h5>
        <p class="mt-3">We do not collect personally identifiable information about you unless you choose to fill your personal information on our website.
            We do gather certain non-personally identifiable information such as standard web log information, device, browser, and software information,
            carrier and connection information for all visitors of our web sites. We may use this information to analyze trends and statistics so as to
            help us provide you with better services. We use cookies to understand site usage and to improve the content and offerings on our website. 
            We use cookies to personalize your experience on our web-page. You hereby agree to accept the terms and conditions set forth in this Terms of Use.
            In any event or situation, if you are not agreeing with these terms and conditions, you are requested by Quantum IT not to use the website or 
            download any material from it. You hereby approve to follow all the copyright laws worldwide in your use of this website and to prevent any 
            unauthorized copying of the material.
        </p>
        <p>Quantum IT is maintaining business relationships with thousands of customers, suppliers, governments, and others worldwide. We have used words like partnership, and partner in order to indicate business relationships involving common activities and interests, and words may not indicate precise legal relationships.</p>
        <p>You may access, update, correct or delete your Personal Information that we hold, including your profile and preferences. You may do so by contacting us at sales@quantumitinnovation.com.</p>
        <p>Our website is directed to people in their business and professional capacity only. It is not intended for children under thirteen (13) years of age. Therefore, we do not knowingly/unknowingly solicit data or market it to children under the age of thirteen (13).</p>
        <h5>Unlawful or Prohibited Use of the Website</h5>
        <p>You shall not use the website for any purpose that is unlawful or prohibited by the Terms of Use. You are not allowed to use the website in any manner that could damage, disable, malware, or the network connected to the Quantum IT server.</p>
        <h5>Modifications in Terms of Use</h5>
        <p>Quantum IT reserves the right to change, modify, add or remove any portion of the Terms of Use in whole or in part, at any time. The modification or change in Terms of Use will be effective once the notice of such changes is posted.</p>
        <p class="pb-5"><strong>Sales/ Support:</strong> email: sales@quantumitinnovation.com Cell: + 91 11 4328 2001 or + 1 877 877 3644.</p>
    </div>
      <!-- Start Brand Section Area -->
    <!--<div class="brand-logo-slider-area section-space--ptb_60">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-12">-->
                    <!-- brand logo slider -->
    <!--                <div class="brand-logo-slider__container-area">-->
    <!--                    <div class="swiper-container brand-logo-slider__container">-->
    <!--                        <div class="swiper-wrapper brand-logo-slider__one">-->
    <!--                            <div class="swiper-slide brand-logo brand-logo--slider">-->
    <!--                                <a href="#">-->
    <!--                                    <div class="brand-logo__image">-->
    <!--                                        <img src="assets/images/brand/real/1.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                    <div class="brand-logo__image-hover">-->
    <!--                                        <img src="assets/images/brand/gray/g1.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div class="swiper-slide brand-logo brand-logo--slider">-->
    <!--                                <a href="#">-->
    <!--                                    <div class="brand-logo__image">-->
    <!--                                        <img src="assets/images/brand/real/2.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                    <div class="brand-logo__image-hover">-->
    <!--                                        <img src="assets/images/brand/gray/g2.jpg" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div class="swiper-slide brand-logo brand-logo--slider">-->
    <!--                                <a href="#">-->
    <!--                                    <div class="brand-logo__image">-->
    <!--                                        <img src="assets/images/brand/real/3.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                    <div class="brand-logo__image-hover">-->
    <!--                                        <img src="assets/images/brand/gray/g3.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div class="swiper-slide brand-logo brand-logo--slider">-->
    <!--                                <a href="#">-->
    <!--                                    <div class="brand-logo__image">-->
    <!--                                        <img src="assets/images/brand/real/4.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                    <div class="brand-logo__image-hover">-->
    <!--                                        <img src="assets/images/brand/gray/g4.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div class="swiper-slide brand-logo brand-logo--slider">-->
    <!--                                <a href="#">-->
    <!--                                    <div class="brand-logo__image">-->
    <!--                                        <img src="assets/images/brand/real/5.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                    <div class="brand-logo__image-hover">-->
    <!--                                        <img src="assets/images/brand/gray/g5.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div class="swiper-slide brand-logo brand-logo--slider">-->
    <!--                                <a href="#">-->
    <!--                                    <div class="brand-logo__image">-->
    <!--                                        <img src="assets/images/brand/real/6.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                    <div class="brand-logo__image-hover">-->
    <!--                                        <img src="assets/images/brand/gray/g6.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                            <div class="swiper-slide brand-logo brand-logo--slider">-->
    <!--                                <a href="#">-->
    <!--                                    <div class="brand-logo__image">-->
    <!--                                        <img src="assets/images/brand/real/7.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                    <div class="brand-logo__image-hover">-->
    <!--                                        <img src="assets/images/brand/gray/g7.png" class="img-fluid" alt="">-->
    <!--                                    </div>-->
    <!--                                </a>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- End Brand Section Area -->
</div>
@endsection