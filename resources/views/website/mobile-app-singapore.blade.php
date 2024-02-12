@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>#1 Mobile App Development Company Singapore | Quantum IT</title>
    <meta name="keywords" content="Mobile app development company Singapore  ,mobile app development Singapore , Android App Development Singapore,  IOS App development Singapore">
	<meta name="description" content="We are the top app developers in Singapore and provides the best Android, iOS, cross-platform & Hybrid app development. Build your mobile app today! ">
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
                    <h2 class="top-head">Looking for the best mobile app Development Company in Singapore?</h2>
                    </div><!--12-->



          <div class="col-md-12 col-12">
                    <div class="top-box-content" >
    <b><p style="text-align: center!important;margin-left: 148px;">You are in the right place<br>

We have worked with 50+ companies, entrepreneurs and startup to deliver the best mobile app development service!!<br>

So what are you waiting?</p></b>

</div><!--12-->
  </div>
        </div><!--row-->
      </div><!--cont-->
    </section>


<!-----------------sevices-end------------------>
<section class="py-0 mt-5" style="background-color: #fff;">
<div class="container mt-5 mb-5">
  <div class="row">
      <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Our Process, that made us the top app developer in Singapore</h2>
                    </div><!--12-->
    <div class="col-md-12 col-12 col-sm-12 col-lg-12">
      <ul class="timeline">
        <li>
          <a class="highlight-text">Getting a user’s instinct.</a>
          <p>Making an app successful needs a complete understanding of the user’s instinct and so does development. Making a pre-layout of an application is a basic step in designing an app and this can only be done by keeping in mind all the requirements & likings of a user to make it more interesting and interactive for the user.</p>
        </li>
        <li>
          <a class="highlight-text">Analyzing the market.</a>
          <p>Before designing an actual app, examining the traffic of audience an app will encounter is an essential step in coming up with an application that maximum people will choose.</p>
          <p>The statistics should be carefully collected related to the genre of an app, competitors, and audience. The collected stats will help in deciding the operating system, features, maintenance, UI & UX of an app and ultimately decides the final output of an app development.</p>
        </li>
        <li>
          <a class="highlight-text">Ratiocinate the layout.</a>
          <p>Once ready with the layout of an application, one needs to rationalize in mind that what all features should be there in an app that can attract the maximum traffic and are relevant to an application.</p>
          <p>The feature should not only be incorporated in the lieu of need or decoration instead it should complement the application’s functionality and performance properly.</p>
        </li>
          <li>
          <a class="highlight-text">Execution and Testing.</a>
          <p>Brainstorming and coming up with an optimum prototype is not enough for developing an ideal app. Execution plays a major role. Implementing all the thought features in an app and executing it in the right fashion is what makes an app developer a king of development.</p>
          <p>After designing an app, an app should be properly tested for functionality and performance and any feature that creates a halt in an app should be eliminated as functionality is the first priority.</p>
          <p>After coming up with a complete application, a developer should test the designed app in real time situation with real operating systems for optimum maintenance and performance and should approve it for launching only after getting a satisfied app in all manners.</p>
        </li>

          <li>
          <a class="highlight-text">Launching</a>
          <p>Launching an app is an utmost important step as this allows the interaction of an app with a real audience. Launching if done in a threshold way can attract maximum user and can make that app rank higher in the market.</p>
          <p>Keeping all the up-said points in mind, one can come up with a perfect mobile application or you can contact us as we are one of the best mobile app development companies in Singapore.</p>
        </li>
          
      </ul>
    </div>
  </div>
</div>



</section>


<div class="container mt-5">
            <h5 class="text-center mb-4">Industry we serve</h5>
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="card text-center" style="height:356px!important;">
                       <img src="assets/images/Group 24.png" class="bottom-img-icon">
                            <h6>Health care</h6>
                               <p>The health sector is the one with a maximum need of a customized application. Every year, plenty of people die due to late providence of medical help, in this scenario, developing a customized mobile application that can arrange for on-call appointments, emergency medical helps, can provide diagnostic reports and other sorts of help to the patient in an easy click.</p>
                               <p>Our app developers in Singapore have successfully investigated the condition and are completely able to develop the required app with all the desirable features.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6 mb-3">
                        <div class="card text-center" style="height:356px!important;">
                          <img src="assets/images/Group 19.png" class="bottom-img-icon">
                            <h6>Tour & Travel</h6>
                                <p>App developers in Singapore have recently faced a demand for developing a mobile application for the tourism industry. This is all due to the increment in the number of tourists in Singapore. The companies that work to provide tourism services often feel essentiality of a customized app to engage more and more audience and to attract masses.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6">
                        <div class="card text-center" style="height:356px!important;">
                            <img src="assets/images/Group 23.png" class="bottom-img-icon">
                            <h6>Internet Retailer</h6>
                              <p>Mobile app development in Singapore works centrally with the e-commerce sector. The continuous demand in this sector motivated our app developers of Singapore to design an attractive e-commerce application for business purposes that can provide respective industries; the best profit.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6">
                        <div class="card text-center" style="height:356px!important;">
                            <img src="assets/images/Group 20.png" class="bottom-img-icon">
                            <h6>Financial Institution</h6>
                               <p>This sector presents maximum exhausting challenges in front of app developers. A quintessential finance app demands security levels that are difficult to bust and requires authentication and encryption at each level because of the user’s crucial informational inputs.</p>
                               <p>Our mobile app development company in Singapore has been successfully working on secure mobile application from years and has a good caliber in incorporating app with security levels with the help of ongoing technological innovations and by considering AI.</p>
                        </div>    
                     </div>
                      <div class="col-lg-6 mt-3">
                        <div class="card text-center" style="height:356px!important;">
                           <img src="assets/images/Group 22.png" class="bottom-img-icon">
                            <h6>Telecom & Technology</h6>
                                <p>The technology sector always goes hand in hand with IT advances and demands to apply the latest inventions and innovations to this field. This sector is the best sector for an app developer to completely use the potential and to optimally channelize the energy and concepts of app development.</p>
                                <p>Quantum It Innovation; our Mobile App Development Company in Singapore has successfully applied its hands in a technology field and has turned stones to gold by developing an optimal customized application.</p>
                        </div>    
                     </div>
                      <div class="col-lg-6 mt-3">
                        <div class="card text-center" style="height:356px!important;">
                           <img src="assets/images/Group 21.png" class="bottom-img-icon">
                            <h6>Academic</h6>
                              <p>Education field provides developers; a platform to widen their idea’s window as this sector is with an utmost requirement of an app. Students nowadays try to get everything on their phones due to the involvement of digitalization in the education field and same serves an opportunity to our app developers in Singapore to come up with an app that can satisfy students and can gain student believe in terms of their future studies.</p>
                        </div>    
                     </div>
                </div>
            </div> 

