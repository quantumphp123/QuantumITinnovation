      @extends('website.layouts.master2') 
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
                    <h1 class="title_h1 h1_banner">Web Development <br>Services</h1>
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
 Our Web Development Expertise</h2>
                
                </div><!--12-->
                  <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="single-services">
              <img src="assets/images/icon_web_design.png" class="center-img" title="automation"> <h4 class="center-w">Website Designing</h4>
                         <div class="side-content-a">
                      <p>Quantum Leverage its experience across industries, we have been able to deliver unique, hand-crafted, custom, innovative and user-friendly layout and design solutions. Our certified experienced team of UI and Graphic Designers create layout concepts based on clients’ requirement, branding-aesthetically guidelines, market trends and industry best practices.
                       </p>
                      </div><!--side-contewnt-->
                 </div>
                </div><!--4-->
                  <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="single-services">
                <img src="assets/images/ecm-icon.png" class="center-img" title="automation"> <h4 class="center-w">E-commerce Development</h4>
                         <div class="side-content-a">
                      <p>We offer the most effective eCommerce solutions with custom UI designed, fast loading speed & one step checkout that gives an exclusive shopping experience to the buyer. We keep in mind all the requirements while building an E-commerce website that requires the understanding of the product purchase journey cycle, which actually begins with the user searching for your products.
                       </p>
                      </div><!--side-contewnt-->
                 </div>
                </div><!--4-->
                  <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="single-services">
              <img src="assets/images/icon_web_development.png" class="center-img" title="automation"> <h4 class="center-w">CMS Development</h4>
                         <div class="side-content-a">
                      <p>The Content Management System such as WordPress, Joomla, and Drupal is a type of web application that helps in maintaining, publishing, managing, editing and modifying the content of the website and web-based browser application. We have highly experienced CMS professional’s team who has worked on small, medium & large web-based solution of Joomla and WordPress successfully.
                       </p>
                      </div><!--side-contewnt-->
                 </div>
                </div><!--4-->




                    <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="single-services">
              <img src="assets/images/icon_portal_design.png" class="center-img" title="automation"> <h4 class="center-w">PHP Web Development</h4>
                         <div class="side-content-a">
                      <p>PHP is the most popular scripting programming language since it can be used to make projects ranging from small projects, website, ecommerce, portals and web-based software. Specialize in front-end and back-end by developing reliable yet creative PHP Web Development solutions.Quantum are expert in PHP web development.
                       </p>
                      </div><!--side-contewnt-->
                     
                    
                 </div>
                </div><!--4-->




                    <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="single-services">
              <img src="assets/images/icon_web_design.png" class="center-img" title="automation"> <h4 class="center-w">WEB Development</h4>
                         <div class="side-content-a">
                      <p>Quantum expertise in developing dynamic and scalable CMS websites utilizing advanced technologies like .Net, asp.net, PHP, Java, Python etc. We offer a wide range of web design & development solutions covering E-commerce, Responsive Design and Branding, Custom video & Flash Development and Online Web Applications as per industry standard.
                       </p>
                      </div><!--side-contewnt-->
                     
                    
                 </div>
                </div><!--4-->


                    <div class="col-md-4 col-12 mt-5 text-center">
                    <div class="single-services">
              <img src="assets/images/soft.png" class="center-img" title="automation"> <h4 class="center-w">Software Development</h4>
                         <div class="side-content-a">
                      <p>The requirement of software has rapidly increased in IT. The advancement in IT has transformed business scenario like ERP Enterprise Resource Planning (ERP) software, Customer Relationship Management (CRM), Sales Force Automation, Inventory Management System, and E-commerce solutions. 
                       </p>
                      </div><!--side-contewnt-->
                 </div>
                </div><!--4-->
              </div><!--row-->
              </div><!--cont-->
            </section>

      
