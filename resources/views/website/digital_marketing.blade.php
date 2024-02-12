@extends('website.layouts.master') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Top Digital Marketing Agency in USA | Digital Marketing Services in USA, UK</title>
    <meta name="keywords" content="Top Digital Marketing Agency in USA, Digital Marketing Services in usa, Digital Marketing Company">
	<meta name="description" content="Quantumitinnovation is an award-winning, top Digital Marketing Agency in USA, UK & India. Our client-centric & multi-channel approach focuses on delivering outstanding results complete range of Digital Marketing services.">
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
              <h4 class="modal-title text-white ml-auto">Leave A Message</h4>
              <img src="{{asset('assets/images/mobile-icon.gif')}}" class="mobile-i" title="automation">
              <button type="button" class="close text-white" data-dismiss="modal">×</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <form action="#" method="POST" id="leavemessage">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                        <span class="small-icon"><i class="fas fa-user"></i></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
                        <span class="small-icon"><i class="fas fa-envelope-open"></i></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" id="phone" onkeypress="return isNumber(event)" class="form-control" placeholder="Enter Contact">
                        <span class="small-icon"><i class="fas fa-mobile-alt"></i></span>
                    </div>
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
                        <textarea name="lt_message" placeholder="Message Here.." style="width: 100%;border: 1px solid #ccc;padding: 3px 11px;font-size: 15px;font-weight: 500;"></textarea>
                    </div>
                    <button class="center-button mx-auto my-2" name="GetStarted"><a>Submit</a></button>
                </form>
            </div>
        </div>
    </div>
</div>
    <div class="main-modal">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="height: 228px;margin-top: 6em;width: 44px;border: 1px solid;letter-spacing: 1px;font-size: 19px;color: #000;background-color: #fff;text-transform: uppercase;padding: 0.78rem 0.35rem 0px 0px;border-radius: 25px 0 0 25px;">
            <span style="writing-mode: vertical-rl;text-orientation: mixed;">Let's Connect</span>
            <i class="fas fa-envelope" id="email-id"></i>
        </button>
    </div>