<!-- <section class="py-0 pb-5">
  <div class="container">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="assets/images/Web-Development-Transparent.png" title="img" style="width: 60%;">
                   </div>
                </div>
              </div>
            </section> -->
  
   

<!----------------end------------------->


  

<!-----------------services--------------------->

<section class="py-0 mt-5">
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Our expertise in mobile app development company Singapore</h2>
                    <p>
                      The IT sector in Singapore is with open sky and provides immense opportunities to app developers to execute their best ideas in the best way possible. This Country has requirements of mobile applications in each sector due to increased use of digital platforms by people here.
                    </p>
                    <p>
                      Due to the ongoing demand for mobile app development here, our company has decided to provide Singapore people with the best we can design. The constant effort of our app developers Singapore has constantly looked for opportunities to serve people and to provide with best services. Some of our best services in Singapore are-
                    </p>
                    </div><!--12-->
        <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-globe"></i></div>
                <h3 class="title-2">Android app development.</h3>
                <p class="description-2">
                  Every Mobile app development company has tried hands in developing an app for this platform but this opens the doors of challenges for other companies. We; as one of the best mobile app development company in Singapore tries to stand out of the competition by designing an app with all the required features according to user’s instinct and also works day night to make ourselves better.
                </p>
                <p>
                  Android app development serves its own opportunities as well as challenges to motivate app developers to come up with unique, interactive yet an easy to use mobile application.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">iOS app development.</h3>
                <p class="description-2">
                   Before creating an e-commerce website we require an understanding of product purchase cycle which begins with the user search. We are more effective and efficient in providing e-commerce solutions such as UI designed, fast loading solutions and online shopping experience of the customer.
                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">CMS Web Development</h3>
                <p class="description-2">
                   This platform due to the involvement of a different operating system has its own complications and demands an extra concentration in developing an application.  Our app developers in Singapore has vast experience in terms of iOS software development am can provide clients with the best of the services.
                </p>
                <p>
                  The iOS app developed by our developers only being launched after a careful examination of the functionality and maintenance in real operating systems and in real situations to provide with the best app in terms of quality and performance.
                </p>
            </div>
        </div>
          <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2"> Swift app development.</h3>
                <p class="description-2">
                  When it comes to the development of an app in less time than usual, that too with great output and performance, the swift app is a perfect choice for a developer. Being an alternative to C++, its utility has been intensively increased among our app developers in Singapore.
                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Cross-platform development.</h3>
                <p class="description-2">
                 When confused between an android and iOS platform, one can go for development via a cross-platform. Due to the rapid increase in android as well as iOS users, this platform provides a relaxed situation to the ongoing competition.
                </p>
                <p>
                  Quantum It; mobile app development company in Singapore have been continuously looking for an opportunities to build an app for this platform and all the seekers are heartily welcome to get services by our highly sufficient app developers in Singapore.    
                </p>
            </div>
        </div>
            <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Use of Artificial Intelligence.</h3>
                <p class="description-2">
                AI is one of the latest advances in the IT sector and provides developers ease in incorporating application with advanced features and with important authentication & encryption ways.
                </p>
                <p>
                  By successful implementation of AI into mobile applications, our company has developed various worthy apps for the users and can develop the same in the future also.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Incomparable UI & UX.</h3>
                <p class="description-2">
                UI & UX are the most important factors for mobile application to get a higher rank in the market. Our developers have a full potential to get the user’s instinct and to design a mobile application according to the user’s instincts and liking and can also help in ranking that app is higher in the market.
                </p>
            </div>
        </div>
    </div>
</div>
</section>
<!-----------------sevices-end------------------>




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