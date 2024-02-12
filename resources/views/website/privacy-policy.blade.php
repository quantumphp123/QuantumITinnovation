@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Privacy Policy - Quantum IT Innovation</title>
    <meta name="keywords" content="Privacy Policy">
	<meta name="description" content="The Privacy Policy of the Quantum IT Innovation">
	
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
        <h5 class="text-center">PRIVACY POLICY</h5>
        <p class="mt-3">
            We are committed to safeguarding the privacy of our website visitors. This privacy policy sets out how Quantum IT uses and protects any information that you give Quantum IT when you use this website.
        </p>
        <p>Quantum IT is committed to ensuring that your privacy is protected. Should we ask you to provide certain information by which you can be identified when using this website, and then you can be assured that it will only be used in accordance with this privacy statement?</p>
        <p>Quantum IT may change this policy from time to time by updating this page. You should check this page from time to time to ensure that you are happy with any changes.</p>
        <h5>What we collect</h5>
        <ul style="list-style-type: disc">We may collect, store and use the following types of information:
            <li>name and job title.</li>
            <li>contact information including email address</li>
            <li>demographic information such as postcode, preferences, and interests</li>
            <li>other information relevant to customer surveys and/or offers</li>
            <li>information about your computer and about your visits to and use of this website (including your IP address, browser type, and version, operating system, referral source, length of visit, page views, website navigation)</li>
            <li>information relating to any transactions carried out between you and us on or in relation to this website, including information relating to any purchases you make of our goods or services</li>
            <li>information that you provide to us for the purpose of subscribing to our website services, email notifications and/or newsletters</li>
            <li>any other information that you choose to send to us.</li>
        </ul>
        <h5 class="mt-3 mb-2">What we do with the information we gather</h5>
        <p>We require this information to understand your needs and provide you with a better service, and in particular for the following reasons:</p>
        <ul style="list-style-type: disc">
            <li>Internal record keeping.</li>
            <li>We may use the information to improve our products and services.</li>
            <li>We may periodically send promotional emails about new products, special offers or other information which we think you may find interesting using the email address which you have provided.</li>
            <li>From time to time, we may also use your information to contact you for market research purposes.</li>
            <li>We may contact you by email, phone, fax or mail.</li>
            <li>We may use the information to customize the website according to your interests.</li>
        </ul>
        <h5 class="mt-3 mb-2">Security</h5>
        <p>We are committed to ensuring that your information is secure. In order to prevent unauthorized access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.</p>
        <h5>How we use cookies</h5>
        <p>A cookie is a small file which asks permission to be placed on your computer’s hard drive. Once you agree, the file is added and the cookie helps analyze web traffic or lets you know when you visit a particular site. Cookies allow web applications to respond to you as an individual. The web application can tailor its operations to your needs, likes, and dislikes by gathering and remembering information about your preferences.</p>
        <p>We use traffic log cookies to identify which pages are being used. This helps us analyse data about webpage traffic and improve our website in order to tailor it to customer needs. We only use this information for statistical analysis purposes and then the data is removed from the system.</p>
        <p>Overall, cookies help us provide you with a better website by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any information about you, other than the data you choose to share with us.</p>
        <p>You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. This may prevent you from taking full advantage of the website.</p>
        <h5>Links to other websites</h5>
        <p>Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.</p>
        <h5>Controlling your personal information</h5>
        <p>You may choose to restrict the collection or use of your personal information in the following ways:</p>
        <ul style="list-style-type: disc">
            <li>whenever you are asked to fill in a form on the website, look for the box that you can click to indicate that you do not want the information to be used by anybody for direct marketing purposes</li>
            <li>if you have previously agreed to us using your personal information for direct marketing purposes, you may change your mind at any time by writing to or emailing us at sales@quantumitinnovation.com</li>
        </ul>
        <p>We do not store credit card details nor do we share customer details with any 3rd parties.</p>
        <p>You may request details of personal information which we hold about you under the Data Protection Act 1998. A small fee will be payable. If you would like a copy of the information held on you please write to us.</p>
        <p class="pb-5">If you believe that any information we are holding on you is incorrect or incomplete, please write to or email us as soon as possible at the above address. We will promptly correct any information found to be incorrect.</p>
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