<!---------modal--------------->
<div class="title_image" role="listbox" style="background-image:url({{asset('assets/images/3.jpg')}});">
            <div class="carousel-caption text-left">
                <div class="animated fadeInDown">
                    <h1 class="title_h1 h1_banner">Digital Marketing<br>Services</h1>
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


            <section class="main-top" style="background-color: #fff;">
              <div class="container">
              <div class="row">
                <div class="col-md-12 mt-3 text-center">
                  <h2 class="top-head">

 Our Guaranteed Digital Marketing Services</h2>
                 
                </div><!--12-->
                  <div class="col-md-4 col-12 mt-5">
                    <div class="box-side-a">
                      <div class="one-box-a">
                        <div class="main-icon-center text-center">
                     <img src="assets/images/icon_portal_design.png" id="icon-top-d" title="automation"> 
                 </div>
                        <h4 class="center-a-s-center">Search Engine Optimization</h4>
                         <div class="side-content-d-main">
                      <ul class="side-center">
                        <li>E commerce SEO</li>
                         <li>Global & Local SEO</li>
                          <li>Enterprise SEO</li>
                           <li>Local SEO</li>
                            <li>Voice SEO</li>
                             <li>App Store Optimization</li>
                              <li>Online Reputation Management</li>
                      </ul>
                      </div><!--side-contewnt-->
                     
                      </div><!--one-box-->
                 </div>
                </div><!--4-->

    <div class="col-md-4 col-12 mt-5">
                    <div class="box-side-a">
                      <div class="one-box-a">
                        <div class="main-icon-center text-center">
                      <img src="assets/images/ppc.png" id="icon-top-d" title="automation"> 
                 </div>
                        <h4 class="center-a-s-center">Pay Per Click Advertisement</h4>
                         <div class="side-content-d-main">
                     <ul class="side-center">
                        <li>Search Advertising</li>
                         <li>Display Advertising</li>
                          <li>Mobile Advertising</li>
                           <li>Email Marketing</li>
                            <li>Lead Generation</li>
                             <li>Re-marketing</li>
                              <li>Conversion Rate Optimization</li>
                      </ul>
                      </div><!--side-contewnt-->
                     
                      </div><!--one-box-->
                 </div>
                </div><!--4-->


              <div class="col-md-4 col-12 mt-5">
                    <div class="box-side-a">
                      <div class="one-box-a">
                        <div class="main-icon-center text-center">
                        <img src="assets/images/Mobile.png" id="icon-top-d" title="automation"> 
                 </div>
                        <h4 class="center-a-s-center">Mobile App Development</h4>
                         <div class="side-content-d-main">
                      <ul class="side-center">
                        <li>Android App Development</li>
                         <li>iOS App Development</li>
                          <li>iPhone App Development</li>
                           <li>Swift App Development</li>
                            <li>Cross Platform App Development</li>
                           
                      </ul>
                      </div><!--side-contewnt-->
                     
                      </div><!--one-box-->
                 </div>
                </div><!--4-->

               <div class="col-md-4 col-12 mt-5">
                    <div class="box-side-a">
                      <div class="one-box-a">
                        <div class="main-icon-center text-center">
                         <img src="assets/images/Facebook-Marketing.png" id="icon-top-d" title="automation"> 
                 </div>
                        <h4 class="center-a-s-center">Social Media Marketing</h4>
                         <div class="side-content-d-main">
                     <ul class="side-center">
                        <li>Facebook Marketing</li>
                         <li>LinkedIn Marketing</li>
                          <li>Twitter Marketing</li>
                           <li>Instagram Marketing</li>
                           
                      </ul>
                      </div><!--side-contewnt-->
                     
                      </div><!--one-box-->
                 </div>
                </div><!--4-->


                 
               <div class="col-md-4 col-12 mt-5">
                    <div class="box-side-a">
                      <div class="one-box-a">
                        <div class="main-icon-center text-center">
                    <img src="assets/images/Visual-Marketing-1.png" id="icon-top-d" title="automation"> 
                 </div>
                        <h4 class="center-a-s-center">Content Marketing</h4>
                         <div class="side-content-d-main">
                      <ul class="side-center">
                        <li>Guest Writing</li>
                         <li>Article & Blog Writing</li>
                          <li>SEO Copy-writing</li>
                         
                      </ul>
                      </div><!--side-contewnt-->
                     
                      </div><!--one-box-->
                 </div>
                </div><!--4-->


                 <div class="col-md-4 col-12 mt-5">
                    <div class="box-side-a">
                      <div class="one-box-a">
                        <div class="main-icon-center text-center">
                         <img src="assets/images/joomla-main.png" id="icon-top-d" title="automation"> 
                 </div>
                        <h4 class="center-a-s-center">Website Development</h4>
                         <div class="side-content-d-main">
                      <ul class="side-center">
                        <li>Website Design & Development</li>
                         <li>Mobile friendly Website Development</li>
                          <li>E-commerce Website Development</li>
                          
                      </ul>
                      </div><!--side-contewnt-->
                     
                      </div><!--one-box-->
                 </div>
                </div><!--4-->

                 
              </div><!--row-->
              </div><!--cont-->
            </section>



    <section class="py-0" style="background-color: #fff;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Top Rated Digital Marketing Agency with World Wide Presence</h2>
                </div><!--12--> 
                <div class="col-md-12 col-12">
                    <div class="top-box-content">
                        <p> Digital marketing is trending day by day not only for business but also for jobs oriented. It is like an umbrella, which is also known for Data-Driven Marketing. A professional, an entrepreneur needs to learn because it has more than 15 strategy types which result surprising in boosting your business. It has vast targeting all over the worlds through mobiles, smartphones, tablets, computers via internet for the marketing of products and services.</p>
                        <br>
                        <p>If you wish to see your business growing on the internet, then being a top digital marketing Agency in USA we will ake it to the next level. We helped and guided to the numerous brands. We have a certified team of professionals who are industry experts. You can be assured of the outcomes of your Digital Marketing Campaign will bring you to the next level.</p>
                        <br>
                        <p>Top digital Marketing Agency in USAAs a leading top Digital Marketing Agency in USA, UK & India our clientele is spread across the world. We help your website get found the first page in all search engines. We at Quantumitinnovation always try to provide the best Digital Marketing Services to our customers and that makes satisfy them. Our Online Marketing services include search engine optimization, Local SEO, Voice SEO, Google Advertising, PPC Services, eCommerce marketing, Online Reputation Management (ORM), Social Media Marketing etc.</p>
                        <br>
                        <p>We have a long history of delivering successful business outcomes through digital marketing services for clients from diverse industry to verticals. Our goal is to going above with our clients and beyond to deliver results.</p>
                        <br>
                        <p>We Build Website and Mobile Apps for Every User, Every Platform and Every Industry. We are capable of designing & developing fully customized websites, apps, and software. No technology is left untouched because we adopt new trends & technologies that change with time and market demands. We use SEO friendly approach & user-friendly interface that will offer you the most amazing web experience also helps in ranking on multiple search engines. Being a top Digital Marketing Agency in USA we know all the rules and regulation of developing a website and promoting your business that very well interact with the search engine and helps in better ranking from the beginning.Our advanced approach & vast experience will rank you on the top of the searches. We’ve worked with infinite possibilities not only in the mobile app but also web development.</p>
                        <a class="side-btn-seo mt-4" href="{{ route('contact') }}">
                            Free Analysis Seo<i class="fas fa-arrow-alt-circle-right" id="left-arrow-s"></i>
                        </a>
                    </div><!--12-->
                </div><!--col-12-->
              
            </div><!--row-->
        </div><!--cont-->
    </section>

    <section class="pb-5 mt-4 accordion-tab" style="background-color: #fff;">
        <div class="container">
        <div class="row">
          <div class="col-md-12 mt-3 text-center">
                <h2 class="top-head">Why, we are trusted & top Digital Marketing Agency in USA</h2>
              </div><!--12-->
                <div class="col-md-6 mt-5">
                  <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn-new" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            9+ years of experience

              </button> </h5>
                <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></i>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
     <p>We have over 9+ years of experience in delivering effective Digital Marketing services including SEO, PPC, SMO, SMM, advertising for clients from different industries. Throughout this period, we have proven track records of delivering the projects of any requirement and complexity within a given time.</p>

            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #fff;">
         Highly Skilled and Experienced Team
              </button></h5>
              <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"></i>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
        <P>We are a team of 150+ highly skilled and experienced professionals that include SEO specialists, Web designers & Business analysts and Digital Marketers and are well-versed with all the major digital marketing strategies & trends. They very well know what exactly will work for you and what not, what are your targeting audiences, industry, and deliverables.</P>

            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #fff;">
    99% Customer satisfaction

              </button></h5>
              <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"></i>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              <p>Being a top digital marketing agaency in USA, customer satisfaction is our primary motto. In the past 9 years, we have delivered 400+ Digital Marketing projects to 180+ clients from worldwide and earn a reputation that sets a milestone. We feel proud and blesses that our customers keep coming back to us for services and solutions.</p>
            </div>
          </div>
        </div>

         <div class="card">
          <div class="card-header" id="headingFour">
            <h5 class="mb-0">
              <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: #fff;">
   Quality Focused and reversed driven approach

              </button></h5>
              <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"></i>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
               <p> Our team delivers quality focused services with proven methodologies and our results-driven approach to our clients. We first understand the client’s requirements and then create the best strategic actionable plan. We treat each and every project in right manner that passes through testing, positioning, monitoring etc. We work to take your business to the next level.</p>
            </div>
          </div>
        </div>


         <div class="card">
          <div class="card-header" id="headingFive">
            <h5 class="mb-0">
              <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="color: #fff;">
       Competitive pricing and packages

              </button></h5>
              <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"></i>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
              <p>There are many Web Development & Digital Marketing Agency in USA but we are the best. See our portfolio you’ll know the reality. Quantum IT Innovation offers competitive pricing and custom packages for customers to give result oriented services. We use the best optimal approach for clients to get high return on investment.</p>
            </div>
          </div>
        </div>


         <div class="card">
          <div class="card-header" id="headingSix">
            <h5 class="mb-0">
              <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="color: #fff;">
       We Work for Every plateform and Industry

              </button></h5>
              <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix"></i>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body">
              <p>We are capable of designing & developing fully customized websites, mobile apps, and software with SEO & user-friendly interface.</p>
            </div>
          </div>
        </div>
      </div>
   </div><!--6-->
   <div class="col-md-6">
    <img src="{{asset('assets/images/137 SEO.jpg')}}" class="industry-one" title="automation">
   </div><!--6-->
    </div><!--row-->
  </div><!--cont-->
</section>

    
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