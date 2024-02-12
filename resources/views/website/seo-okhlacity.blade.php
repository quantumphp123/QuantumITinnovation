@extends('website.layouts.master') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Oklahoma City SEO Expert | SEO Company Oklahoma City | Quantum IT</title>
    <meta name="keywords" content="Oklahoma City SEO Expert,  SEO Company Oklahoma City">
	<meta name="description" content="Quantum It Innovation is rated as the best SEO company Oklahoma City. Our SEO Packages start @ 175/M. Call + 18778773644 to get Oklahoma City SEO Expert advice.">
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
<!---------modal--------------->
 <div class="title_image" role="listbox" style="background-image:url({{asset('assets/images/3.jpg')}});">
            <div class="carousel-caption text-left">
                <div class="animated fadeInDown">
                    <h1 class="title_h1 h1_banner">Internet of Things <br> (IoT) Services</h1>
                    <div id="line"></div>
                     <div class="row">
                        <div class="col-lg-7">
                            <p class="text-white title_p">
                                <span>Empowering businesses and industries to shape the future with the Internet of Things. Make things happen.</span>
                            </p>
                            <div class="button_cont">
                                <div class="eft-1"></div>
                              <a href="{{url('/contact')}}" class="f-btn">Hire Developers</a>
                              <a href="{{url('/contact')}}" class="f-btn">Discuss your Project</a>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>

    <section class="py-0 pb-5">
      <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Choose the Best SEO Company Oklahoma City</h2>
                    </div><!--12-->



          <div class="col-md-12 col-12">
                    <div class="top-box-content">
    <p>Oklahoma City is the fastest growing American city,  it’s a city of great importance and has everything from outstanding attractions, amazing people, rich history and the backbone, all the successful businesses that run here.</p>

<p>If you have a new business or an existing one, you definitely need to incorporate the Digital marketing Strategies in it, specifically “SEO”.</p>

<p>In the Oklahoma City, if you look at the Statistics, 96% of people own a PC, 65% is having a tablet and 81 % is having a Smartphone, on which they actively perform Local searches to purchase things and looks for services.</p>

<p>See, how much growth opportunity your business has in the Oklahoma city.
So, Choose Quantum IT Innovation, we are the best SEO, website, and app development company and serve in other parts like Fresno, Indianapolis and even takes the project on a worldwide level we have a stronghold in the USA, Uk, Singapore Hongkong, and India.</p>

<p>So what are your waiting for, We will do the perfect and profitable SEO of your business and rank your website fast in the first page of search engine.</p></div><!--12-->
  </div>
        </div><!--row-->
      </div><!--cont-->
    </section>



    <section class="py-0 pb-5">
      <div class="container">
        <div class="row">
         <div class="col-md-12 text-center">
                  <h2 class="top-head">
        Why at first page ?- Oklahoma city SEO</h2> </div><!--12-->
        <div class="col-md-7 mt-4">
          <p class="para-s">Ok, Let’s take your example?  whenever you look for anything to read or purchase on the internet, have you ever see or go to the 2nd page…  NO!,  statistics say that in 90% of cases people not even look to the complete suggestions on the first page. that why the ranking in the first page and in the top 5 positions so vital.</p>

<p class="para-s">To do so, we will optimize your website and make it SEO friendly, to all the 200 SEO factors, websites which are up on the all the factors, Search engines give them the prime position.</p>

<p class="para-s">Being a Top SEO service company in the USA and have the wide experience of working with more than 1000 of business, makes us the perfect choice for your business and promises you that our SEO experts will rank your website on the first page results in the Oklahoma City.</p>
        </div><!--6-->
              <div class="col-md-5">
            <img src="{{asset('assets/images/seo-okhla.jpg')}}" class="industry-one" title="automation">
                    </div><!--4--> 
        </div><!---row-->
      </div><!--cont-->
    </section>
      <section class="pb-5 process-banner">
            <div class="container">
              <div class="row">
                   <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Want to rank your website on the 1st page of search engines?</h2>
               
                 </div><!--12--> 
<div class="col-md-12 text-center">
    <p style="color: #000; font-weight: bold;">We will do it for you, by our formula of SEO success !!
This is the same formula we have applied to rank the website of 1000’s of clients in the Oklahoma City and all over the USA.</p>

<button class="new-btn-seo text-center mt-4"> Seo Formulae<i class="fas fa-arrow-alt-circle-right" id="left-arrow-s"></i></button>
</div><!--12-->

      
          </div><!--row-->
         </div><!--cont-->
    </section>

<!----------------end------------------->


            <section class="main-top" style="background-color: #fff;">
              <div class="container">
              <div class="row">
          <div class="col-md-12 text-center">
  <img src="{{asset('assets/images/Infographic-new.png')}}" class="seo-rotate" title="seo">
   
        </div>
        
              
        </div><!--row-->
    </div><!--cont-->
</section>



<section class="py-0" style="background-color: #f7f7f7;">
<div class="container">
  <div class="row">
        <div class="col-md-12 text-center">
                  <h2 class="top-head">
      How much traffic and sales your website get after Oklahoma City SEO?</h2> </div><!--12-->
    <div class="col-md-6 mt-5">
      <img src="{{asset('assets/images/seo-oklahoma-bar.png')}}" title="seo-bar" style="width: 100%;">
      </div>
      <div class="col-md-6 mt-5">
