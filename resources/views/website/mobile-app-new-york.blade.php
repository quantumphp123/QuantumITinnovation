@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>#1 Mobile App Development Company New York, NYC | Quantum IT </title>
    <meta name="keywords" content="Mobile app development company New York  ,mobile app development NYC , Android App Development New York, IOS App development New York">
	<meta name="description" content="Quantum IT- Top mobile app development company in New York, NYC. We have the expertise in Android, iOS, cross-platform & Hybrid app development. Build your mobile app today! ">
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
                    <h2 class="top-head">Looking for the best mobile app Development Company in New York ?</h2>
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
                    <h2 class="top-head">Our Process, that made us the top app developer in New York</h2>
                    </div><!--12-->
    <div class="col-md-12 col-12 col-sm-12 col-lg-12">
      <ul class="timeline">
        <li>
          <a class="highlight-text">Non-disclosure agreement</a>
          <p>Trust is a very important thing for us. We believe in a long term relationship and open communication is the key for our efficient work. That is why our mobile app development company new York assured that the information and ideas we exchange are safe and protected so that we can jump into the project details.</p>
          <p>Which brings both of us to the next process, How well defined is the mobile product.</p>
        </li>
        <li>
          <a class="highlight-text">Product specification and design</a>
          <p>The specifications of the app, as well as its design,  are the most important thing in an app. It should be the result of research regarding the market client going into and the target audience they are looking into. It is very important that the features of the product come as a solution or complement to the market.</p>
          <p>Our mobile app development company New York assures if the specification of an app is lacking somewhere, we usually work with the client to define all the aspects of the product.</p>
          <p>In our team setup we work together to define the business model from the one end to the another and the user segments, and then we move into the features, flows, technology implication and final screen of the application.</p>
        </li>
        <li>
          <a class="highlight-text">Project development estimate</a>
          <p>Once we got the clear definition of the product, then we have fully documented product specs and prototype we can play with. Now it’s the time the turn of our mobile app development New York designated development team to take the close look at the project.</p>
          <p>According to our experience, working with user stories has proved itself the most efficient.</p>
          <p>As we having a focus on detailed user stories, to sum up, the product’s specs, things seem to be very simple in estimation phase. Each mobile app developer can estimate the time it would take them to develop the app functionality, making for a clear development plan.</p>
        </li>
          <li>
          <a class="highlight-text">Signing the contract</a>
          <p>With the final budget, both our mobile app development company New York and the client agree upon. We can move on to signing the contract. Besides being an official agreement, this contract can be very helpful documentation of the project we are embarking on, and especially for the client.</p>
          <p>The contract we signed contains a development plan and schedule. Having these at hand, the client can know what to expect from us all the time.</p>
        </li>

          <li>
          <a class="highlight-text">Coding</a>
          <p>In our mobile app development company New York, this happens under the strict laws of agile development. we work in 2-week sprints and create a demo for the client at the end of every sprint.</p>
          <p>In our experience, an agile development process to developing a mobile app which gives higher satisfaction to both of us.</p>
          <p>For us, agile development means a closer and more effective collaboration with our clients. Its enable us to understand better the client needs.</p>
          <p>Agile development is a transparent work process, which enables the client to plan ahead and makes changes easy. It makes easy for the client to integrate the mobile product in the overall business plan.</p>
        </li>

         <li>
          <a class="highlight-text">Testing and Q&A</a>
          <p>The development step is not the end step for our app developers NYC, to deliver the best mobile app development New York we also give our client testing phase as well. By breaking down the projects into manageable units, we connect the testing phase with the development phase for the best results.</p>
          <p>We also conduct the necessary test and reviews for every development unit, we never fall behind any bug fixes and can predict future changes that might be necessary early on.</p>
        </li>

        <li>
          <a class="highlight-text">App release</a>
          <p>Finally! The moment we have been waiting for. Within the final step, we help the client by submitting it on the designated app store. If you look that necessary, our app developers NYC team can write the necessary copy and prepare the right visuals for the product’s app store page.</p>
        </li>
          
      </ul>
    </div>
  </div>
</div>



</section>


