@extends('website.layouts.master2') 
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
                    <h2 class="top-head">Finding best Mobile App Development Company in Dubai?</h2>
                    </div><!--12-->

          <div class="col-md-12 col-12">
                    <div class="top-box-content">
    <p>At Quantum IT Innovation we create the award-winning mobile application with the focus to give the best quality at the right cost. With our 9 + years of worldwide app development experience, we able to deliver some of the best projects and made a landmark in the world. We are proud of our designers and developers that passionate to gives the best mobile app development service in Dubai, UAE.</p>

<p>Give your business a perfect push, start mobile app development with a free app design.</p>
</div><!--12-->
  </div>
        </div><!--row-->
      </div><!--cont-->
    </section>


<section class="py-0 pb-5">
  <div class="container">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="assets/images/Web-Development-Transparent.png" title="img" style="width: 60%;">
                   </div>
                </div>
              </div>
            </section>
  
   

<!----------------end------------------->


  

<!-----------------services--------------------->

<section class="py-0 mt-5">
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Our Mobile App Development Company's Expertise in Dubai</h2>
                    <p>Mobile App Development has majorly classified on the basis of the operating system it is made upon. Android App Development and iOS App Development are the two platforms where 95% of mobile applications are made. So, before starting any Mobile App Development Project, one should be clear about the usage and performance of these two different platforms. The operating system must be chosen wisely by keeping in the mind the business objective, targeted location, and the customers.</p>
                    <h3>Here is the brief about our expertise in Mobile App Development:</h3>
                    </div><!--12-->
        <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-globe"></i></div>
                <h3 class="title-2">Android App Development</h3>
                <p class="description-2">
                   Our expert Mobile App Development Company in Dubai, UAE has been working in the field of mobile application improvement for quite a while. We have aced the specialty of building Android applications with embracing refreshed innovation and guarantee to accomplish the targeted ROI. We stand out from the crowd through our creative thoughts and cutting-edge techniques. On a global scale, Android App dominates over others, it may vary according to the location and customers. There’s no other operating system like Android. Android apps help to enhance output, develop the market and advance your brand reputation.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">iOS App Development</h3>
                <p class="description-2">
                   Apple iPhone, iPad, iPod etc operates on iOS App software. We are the affirmed iOS development company that offers solid and strong application benefit over the world. Today, iOS app development covers approx 60% of the mobile application market as there is a gigantic uplift in the usage of iPhone and iPad customers. Consequently, It is imperative to stay aware of market value necessities as well as user end experience to develop an advanced iOS App.<br>
                   iPhone applications are a standout amongst other approaches to establish a connection with your clients and audience.

                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Swift App Development</h3>
                <p class="description-2">
                   Swift is an alternative to the Objective-C language that employs modern programming-language theory concepts and strives to present a simpler syntax. We don’t leave untouched any innovation present in the market. Swift is another and profoundly helpful programming platform that has blasted the market. Swift App Development is made for making local applications as it provides high security and gives more ROI. Quantum IT Innovation, a mobile App Development company in Dubai permits creating complex Mobile Application effortlessly by adding more designers to the group. In contrast, Swift consumes less time and effort to build mobile apps.
                </p>
            </div>
        </div>
          <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Cross-Platform App Development</h3>
                <p class="description-2">
                  Cross-platform mobile development refers to the development of apps that can be used on multiple mobile platforms, such as Android and iOS. Cross-stage application advancement alludes to the improvement of mobile applications on different stages. It is the most slanting application improvement methodologies being utilized by the mobile app designers to boost the client’s business. The most reasonable company for Mobile App Development in Dubai clearly understands that each platform is different and unique and therefore, we carefully craft your mobile app to ensure it performs well on each platform.
                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Artificial Intelligence in Mobile Applications</h3>
                <p class="description-2">
                 The latest technology that has surprised people worldwide is the usage of Artificial Intelligence in Mobile Applications. Now, the use of Artificial Intelligence in mobile applications is growing rapidly, as its application, first of all, makes a person’s life easier and better, and also economizes the time. AI changes the boundaries of its stay: as it can be seen not only in laboratories but also in our everyday life as a GPS, in energy networks, in the online world. Quantum IT Innovation, the best Mobile App Development Company in Dubai, has skilled app developers who can embed Artificial Technology in mobile apps to give a fresh and intelligent outlook to your business.
                </p>
            </div>
        </div>
            <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">UI/UX App Design</h3>
                <p class="description-2">
                Quantum IT Innovation is best among the others UI/UX App Design company. We design the intriguing mobile app that one cannot ignore. We design an engaging, attractive and easy to use mobile app that helps people to get connect easily and increase your download from the app store. We have a systematic process of designing and developing an app, goes through mainly three steps, like Analysis, followed by wireframing and prototype, and lastly visual output design. Our team has designed many reputed companies app that you can see in our portfolio. We will execute your idea with our experience to get the app you want for your business.
                </p>
            </div>
        </div>
    </div>
