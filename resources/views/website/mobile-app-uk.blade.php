@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Top Mobile App Development Company UK | Quantum IT </title>
    <meta name="keywords" content="Mobile App Development Company UK, Mobile App Development Company in UK, Swift App Development Company UK , Android App Development Company UK, IOS Application Development Company UK">
	<meta name="description" content="We are the leading Mobile App Development Company in UK, We have a wide experience of developing apps in Android, IOS, swift, Cross-platform, Hybrid highly. Ask for a rapid Prototype design. Get your app at an affordable price.<br />
">
@endsection
@section('content')


    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <div class="site-wrapper-reveal" style="margin-bottom:0px !important;">
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
                    <h2 class="top-head">MOBILE APP DEVELOPMENT COMPANY IN UK</h2>
                    </div><!--12-->



          <div class="col-md-12 col-12">
                    <div class="top-box-content" >
        <p>At Quantum IT Innovation we create the award-winning mobile application with the focus to give the best quality at the right cost. With our 9 + years of worldwide app development experience, we able to deliver some of the best projects and made a landmark in the world. We are proud of our designers and developers that passionate to gives the best mobile app development service in the UK.</p>

</div><!--12-->
  </div>
        </div><!--row-->
      </div><!--cont-->
    </section>


 <div class="container mt-5 mb-5 pb-5">
        <h5 class="text-center mb-3">Services offered by our Mobile app development company in UK</h5>
        <p style="text-align: justify;">United Kingdom has always been an epicenter for various technological advancements. Each industry in this country interacts directly with their customers to serve them with the best kind of attention & services but interacting with each individual from mass audiences is still a hard task. Therefore, companies often walk towards the development of customized mobile application that can manage each user’s service at an individual level and the same can be achieved at a threshold level by our mobile app development company in UK.</p>
<p style="text-align: justify;">The demands of people from UK has put our developers in challenging situations but as challenge drags excellence, our app developers has also worked day night to develop the best app in all ways. Some of our services in UK are-.</p>

    </div> 
    <div class="service-section pt-5 pb-5 mt-5 mb-5" style="background-image:url(https://quantumitinnovation.com/assets/img/geo-bg4.jpg);">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-6 col-md-6 mt-2">
                             <div class="row">
                                 <div class="col-lg-2 col-md-2 col-2">
                                     <img src="https://quantumitinnovation.com/assets/img/icons/Fast Forward.png" class="img-fluid">
                                 </div>
                                 <div class="col-lg-10 col-md-10 col-10">
<!--                                      <h6 class="clr-wht"> IOS App Development</h6>
 -->                                     <p class="txt-wht">In the United Kingdom, there are mobile users that use the Android platform due to its ease and extreme efficiency. Due to an increased number of users, our app developers have brought their hands on this platform and are completely aware of the challenges of this platform. </p>
 <p class="txt-wht">The app developed for this platform by our mobile app development company UK is properly tested and optimally designed for proper functioning and management.</p>
                                 </div>     
                             </div>          
                         </div>  
                       <div class="col-lg-6 col-md-6 mt-2">
                            <div class="row">
                             <div class="col-lg-2 col-md-2 col-2">
                                 <img src="https://quantumitinnovation.com/assets/img/icons/Open Communication.png" class="img-fluid">
                             </div>
                             <div class="col-lg-10 col-md-10 col-10">
                                 <!-- <h6 class="clr-wht">Android App Development</h6> -->
                                 <p class="txt-wht"> Our mobile app development company the UK has always chosen this platform to overcome the dilemma between android & ios platform. Being an alternative to C++, and development of the mobile app in less time comparatively, this platform has always been a choice for the app developer to target a mass audience and to rank higher in the market.
                                 </p>
                             </div>
                            </div> 
                         </div>  
                         <div class="col-lg-6 col-md-6 mt-2">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-2">
                                 <img src="https://quantumitinnovation.com/assets/img/icons/Safety &amp; Performance.png" class="img-fluid">
                              </div>
                              <div class="col-lg-10 col-md-10 col-10">
                                 <!-- <h6 class="clr-wht">Swift App Development</h6> -->
                                 <p class="txt-wht">The main feature that can make that app rank higher or is responsible for its failures is a user interface (UI) and user experience (UX) in that app. This decides the app’s fate in the market. The UI & UX should be designed strictly according to the user’s instinct and approach to maximally extract the benefits from a user’s choice and can yield fruitful results.
                                 </p>
                              </div> 
                            </div>  
                         </div>   
                         <div class="col-lg-6 col-md-6 mt-2">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-2">
                                 <img src="https://quantumitinnovation.com/assets/img/icons/Project Planning Process.png" class="img-fluid">
                              </div>
                              <div class="col-lg-10 col-md-10 col-10">
                                 <!-- <h6 class="clr-wht">Cross-Platform App Development</h6> -->
                                 <p class="txt-wht">Developing an application for this platform is not a children’s play as this operates on the different operating system and demand various other factors to check on during development.<br>

