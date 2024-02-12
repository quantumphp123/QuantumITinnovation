@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact US : See Our Worldwide Presence | Quantum IT Innovation</title>
    <meta name="keywords" content="Contact us">
	<meta name="description" content="See our Contact page, You will know Our Worldwide Presence. To know more ask us.">
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<div class="site-wrapper-reveal">

        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-area service-contact-bg section-space--ptb_100">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <h4 class="text-center set-heading pt-2" style="background-color: #fff">Our Presence</h4>
                    <img src="{{asset('assets/img/service-images/Capture.png')}}" class="img-fluid " style="border-bottom-left-radius: 0.4rem;border-bottom-right-radius: 0.4rem;">
                </div>

                <div class="col-lg-5 ml-auto pd-l-0">
                    <div class="contact-form-service-wrap contact-us-form" style="padding: 5px 21px 0px 23px !important;">
                        
                          @if(Session::has('success'))
                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                            @endif

                        <div class="contact-title text-center section-space--mb_">
                            <h4 class="">Get In Touch</h4>
                            <p class="text">Tell us what's on your mind and we'll get right back to you !</p>
                        </div>
                        <form  method="post" action="{{ route('user_post_inquiry') }}" 
                         class="form p-t-20 needs-validation" novalidate>
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
                                <div class="contact-inner contact-message" style="margin : 0px 0 17px!important;">
                                    <textarea name="description" placeholder="Please describe what you need."></textarea>
                                </div>
                                <div class="submit-btn text-center">
                                    <button class="ht-btn ht-btn-md cust-height-btn" type="submit" style="height: 31px !important;">Send message</button>
                                    <p class="form-messege"></p>
                                </div>
                                
                                <br />
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