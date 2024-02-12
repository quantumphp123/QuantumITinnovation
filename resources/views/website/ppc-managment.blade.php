@extends('website.layouts.master2') 
@section('content')

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <title>Contact | Quantum IT Innovation</title>
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
    <section class="py-0 pb-5">
      <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">PPC Management Services</h2>
                    </div><!--12-->



          <div class="col-md-12 col-12">
                    <div class="top-box-content">
    <p>Pay per click (PPC) is the process to gain online visibility on search engines via paid advertising. PPC characterize with some benefits like Geo-targeted provisions, instant results, affordable prices, high- value keywords and custom scheduling as per user’s searches.</p>

<p>We at Quantum IT Innovation have a team of PPC experts who have all the know-how of the intricacies involved in paid and organic marketing in search engines. Quantum IT is one of the best PPC Campaign Management Services Company office on USA, UK and India. We are adherent to a proactive and experienced team who has proven excellence in providing successful Pay Per Click (PPC) Services, Remarketing Strategies to the clients. We believe in attaining a high score in Quality Metrics so our clients can get top position on Google even while spending lesser bidding amount and achieve the Return on Ads Spends (ROAS).</p></div><!--12-->
  </div>
        </div><!--row-->
      </div><!--cont-->
    </section>



    <section class="py-0 pb-5">
      <div class="container">
        <div class="row">
         <div class="col-md-12 text-center">
                  <h2 class="top-head">
       Google certified PPC AdWords Management Company</h2> </div><!--12-->
        <div class="col-md-12 mt-4">
          <p class="para-s">AdWords which comes under search engine marketing is the most efficient and quickest way to increase business with better ROI. The beauty of paid advertising is that you can target the audience by their behavioral, demographics, interest, location, and also when he/she are searching for a product or service.  And you will only be charged when someone click your ad and landed to your website. We are the best PPC Management Company worked with many brands and handled budget in million for search engine advertising.</p>
        </div><!--12-->
         
        </div><!---row-->
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

<!-----------------services--------------------->

<section class="py-0">
<div class="container">
    <div class="row">
          <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Our Range of PPC Advertising Services</h2>
               
                 </div><!--12--> 
        <div class="col-md-4 col-12 col-sm-12 mt-3">
            <div class="serviceBox grey">
                <div class="service-content">
                    <i class="fa fa-rocket"></i>
                    <h3 class="title">Search Advertising</h3>
                    <p class="description">
                        Search advertising is an important PPC advertising strategy and has expertise with uses of different terms like Paid Search, SEM, etc. to drive maximum benefit. The best part is that you don’t pay for the ad to be only shown but when someone tap and visit to your website. It serves the text ads on Search Engine Result Page (SERP).
                    </p>
                </div>
                <i class="fa fa-rocket icon-bg"></i>
            </div>
        </div>
 
        <div class="col-md-4 col-12 col-sm-12 mt-3">
          <div class="serviceBox grey">
                <div class="service-content">
                    <i class="fa fa-briefcase"></i>
                    <h3 class="title">Display Advertising</h3>
                    <p class="description">
                     Display Advertising gives digital marketers enormous power in the form of fantastic reach by placing banner, image, video, rich media, flash and responsive text ads. We build more recognition, brand value, engagement, and growth with the display at the right place & frequency to grab the attention of the right audience.
                    </p>
                </div>
                <i class="fa fa-briefcase icon-bg"></i>
            </div>
        </div>
            <div class="col-md-4 col-12 col-sm-12 mt-3">
            <div class="serviceBox grey">
                <div class="service-content">
                    <i class="fa fa-briefcase"></i>
                    <h3 class="title">Social Media Advertising</h3>
                    <p class="description">
                    We are a top agency for PPC advertising so leverage your social media campaign for more loyalty, more recognition and more prospects.  We know how to increase content virtually, increase engagement, optimize spends& drive more leads/sales with better audience targeting on all popular social platforms.
                    </p>
                </div>
                <i class="fa fa-briefcase icon-bg"></i>
            </div>
        </div>
            <div class="col-md-4 col-12 col-sm-12 mt-3">
            <div class="serviceBox grey">
                <div class="service-content">
                    <i class="fa fa-briefcase"></i>
                    <h3 class="title">  
Google Shopping Ads</h3>
                    <p class="description">
                    We optimize your Product Listing (PLA) Ads to work with current campaigns and goals for online retail marketing, ecommerce business and sell your products to online customers. We help our eCommerce clients get the best ROI from our services by focusing on improving key metrics like average order values, repeat orders.
                    </p>
                </div>
                <i class="fa fa-briefcase icon-bg"></i>
            </div>
        </div>
            <div class="col-md-4 col-12 col-sm-12 mt-3">
           <div class="serviceBox grey">
                <div class="service-content">
                    <i class="fa fa-briefcase"></i>
                    <h3 class="title">Mobile Advertising</h3>
                    <p class="description">
                  Mobile Ads are the easiest and most cost-effective way to connect with the large audience. We are here to deliver results on all devices (smartphone, iPhones, Tablets) and locations. Grasp billions of prospects with our mobile ad campaigns. We know the latest, fastest strategies; you just get ready for increase business.
                    </p>
                </div>
                <i class="fa fa-briefcase icon-bg"></i>
            </div>
        </div>
           <div class="col-md-4 col-12 col-sm-12 mt-3">
           <div class="serviceBox grey">
                <div class="service-content">
                    <i class="fa fa-briefcase"></i>
                    <h3 class="title">  
