	@extends('landingpage.layout.master') 

	@section('content')

	<section class="pt-0">
	   <div id="container"> 
		   <div class="row"> 
		    <div class="col-md-12">
		       <div class="callgafl">
		        <h2 class="center-head-2 text-center">High Performance Website That Create<br> Flood Of Customers Each Month</h2>
		        <div class="bg-color" style="background-color: #0000; width: 100%; min-height: 0px;">
		           <img src="{{asset('landing/images/serv/serv/2097-1.jpg')}}" class="bg-img-1">
		       </div>
		       </div>
		   </div>
		   </div>
		</div>
	</section>
	 <!-- MainContent -->
	 <div class="main-content">
	 	<div class="container">
	 		 <section class="pt-0">
	 		 	<div class="container">
	 		 		<div class="row row-eq-height">
	 		 			<div class="col-md-4 pr-3 pl-3 pl-lg-0">
	                        <div class="vc_custom_1575623134691 align-middle">
	                            <div class="title-box wow fadeInUp mb-0 text-left">
	                                <span class="title-design" style="font-size: 42px;font-family:'futura_ltcondensedextrabold',sans-serif;text-transform:capitalize;letter-spacing: -2px;"></span>
	                                <h2 class="center-head-one">Websites that Double Sales</h2>
	                            </div>
	                        </div>
	                     </div>
	                     <div class="pl-lg-5 col-md-8 col-sm-12 ">
	                     	<p class="center-text">We will create a high performance-marketing machine that capture leads, nurture them &amp; generate sales on autopilot</p>
	                     	<div class="mt-5 ">
	                     		<a class="button button-icon" data-toggle="modal" data-target="#form"><span class="btn-effect" style="color: white;"> Get Started</span></a>
	                     	</div>
	                     </div>
	 		 		</div>
	 		 	</div>
	 		 </section>

	 		 <div class="row">
	 		 	<div class="col-lg-12">
	                <div class="title-box wow fadeInUp text-center" style="visibility: visible; animation-name: fadeInUp;">
	                   <h2 class="center-head">Our Services</h2>
	                </div>
	            </div>

	            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp align-items-center">                          
	                <div class="fancy_service wow fadeInUp  text-center" >
	                    <div class="hover-effect"></div>
	                    <div class="fancy-info">
	                        <img src="{{asset('landing/images/services/10.png')}}" alt="fancybox">
	                        <h4 class="mt-4 mb-3 title">CMS Development</h4>
	                        <p class="center-text">Get easy to manage &amp; intuitive WordPress, Joomla, Drupal and other CMS base website for your company.</p>
	                        <!--<a class="link-btn" href="#"><span class="btn-effect"> Read More</span></a>-->
	                    </div>
	                </div>
	            </div>

	            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp align-items-center">
		            <div class="fancy_service-one wow fadeInUp  text-center" >
		                <div class="hover-effect"></div>
		                <div class="fancy-info">
		                    <img src="{{asset('landing/images/services/12.png')}}" alt="fancybox">
		                    <h4 class="mt-4 mb-3 title">PHP Web Development</h4>
		                    <p class="center-text">Get a creative &amp; fast loading PHP website with easy to use admin panel which seamlessly integration to business.</p>
		                    <!--<a class="link-btn" href="#"><span class="btn-effect"> Read More</span></a>-->
		                </div>
		            </div>
		        </div>

		        <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInUp align-items-center">
		            <div class="fancy_service wow fadeInUp  text-center" >
	                <div class="hover-effect"></div>
	                <div class="fancy-info">
	                    <img src="{{asset('landing/images/services/11.png')}}" alt="fancybox">
	                    <h4 class="mt-4 mb-3 title">Ecommerce Development</h4>
	                    <p class="center-text">Get fast loading one-step checkout website that gives exclusive shopping experience to your buyer.</p>
	                        <!--<a class="link-btn" href="#"><span class="btn-effect"> Read More</span></a>-->
	                </div>
	                </div>
		         </div>

	 		 </div>
		</div>
	 		 <div class="row">
	 		 	<div class="col-md-5">
	 		 		
	 		 	</div>
	 		 	<div class="col-md-3">
			     		<a class="button button-icon" data-toggle="modal" data-target="#form"><span class="btn-effect" style="color: white;"> Get Started</span></a>
	 		 	</div>
	 		 	<div class="col-md-4">
	 		 		
	 		 	</div>
	 		 </div>

	 		 <section>
	            <div class="container">
	                <div class="row">
	                	<div class="row mt-5">
	                		<div class="col-lg-6 wow fadeInUp align-items-center">
		                        <div class="title-box wow fadeInUp text-left">
		                            <h2 class="center-head">FREE Marketing Support in “Corona Crisis”</h2>
		                            <p class="center-text">With our Website Design &amp; Development, get 100% Free Marketing support that will help you not only survive, but also thrive through the Corona crisis.</p>
		                        </div>
		                        <div class="text-left">
		                            <ul class="iq-list">
		                                <li> <i class="fa fa-check-square" aria-hidden="true"></i> <span>360 Competitors Teardown</span> </li>
		                                <li> <i class="fa fa-check-square"></i> <span>Sales exploding blueprint</span> </li>
		                                <li> <i class="fa fa-check-square"></i> <span> X-ray Conversion Audit</span> </li>
		                                <li> <i class="fa fa-check-square"></i> <span>Google &amp; Facebook Ad Setup</span> </li>
		                                <li> <i class="fa fa-check-square"></i> <span>10k Sales Funnel Setup</span> </li>
		                            </ul>
		                        </div>
		                    </div>

		                    <div class="col-lg-6  wow fadeInUp ">
		                        <div class="contact-form">
		                            <form id="marketing-form" name="marketing-form" method="post">
		                                @csrf
		                           <div class=""> <input type="text" name="name" class="form-control text " id="name" placeholder="Your Name"></div>
		                           <div class=""> <input type="text" name="email" class="form-control text " id="email" placeholder="Your Email"></div>
		                           <div class=""> <input type="text" name="phone" id="subject" class="form-control text " placeholder="Phone Number"> </div>
		                           <div> <button name="submit" type="submit" value="Send" class="button-one">Get Started</button> </div>
		                           <span id="mark-message"></span>
		                           </form>
		                        </div>
		                    </div>

	                	</div>
	                </div>
	            </div>
	        </section>

	        <!-- Portfolios -->        
			<section id="gallery">
			  	<div class="container">
			    	<div id="image-gallery">
			    		<div class="row">
			    			<div class="col-lg-12">
					            <div class="title-box wow fadeInUp text-center" style="visibility: visible; animation-name: fadeInUp;">
					                <h3 class="top-head">Some Website We Have Handcrafted</h3>
					            </div>
					        </div>	

			    			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image content">
					          <div class="img-wrapper">
					            <a href="https://unsplash.it/500"><img src="{{asset('landing/images/portfolio/10th-gate-tours.jpg')}}" class="img-responsive"></a>
					            <div class="img-overlay">
					              <i class="fa fa-plus-circle ic" aria-hidden="true"></i>
					            </div>
					          </div>
					        </div>

					        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image content">
					          <div class="img-wrapper">
					            <a href="https://unsplash.it/600"><img src="{{asset('landing/images/portfolio/adelphia.jpg')}}" class="img-responsive"></a>
					            <div class="img-overlay">
					              <i class="fa fa-plus-circle ic" aria-hidden="true"></i>
					            </div>
					          </div>
					        </div>

					        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image content">
					          <div class="img-wrapper">
					            <a href="https://unsplash.it/700"><img src="{{asset('landing/images/portfolio/bhamas.jpg')}}" class="img-responsive"></a>
					            <div class="img-overlay">
					              <i class="fa fa-plus-circle ic" aria-hidden="true"></i>
					            </div>
					          </div>
					        </div>

					        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image content">
					          <div class="img-wrapper">
					            <a href="https://unsplash.it/800"><img src="{{asset('landing/images/portfolio/kennebunkport.jpg')}}" class="img-responsive"></a>
					            <div class="img-overlay">
					              <i class="fa fa-plus-circle ic" aria-hidden="true"></i>
					            </div>
					          </div>
					        </div>

					        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image content">
					          <div class="img-wrapper">
					            <a href="https://unsplash.it/900"><img src="{{asset('landing/images/portfolio/healthycreations.jpg')}}" class="img-responsive"></a>
					            <div class="img-overlay">
					              <i class="fa fa-plus-circle ic" aria-hidden="true"></i>
					            </div>
					          </div>
					        </div>

					        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image content">
					          <div class="img-wrapper">
					            <a href="https://unsplash.it/1000"><img src="{{asset('landing/images/portfolio/jivala.jpg')}}" class="img-responsive"></a>
					            <div class="img-overlay">
					              <i class="fa fa-plus-circle ic" aria-hidden="true"></i>
					            </div>
					          </div>
					        </div>

					        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image content">
					          <div class="img-wrapper">
					            <a href="https://unsplash.it/1100"><img src="{{asset('landing/images/portfolio/peelhypnosis.jpg')}}" class="img-responsive"></a>
					            <div class="img-overlay">
					              <i class="fa fa-plus-circle ic" aria-hidden="true"></i>
					            </div>
					          </div>
					        </div>

					        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image content">
					          <div class="img-wrapper">
					            <a href="https://unsplash.it/1200"><img src="{{asset('landing/images/portfolio/remodel.jpg')}}" class="img-responsive"></a>
					            <div class="img-overlay">
					              <i class="fa fa-plus-circle ic" aria-hidden="true"></i>
					            </div>
					          </div>
					        </div>

			    		</div>
			    	</div>
			    	<a href="#" id="loadMore">Load More</a>
			    	<div class=" text-center mt-5 ">
					    <a class="button button-icon" data-toggle="modal" data-target="#form" style="background-color:#fff !important; color: #000 !important;"><span class="btn-effect">Lets Create Your Website</span></a>
					</div>
				</div>
			</section>
			<!-- portfolio end -->


			<section class="pt-0">
	            <div class="container">
	                <div class="row">
	                    <div class="col-lg-12">
	                    </div>
	                </div>

	                <div class="row">
	                    <div class="col-lg-12">
	                        <div class="custom-tab-userbehavior text-left mt-md-5">   
	                            <div class="tab-content">
	                            	<div id="tab-collect-data" class="tab-pane fade active show">
	                            		<div class="row">
	                                        <div class="col-lg-12">
	                                        	<div class="title-box wow fadeInUp text-center" style="visibility: visible; animation-name: fadeInUp;">                                              
	                                            </div>
	                                        </div>

	                                        <div class="col-md-6">
	                                            <div class="title-box wow fadeInUp  text-left">
	                                                <span class="title-design"></span>
	                                                <h2 class="center-head">The Powerful Secrete that No web designer will tell you</h2>
	                                                <p class="center-text">In today’s digital world your website has become an online “hub” if done right, boosts the performance of ALL your marketing channels. Hence it makes no sense to leave it in the hands of a designer and not have it handcrafted by direct-response marketers and digital growth experts</p>
	                                            </div>
	                                            <div class="text-left  ">
	                                                <ul class="iq-list">
	                                                    <li><i class="fa fa-check"></i><span>Grow market share, while your competitors panic</span></li>
	                                                    <li><i class="fa fa-check"></i><span>Be Position #1 on Google SEO &amp; AdWords</span></li>
	                                                  
	                                                </ul>
	                                                <p>Boost your Sales, Revenue</p>
	                                            </div>
	                                            <div class=" text-left mt-5 ">
	                                                <a class="button button-icon" data-toggle="modal" data-target="#form"><span class="btn-effect" style="color:white"> Talk with our Strategist</span></a>
	                                            </div>
	                                        </div>

	                                        <div class="col-md-6 mt-5 mt-md-0">         
	                                            <img width="562" height="532" src="{{asset('landing/images/about-us/13.png')}}" class="attachment-full" alt="" sizes="100vw">
	                                        </div>

	                                    </div>
	                            	</div>

	                            	<div id="tab-identifytrends" class="tab-pane fade">
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                                <img width="1260" height="954" src="images/usage/01-01.png"  sizes="100vw">
	                                        </div>
	                                        <div class="col-md-6">                                       
	                                            <div class="title-box wow fadeInUp  text-left " >
	                                                <span class="title-design">02</span>
	                                                <h2>Collect Accurate Data</h2>
	                                                <p>Faff about only a quid blower I don’t want no agro bleeding chimney pot burke tosser cras nice one boot fanny.!</p>
	                                            </div>
	                                            <div class="text-left  ">
	                                                <ul class="iq-list">
	                                                    <li><i class="fa fa-check"></i><span>Boost Seo ranking</span></li>
	                                                    <li><i class="fa fa-check"></i><span>Marketing</span></li>
	                                                    <li><i class="fa fa-check"></i><span>Social Sharing</span></li>
	                                                </ul>
	                                            </div>
	                                            <div class=" text-left mt-5 ">
	                                                <a class="button button-icon" href="#"><span class="btn-effect"> View Details</span></a>
	                                            </div>
	                                        </div>   
	                                    </div>                                  
	                                </div>

	                                <div id="tab-understand" class="tab-pane fade">
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                                <div class="title-box wow fadeInUp  text-left">
	                                                    <span class="title-design">03</span>
	                                                    <h2>Collect Accurate Data</h2>
	                                                    <p>Faff about only a quid blower I don’t want no agro bleeding chimney pot burke tosser cras nice one boot fanny.!</p>
	                                                </div>
	                                                <div class="text-left  ">
	                                                    <ul class="iq-list">
	                                                        <li><i class="fa fa-check"></i><span>Boost Seo ranking</span></li>
	                                                        <li><i class="fa fa-check"></i><span>Marketing</span></li>
	                                                        <li><i class="fa fa-check"></i><span>Social Sharing</span></li>
	                                                    </ul>
	                                                </div>
	                                                <div class=" text-left mt-5 ">
	                                                    <a class="button button-icon" href="#"><span class="btn-effect"> View Details</span></a>
	                                                </div>
	                                        </div>
	                                        <div class="col-md-6">         
	                                            <img width="562" height="532" src="images/about-us/13.png" class="attachment-full" alt="" sizes="100vw">
	                                        </div>
	                                    </div>
	                                </div>

	                                <div id="tab-goals-hypotheses" class="tab-pane fade">
	                                    <div class="row">
	                                        <div class="col-md-6">
	                                                <img width="1260" height="954" src="images/usage/01-01.png"  sizes="100vw">
	                                        </div>
	                                        <div class="col-md-6 mt-5 mt-md-0">                                       
	                                            <div class="title-box wow fadeInUp  text-left " >
	                                                <span class="title-design">04</span>
	                                                <h2>Collect Accurate Data</h2>
	                                                <p>Faff about only a quid blower I don’t want no agro bleeding chimney pot burke tosser cras nice one boot fanny.!</p>
	                                            </div>
	                                            <div class="text-left  ">
	                                                <ul class="iq-list">
	                                                    <li><i class="fa fa-check"></i><span>Boost Seo ranking</span></li>
	                                                    <li><i class="fa fa-check"></i><span>Marketing</span></li>
	                                                    <li><i class="fa fa-check"></i><span>Social Sharing</span></li>
	                                                </ul>
	                                            </div>
	                                            <div class=" text-left mt-5 ">
	                                                <a class="button button-icon" href="#"><span class="btn-effect"> View Details</span></a>
	                                            </div>
	                                        </div>   
	                                    </div>
	                                </div>

	                                <div id="tab-take-action" class="tab-pane fade">
	                                    <div class="row">
	                                        <div class="col-md-6">                                       
	                                            <div class="title-box wow fadeInUp  text-left " >
	                                                <span class="title-design">04</span>
	                                                <h2>Collect Accurate Data</h2>
	                                                <p>Faff about only a quid blower I don’t want no agro bleeding chimney pot burke tosser cras nice one boot fanny.!</p>
	                                            </div>
	                                            <div class="text-left  ">
	                                                <ul class="iq-list">
	                                                    <li><i class="fa fa-check"></i><span>Boost Seo ranking</span></li>
	                                                    <li><i class="fa fa-check"></i><span>Marketing</span></li>
	                                                    <li><i class="fa fa-check"></i><span>Social Sharing</span></li>
	                                                    <li><i class="fa fa-check"></i><span>Retention</span></li>
	                                                    <li><i class="fa fa-check"></i><span>Reviews Generation</span></li>

	                                                </ul>
	                                            </div>
	                                            <div class=" text-left mt-5 ">
	                                                <a class="button button-icon" href="#"><span class="btn-effect"> View Details</span></a>
	                                            </div>
	                                        </div>   
	                                        <div class="col-md-6">
	                                                <img width="1260" height="954" src="images/usage/01-01.png"  sizes="100vw">
	                                        </div>
	                                
	                                    </div>
	                                </div>

	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </section>

	        <section class="xamin-blue-bg">
	            <div class="container">
	                <div class="row">
	                    <div class="col-sm-12">
	                        <div class="row">
	                            <div class="rmb-30 col-md-8">
	                                <h2 class="center-text-left">Mobile Responsive website that turn a browser into buyers</h2>
	                            </div>
	                            <div class="col-md-4" style="margin-top: 40px;">
	                                <div class=" text-center text-md-right ">
	                                    <a class="button  button-icon" data-toggle="modal" data-target="#form" style="background-color:#fff !important; color: #000 !important;">
	                                        <span class="btn-effect">Let’s Talk</span>
	                                    </a>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </section>
	 		 
	 		 <!-- TESTIMONIALS -->
			<section class="xamin-custom-bg">
			   <div class="container">
			      <div class="row">
			         <div class="col-sm-12 wow fadeInUp">
			            <div class="title-box wow fadeInUp text-center">
			               <span class="center-head">TESTIMONIALS</span>
			               
			               <h2>Here's What Our Clients Say</h2>
			            </div>
			         </div>
			      </div>
			      <div class="row">
			         <div class="col-md-12  wow fadeInUp">
			            <div class="owl-carousel testimonial-style owl-loaded owl-drag" data-dots="true" data-nav="true" data-autoplay="true" data-loop="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
			               <div class="item text-center">
			                  <div class="iq-testimonial">
			                     <div class="testimonial-info">
			                        <img alt="#" class="img-fluid rounded-circle" src="{{asset('landing/images/testimonials/1.jpg')}}">
			                        <div class="testimonial-name">
			                           <h5>David Reeves</h5>
			                           <span class="sub-title">CEO</span>
			                        </div>
			                     </div>
			                     <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i>
			                     <p>Its just a pleasure working with Quantum AI for our Fintech app. They were responsive, experienced & very prompt to our queries.  </p>
			                  </div>
			               </div>
			               <div class="item text-center">
			                  <div class="iq-testimonial">
			                     <div class="testimonial-info">
			                        <img alt="#" class="img-fluid rounded-circle" src="{{asset('landing/images/testimonials/2.jpg')}}">
			                        <div class="testimonial-name">
			                           <h5>Dave Morris</h5>
			                           <span class="sub-title">Business Advisor</span>
			                        </div>
			                     </div>
			                     <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i>
			                     <p>My experience with Quantum AI is very positive, they assign lot of resources for our work to deliver it on time. Also, I really like there working approach</p>
			                  </div>
			               </div>
			               <div class="item text-center">
			                  <div class="iq-testimonial">
			                     <div class="testimonial-info">
			                        <img alt="#" class="img-fluid rounded-circle" src="{{asset('landing/images/testimonials/3.jpg')}}">
			                        <div class="testimonial-name">
			                           <h5>Jason Siverio</h5>
			                           <span class="sub-title">COO</span>
			                        </div>
			                     </div>
			                     <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i>
			                     <p>Quantum AI is very professional with our work, their team understand our needs and deliver the perfect RPA Solutions to improve our overall business process.</p>
			                  </div>
			               </div>
			            </div>
			         </div>
			      </div>
			   </div>
			</section>
			<!-- TESTIMONIALS End -->

			<!-- Partner -->
			<section class="pt-0">
			   <div class="container">
			      <div class="row">
			         <div class="col-md-12">
			            <div class="title-box wow fadeInUp  text-center" >
			               <br>
			               <span class="title-design">Our Clients</span>
			               <h2 class="center-head">Our Customers Get Results</h2>
			            </div>
			         </div>
			      </div>
			      <div class="row">
			         <div class="col-md-12">
			            <div class="owl-carousel owl-loaded owl-drag"
			               data-dots="false"
			               data-nav="false"
			               data-items="6"
			               data-items-laptop="4"
			               data-items-tab="3"
			               data-items-mobile="2"
			               data-items-mobile-sm="1"
			               data-autoplay="true"
			               data-loop="true"
			               data-margin="30"
			               >
			               <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/1.png')}}" alt="image0">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/2.png')}}" alt="image1">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/3.png')}}" alt="image2">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/4.png')}}" alt="image3">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/5.png')}}" alt="image4">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/6.png')}}" alt="image5">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/7.png')}}" alt="image6">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/1.png')}}" alt="image7">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/2.png')}}" alt="image8">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/3.png')}}" alt="image9">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/4.png')}}" alt="image10">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/5.png')}}" alt="image11">
                                </div>
                            </div>
                            <div class="item">
                                <div class="clients-box">
                                    <img class="img-fluid client-img" src="{{asset('landing/images/partners/6.png')}}" alt="image12">
                                </div>
                            </div>
			            </div>
			         </div>
			      </div>
			   </div>
			</section>
			<!-- Partner End-->
			
			<div class="contact-us-area service-contact-bg section-space--ptb_100">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-4">
            <div class="contact-info sytle-one service-contact text-left">
               <div class="contact-info-title-wrap">
                  <h3 class="heading text-white mb-10">4.9/5.0</h3>
                  <div class="ht-star-rating lg-style">
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                     <span class="fa fa-star"></span>
                  </div>
                  <p class="sub-text">
                     Global Presence
                     <br> Worldwide 400+ Clients
                     <br> 1000+ Projects Delivered
                  </p>
               </div>
               <div class="contact-list-item">
                  <a class="single-contact-list">
                     <div class="content-wrap">
                        <div class="content">
                           <div class="icon">
                              <span class="fa fa-phone"></span>
                           </div>
                           <div class="main-content">
                              <h6 class="heading">Call for advice now!</h6>
                              <div class="text" style="font-size: 1.5em;">
                  <a href="tel:+91 9717998517" style="color:#d2a98e!important;">+91 971 799 8517</a>
                  </div>
                  <div class="text" style="font-size: 1.5em;">
                  <a href="tel:+1 8778773644" style="color:#d2a98e!important;">+1 877 877 3644</a>
                  </div>
                  </div>
                  </div>
                  </div>
                  </a>
                  <a class="single-contact-list">
                     <div class="content-wrap">
                        <div class="content">
                           <div class="icon">
                              <span class="fa fa-envelope"></span>
                           </div>
                           <div class="main-content">
                              <h6 class="heading">Say hello</h6>
                              <div class="text" style="font-size:18px;">
                  <a href ="mailto:sales@quantumitinnovation.com"  style="color:#d2a98e!important;">sales@quantumitinnovation.com</a></div>
                  </div>
                  </div>
                  </div>
                  </a>
               </div>
            </div>
         </div>
         <div class="col-lg-7 ml-auto">
            <div class="contact-form-service-wrap">
               <div class="contact-title text-center section-space--mb_">
                  <h4 class="">Get In Touch</h4>
                  <p class="text">Tell us what's on your mind and we'll get right back to you !</p>
               </div>
               <form  method="post" action="" 
                  class="form p-t-20 needs-validation" novalidate id="contactus">
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
                     <div class="contact-inner contact-message">
                        <textarea name="description" placeholder="Please describe what you need."></textarea>
                     </div>
                     <div class="submit-btn text-center">
                        <button class="ht-btn ht-btn-md cust-height-btn" type="submit">Send message</button>
                        <p class="form-messege"></p>
                     </div>
                     <br/>
                     <!--<div class="alert alert-danger alert-dismissible">-->
                     <!--</div>-->
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
	 	
	 </div>

	 <!-- Let's connect -->
	 <div class="main-modal">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="height: 228px;
       margin-top: 0em;
        width: 44px;
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

    <div class="modal fade" id="myModal">
	   <div class="modal-dialog modal-dialog-centered">
	      <div class="modal-content">
	         <!-- Modal Header -->
	         <div class="modal-header" style="position: relative;background-color: #0d2933;">
	            <h4 class="modal-title text-white ml-auto">Leave A Message</h4>
	            <img src="http://quantumits.online/quantumlanding//images/mobile-icon.gif" class="mobile-i" title="automation">
	            <button type="button" class="close text-white" data-dismiss="modal">×</button>
	         </div>
	         <!-- Modal body -->
	         <div class="modal-body">
	            <form  method="post" action="" 
	               class="form p-t-20 needs-validation" novalidate name="leavemessage" id="leavemessage">
	               <div class="form-group">
	                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
	                  <span class="small-icon"><i class="fas fa-user msgic"></i></span> 
	               </div>
	               <div class="form-group">
	                  <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
	                  <span class="small-icon"><i class="fas fa-envelope-open msgic"></i></span> 
	               </div>
	               <div class="form-group">
	                  <input type="text" name="phone" id="phone" onkeypress="return isNumber(event)" class="form-control" placeholder="Enter Contact">
	                  <span class="small-icon"><i class="fas fa-mobile-alt msgic"></i></span> 
	               </div>
	               <div class="form-group" style="padding-bottom: 5% !important;">
	                  <div class="styled-select">
	                     <select id="person_select" name="enquiry_type" class="form-control" required="" aria-required="true">
	                        <option value="">Choose Services</option>
	                        <option value="Mobile App Development">Mobile App Development</option>
	                        <option value="Website Design & Development">Website Design & Development </option>
	                        <option value="Digital Marketing (SEO, PPC, SMO)">Digital Marketing (SEO, PPC, SMO)</option>
	                        <option value="Artificial Intelligence">Artificial Intelligence</option>
	                        <option value="Robotic Process Automation">Robotic Process Automation</option>
	                     </select>
	                  </div>
	               </div>
	               <div class="form-group">
	                  <textarea name="description" placeholder="Message Here.." style="    width: 100%;
	                     border: 1px solid #ccc;
	                     padding: 3px 11px;
	                     font-size: 15px;
	                     font-weight: 500;margin-bottom:10px;"></textarea>
	               </div>
	               <button class="center-button mx-auto my-2" name="GetStarted"><a>Submit</a></button>
	            </form>
	         </div>
	      </div>
	   </div>
	</div>
	<!-- let's connect -->

	 <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered-1" role="document">
	    <div class="modal-content-1">
	      <div class="modal-header-one border-bottom-0">
	        <button type="button" class="close-one" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form id="modal-contact-form" name="modal-contact-form">
	          @csrf
	        <div class="modal-body-one">
	          <div class="form-group">
	           <input type="text" class="form-control-one" id="name" name="name" aria-describedby="emailHelp" placeholder="Your Name*" required/ style="border-bottom: 3px solid #9c9999 !important;background: none !important;">       
	          </div>
	          <div class="form-group">
	            
	          <input type="text" class="form-control-one" id="phone" name="phone" aria-describedby="emailHelp" placeholder="Phone*" required/ style="border-bottom: 3px solid #9c9999 !important;background: none !important;">
	       
	          </div>
	          <div class="form-group">
	           <input type="email" class="form-control-one" id="email_id" name="email" aria-describedby="emailHelp" placeholder="Email Address*" required/ style="border-bottom: 3px solid #9c9999 !important;background: none !important;">
	          </div>
	        </div>
	        <div class="modal-footer-one border-top-0 d-flex justify-content-center">
	          <button type="submit" class="btn btn-success-one">Submit</button>
	        </div>
	        <span id="form-success-text"></span>
	      </form>
	    </div>
	  </div>
	</div>


	<!-- modal -->
	<div id="contact" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 class="modal-title">Contacts:</h3>
				</div>
				
				<form id="contact-form" class="form-horizontal modal-body" role="form">
					<div class="form-group">
						
						<label class="control-label col-sm-3">Name <sup>*</sup></label>
						
						<div class="col-sm-6">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
								<input type="text" class="form-control" name="name" placeholder="Name" />
							</div>
						</div>
						
					</div>
					
					<div class="form-group">
						
						<label class="control-label col-sm-3"> Email address <sup>*</sup></label>
						<div class="col-sm-6">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
								<input class="form-control" name="mail" placeholder="my@domain.ru"
									required
									type="email" data-bv-emailaddress-message="Not valid" />
							</div>
						</div>
						
					</div>
					
					<div class="form-group">
						
						<label class="control-label col-sm-3">Phone <sup>*</sup></label>
						
						<div class="col-sm-4">
							<div class="input-group pull-left">
								<span class="input-group-addon"><i class="fa fa-mobile fa-fw"></i></span>
								<input type="text" class="form-control" name="phone" placeholder="79171234567"/>
							</div>
						</div>
						
					</div>
					
					<!--<div class="form-group">-->
						
					<!--	<label class="control-label col-sm-3">Message</label>-->
					<!--	<div class="col-sm-9">-->
					<!--		<div class="input-group">-->
					<!--			<span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>-->
					<!--			<textarea class="form-control" rows="3" type="text" placeholder="Your message" name="message"></textarea>-->
					<!--		</div>-->
					<!--	</div>-->
					<!--</div>-->
					
					<div class="form-group">
						<div class="text-center">
							<button type="submit" class="btn btn-primary btn-lg">Send! <i class="fa fa-send"></i></button>
						</div>
					</div>
				</form>
				
			</div>
		</div>
	</div>
	<!-- end modal -->
@endsection
@section('after-script')
<script>
      $(function () {

        $('#modal-contact-form').on('submit', function (e) {

          e.preventDefault();
            
          $.ajax({
            type: 'post',
            url: '{{url('contactus/post')}}',
            data: $('#modal-contact-form').serialize(),
            beforeSend: function(){
                // Show image container
                $("#loader").show();
             },
            success: function (result) {
              if(result.status == 200){
                  $('#form-success-text').html('Thank You . Your request has been submitted successfully.');
              }else{
                  $('#form-success-text').html('Please Try Again.')
              }
            },
            complete:function(data){
                // Hide image container
                $("#loader").hide();
            }
          });

        });

      });
    </script>
    <script>
      $(function () {

        $('#marketing-form').on('submit', function (e) {

          e.preventDefault();
            
          $.ajax({
            type: 'post',
            url: '{{url('contactus/post')}}',
            data: $('#marketing-form').serialize(),
            success: function (result) {
              if(result.status == 200){
                  $('#mark-message').html('Thank You . Your request has been submitted successfully.');
              }else{
                  $('#mark-message').html('Please Try Again.')
              }
            }
          });

        });

      });
    </script>
@endsection


	       