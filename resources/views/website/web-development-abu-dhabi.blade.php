@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Top Web Design & Development Company Abu Dhabi | Quantum IT</title>
    <meta name="keywords" content="Web Development Company Abu Dhabi, Website Development Company in Abu Dhabi, Web Development Company Abu Dhabi, Web Design Company Abu Dhabi">
	<meta name="description" content="Best Web Design & Development Company in Abu Dhabi. We offer world class website design & developments by our dedicated expert and web development Team which will create your website at an affordable price. Free Website Design">
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
                    <h2 class="top-head">Custom Web Development Company - Spread out your web reach with us..!</h2>
                    </div><!--12-->



          <div class="col-md-12 col-12">
                    <div class="top-box-content">
    <p>Quantum IT Innovation is a leading web design and development company in Abu Dhabi, specializes in develop, design and market your project. The professional design agency in UAE that is sharp, expeditious, and tailored to meet all your needs and requirements.</p>

<p>We offer robust website development solutions. Having a digital presence has become a necessity for every enterprise. You are representing your product or service in a huge market but there is no chance of the desired visibility and competitive edge without a robust website design, which is why we present a professional team with years of experience to give the users satisfaction and understanding with the latest trends.</p>

<p>We, at Quantum IT Innovation, are known to provide end-to-end services to our clients. Our development solution includes robustness and scalability that serve the purpose of the organization. Our effective solutions have provided all digital goals. The perfection of the work comes from the proven strategies or methodologies that we leverage.</p>

<p>We do the work of website development with the client’s specification because we fully understand the objective of website development whether a client wants it for the profile of the company or want to generate inquiries to sell the commodities to their respective clients or buyers. At Quantum IT Innovation, website development company Abu Dhabi works with all advanced platforms of CMS like WordPress, Magento, Joomla, Drupal, PHP, Java, ASP.Net, etc.</p>
<p>
  No technology is left untouched by our developers of website development company Abu Dhabi. We believe in adopting new technology that changes with time and user demands. Quantum IT Innovation Specialists use up-to-date technology to deliver the best user experience and easy-to-use solutions at optimal cost.
</p></div><!--12-->
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
                    <h2 class="top-head">Our Web Development Expertise in Abu Dhabi</h2>
                    </div><!--12-->
        <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-globe"></i></div>
                <h3 class="title-2">Website Designing</h3>
                <p class="description-2">
                   Quantum has years of experience and we leverage it. Across the world, we have successfully delivered unique, hand-crafted, innovative, custom, and user-friendly layout. We have certificated experience team of UI and Graphic designers that work with the latest design solutions and create layout according to company requirements, aesthetically guidelines, branding and deliver with industry best practices.
                </p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">E-commerce Development</h3>
                <p class="description-2">
                   We offer the latest eCommerce solutions with custom UI designed that has the fast loading speed and one step checkout that gives an exclusive shopping experience to the buyer. Before starting the process we kept all the requirements in our mind while building an eCommerce website that needs the understanding of the product, journey of purchase cycle that actually begins when users search for your products.
                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6 mt-5">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">CMS Web Development</h3>
                <p class="description-2">
                   The content management system such as WordPress, Joomla, and Drupal is a type of website development applications that helps in maintaining, managing, publishing, and modifying the content of the website. Our company website development Abu Dhabi has the highly experienced CMS professional’s team, who can work on small, medium, and large website-based solution of WordPress and Joomla successfully.
                </p>
            </div>
        </div>
          <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2"> Web Development</h3>
                <p class="description-2">
                  We are expertise in developing scalable CMS and dynamic websites utilizing advanced technologies like PHP, Java, .Net, Python, etc. we offer an extensive range of website design and development solutions covering E-commerce, branding, responsive design, custom video & flash development and also prepare your online web app as per industry standard.
                </p>
            </div>
        </div>
           <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">PHP Web Development</h3>
                <p class="description-2">
                 PHP is one of the most powerful and popular scripting languages since it can be used for small projects to website, eCommerce, and web-based software. Our website development Abu Dhabi team is very well expertise in front-end and back-end by developing reliable and creative PHP web development solutions. At Quantum, we hire the expert developers who can deliver and fulfill all the PHP web development demands as per requirements.
                </p>
            </div>
        </div>
            <div class="col-md-4 col-sm-6">
            <div class="serviceBox-1">
                <div class="service-icon-1"><i class="fa fa-rocket"></i></div>
                <h3 class="title-2">Software Development</h3>
                <p class="description-2">
                In the IT sector, there is a rapid growth has shown in the requirement of software. The advanced technology in IT has transformed the business scenario like Enterprise Resource Planning (ERP) software, CRM, Sales Force Automation, and e-commerce solutions. Many enterprises need them to manage their businesses. We offer the world best software solution to both small and large enterprises.
                </p>
            </div>
        </div>
    </div>
</div>
</section>

    <div class="container pt-4 pb-4">
                <div class="top_sec">
                    <h3 class="text-center">We provide Website and Mobile Apps</h3>
                    <h5 class="text-center">for every user, platform and industry</h5>
                    <p class="mt-4 txt-algn">
                        As we have covered all the best part of the technology and no one is untouched by us. We adopt all the latest technology with time and user demands. We have the best developers that are capable of designing and developing fully customized websites, apps, and software. We have reputed company of website development Abu Dhabi as well as Digital Marketing Company that is the reason we use SEO friendly approach and user-friendly interface in our sites. Being a leading App Development and digital marketing company in Abu Dhabi, we know the guidelines of developing an SEO friendly website that can interact very well with the search engines and helps you with your rankings. Our advanced approach and vast experience rank us on the top website development company of Abu Dhabi on the searches.
                    </p>
                    <p>We have always done our work independently and provide infinite possibility not only in the mobile application but also in website development.
                    </p>
                </div>    
        </div>
 

       <div class="why-choose-us mt-5" style="background-image:url(assets/img/Group-new.png);">
                    <div class="container pt-5 pb-5">
                        <h5 class="clr-wht text-center mb-3">Why your business needs a website?</h5>
                        <p>We confidently invite you to have our services and this confidence has come with many traits that our website development company Abu Dhabi offers you.</p>
                        <i class="fas fa-circle" id="circle"></i>
                        <p class="txt-wht"><b>Immense experience in the development process. - </b>Our team has included the most talented and professional developers in the industry. They have been in this profession for years and keep their eye on the latest trends which is why all our clients believe in us and our perfect solutions. The experience is the only thing that brings beauty and functionality together and provides a well-developed website. </p>
                        <i class="fas fa-circle" id="circle"></i>
                        <p class="txt-wht"><b>Development service becomes cost-effective - </b> We have the capacity to bring the development cost within the range of our client’s budget without compromising the quality at all! This all can only be possible due to the well-established development approach and the strategy designed by our Abu Dhabi developers. This has been the reason why our company has many global based clients. Many small startups have gained immense benefits with our solutions.</p>
                        <i class="fas fa-circle" id="circle"></i>
                        <p class="txt-wht"><b>Complete client support - </b> We believe in regular communication and discussion so that the client can view our crystal clear image. Hence, weekly meetings and reports are part of the development process. We always stay in touch with our client to provide them the best services and a wonderful experience.</p>
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
        
    </div>
    @endsection