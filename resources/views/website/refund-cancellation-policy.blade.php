@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Refund & Cancellation Policy - Quantum IT Innovation</title>
    <meta name="keywords" content="Refund & Cancellation Policy">
	<meta name="description" content="Refund & Cancellation Policy of the Quantum IT Innovation">
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
        <h5 class="text-center">REFUND & CANCELLATION POLICY</h5>
        <p class="mt-3">At Quantum IT, we have full confidence in our varied range of services, products and e-business solutions. We leave no stone unturned in providing our prestigious clients fast, reliable and exceptional service guarantee every time in time, we do business with them. All the services available at Quantum IT’s website are carried out for the clients after extensive project analysis using a complete scope document, agreement. It ensures full understanding of the work and almost no possibilities of any project cancellation or dispute. However, any refund and cancellation are taken place abiding a set of conditions.
        </p>
        
        <h5 class="mb-2">Cancellation Policy</h5>
        <ul style="list-style-type: disc">
            <li>A subscriber can place the cancellation order for a particular service within 7-10 days of service agreement via cancellation mail at sales@quantumitinnovation.com</li>
            <li>No cancellation is possible for the services offered with promotional discounts on special occasions such as Independence Day, Christmas and New Year. These are limited edition offers and hence any range of refund would not be possible for these.</li>
            <li>Quantum IT will not entertain cancellation requests made for services such as domain name registration and domain name transfer.</li>
            <li>A service stands to cancel if next payment is not received within 7 working days</li>
        </ul>
        <h5 class="mt-3 mb-2">Refund Policy</h5>    
        <ul style="list-style-type: disc">
            <li>Every service offered by us takes a different course of action to get accomplished from start to end thus refund policy differs from one service to another.</li>
            <li>There is always a certain set of resources that are involved in achieving every milestone of a project/campaign. Thus, a refund would not be entertained for the work already completed.</li>
            <li>No refund is possible for the fee paid in the form of administrative,  campaign setup fees or installation charges.</li>
            <li>Taxes paid on services levied by regulatory bodies would not be refunded with fee refund.</li>
            <li>No refund will be entertained in case service gets canceled due to any violation of terms stated in our Terms & Condition section.</li>
            <li>There is no refund policy for the services placed under same day or 24 hours delivery.</li>
            <li>Quantum IT is not liable to pay a refund if delay or service disruption happens due to third party involvement.</li>
        </ul>
        <p class="pb-5 pt-2"><strong>Sales/ Support:</strong> email: sales@quantumitinnovation.com Cell: + 91 11 4328 2001 or + 1 877 877 3644.</p>
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