</div>
</section>
<!-----------------sevices-end------------------>
<!-- new section -->
<div class="container mt-5">
            <h5 class="text-center mb-4">Industry we serve</h5>
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="card text-center">
                       <img src="assets/images/Group 24.png" class="bottom-img-icon">
                            <h6>Health care</h6>
                               <p>We have the strength of designing and developing mobile apps in the Health &amp; Beauty sector from quite a long time. We have successfully designed apps for various doctors and beauticians to increase their reach to their potential customers. Health &amp; Beauty industries are presently the most growing industry of this time. We have come up with new and updated ideas to make your app look unique as well as worth the money.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6 mb-3">
                        <div class="card text-center">
                          <img src="assets/images/Group 19.png" class="bottom-img-icon">
                            <h6>Tour & Travel</h6>
                                <p>We can provide the whole new level of experience to your customers by building an amazing application which will integrate into your idea and resonate with the customer demands. Tour &amp; Travel is the most competitive industry of this time, it has become way too challenging to stand out and make an impact of your business through an app. We focus on making an output driven app that will benefit you as well as your customers simultaneously.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6">
                        <div class="card text-center">
                            <img src="assets/images/Group 23.png" class="bottom-img-icon">
                            <h6>Internet Retailer</h6>
                              <p>Online Shopping is now becoming a huge and crucial thing; our expert app developers team in Dubai have the specialty of working on various e-commerce platforms like Magento, Shopify, WooCommerce.We are highly motivated to build state-of-the-art Commerce, B2B, and B2C solutions apps to engage the audience through the app. E-commerce app development requires a strategic planning and designing before the execution, we have a dedicated team who works on the development of E-commerce and other B2B projects.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6">
                        <div class="card text-center">
                            <img src="assets/images/Group 20.png" class="bottom-img-icon">
                            <h6>Financial Institution</h6>
                               <p>Financial service looks similar if there is no level of differentiation and, what better then a technology to make it possible. We have created compelling mobile applications for various finance &amp; banking groups worldwide which help to get them a high engaging customer and loyal customers. It is difficult to increase user motivation and engagement in a finance-related app as it indulges money and budget. We make a highly advanced app that has secured transaction and funding process.</p>
                        </div>    
                     </div>
                      <div class="col-lg-6 mt-3">
                        <div class="card text-center">
                           <img src="assets/images/Group 22.png" class="bottom-img-icon">
                            <h6>Telecom & Technology</h6>
                                <p>Technology and telecom have come to play a major role in how we discover, coordinate and experience things. The right mobile app can possess the capability to open up the crucial line of communication between the customer and you. Industry statistics reveal that over 80% of mobile apps are discarded within the first three months of its launch, so, make an app successful, it requires mobility-enabling technologies to make a place in the telecom industry. We, Quantum IT Innovation fix all the existing issues and implement the solution to help you.</p>
                        </div>    
                     </div>
                      <div class="col-lg-6 mt-3">
                        <div class="card text-center">
                           <img src="assets/images/Group 21.png" class="bottom-img-icon">
                            <h6>Academic</h6>
                              <p>We help universities, schools &amp; institutes to reinvent &amp; rethink their learning operations by our mobile and web solutions. Our mobile app development services in Dubai also help companies to provide e-learning services, methods and online training modules which give students a way of efficient learning. We have designed educational apps that are quite engaging and helpful for the students in terms of achieving their career dreams. It also should have high-end user learning experience to build interaction and consumer base through an app.</p>
                        </div>    
                     </div>
                </div>
            </div> 