<section class="py-0 pb-5">
  <div class="container">
                <div class="row">
                  <div class="col-md-12 text-center">
                  <img src="assets/images/Web-Development-Transparent.png" title="img" style="width: 100%;">
                   </div>
                </div>
              </div>
            </section>


    <section class="py-0" style="background-color: #fff;">
              <div class="container">
                <div class="row">
                   <div class="col-md-12 mt-3 text-center">
                <h2 class="top-head">We Build Website and Mobile Apps for Every User, Every Platform, and Every Industry</h2>
               
              </div><!--12--> 
              <div class="col-md-12 col-12">
                <div class="top-box-content">
                  <p>No technology is left untouched as we believe in adopting new trends & technologies that change with time and user demands. We are capable of designing & developing fully customized websites, apps, and software. We are reputed Web Development Company as well as Digital Marketing Company that is the reason we use SEO friendly approach & user-friendly interface that will offer you the most amazing web experience. Being a leading App Development and Digital Marketing Company we know the rules and regulation of developing a website that very well interacts with the search engine and helps in ranking. Our advanced approach & vast experience will rank you at the top of the searches. We’ve worked with infinite possibilities not only in the mobile app but also web development.</p>
                 
                </div><!--12-->
              </div><!--col-12-->
              
                </div><!--row-->
              </div><!--cont-->
            </section>


             <section class="process-section mt-5 mb-5">
              <div class="container">
                <div class="row">
             <div class="col-md-12 mt-3 text-center">
                <h2 class="top-head">Our Process</h2>
               
              </div><!--12-->
            <img src="{{asset('assets/img/Group-204.png')}}" class="img-fluid">
          </div>
          </div>
        </section>



           <div class="container mt-5 mb-3">
                 <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title-wrap text-center section-space--mb_40">
                                <h3 class="heading">Proud projects that<span class="text-color-primary"> make us stand out</span></h3>
                            </div>

                        </div>
                          <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
                <a href="{{url('/10th-gate-tours')}}" class="projects-wrap style-01">
                  <div class="hovereffect">
                    <img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/10th-gate-tours.jpg" alt="">
                    <div class="overlay">
                      <a class="port_info" href="{{url('/10th-gate-tours')}}">10th gate tours</a>
                      <br><br>
                    </div>
                  </div>
                </a>
            </div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
            <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
                <a href="{{url('/adelphia')}}" class="projects-wrap style-01">
                  <div class="hovereffect">
                    <img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/adelphia.jpg" alt="">
                    <div class="overlay">
                      <a class="port_info" href="{{url('/adelphia')}}">adelphia</a>
                      <br><br>
                    </div>
                  </div>
                </a>
            </div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
            <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
                <a href="{{url('/bhamas')}}" class="projects-wrap style-01">
                  <div class="hovereffect">
                    <img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/bhamas.jpg" alt="">
                    <div class="overlay">
                      <a class="port_info" href="{{url('/bhamas')}}">bhamas</a>
                      <br><br>
                    </div>
                  </div>
                </a>
            </div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
            <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
                <a href="{{url('/canahemp')}}" class="projects-wrap style-01">
                  <div class="hovereffect">
                    <img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/canahemp.jpg" alt="">
                    <div class="overlay">
                      <a class="port_info" href="{{url('/canahemp')}}">canahemp</a>
                      <br><br>
                    </div>
                  </div>
                </a>
            </div>
                        <!-- BOX-END -->
                 </div>
            </div> 

              <div class="why-choose-us mt-5" style="background-image:url(assets/img/Group-new.png);">
                  <div class="container pt-5 pb-5">
                      <h5 class="clr-wht text-center mb-3">Why to choose us for Website Development Company?</h5>
                      <i class="fas fa-circle" id="circle"></i>
                      <p class="txt-wht">With offices in India, UK, and the USA, we are a Web development company that caters to the global client base. </p>
                       <i class="fas fa-circle" id="circle"></i>
                      <p class="txt-wht">We have a strong team of 20+ talented designers and experienced web application developers who are well-versed to build web apps that use futuristic approach in scale and scope. </p>
                       <i class="fas fa-circle" id="circle"></i>
                      <p class="txt-wht">We employ advanced methodologies and strategies to provide website design & development solutions.</p>
                       <i class="fas fa-circle" id="circle"></i>
                      <p class="txt-wht">We stand well among all the Web development companies globally for successfully deploying more than 500 projects worldwide.</p>

                       <i class="fas fa-circle" id="circle"></i>
                      <p class="txt-wht">We follow ISO compliant processes, w3validation and guidelines to ensure maintaining high standards throughout the project cycle.</p>
                       <i class="fas fa-circle" id="circle"></i>
                      <p class="txt-wht">We experts in creating innovative, versatile, engaging and user-focused web & app development of all categories at competitive prices.</p>
                      
                  </div>
              </div>    
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