Our IT specialists have carefully examined this platform and then came up with the layout to design an app for this platform. Our app developers have happily absorbed this scenario and are ready to develop an application for this platform with recent advances and innovations to incorporate.<br>

Even with the maximum challenges and advancements in this app development platforms, our company have never compromised in quality and promise to do the same in future projects as well.
                                 </p>
                              </div>  
                            </div>  
                         </div>  

                         <div class="col-lg-6 col-md-6 mt-2">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-2">
                                 <img src="https://quantumitinnovation.com/assets/img/icons/Project Planning Process.png" class="img-fluid">
                              </div>
                              <div class="col-lg-10 col-md-10 col-10">
                                 <!-- <h6 class="clr-wht">Cross-Platform App Development</h6> -->
                                 <p class="txt-wht">Developing a mobile application through cross-platform works like a magic sword. Mobile app developers often go for this platform to target a mass audience to interact with an extreme amount of audience in one run.<br>

Due to its ease and functionality of operation on both the platforms such as Android and ios, this has always relieved developers. Our mobile app development company UK has a handful of experience in developing an app for this platform and can do so with extreme efficiency and efficacy.
                                 </p>
                              </div>  
                            </div>  
                         </div>  

                          <div class="col-lg-6 col-md-6 mt-2">
                            <div class="row">
                              <div class="col-lg-2 col-md-2 col-2">
                                 <img src="https://quantumitinnovation.com/assets/img/icons/Project Planning Process.png" class="img-fluid">
                              </div>
                              <div class="col-lg-10 col-md-10 col-10">
                                 <!-- <h6 class="clr-wht">Cross-Platform App Development</h6> -->
                                 <p class="txt-wht">AI is one of the recent approaches in terms of advancements in the IT sector. Developing an app with the involvement of AI can provide the app with unique features; indestructible security levels and can help in the maintenance and functionality of an app.<br>

Our mobile app development company in the UK has successively designed an app with AI to incorporate it with unique secure methods to develop an app for banking, finance and for various other sectors as well.

The process of app development used by our developers of mobile app development company UK


                                 </p>
                              </div>  
                            </div>  
                         </div>
                     </div>     
                 </div>     
         </div>

  
   

<!----------------end------------------->

<div class="container mt-5">
            <h5 class="text-center mb-4">Industries we serve</h5>
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="card text-center" style="height:300px!important;">
                       <img src="assets/images/Group 24.png" class="bottom-img-icon">
                            <h6>Health care</h6>
                               <p>This industry demands immense efforts from app developers in UK as the app of this genre should be easy to handle yet incorporated with additional features to provide the best medical facilities in a click.</p>
                               <p>We as mobile app development company UK has introspected the health care apps already available in the market and have analyzed them properly to come up with a better and high-performance application.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6 mb-3">
                        <div class="card text-center" style="height:300px!important;">
                          <img src="assets/images/Group 19.png" class="bottom-img-icon">
                            <h6>Tourism Industry</h6>
                                <p>As the tourism industry directly affects the economy of a country, it is utmost essential to provide people with a tourism app to spread more and more awareness and excitement to increase the tourism in UK. Therefore, to attract more and more tourists, our mobile app development company UK works around this industry in such a fashion that can bring increment in Tourism.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6">
                        <div class="card text-center" style="height:300px!important;">
                            <img src="assets/images/Group 23.png" class="bottom-img-icon">
                            <h6>Finance applications</h6>
                              <p>With an increase in digitalization in the banking world, it is to be advised to banks to come up with a customized mobile application to help people in getting rid of long queues. Such kind of app should be developed with all desired and required features that too with difficult security gates and the same can be achieved by Quantum It Innovation; the mobile app development company in the UK.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6">
                        <div class="card text-center" style="height:300px!important;">
                            <img src="assets/images/Group 20.png" class="bottom-img-icon">
                            <h6>Education Sector</h6>
                               <p>Students in UK spend their half of the time surfing on internet and on their phones & tablets. In this scenario, providing them with their study material on the same platform would work like a blessing for them. Our company has an optimum caliber for developing such kind of interactive as well as informational applications for today’s students & is ready to serve educational sectors with a customized and useful mobile application.</p>
                        </div>    
                     </div>
                      <div class="col-lg-6 mt-3">
                        <div class="card text-center" style="height:300px!important;">
                           <img src="assets/images/Group 22.png" class="bottom-img-icon">
                            <h6>E-Commerce Application</h6>
                                <p>This sector has open windows for mobile app development in UK. Every business wants to interact in market with a mobile app and this increment often serves hard challenges in front of app developers. Our app developers has worked on various E-commerce projects to make themselves best in said field and can develop an app that can attract maximum eye balls and can help in impressing mass audience.</p>
                        </div>    
                     </div>
                      <div class="col-lg-6 mt-3">
                        <div class="card text-center" style="height:300px!important;">
                           <img src="assets/images/Group 21.png" class="bottom-img-icon">
                            <h6>Technology World</h6>
                              <p>The technology sector is the one with its arms in all the above-said sectors. Various industrialists choose an app platform to inform people about real advancements & innovations in technology world and can help in staying up-to-date. Our mobile app development company UK can help industrialists to come up with the best kind of technology apps to gain users to believe and to get loyal customers for their services.</p>
                        </div>    
                     </div>
                </div>

