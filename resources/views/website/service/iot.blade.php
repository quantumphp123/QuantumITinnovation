@extends('website.layouts.master') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Internet of Things | IoT Applications & Solutions</title>
    <meta name="keywords" content="Internet of Things, IoT Applications, IoT Solutions">
	<meta name="description" content="">
@endsection
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<div class="site-wrapper-reveal">

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
        <div class="title_image" role="listbox" style="background-image:url({{asset('assets/images/2.jpg')}});">
        <div class="carousel-caption text-left">
            <div class="animated fadeInDown">
                <h1 class="title_h1 h1_banner">Internet of Things <br> (IoT) Services</h1>
                <div id="line"></div>
                 <div class="row">
                    <div class="col-lg-7">
                        <p class="text-white title_p">
                            <span>Empowering businesses and industries to shape the future with the Internet of Things. Make things happen.</span>
                        </p>
                        <div class="button_cont">
                            <div class="eft-1"></div>
                              <a href="{{url('/contact')}}" class="f-btn">Hire Developers</a>
                              <a href="{{url('/contact')}}" class="s-btn">Discuss Your Project</a>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>

        <div class="container pt-4 pb-4">
                <div class="top_sec">
                    <h5 class="text-center">Internet of things (IoT) services and solutions</h5>
                    <p class="mt-4 txt-algn">
                        The Internet of things (IoT) is a process, where several technological and non-technological means such as interrelated computing devices,
                        mechanical as well as digital machines, objects, animals or people are having required unique identifiers (UIDs) and skills to transfer 
                        data over a network without the need of human-to-human and human-to-computer interaction. 
                        Over the period, the convergence of multiple technologies such as real-time analytics, machine learning, embedded systems, 
                        commodity sensors, wireless sensor networks, automation and control systems has contributed to evolving the definition of the Internet of Things (IoT). 
                        IoT technology covers the devices and home appliances such as thermostats, lighting fixtures, home security systems, and cameras to contribute to promoting 
                        ecosystems and associated devices including smart speakers and smartphones. The industries and government have taken these steps concerning the pertaining 
                        issues in the growth of IoT, especially in the privacy and security terms.
                    </p>
                    <p>IoT services & solutions have given rise to a world of the new digital ecosystem, which helps to avoid the challenges faced by customers and provide them with beneficial experience. Moreover,
                       it enables the business to avail of accurate insights enabled via machine learning, analytics, and artificial intelligence (AI). IoT is responsible for boosting enterprise productivity, deliver enhanced customer experience, modify service quality, 
                       generating new revenue streams, manifest cost-effectiveness and much more, all by enabling the devices to connect and gather, collect and process data. 
                    </p>
                </div>    
        </div>
        <div class="benefit-img" style="background-image:url(assets/img/service-images/benefits_bg.jpg);">
            <div class="container mt-3 mb-3 pt-5 pb-5">
                <h4 class="mb-3 clr-wht text-center"><span>Benefits</h4>
                <p class="text-justify mb-3 clr-wht">
                    Internet of things (IoT) is a system, which offers numerous benefits by creating a world of the digital ecosystem and providing advantages to the people. Moreover, it helps businesses to create an enhanced customer experience. In other words, IoT helps in facilitating the digital transformation journey of an enterprise.  
                </p>
                <h6 class="mt-4 mb-4 clr-wht">Here are the various benefits of the Internet of Things (IoT), which an enterprise experience. These include: </h6>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="row">
                            <div class="col-lg-2 col-md-2">
                                <h2><i class="fa fa-cog clr-wht"></i></h2>
                            </div>
                            <div class="col-lg-10 col-md-10">
                                <h6 class="clr-wht">Device Management</h6>
                                <p class="clr-wht">
                                    Most of the companies face challenges in terms of security and privacy, which hampers their customer experience and overall growth. 
                                    With the help of the Internet of Things (IoT), the company can avoid all kinds of security issues and establish a safe and secure enterprise, 
                                    which has stable management of all devices.
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-lg-2">
                                <h2><i class="fas fa-chart-line clr-wht"></i></h2>
                            </div>
                            <div class="col-lg-10">
                                <h6 class="clr-wht">Edge Analytics</h6>
                                <p class="clr-wht">IoT provides analytic solutions to an organization which is verticalized and innovative and helps the decision-makers of an enterprise in preparing an insight for their business. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="row">
                            <div class="col-lg-2">
                                <h2><i class="fa fa-shield clr-wht"></i></h2>
                            </div>
                            <div class="col-lg-10">
                                <h6 class="clr-wht">Secure Ecosystem</h6>
                                <p class="clr-wht">IoT helps the business to protect themselves from all kinds of security issues, especially in terms of privacy by providing them with safety-net services to perform transaction and connections across the ecosystem. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mt-3">
                        <div class="row">
                            <div class="col-lg-2">
                                <h2><i class="fa fa-server clr-wht"></i></h2>
                            </div>
                            <div class="col-lg-10">
                                <h6 class="clr-wht">Engineering Services</h6>
                                <p class="clr-wht">IoT provides engineering services to the business in terms of hardware, software, and cloud to enable the companies to achieve a competitive edge. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 mt-3">
                        <div class="row">
                            <div class="col-lg-2">
                                <h2><i class="fa fa-check-square clr-wht"></i></h2>
                            </div>
                            <div class="col-lg-10">
                                <h6 class="clr-wht">Standards compliment</h6>
                                <p class="clr-wht">The automated management provided by IoT enables the companies to easily control compliance across various standards. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
      
               <!---------------------new-tab------------------------------>
          <section class="pb-5 accordion-tab" style="background-color: #fff;">
            <div class="container">
            <div class="row">
              <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Services Offering</h2>
                   
                  </div><!--12-->

                    <div class="col-md-6 mt-5">
                      <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn-new" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Consulting and development solutions 

                  </button> </h5>
                    <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></i>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
          <ul style="list-style-type: disc">
                                        <li>IoT fulfills the requirement for elicitation and analysis</li>
                                        <li>IoT enables in structuring the business processes with the help of technology and in-process consulting</li>
                                        <li>IoT helps in identifying the problem statement and provides relevant solutions for the same</li>
                                        <li>IoT provides thought leadership and repository of business-ready use cases</li>
                                        <li>IoT enables the enhancements in products and services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color: #fff;">
       Intelligent platforms    
                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"></i>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
           <ul style="list-style-type: disc">
                                      <li>The emergence of IoT has helped in establishing an open platform architecture, which provides effective connectivity</li>
                                      <li>In order to support the IoT resources by keeping in mind the cost efficiency and security, the internet of things has provided services such as multi-tenant architecture to establish the same</li>
                                      <li>With the help of IoT, companies are able to support large data with the help of mashup builder and business intelligence</li>
                                      <li>IoT has helped the companies to establish devise vendor agnostic and devise virtualization</li>
                                      <li>IoT has helped to establish reliable, secure, safe, scalable and OTA (online travel agency) firmware updates</li>
                                  </ul>
                             </div>
                         </div>
                    </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #fff;">
            Connected Devices

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"></i>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
      <ul style="list-style-type: disc">
                                        <li>IoT has provided services such as hardware product design (PCB, firmware) to provide solutions to the company and accelerate time to market</li>
                                        <li>It enables the implementation of design flow and supports PCB fabrication</li>
                                        <li>it helps to prepare the IoT framework and enablement</li>
                                        <li>It helps in establishing a customized-form factor design and prototyping according to the requirements</li>
                                        <li>It provides services, which results in enhancement of the features and certifications</li>
                                  </ul>
                             </div>
                        </div>
                   </div>
             <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: #fff;">
        Vertical Applications

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"></i>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
          <ul style="list-style-type: disc">
                                       <li>It provides end-devise application development along with multiple protocols and supporting cross-platform</li>
                                       <li>Internet of things helps in providing native and mobile application development</li>
                                       <li>It enables easy to import or export of data to manage applications</li>
                                       <li>It enables vertical domain expertise</li>
                                       <li>It helps the company in re-engineering and optimization with iterative refinement and customer-driven design</li>
                                  </ul>
                             </div>
                         </div>
                    </div>
               <div class="card">
              <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="color: #fff;">
     End-To-End System Integration

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix"></i>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                 <ul style="list-style-type: disc">
                                       <li>It provides web contents including CRM</li>
                                       <li>It enables ERP system integration</li>
                                       <li>It helps in the integration of SMS and emails</li>
                                       <li>It helps in integration of map and billing engine</li>
                                       <li>It helps in integrating multiple IoT assets several departments, functionalities, and stages</li>
                                 </ul> 
                              </div>
                         </div>
                     </div>
               <div class="card">
              <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="color: #fff;">
       Testing

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven"></i>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body">
                      <ul style="list-style-type: disc">
                                       <li>It enables devise lab testing</li>
                                       <li>It enables testing in devise field</li>
                                       <li>It enables platform testing</li>
                                       <li>It helps in testing a mobile application</li>
                                       <li>It enables application automated testing</li>
                                  </ul>
                             </div>
                          </div>
                      </div>
               <div class="card">
              <div class="card-header" id="headingEight">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="color: #fff;">
  Managed services and support
                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight"></i>
              </div>
              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                <div class="card-body">
                     <ul style="list-style-type: disc">
                                       <li>It helps in managing applications</li>
                                       <li>It helps in cloud hosting</li>
                                       <li>It provides L1/L2/L3 support</li>
                                       <li>It helps in managing remote infrastructure</li>
                                       <li>It helps in incident managing</li>
                                       <li>It enables the command center: SoC/NoC </li>
                                  </ul>
                              </div>
                          </div>
                       </div>
                  </div>
              </div><!--8-->
         <div class="col-md-6 mt-5">
                    <img src="{{asset('assets/images/137 IOT.jpg')}}" class="industry-one" title="automation">
                    </div><!--4-->            
               
            </div><!--row-->
            </div><!--cont-->
          </section>