<!-- new section end -->
<section class="py-0 mt-5" style="background-color: #fff;">
<div class="container mt-5 mb-5">
  <div class="row">
      <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Choose us for the best Mobile App Development in Dubai</h2>
                    </div><!--12-->
    <div class="col-md-12 col-12 col-sm-12 col-lg-12">
      <ul class="timeline">
        <li>
          <a class="highlight-text">We have the best Developers</a>
          <p>Quantum IT have the team of some of the best app developers and designers that have a passion and experience to give best mobile application. We individually assigned team developers for every app development project which is equally headed by a project manager so by this way we able to fulfill all our client requirements and give them the best mobile app development service.</p>
        </li>
        <li>
          <a class="highlight-text">We Serve Globally</a>
          <p>We have a global presence in locations like USA, UK, Canada, Singapore, Hong Kong, Dubai, and India, which able to serve us the wide verity of customers in different industries. Over the span of 9 yr. of working we deliver 800+ app development projects by combining IOS and android together. Currently, we also featured in Goodfirm in the top list of best mobile app development companies in Dubai.</p>
        </li>
        <li>
          <a class="highlight-text">We have a Structured Process</a>
          <p>We are structured organization and work in an organized team which is full of coordination to deliver the quality results to the client.</p>
          <p>We have a dedicated proven process to give the best app development services, find it at the bottom of this page. In our 9 yr. of experience we did numerous test and iteration on every of our process whether you talk about app, web or digital marketing to make it the best way to provide quality results so choose the best mobile app development company in Dubai.</p>
        </li>
          <li>
          <a class="highlight-text">We adopt Updated Technology</a>
          <p>Quantum IT is an advance organization that’s implementing newer technologies like Artificial Intelligence, IOT, Big data and Blockchain to gain the huge momentum in mobile app development.</p>
          <p>Similarly, we will combine these technologies in android, Ios, Hybrid and cross-platform application to deliver the amazing mobile application development service in Dubai.</p>
        </li>

          <li>
          <a class="highlight-text"> We showcase our Work</a>
          <p>Being the Top mobile app development company in Dubai, UAE, we offer our clients the free app design service to showcase our work quality.</p>
          <p>We think it’s the best way of working, as it assures the customers that we are capable of making their mobile application. Apart for free app design we also send the case studies of our old customers to make them assured that they will definitely get the best mobile app development service.</p>
        </li>
          <li>
          <a class="highlight-text">We deliver on time</a>
          <p>All those good factors come down if we unable to deliver the mobile application project on time, but as you well aware that we have a dedicated team of developers that are assigned their own individual work by a project manager which is strict of time. So you never able to find any kind of delay in mobile app development service in Dubai UAE.</p>
        </li>
      </ul>
    </div>
  </div>
</div>



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


       <!--<div class="why-choose-us mt-5" style="background-image:url(assets/img/Group-new.png);">-->
       <!--             <div class="container pt-5 pb-5">-->
       <!--                 <h5 class="clr-wht text-center mb-3">Why choose Quantum IT for the Internet of Things (IoT)?</h5>-->
       <!--                 <i class="fas fa-circle" id="circle"></i>-->
       <!--                 <p class="txt-wht">Internet of things (IoT) is a system where physical objects and devices are connected via the internet empowering an ecosystem. These objects can gather data using a network without any manual assistance. </p>-->
       <!--                 <i class="fas fa-circle" id="circle"></i>-->
       <!--                 <p class="txt-wht">Quantum IT Innovation is a leading IoT company, which provides services to the organization enabling them to convert business needs into competitive advantages by giving IoT solutions. Quantum provides seamless IoT driven services to the clients including the integration of right censor, deriving insights and selecting the best development platform. These services further allow the companies to focus primarily on their outcomes while digital transformation being handled. Quantum is the top IoT company that provides immense benefits to the organizations with the help of their IoT solution portfolio, which includes gateways, coverage over censor, connectivity, cloud user experience, and analytics. Moreover, quantum’s IoT solutions help the companies to improve cost efficiency, business value, increase efficiency and reduce operations. In order to provide the best IoT solutions, quantum has collaborated with top innovators such as Microsoft, Azure, AWS IoT, MongoDB, WindRiver and Intel. </p>-->
       <!--             </div>-->
       <!--         </div>-->

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