<div class="container mt-5">
            <h5 class="text-center mb-4">Industry we serve in New York</h5>
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="card text-center" style="height:300px!important;">
                       <img src="assets/images/Group 24.png" class="bottom-img-icon">
                            <h6>Health care</h6>
                               <p>We have the strength of designing and developing mobile apps in the field of health &amp; beauty sector from a very long time. We have successfully designed many applications for doctors and beauticians to increase their reach to the customers. In order to provide best medical facilities our app developers NYC  has the experience of developing a number of health care app for clinic and hospitals with their customized mobile app that provides every medical facility in just one click to the patient.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6 mb-3">
                        <div class="card text-center" style="height:300px!important;">
                          <img src="assets/images/Group 19.png" class="bottom-img-icon">
                            <h6>Tour & Travel</h6>
                                <p>We can provide an amazing setup of an application to your customer which is very easy to use and can integrate into your idea and meet with the customer’s demand. Tour and Travel is the most competitive industry at this time. As New York is one of the most attractive tourist places, the tourism industry is in need of having a mobile application. Our company mobile app development NYC can develop an attractive UI& UX essential for a tourism app that can attract maximum tourists.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6">
                        <div class="card text-center" style="height:300px!important;">
                            <img src="assets/images/Group 23.png" class="bottom-img-icon">
                            <h6>Internet Retailer</h6>
                              <p>Online shopping is now becoming a huge thing among the ones who have a busy schedule. Our expert app developers have the specialty of working on various e-commerce platforms like Shopify, Magento, and WooCommerce. We are highly motivated to build B2B, and B2C apps to engage the audience through the app. It requires strategic planning and designing before the execution. We have the team who works on it dedicatedly.</p>
                        </div>    
                    </div>
                      <div class="col-lg-6">
                        <div class="card text-center" style="height:300px!important;">
                            <img src="assets/images/Group 20.png" class="bottom-img-icon">
                            <h6>Financial Institution</h6>
                               <p>Financial service looks similar if there is no difference between the level and what better than a technology to make it possible. Developing an app for this field has major challenges as security becomes the major concern over there and we are the specialist in this field. Our highly efficient app developers are capable of designing an app with complete security features.</p>
                        </div>    
                     </div>
                      <div class="col-lg-6 mt-3">
                        <div class="card text-center" style="height:300px!important;">
                           <img src="assets/images/Group 22.png" class="bottom-img-icon">
                            <h6>Telecom & Technology</h6>
                                <p>Technology and Telecom plays a major role in how we discover, coordinate, experience things. The right mobile app has the capability to open up the crucial line of communication between the customer and you. Industry statistics proved that 80% of apps are discarded by the app store within the three months of launching. So make an app successful requires the mobility-enabling technology to make a place in the telecom industry.</p>
                        </div>    
                     </div>
                      <div class="col-lg-6 mt-3">
                        <div class="card text-center" style="height:300px!important;">
                           <img src="assets/images/Group 21.png" class="bottom-img-icon">
                            <h6>Academic</h6>
                              <p>Our developers developed an app with unique and informational mobile applications for the universities, schools, and institutes of New York that will help students with the latest advancement in the field of education as well as providing them with all the relevant data related to the studies. We have designed educational apps which are quite engaging and help students to achieve their career dream.</p>
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
                    <h2 class="top-head">Our expertise in mobile app development company New York</h2>
                    
                    </div><!--12-->
        <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-globe"></i></div>
                <h3 class="title-2">Android app development.</h3>
                <p class="description-2">
                  Our expert mobile app development company New York has been working on the mobile app improvement. We have aced the specialty of building the best Android applications under the latest technology with the guarantee to accomplish the targeted ROI. We stand out from the crowd through our creative technique and by having IT advances by our side which keeps an app up-to-date. We do not bear any compromise in terms of quality.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">iOS app development.</h3>
                <p class="description-2">
Apple iPhone, iPad, iPod etc are based or operates on iOS app Software. We are the iOS development company in New York that offers the solid and best applications. Our company, mobile app development NYC has developed a various platform for iOS applications that run with full efficiency and provide the best functionality.                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Swift app development</h3>
                <p class="description-2">
                   Swift is the alternative of the objective C-language that employs the modern programming language and present a simpler syntax. In the world full of innovation and technology we have our smooth hands on it. Quantum IT innovation permits creating complex mobile application effortlessly by adding more designers to the group.

                </p>
            </div>
        </div>
          <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Cross-platform app development.</h3>
                <p class="description-2">
                  Cross-platform app development refers to the development which can run on the multiple mobile platforms, such as Android and iOS. Building a cross-platform reduce the problem of testing an app on the respective platform, ultimately gives time for focusing on the main point such as functionality and maintenance of an app.
                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Developing Artificial Intelligence in mobile applications</h3>
                <p class="description-2">
                 The latest technology which surprises people all over the world is the usage of Artificial Intelligence in mobile applications, the usage of AI in mobile application increasing rapidly, as its application but first of all, it makes life easier and better. Our company has reached the new heights as this made our app more creative, smart and lucrative. This integration helped us in developing an app with a major focus on functionality and maintenance of an app.
 
                </p>
            </div>
        </div>
            <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1" style="height: 644px!important;">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">UI/UX app design</h3>
                <p class="description-2">
Quantum IT Innovation is best among the others in UI/UX app design. We design our app that no one can ignore. We design an attractive and engaging app which is easy to use in mobile also and helps people to connect easily and increase the download from the app store. A most important thing in an app is to look catchy and can attract the user’s interface. Thus, our app developers NYC  are focused to design an attractive and interactive app with maximum traffic.
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