<!----------------------new tab end-=----------------------->
        <div class="key-section">
            <img src="{{asset('assets/img/key-back.png')}}" alt="key-image" class="img-fluid">
        </div>
        <div class="focus-area mt-5 mb-5">
            <div class="container">
                <h5>Focus area</h5>
                <p class="text-justify mt-3">The internet of things (IoT) has some seamless solutions, which connect assets, operations/logistics and services to empower smart living, smart industries, smart enterprises, and deliver a connected experience.
                </p>
                <h6 class="mb-3">There are some important segments on which, the focus area of IoT revolves around. These include:  
                </h6>
                <p><i class="fas fa-circle" id="circle" style="color: #5d5b5b;"></i><strong>Smart industries:</strong> It involves re-imaging processes such as manufacturing, energy, and utilities to enhance the potential of the industry and facilitating sustainable development. 
                </p>
                <p><i class="fas fa-circle" id="circle" style="color: #5d5b5b;"></i>
                    <strong>Smart living:</strong> It involves enhancing the emerging technologies
                     such as wearables, healthcare, and security to establish a 
                     healthier, happier and secure environment. 
                </p>
                <p>
                    <i class="fas fa-circle" id="circle" style="color: #5d5b5b;"></i><strong>Smart enterprise:</strong> It involves connecting people, machines, and information through large data to increase the efficiency of the business. 
                </p>
            </div>
        </div>
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