<p style="padding:5px 20px;">1st-page&nbsp;position in search engines is the dream of many companies in Oklahoma City. Well, why not, its the opportunity for a huge amount of traffic, leads and conversions.&nbsp;But do you know that every keyword in which a website rank gets a different amount of traffic,</p>
<p style="padding:0px 20px;">let’s take an example:</p>
<p style="padding:0px 20px;">For the “Doctors in Oklahoma” keyword</p>
<p style="padding:0px 20px;">It is getting 70 monthly searches which increase to 110 in the April month</p>
<p style="padding:0px 20px;">So the website which ranks higher will get the most amount of traffic!</p>

    </div>
      <div class="col-md-6 mt-5">
<p style="padding:5px 0px;">1st-page&nbsp;position in search engines is the dream of many companies in Oklahoma City. Well, why not, its the opportunity for a huge amount of traffic, leads and conversions.&nbsp;But do you know that every keyword in which a website rank gets a different amount of traffic,</p>
<p style="padding:0px 0px;">let’s take an example:</p>
<p style="padding:0px 0px;">For the “Doctors in Oklahoma” keyword</p>
<p style="padding:0px 0px;">It is getting 70 monthly searches which increase to 110 in the April month</p>
<p style="padding:0px 0px;">So the website which ranks higher will get the most amount of traffic!</p>

    </div>
     <div class="col-md-6 mt-5">
      <img src="{{asset('assets/images/seo-oklahoma-bar-2.png')}}" title="seo-bar" style="width: 100%;">
      </div>
  </div>
</div>
</section>


       <div class="why-choose-us mt-5" style="background-image:url(assets/img/Group-new.png);">
                    <div class="container pt-5 pb-5">
                        <h5 class="clr-wht text-center mb-3">Why choose Quantum IT for the Internet of Things (IoT)?</h5>
                        <i class="fas fa-circle" id="circle"></i>
                        <p class="txt-wht">Internet of things (IoT) is a system where physical objects and devices are connected via the internet empowering an ecosystem. These objects can gather data using a network without any manual assistance. </p>
                        <i class="fas fa-circle" id="circle"></i>
                        <p class="txt-wht">Quantum IT Innovation is a leading IoT company, which provides services to the organization enabling them to convert business needs into competitive advantages by giving IoT solutions. Quantum provides seamless IoT driven services to the clients including the integration of right censor, deriving insights and selecting the best development platform. These services further allow the companies to focus primarily on their outcomes while digital transformation being handled. Quantum is the top IoT company that provides immense benefits to the organizations with the help of their IoT solution portfolio, which includes gateways, coverage over censor, connectivity, cloud user experience, and analytics. Moreover, quantum’s IoT solutions help the companies to improve cost efficiency, business value, increase efficiency and reduce operations. In order to provide the best IoT solutions, quantum has collaborated with top innovators such as Microsoft, Azure, AWS IoT, MongoDB, WindRiver and Intel. </p>
                    </div>
                </div>

                <div class="brand-logo-slider-area section-space--ptb_60">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-12">
                          <!-- brand logo slider -->
                          <div class="brand-logo-slider__container-area">
                              <div class="swiper-container brand-logo-slider__container swiper-container-initialized swiper-container-horizontal">
                                  <div class="swiper-wrapper brand-logo-slider__one" style="transform: translate3d(-2400px, 0px, 0px); transition-duration: 1000ms;"><div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/2.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g2.jpg" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div><div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/3.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g3.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div><div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/4.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g4.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div><div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/5.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g5.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div><div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="5" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/6.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g6.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div><div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="6" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/7.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g7.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div>
                                      <div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/1.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g1.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div>
                                      <div class="swiper-slide brand-logo brand-logo--slider" data-swiper-slide-index="1" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/2.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g2.jpg" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div>
                                      <div class="swiper-slide brand-logo brand-logo--slider" data-swiper-slide-index="2" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/3.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g3.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div>
                                      <div class="swiper-slide brand-logo brand-logo--slider" data-swiper-slide-index="3" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/4.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g4.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div>
                                      <div class="swiper-slide brand-logo brand-logo--slider" data-swiper-slide-index="4" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/5.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g5.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div>
                                      <div class="swiper-slide brand-logo brand-logo--slider swiper-slide-prev" data-swiper-slide-index="5" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/6.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g6.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div>
                                      <div class="swiper-slide brand-logo brand-logo--slider swiper-slide-active" data-swiper-slide-index="6" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/7.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g7.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div>
                                  <div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/1.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g1.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div><div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate" data-swiper-slide-index="1" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/2.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g2.jpg" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div><div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/3.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g3.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div><div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/4.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g4.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div><div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate" data-swiper-slide-index="4" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/5.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g5.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div><div class="swiper-slide brand-logo brand-logo--slider swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="5" style="width: 170px; margin-right: 30px;">
                                          <a href="#">
                                              <div class="brand-logo__image">
                                                  <img src="assets/images/brand/real/6.png" class="img-fluid" alt="">
                                              </div>
                                              <div class="brand-logo__image-hover">
                                                  <img src="assets/images/brand/gray/g6.png" class="img-fluid" alt="">
                                              </div>
                                          </a>
                                      </div></div>
                              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                          </div>
                      </div>
                  </div>
              </div>
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