<!-----------------sevices-end------------------>
<section class="py-0 mt-5" style="background-color: #fff;">
<div class="container mt-5 mb-5">
  <div class="row">
      <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Our Process</h2>
                    <p>Developing a mobile application is not a major deal in today’s world of continuous innovative technological modifications but coming up with an optimum, customized app that can leave an imprint on users mind is a tough task. Here we are with some of our visionary points to check that made us one of the best mobile app development companies in the UK-</p>
                    <ul style="list-style-type: disc">
                      <li>The genre of an app.</li>
                      <li>Target audience.</li>
                      <li>When to launch</li>
                      <li>Platform</li>
                      <li>Method of development.</li>
                      <li>Deadline</li>
                    </ul>
                    </div><!--12-->
    <div class="col-md-12 col-12 col-sm-12 col-lg-12">
      <ul class="timeline">
        <li>
          <a class="highlight-text">Designing a layout.</a>
          <p>Designing an ideal app needs an extreme level of preparations. Once prepared in an excellent way, one can develop an app that can easily overcome the market’s competition and can make its own reputation. Some of the factors that need to be checked are-</p>
        </li>
        <li>
          <a class="highlight-text">Product specification and design</a>
          <p>After deciding all the above-said factors, one needs to prepare a rough layout of an app that can quickly explain about the final look of UI & UX and can also point out the app’s faults. The rough layout should be carefully examined to locate sectors for improvements and to develop an app with proper UI & UX.</p>
          <p>Mobile app development company the UK strictly follows this pattern to launch an app that will impress the mass audience. Due to the extreme amount of audience that too with different choices, designing a rough layout of an app can help in satisfying the needs of all people in one platform that too with recent advancements and innovations.</p>
        </li>
        <li>
          <a class="highlight-text">Analyzing competitors</a>
          <p>Every genre of the mobile app has several apps already running in the market. Most of them are with mutually exclusive features. In this scenario, one should carefully know his/her competitors in the real world to develop an app with better features and modifications.</p>
          <p>By carefully examining the competitor’s applications, one can design an improvised application by incorporating all the features that are not available in the market already and in this way, one can attract maximum users.</p>
        </li>
          <li>
          <a class="highlight-text">Testing</a>
          <p>Merely developing an application doesn’t explain its success. A successful application works in a complete way and proves to be best on functionality, performance, and maintenance. All this is successfully achieved by our mobile app development company UK by testing an app prior to its launching.</p>
          <p>Testing an application on the real operating device and on real platforms according to the development process can help in creating an ideal application.</p>
        </li>

          <li>
          <a class="highlight-text">Launching</a>
          <p>Launching the app in the correct way in the market is a deciding feature of the application’s success. An app should be developed in such a way that it can reach the right type of audience and should also be marketed to a threshold level to attract the correct audience and to build its reputation in the best way possible.</p>
          <p>Launching also comes with a responsibility to check the updates of an app and to collect analyzing data from an app to maintain its performance and to rank it higher by continuously staying on the user’s choice list.</p>
          <p>By following the listed methods with analyzing and collecting data on each method with an idea of improvising throughout, one can successfully develop a mobile application that will leave an imprint in the industry of mobile app development in the UK.</p>
        </li>
          
      </ul>
    </div>
  </div>
</div>



</section>
  






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
    </div>
    @endsection