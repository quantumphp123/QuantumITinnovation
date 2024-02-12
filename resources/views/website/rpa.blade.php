    @extends('website.layouts.master') 
    @section('content')
   
   

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <title>Services | Quantum IT Innovation</title>
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
                    <h1 class="title_h1 h1_banner">Robotic Process Automation <br> (RPA) Services</h1>
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

               <section class="py-0 pb-5" style="background-color: #fff;">
              <div class="container">
                <div class="row">
                   <div class="col-md-12 mt-3 text-center">
                <h5 class="txt-center">Robotic Process Automation Services</h5>
               
              </div><!--12--> 
              <div class="col-md-12 col-12">
                <div class="top-box-content">
                  <p>With the growing demand in the technological sector, a majority of organizations are adopting the task-level Robotic Process Automation (RPA) to tackle the organizational challenges such as increasing workforce efficiency, Total cost of ownership (TCO), decreasing human error and much more. RPA refers to the technology where manual work of humans is reduced by replacing them with robots.</p><br>
                  <p> It enables the companies to bring digital in the market, which not only increases the speed of work but cuts down the cost of employing humans for executing standard operating procedures (SOP). The RPA technology in an organization can be used to carry out various work including capturing and interpreting application processes, manipulating data, trigger responses, configuring existing software while keeping other devices undisturbed, creating communication channels with other systems and much more. </p><br>
                  <p>Moreover, RPA has the ability to re-configure rule-based processes due to its code-free nature, which does not need critical programming skills for the modification of pre-coded bots. It helps in bringing scalability and elasticity in the process execution to meet the requirements of a dynamic business environment. RPA helps you survive in the market competition by replacing manual work with robots, which helps in increasing productivity, reducing cost and transforming the business ecosystem. 
      </p>
                </div><!--12-->
              </div><!--col-12-->
              <div class="col-md-12 mt-3
              ">
                <img src="assets/images/AI.jpg" class="bottom-img" alt="">
               
              </div><!--12-->
                </div><!--row-->
              </div><!--cont-->
            </section>




          <section class="main-top" style="background-color: #fff;">
            <div class="container">
            <div class="row">
              <div class="col-md-12 mt-3 text-center">
                <h5 class="txt-center">Some Key Benefits Of Adopting RPA For Your Company</h5>
              
              </div><!--12-->
                <div class="col-md-4 col-12 mt-5 text-center">
                  <div class="box-side">
                         <i class="fas fa-archway" id="icon-top"></i>
                        <h4 class="heading-mid">Cost efficiency</h4>
                       <div class="side-content">
                    <p class="clr-wht">RPA is a cost-efficient software as it enables the company to replace human work with robots. Using robots to carry out the work costs very less than a human worker.</p>
                    </div><!--side-contewnt-->
                    </div><!--box-->
              </div><!--4-->
                <div class="col-md-4 col-12 mt-5 text-center">
                  <div class="box-side">
                   
                    <i class="fas fa-asterisk" id="icon-top"></i>
                        <h4 class="heading-mid">Higher Accuracy</h4>
                       <div class="side-content">
                    <p class="clr-wht">RPA is a software, which provides high-quality work with 100% accuracy. A work done by RPA does not require any rework and provides error-free data. 
                     </p>
                    </div><!--side-contewnt--> 
               </div>
              </div><!--4-->
               <div class="col-md-4 col-12 mt-5 text-center">
                  <div class="box-side">
                        <i class="fas fa-running" id="icon-top"></i>
                        <h4 class="heading-mid">Speedy Work</h4>
                       <div class="side-content">
                    <p class="clr-wht">A robot works at a speed higher than the human worker. Even the robot can work 24/7 without getting tired but human work cannot. Hence, completing the task in a very less amount of time. </p>
                    </div><!--side-contewnt-->
               </div>
              </div><!--4-->

               <div class="col-md-4 col-12 mt-5 text-center">
                  <div class="box-side">
                    
                <i class="fas fa-bolt" id="icon-top"></i>
                        <h4 class="heading-mid">Enhanced operational agility</h4>
                       <div class="side-content">
                    <p class="clr-wht">Switching to another task can be a bit difficult for a human worker. Since robots have the ability to switch to other work without any constraints. A business organization can anytime train a robot.
                     </p>
                    </div><!--side-contewnt-->
               </div>
              </div><!--4-->
                     <div class="col-md-4 col-12 mt-5 text-center">
                  <div class="box-side">
                   
       <i class="fab fa-canadian-maple-leaf" id="icon-top"></i>
                        <h4 class="heading-mid">Enhanced customer experience</h4>
                       <div class="side-content">
                    <p class="clr-wht"> RPA provides great customer experience with its efficient services such as fast delivery and 24-hour coverage. 
                     </p>
                    </div><!--side-contewnt-->
               </div>
              </div><!--4-->

                   <div class="col-md-4 col-12 mt-5 text-center">
                  <div class="box-side">
                 
            <i class="fas fa-bookmark" id="icon-top"></i>
                        <h4 class="heading-mid">Reduced Response Time</h4>
                       <div class="side-content">
                    <p class="clr-wht"> A human worker takes a lot of time in calculating data and responding. Since, robots are quicker to the gathering, analyzing and calculating the data.
                     </p>
                    </div><!--side-contewnt-->
               </div>
              </div><!--4-->
            </div><!--row-->
            </div><!--cont-->
          </section>