Remarketing Services</h3>
                    <p class="description">
                 Remarketing is a smart technique which will let you show ads to users who have earlier visited your website. It exhilarates users to return on website by gently prompting and reminding them with relevant ads. The “reminder” ads will be shown on bases of their search patterns and previous interaction with your website.
                    </p>
                </div>
                <i class="fa fa-briefcase icon-bg"></i>
            </div>
        </div>
    </div>
</div>
</section>
<!-----------------sevices-end------------------>
<section class="main-top" style="background-color: #fff;">
              <div class="container">
              <div class="row">
                <div class="col-md-12 mt-3 text-center">
                  <h2 class="top-head">

PPC Campaign Management Strategies</h2>
                
                </div><!--12-->
<div class="col-md-12 mt-4">
  <div class="row">
          <div class="col-md-1">
            <div class="side-bar" style="float: left;
            min-height: 0px; width: 100%;
           ">
<div class="bullet-text-center"><i class="fas fa-stop-circle"></i></div>
    <div class="border-side text-center"></div>
    <div class="bullet-text-center"><i class="fas fa-stop-circle"></i></div>
    <div class="border-side text-center"></div>
    <div class="bullet-text-center"><i class="fas fa-stop-circle"></i></div>
    <div class="border-side text-center"></div>
    <div class="bullet-text-center"><i class="fas fa-stop-circle"></i></div>
    
   
        </div>
          </div>
                
                  <div class="col-md-11 col-12">
                    <div class="row mt-1">
                    <div class="box-side-seo pb-2" style="box-shadow: none !important;">
                        <h4 class="center-a-s">Strategic Transactional Keyword Recommendations</h4>
                         <div class="side-content-d">
                      <p>Our PPC experts use professional tools to do pervasive keyword identification, analysis and selection for your business. These keywords will give you a larger number of inquiries in competitive prices. Most often, those keywords go beyond the obvious, grouped theme bases which help you to optimize which keywords are better or not.
                       </p>
                      </div><!--side-contewnt-->
                 </div>
                          <div class="box-side-seo pb-2 mt-3" style="box-shadow: none !important;">
                        <h4 class="center-a-s">Bid Management & Optimization</h4>
                         <div class="side-content-d">
                      <p>Our experts will bid only on keywords that are likely to give you great ROI and brand value. These bids are monitored intently with significance on keywords that have most targets and least competitively with higher position on SERP. We continuous tracking of ad performance and optimize bid at many levels
                       </p>
                      </div><!--side-contewnt-->
                 </div>

                  <div class="box-side-seo pb-2 mt-3" style="box-shadow: none !important;">
                        <h4 class="center-a-s">Ads Copywriting & Optimization</h4>
                         <div class="side-content-d">
                      <p>Our in-house content writers write ad copy that is impressive, effective and catchy. A compelling title and description are as feasible to get you clicks as an effective keyword in a PPC campaign, which help to get more CTR, better quality score and more engagement with prospects.
                       </p>
                      </div><!--side-contewnt-->
                 </div>
                  <div class="box-side-seo pb-2 mt-3" style="box-shadow: none !important;">
                        <h4 class="center-a-s">Performance Reporting</h4>
                         <div class="side-content-d">
                      <p>As part, our PPC management all campaign reports are routinely documented and shared with clients. We monitor and analysis ROI closely and tweaked the campaign according to latest trends in the report. Clients can view performance data for all keywords which include ROI, click through rate and traffic reports month-wise.
                       </p>
                      </div><!--side-contewnt-->
                 </div>
                </div><!--11-->
             </div>
           </div>
         </div>
        </div><!--row-->
    </div><!--cont-->
</section>

 <section class="pb-5 accordion-tab" style="background-color: #fff;">
            <div class="container">
            <div class="row">
              <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Rank your website at the Top of Google’s Everest
    Our SEO formula</h2>
                   
                  </div><!--12-->

                    <div class="col-md-6 mt-5">
                      <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn-new" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
             Dedicated Account Manager

                  </button> </h5>
                    <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></i>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
         <p style="margin:0;">We assigned Dedicated Account Manager assigned to each project, if the project is bigger or give more time to manage.</p>

                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #fff;">
           Auction In Market
                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"></i>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
         <p>PPC advertisements can be launched speedily unlike SEO. We bring organic leads and better-targeted traffic to your website at an affordable cost.</p>

                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #fff;">
          Increased Visibility

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"></i>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
     <p style="margin: 0px;"> We enable you to establish your company as the market leader as well as expanding your business with more customers by helping you gains better online visibility.</p>
                </div>
              </div>
            </div>

             <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: #fff;">
Geographical Targeted Ads

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"></i>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
           <p style="margin: 0px;"> We manage PPC ads geographically. It means to say that the targeting can be followed by country, state or city that will appear only to the potential customers of a particular area.</p>
                </div>
              </div>
            </div>


               <div class="card">
              <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="color: #fff;">
   Maximise ROI

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix"></i>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                  <p style="margin: 0px;">We ensure more clicks on per advertisement which results in maximum Return on Investment (ROI) with better traffic at your website with comprehensive transformational analysis and ad testing plans by our PPC experts, because every penny we spend is fully accounted.</p> 
                </div>
              </div>
            </div>


               <div class="card">
              <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="color: #fff;">
         Reporting

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven"></i>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body">
                  <p style="margin: 0px;">We give 100% transparency with ownership of data in report. You will get every 15 days and month-wise report with comparison.</p>


                </div>
              </div>
            </div>
            </div>
         </div><!--8-->

         <div class="col-md-6 mt-5">
                      <img src="#" class="industry-one" title="automation">
                    </div><!--4-->            
               
            </div><!--row-->
            </div><!--cont-->
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