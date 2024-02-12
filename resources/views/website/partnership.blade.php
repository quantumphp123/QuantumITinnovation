@extends('website.layouts.master2') 
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<title>Portfolio | Quantum IT Innovation</title>
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
    <!--Banner Image Section --> 
            <!--<div class="about-banner-wrap banner-space about-us-bg">-->
            <!--        <div class="container">-->
            <!--            <div class="row">-->
            <!--                <div class="col-lg-8 ml-auto mr-auto">-->
            <!--                    <div class="about-banner-content text-center">-->
            <!--                        <h1 class="mb-15 text-white">PARTNERSHIP</h1>-->
                                    <!--<h5 class="font-weight--normal text-white">Mitech specializes in technological and IT-related services such as product engineering, warranty management, building cloud, infrastructure, network, etc. </h5>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--</div>-->
        <!--===========  feature-large-images-wrapper  Start =============-->
        <div class="container">
             <h1 class="mb-15 pt-4 text-center">PARTNERSHIP</h1>
                <div class="row">
                    <div class="col-lg-7">
                        <p class="text-justify mt-5">
                            Partnership reduces the load and even the risk and Quantum is known for serving best services to our clients or partners. You can make your choice by partnering with us for Global clientele, Revenue Opportunity, brand association, Technical support, lower risks, and non-competitive relationship.
                        </p>
                        <p class="text-justify">Quantum offers four types partnership: Offshore Partnership, Referral Partnership, Re-seller partnership, Joint Partnership.</p>
                        <p class="text-justify">Quantum is very strict towards providing high-quality products, delivering things in time and utilization of all latest method by our experts and this helps you on being top of the peak in the industry.</p>
                        <p class="text-justify">We believe, working together as a partner will solve things easily and will be beneficial for both. We even refer our partners to our clients and being referred by us will make a special impact. This partnership will help both the brands.</p>
                        <p class="text-justify">To our re-seller partners, we do something special. We find a unique way to wrap up the project without any quality suffer. Working together will help us know your requirement and will definitely provide you desired result.</p>
                        <p class="text-justify">Such partner will Quantum will get a collaborate with professional team who use latest technologies to create final results and will make sure you always move ahead in this race.</p>
                    </div>  
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <div class='why-section mt-5'>
                            <h5 class="mb-3">Why Partner with us?</h5>
                            <ul style="list-style-type:disc">
                                <li>Global clientele</li>
                                <li>Revenue opportunities</li>
                                <li>Lower Risks</li>
                                <li>Technical support</li>
                                <li>Brand association</li>
                                <li>Promotional opportunities</li>
                                <li>Resources and tools</li>
                                <li>Non-competitive relationship</li>
                            </ul>
                        </div>
                    </div>
                </div>        
        </div>
        <div class="feature-large-images-wrapper section-space--pb_100 mt-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center section-space--mb_60">
                            <h6 class="section-sub-title mb-20">Partnership we Offer</h6>
                            <!--<h3 class="heading">Share the joy of achieving <span class="text-color-primary"> glorious   <br> moments</span> & climbed up <span class="text-color-primary">the top.</span></h3>-->
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

                <div class="cybersecurity-about-box">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 offset-lg-1">
                            <div class="modern-number-01 number-two">
                                <h2 class="heading  mr-5"><span class="mark-text">10</span>Years’ Experience in IT</h2>
                                <h5 class="heading mt-30">We’ve been triumphing all these <span class="text-color-primary"> 10 years. </span> Sacrifices are made up with success. </h5>
                            </div>
                        </div>

<div class="col-md-6 mt-5">
                      <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn-new" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Offshore Partnership

                  </button> </h5>
                    <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></i>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
         <p style="margin:0;">We ensure the best services to our clients or partners and assure a high-quality product. Promised on-time delivery and use of latest technologies by our employees, keeps you well ahead of your competitors. Working together always combines the experience of both companies, in turn, being beneficial for both. Another advantage of working with us is that you don’t have to worry about our part and can focus on your business.</p>

                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #fff;">
         Referral Partnership
                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"></i>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
         <p>As our clients and partners, you can reward us for our services. Help Quantum grow by referring it to other companies. In turn, we will reward you by paying you for your loyalty as your commission. Being our referral partners would also give you a special place in the list of our clients. Known for our IT solutions and technical support, we will provide you with the best that we can. Also, we would always keep you updated about the latest technologies that could, in any way, do good to your business. This give-and-take partnership would certainly benefit both brands</p>

                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #fff;">
               Re-seller Partnership

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"></i>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
     <p style="margin: 0px;"> Quantum is known for its services. We value our clients the most and do not let them down. If you are in a reseller partnership with us, we will give you many benefits. We will find the most cost effective ways to complete your project without letting the quality suffer. As we will work together, we will understand your requirements and deliver the awaited results. From one project to other, our team of experts comprises of all kinds of developers and the best part is that you can choose the ones you prefer the most. Keep working with us for an unmatched experience.</p>
    
                </div>
              </div>
            </div>

             <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: #fff;">
        Joint Venture

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"></i>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
           <p style="margin: 0px;"> By joining hands with us, you will get to work with a reliable team of professionals who use latest technologies and bring out the desired results for you. With the amount of experience we have in the industry, we will certainly help you expand your network. Also, we will always keep you a step ahead of your competition as our employees would keep a regular check on their work. A collaboration with you would mean a great opportunity for both the companies to learn from each other and build a strong bond which will be beneficial for both the brands.</p>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

        <!--===========  feature-large-images-wrapper  End =============-->


        <!--=========== fun fact Wrapper Start ==========-->
        <div class="fun-fact-wrapper bg-theme-default section-space--pb_5 section-space--pt_60">
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
  
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->
    
    
    
    <!-- Start Brand Section Area -->
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
    <!-- End Brand Section Area -->

</div>


@endsection