<!--process-->
<section class="main-top" style="background-color: #fff;">
              <div class="container">
              <div class="row">
                <div class="col-md-12 mt-3 text-center">
                  <h5 class="txt-center">

Our Process</h5>
 <p class="process-content" style="text-align: center;">Adoption of RPA for your organization means bringing efficiency in business workflow, data extraction, enhanced operational task. RPA works in a very smooth process with help in achieving the upper hand over your competition.  

      </p>
                
                </div><!--12-->

          <div class="col-md-1 mt-5">
            <div class="side-bar" style="float: left;
            min-height: 0px; width: 100%;
           ">
<div class="bullet-text-center"><i class="fas fa-stop-circle"></i></div>
    <div class="border-side text-center"></div>
    <div class="bullet-text-center"><i class="fas fa-stop-circle"></i></div>
    <div class="border-side text-center"></div>
    <div class="bullet-text-center"><i class="fas fa-stop-circle"></i></div>
    
   
        </div>
          </div>
                
                  <div class="col-md-11 col-12">
                    <div class="row mt-4">
                    <div class="box-side-seo pb-2" style="box-shadow: none !important;">
                        <h4 class="center-a-s">Analyzing</h4>
                         <div class="side-content-d">
                      <p style="text-align: left !important;">The first and foremost step is analyzing the process, which requires automation and selection of the right tools for its implementation. The elements including process lifetime.
                       </p>
                      </div><!--side-contewnt-->
                 </div>
                          <div class="box-side-seo pb-2 mt-3" style="box-shadow: none !important;">
                        <h4 class="center-a-s">Application</h4>
                         <div class="side-content-d">
                      <p style="text-align: left !important;">After the identification of all aspects such as the procedure of implementation, costs, and risks involved, the company begins with the real application of design and development. 

                       </p>
                      </div><!--side-contewnt-->
                 </div>

                  <div class="box-side-seo pb-2 mt-3" style="box-shadow: none !important;">
                        <h4 class="center-a-s">Authorization</h4>
                         <div class="side-content-d">
                      <p style="text-align: left !important;">In the authorization stage, a POC is developed for the determination of estimated ROI, bot design process, and financial model. All these works are carried out based on the analysis. 

                       </p>
                      </div><!--side-contewnt-->
                 </div>
                  <div class="box-side-seo pb-2 mt-3" style="box-shadow: none !important;">
                        <h4 class="center-a-s">Actualization</h4>
                         <div class="side-content-d">
                      <p style="text-align: left !important;">After analyzing, authorization and application, now it is the time, to begin with, the actual work. Release your bot into large organizations to work with employees. 
                       </p>
                      </div><!--side-contewnt-->
                 </div>
                 
                 
                </div><!--11-->
             </div>
        </div><!--row-->
    </div><!--cont-->
</section>
<!--end-->


      <section class="pb-5 accordion-tab" style="background-color: #fff;">
        <div class="container">
        <div class="row">
          <div class="col-md-12 mt-3 text-center">
                <h2 class="top-head">Industry Focus</h2>
              
              </div><!--12-->
                <div class="col-md-6 mt-5">
                  <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn-new" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               Banking

              </button> </h5>
                <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></i>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
   <h5 class="tab-head">RPA makes deposits and withdrawal processing easier</h5><br>
     <h5 class="tab-head">It enables loan processing</h5><br>
     <h5 class="tab-head">RPA helps in annual reporting</h5><br>
   <h5 class="tab-head"> It helps in handling account opening requests</h5><br>
     <h5 class="tab-head">RPA helps in handling account documents and templates </h5>

            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #fff;">
            Insurance
              </button></h5>
              <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"></i>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
<h5 class="tab-head">RPA enables claims registration and processing
      </h5><br>
      <h5 class="tab-head">Providing services such as underwriting
      </h5><br>
      <h5 class="tab-head">It helps in regulatory compliance
      </h5><br>
      <h5 class="tab-head"> It improvises legacy system integration</h5><br>
     <h5 class="tab-head">RPA helps in policy admin and servicing
      </h5>

            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #fff;">
             Healthcare

              </button></h5>
              <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"></i>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
               <h5 class="tab-head">RPA helps in making appointment bookings and cancelation easier

      </h5><br>
