@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mobile App development Company in India |  App developers India</title>
    <meta name="keywords" content="Mobile app development company India, App developer India , Android App developer , IOS app developer">
	<meta name="description" content="Leading Mobile App Development Company in India serving abroad. We are expertise in developing Android, iOS, cross-platform apps, UI/UX Mobile Apps Design, CMS, Hybrid App Environments  Web-based apps Platforms etc. Want dedicated App Developers?">
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
                    <h2 class="top-head">Looking for the best mobile app Development Company ?</h2>
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
                    <h2 class="top-head">Our Process</h2>
                    </div><!--12-->
    <div class="col-md-12 col-12 col-sm-12 col-lg-12">
      <ul class="timeline">
        <li>
          <a class="highlight-text">Selecting a genre.</a>
          <p>As mobile app development in India is a continuous growing field with a never-ending number of applications, one should decide carefully about the genre of an application to be designed. The genres could be a banking app, an online shopping application, personalized business app, a promotional app and many more.</p>
          <p>The genre chosen will decide the features, user interface, security levels, and complexity of an app and also said to be the foundation of application development.</p>
        </li>
        <li>
          <a class="highlight-text">Locating a target audience.</a>
          <p>Before thinking of developing an application, a basic step is to identify your target audience that will decide your user interface, the features that need to be incorporated into an app and many more.</p>
          <p>Once you decide your target audience, you can think of executing your application in the best way possible as target audience will explain your design of an app and in which fashion would you be interacting your audience.</p>
        </li>
        <li>
          <a class="highlight-text">Brainstorming</a>
          <p>The major reason why we are the top mobile app development company in India is our brainstorming technique where we developing a rough layout of an app that helps you in coming up with a more attractive app that is competent to beat the market’s competition. In order to achieve this, a threshold level of brainstorming is needed.</p>
          <p>We keep a thought process of designing an app with reference to the target audience that the app will encounter or getting the instinct of the user should be the main focus. Once ready with the layout, it would be easy to come up with an app in less time comparatively.</p>
        </li>
          <li>
          <a class="highlight-text">Gather the statistics.</a>
          <p>Collecting all the statistics is one of the most important steps during the development of an application. One should look out for the information regarding how many android or ios users would feel connected to the app and therefore, should then decide whether to develop an app for Android or an ios platform.</p>
          <p>The statistics collected will help in breaching the competition and coming up as the user’s choice.</p>
        </li>

          <li>
          <a class="highlight-text">Executing the prototype.</a>
          <p>The most crucial step in designing an app in India is execution. This step will decide the outcomes. Execution should be done with extreme concentration and with all the dedication.</p>
          <p>The app should be executed in such a way to come up with fully functional and maintained an application that can face the market’s competition and can catch maximum eyeballs to get a hike.</p>
        </li>

         <li>
          <a class="highlight-text">Testing the app in real situations.</a>
          <p>Merely designing the app never corresponds to its successful launching. An app should be carefully examined in order to make it perform efficiently on all the platforms and devices. And in order to confirm its functionality, the app should be tested on real operating devices for optimum time and should be observed for any deformity before launching it in the real market.</p>
        </li>

        <li>
          <a class="highlight-text">Final launching.</a>
          <p>If you see other mobile app development company in India they are all limited to just development but we are different, apart from developing an amazing application for you, we will also help you to launch and presented your app to the world audience through our app optimization techniques.</p>
        </li>

        <li>
          <a class="highlight-text">Maintenance after launching.</a>
          <p>After the successful launching of an application, an app needs various maintenance factors such as adjusting updates to the app, keeping total analytics to make it better than yesterday and to look for any malfunctioning signs that could otherwise halt the performance of an app and looking for the areas where improvement can be made.</p>
          <p>By following all the up-said steps, one can develop a perfect app with Quantum IT Innovation (Mobile App Development Company in India) with all the desired features and can come up as an ideal mobile application.</p>
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
                        <div class="card text-center" style="height:300px!important;">
                       <img src="assets/images/Group 24.png" class="bottom-img-icon">
                            <h6>Health care</h6>
                               <p>In the context of increasing diseases nowadays, developing a health care application for Indian people is the major area of interest. Our app development team of India has the caliber of coming up with a perfect health care application that will promise to serve the patients and needy people in the best way possible.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6 mb-3">
                        <div class="card text-center" style="height:300px!important;">
                          <img src="assets/images/Group 19.png" class="bottom-img-icon">
                            <h6>Tour & Travel</h6>
                                <p>India is the best country of mother-nature has always been the tourist’s attraction. In such scenarios, tourism industries dream to launch an app with such an interface that can attract maximum persons’ attention and the same can be achieved by our app developers in India by designing eye-catching user interface & UX for tourism applications.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6">
                        <div class="card text-center" style="height:300px!important;">
                            <img src="assets/images/Group 23.png" class="bottom-img-icon">
                            <h6>Internet Retailer</h6>
                              <p>By looking at the recent increment in digitalization in India, developing an e-commerce application is every business’s first choice to interact with customers & in this demand, our software developers are best to consider as they promise to deliver the best e-commerce application according to user’s instinct & develop an app that will give their clients the maximum customers and will definitely take their business to different heights.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6">
                        <div class="card text-center" style="height:300px!important;">
                            <img src="assets/images/Group 20.png" class="bottom-img-icon">
                            <h6>Financial Institution</h6>
                               <p>With always increasing cybercrime, designing an application with some hard to break security gates is a major concern and providing an application with such type of authentication & encryption methods is the most considered way for this. We have worked hard to develop such kind of app and therefore is willing to provide the best mobile app development in the Indian banking industry that too with all the security concerns being solved.</p>
                        </div>    
                     </div>
                      <div class="col-lg-6 mt-3">
                        <div class="card text-center" style="height:300px!important;">
                           <img src="assets/images/Group 22.png" class="bottom-img-icon">
                            <h6>Telecom & Technology</h6>
                                <p>Making our impression in this field is our sole purpose and therefore, there has been immense efforts given by our application developers of India in this sector. We ought to design an app that will add a golden feather in India’s technological status and will try to execute our best bones in this sector.</p>
                        </div>    
                     </div>
                      <div class="col-lg-6 mt-3">
                        <div class="card text-center" style="height:300px!important;">
                           <img src="assets/images/Group 21.png" class="bottom-img-icon">
                            <h6>Academic</h6>
                              <p>Due to increasing competition in terms  of education in India, students often try to look for a mobile application that can provide them  with all the handy notes and  that’s why our mobile app developers in India has considered this condition and has full potential to develop such kind  of app & incorporating it with all the essential features.</p>
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
                    <h2 class="top-head">Our Different Mobile app development service in India</h2>
                    
                    </div><!--12-->
        <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-globe"></i></div>
                <h3 class="title-2">Android app development.</h3>
                <p class="description-2">
                  When it comes to the mobile app development in India, Android platform is one of the most explored ones. Therefore, more the candidate more efforts will be needed to beat the competition. In India, people often try to get everything at one click by the virtue of applications, but this, in turn, triggers the app development industry in such a way that promotes excellence and hunger for developing an ideal app.
                </p>
                <p>
                  Due to this ongoing demand and crowd in the app industry, our company has decided to play with all the weapons to come up with methodologies that will develop a proper functional mobile application.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">iOS app development.</h3>
                <p class="description-2">
                    In today’s world, the iOS platform presents a maximum number of advancements and innovations in the mobile app industry. The always increasing call for ios app has provided our developers with the need of developing an app for this platform. Even though the pressure of the market is at an extreme level, our app developers in India had never compromised in terms of quality and promise to serve the best ios apps in future also.
                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Swift app development</h3>
                <p class="description-2">
                   As the sky is the limit, we also have our wings to each corner of technology’s cloud and therefore we also provide mobile software by swift app development in India. Development done by this method takes less time and is easy comparatively, that increases its usage in today’s world.
                </p>
            </div>
        </div>
          <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Cross-platform app development.</h3>
                <p class="description-2">
                  The silent war between android and ios platform makes this an obvious answer in the industry of mobile app development in India. Our developers have been working on this technology to hit two birds with one stone and are completely efficient and capable of developing a successful, functional and maintained application via the ios platform.
                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Artificial intelligence + mobile applications</h3>
                <p class="description-2">
                 To match footsteps with advancing technology, we are working on developing an application with the incorporation of artificial intelligence to provide an app with advanced features, more security options and building a fully automated application that is the future of Indian app development industry.   
                </p>
            </div>
        </div>
            <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">User interface (UI) & user experience (UX)</h3>
                <p class="description-2">
                The most important thing in an app is the UI & UX that will decide the target audience’s instinct and will help in ranking on play store and both these thing should be carefully designed in order to come up with a perfectly ideal application.
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