<h5 class="tab-head">It enables patient data management

      </h5><br>
   <h5 class="tab-head">It enables third-party management
      </h5><br>
<h5 class="tab-head"> It helps in claims processing and management</h5><br>
     <h5 class="tab-head">It enables account settlement
      </h5>
            </div>
          </div>
        </div>

         <div class="card">
          <div class="card-header" id="headingFour">
            <h5 class="mb-0">
              <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: #fff;">
       Construction

              </button></h5>
              <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"></i>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
            <h5 class="tab-head">It helps in procurement and inventory management</h5><br>
   <h5 class="tab-head">RPA helps in material/equipment management</h5><br>
   <h5 class="tab-head">It enables vendor management
      </h5><br>
    <h5 class="tab-head">It improvises security management</h5><br>
    <h5 class="tab-head">It helps to enhance document management
      </h5>
            </div>
          </div>
        </div>


         <div class="card">
          <div class="card-header" id="headingFive">
            <h5 class="mb-0">
              <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" style="color: #fff;">
       CrossIndustry

              </button></h5>
              <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive"></i>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
         <h5 class="tab-head">It enables finance and accounting</h5><br>
     <h5 class="tab-head">IT makes account payment and receiving easier
      </h5><br>
<h5 class="tab-head">RPA improvises sales operations
      </h5><br>
    <h5 class="tab-head">It helps in increasing human resources and payroll</h5><br>
 <h5 class="tab-head">Enhanced customer service
      </h5>
            </div>
          </div>
        </div>
      </div>
                </div><!--8-->

                 <div class="col-md-6 mt-5">
                  <img src="assets/images/Robot-01.png" class="industry-one" title="automation">
                </div><!--4-->
           
        </div><!--row-->
        </div><!--cont-->
      </section>


       <!--new-section-->
       <section class="mt-2 mb-5">
       <div class="container">
    <div class="row">
      <div class="col-md-12 mt-4 mb-5 text-center">
               <h5 class="txt-center">Services we offer</h5>
                 <p class="clr-wht" style="text-align: center !important;color: #000;">Robotic Process Automation (RPA) offers a number of services to lessen the human burden such as avoiding repetitive tasks and transforming the business process framework. 

      </p>
              
              </div><!--12-->
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox-side">
                <div class="service-icon">
                    <span><i class="fa fa-globe"></i></span>
                </div>
                <div class="service-content">
                    <h3 class="title-1">Digital business process Automation</h3>
                    <p class="description-2">Digital business process automation enables the business to reduce their work burden by delegating the lower level or routine work to the bots. Along with the existing employees, robots work in a data-driven approach to fulfill various requirements such as automating business workflow, content analysis, management and much more while saving a lot of time and manual labor.</p>
                </div>
            </div>
        </div>
         <div class="col-md-3 col-sm-6">
            <div class="serviceBox-side">
                <div class="service-icon">
                    <span><i class="fa fa-globe"></i></span>
                </div>
                <div class="service-content">
                    <h3 class="title-1">Digital business process Automation</h3>
                    <p class="description-2">Digital business process automation enables the business to reduce their work burden by delegating the lower level or routine work to the bots. Along with the existing employees, robots work in a data-driven approach to fulfill various requirements such as automating business workflow, content analysis, management and much more while saving a lot of time and manual labor.</p>
                </div>
            </div>
        </div>
           <div class="col-md-3 col-sm-6">
            <div class="serviceBox-side">
                <div class="service-icon">
                    <span><i class="fa fa-globe"></i></span>
                </div>
                <div class="service-content">
                    <h3 class="title-1">Support Automation</h3>
                    <p class="description-2">RPA provides automation services, which enables the company to provide 24-hour customer support, resolve queries, route tickets and streamline escalation process. These automation services will help in saving time, meet SLAs, exceed customer expectations and increasing overall efficiency. </p>
                </div>
            </div>
        </div>

          <div class="col-md-3 col-sm-6">
            <div class="serviceBox-side">
                <div class="service-icon">
                    <span><i class="fa fa-globe"></i></span>
                </div>
                <div class="service-content">
                    <h3 class="title-1">Web Extraction Services</h3>
                    <p class="description-2">RPA provides web extraction services, which enables the company to access accurate, relevant, structured and legitimate data according to the preferences. It helps in providing several benefits such as sentiment analysis, price comparison, and market research. Moreover, it enables to save time, money and make informed business decisions.  </p>
                </div>
            </div>
        </div>

    </div>
</div>
</section>
       <!--end-->
     
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