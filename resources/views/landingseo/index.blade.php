 @extends('landingseo.layout.master') 
 @section('after-style')
@endsection
    @section('content')
<div class="main"> 
  <!--modal--> 
  <!-- Let's connect -->
  <div class="main-modal">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="height: 228px;
         margin-top: 0em;
         width: 33px;
         border: 1px solid;
         letter-spacing: 1px;
         font-size: 19px;
         color: #000;
         background-color: #fff;
         text-transform: uppercase;
         padding: 0.78rem 0.35rem 0px 0px;
         border-radius: 25px 0 0 25px;"> <span style="writing-mode: vertical-rl;text-orientation: mixed;">Let's Connect</span><i class="fas fa-envelope" id="email-id"></i> </button>
  </div>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content"> 
        <!-- Modal Header -->
        <div class="modal-header" style="position: relative;background-color: #0d2933;"> <img src="{{asset('landingseo/images/logonw.png')}}" alt="xamin" title="logo" class="center-logo text-center">
          <button type="button" class="close text-white" data-dismiss="modal">×</button>
        </div>
        <div class="center-top-text" style="float: left; width: 100%; min-height: 0px;">
          <h2 class="center-text-cnt">Rank Your Website On 1st Page Of Google</h2>
        </div>
        <span id="form-success-text"></span> 
        <!-- Modal body -->
        <div class="modal-body">
          <form method="post" class="form p-t-20 needs-validation" novalidate name="lets-connect" id="lets-connect">
            <input type="hidden" name="_token" value="OG6qIpzEToPBpar187v4XLatWH26TDb2bF5tHh0N">
            <div class="form-group">
              <label class="label-text">Your Name *</label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Name">
              <span class="small-icon"><i class="fas fa-user msgic"></i></span> </div>
            <div class="form-group">
              <label class="label-text">Your Email*</label>
              <input type="text" name="email" id="email" class="form-control" placeholder="Email">
              <span class="small-icon"><i class="fas fa-envelope-open msgic"></i></span> </div>
            <div class="form-group">
              <label class="label-text">Your Phone Number *</label>
              <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone No">
              <span class="small-icon"><i class="fas fa-mobile-alt msgic"></i></span> </div>
            <button type="submit" class="center-button my-2" name="GetStarted" style="cursor:pointer;">
            <a>Get Started</a>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- let's connect --> 
  <!--modal-end--> 
  <!--hero section start-->
  <section class="ptb-100 bg-image overflow-hidden" image-overlay="8">
    <div class="background-image-wraper-one"></div>
    <div class="container">
      <div class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center mt-5" style="margin-top:9% !important;">
        <div class="col-md-12 col-lg-6">
          <div class="hero-slider-content text-white py-5 wow fadeInUp align-items-center" style="visibility: visible; animation-name: fadeInUp;">
            <h1 class="text-white-1">10X Your Website Traffic &amp; Leads</h1>
            <p class="lead">We have helped big brands &amp; small business to dominate in search
              engine</p>
            <div class="text-left-side"> <a class="button button-icon" data-toggle="modal" data-target="#form"  style="background: #fff !important;"margin-top: 9%;><span class="btn-effect" style="color:#000 !important;"> Get Started</span></a> </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6  wow fadeInUp align-items-center" style="visibility: visible; animation-name: fadeInUp;">
          <div class="img-wrap"> <img src="{{asset('landingseo/images/Business Plan-pana.png')}}" alt="app image" class="img-fluid"> </div>
        </div>
      </div>
      <!--end of row--> 
    </div>
    <!--end of container--> 
  </section>
  <!--hero section end--> 
  
  <!--services-->
  <section class="promo-section position-relative overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="section-heading pb-5">
            <h2>Our SEO Services</h2>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="serviceBox green">
            <div class="service-icon"> <img src="{{asset('landingseo/images/Local SEO.png')}}" alt="app image" class="img-fluid-center"> </div>
            <h3 class="title">Local SEO</h3>
            <p class="description"> Improve your local search visibility with our trusted local SEO services for small &amp; multi retail. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="serviceBox green">
            <div class="service-icon"> <img src="{{asset('landingseo/images/International SEO.png')}}" alt="app image" class="img-fluid-center"> </div>
            <h3 class="title">International Seo</h3>
            <p class="description"> Want to reach the global audience? Our International SEO services will provide you with a perfect base to achieve that. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="serviceBox green">
            <div class="service-icon"> <img src="{{asset('landingseo/images/Ecommerce SEO.png')}}" alt="app image" class="img-fluid-center"> </div>
            <h3 class="title">Ecommerce Seo</h3>
            <p class="description"> Our Ecommerce SEO Service help generate genuine website traffic that brings sales &amp; untimely revenue. </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="serviceBox green">
            <div class="service-icon"> <img src="{{asset('landingseo/images/Youtube SEO.png')}}" alt="app image" class="img-fluid-center"> </div>
            <h3 class="title">You Tube Seo</h3>
            <p class="description"> QuantumIT’s YouTube SEO Services helps your business earn more views, likes, comments,&amp; subscribers. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--services--> 
  
  <!--about us section start-->
  <section id="about" class="about-us position-relative gray-light-bg">
    <div class="container">
      <div class="row align-items-center justify-content-lg-between justify-content-md-center">
        <div class="col-md-6 col-xs-12 col-sm-6">
          <div class="about-content-left section-heading">
            <h2> GET Free SEO Analysis</h2>
            <ul class="check-list-wrap pt-3">
              <li><strong>360 Competitors Teardown</strong></li>
              <li><strong>Sales exploding blueprint</strong></li>
              <li><strong>X-ray Conversion Audit</strong></li>
              <li><strong>Google &amp; Facebook Ad Setup</strong></li>
              <li><strong>10k Sales Funnel Setup</strong></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-xs-12 col-sm-6">
          <div class="about-content-right">
            <div class="contact-form">
              <form id="marketing-form" name="marketing-form" method="post">
                <h3 class="text-form text-center pb-2">Get In Touch !</h3>
                <input type="hidden" name="_token" value="ZfsWpDky2LabFirLsrX9YurjH55b08wL97lDdI1w">
                <div class="">
                  <input type="text" name="name" class="form-control text " id="name" placeholder="Your Name">
                </div>
                <div class="">
                  <input type="text" name="email" class="form-control text " id="email" placeholder="Your Email">
                </div>
                <div class="">
                  <input type="text" name="phone" id="subject" class="form-control text " placeholder="Phone Number">
                </div>
                <div class="text-center mt-5">
                  <button name="submit" type="submit" value="Send" class="button-one" style="background-color: #002fa6 !important;color: #fff !important;">Get Started</button>
                </div>
                <span id="mark-message"></span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--features section start-->
  <section id="features" class="feature-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-8">
          <div class="section-heading text-center mb-5">
            <h2>Why Choose Us</h2>
          </div>
        </div>
        <!--end col--> 
      </div>
      <!--end row-->
      
      <div class="row align-items-center">
        <div class="col-lg-8 col-md-12  wow bounceInLeft" style="visibility: visible; animation-name: bounceInLeft;">
          <div class="row align-items-center">
            <div class="col-md-6 col-12">
              <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5"> <span class="ti-layout p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('landingseo/images/Transparency.png')}}" alt="app image" class="img-fluid-two"> </span>
                <div class="features-single-content d-block overflow-hidden">
                  <h5 class="mb-2">Transparency</h5>
                  <p>We are very clear about what we are doing on your behalf, and you will always have 24/7 access
                    to ALL of your data.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5"> <span class="ti-themify-favicon-alt p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('landingseo/images/High ROI.png')}}" alt="app image" class="img-fluid-two"> </span>
                <div class="features-single-content d-block overflow-hidden">
                  <h5 class="mb-2">High ROI</h5>
                  <p>Every penny your spend on our SEO service will give you a higher ROI in terms of traffic, leads,
                    conversion</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5"> <span class="ti-eye p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('landingseo/images/Measures Everything.png')}}" alt="app image" class="img-fluid-two"> </span>
                <div class="features-single-content d-block overflow-hidden">
                  <h5 class="mb-2">Measure Everything</h5>
                  <p>With best tools like google analytics &amp; webmasters, we track every user’s visit and its actions
                    over your website.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5"> <span class="ti-thumb-up p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('landingseo/images/Expertise.png')}}" alt="app image" class="img-fluid-two"> </span>
                <div class="features-single-content d-block overflow-hidden">
                  <h5 class="mb-2">Expertise</h5>
                  <p>To give your business a success, we hire the best of the best people who are passionate about
                    their work &amp; love to deliver output</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5"> <span class="ti-mobile p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('landingseo/images/Increased Visibility.png')}}" alt="app image" class="img-fluid-two"> </span>
                <div class="features-single-content d-block overflow-hidden">
                  <h5 class="mb-2">Increased Visibility</h5>
                  <p>The Prime objective of SEO, i.e. increase visibility, presence &amp; traffic, will be achieved in a
                    given time frame.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="features-single-wrap mb-sm-0 mb-md-5 mb-lg-5"> <span class="ti-world p-3 mr-4 mt-1 rounded-circle float-left"> <img src="{{asset('landingseo/images/Free SEO analysis.png')}}" alt="app image" class="img-fluid-two"> </span>
                <div class="features-single-content d-block overflow-hidden">
                  <h5 class="mb-2">Free SEO analysis</h5>
                  <p>To show you where your business stands in search, we will give you detail competitors &amp; market
                    analysis for Free.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12"> <img src="{{asset('landingseo/images/why-choose.png')}}" class="img-fluid mx-auto d-lg-block" alt="app screen"> </div>
      </div>
    </div>
  </section>
  <!--features section end--> 
  
  <!-- Mobile responsive-->
  <section class="xamin-blue-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="rmb-30 col-md-8">
              <h2 class="center-text-left">Rank Your Website on 1st Page of Google</h2>
            </div>
            <div class="col-md-4" style="margin-top: 40px;">
              <div class="text-center mt-2"> <a  href="#" class="btn-icon" data-toggle="modal" data-target="#form" style="background-color:#fff !important; color:#073498 !important;"> <span class="btn-effect">Let's Start Your SEO</span> </a> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Mobile responsive end--> 
  
  <!-------------------------------again-------------------------->
  <section class="casestudy">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-8">
          <div class="section-heading text-center mb-5">
            <h2>Our Feature Studies</h2>
          </div>
        </div>
        <!--end col--> 
      </div>
      <div class="row">
        <div class="col-md-12 wow  fadeIn" data-wow-delay="0.2s">
          <div class="case-study-tab">
            <ul id="tabs" class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="#casestudy" role="tab" data-toggle="tab" class="active ">Case Studies</a></li>
              <li role="presentation"><a href="#portfolio" role="tab" data-toggle="tab">Portfolio</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade active show " id="casestudy">
                <div class="case-study-slider owl-carousel owl-theme owl-loaded owl-drag">
                  <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-8840px, 0px, 0px); transition: all 0.25s ease 0s; width: 13260px;">
                      <div class="owl-item cloned" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> ppc</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/HLG-home.jpg" alt="Gshlaw - PPC Client" title="Gshlaw - PPC Client">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> Greg Hoover</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>The Hoover Law Group was started in 1998 in a tiny office in downtown Seattle. The firm started in the areas of personal injury, criminal defense, and immigration. Since then, the firm has grown to 3 lawyers, and six assistants, and now has office locations in three states, Seattle, WA,... </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Increase-in-conversion.png" alt="Increase in Conversion Rate" title="Increase in Conversion Rate"></figure>
                                  <h3>60%</h3>
                                  <span>Increase in Conversion <br>
                                  Rate</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Qualified-clicks.png" alt="Qualified Clicks Increased" title="Qualified Clicks Increased"></figure>
                                  <h3>66%</h3>
                                  <span>Qualified Clicks <br>
                                  Increased</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Impression.png" alt="Total Impressions Increased" title="Total Impressions Increased"></figure>
                                  <h3>149%</h3>
                                  <span>Total Impressions <br>
                                  Increased</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Cost-per-lead-decreased.png" alt="Lead Cost Decreased" title="Lead Cost Decreased"></figure>
                                  <h3>57%</h3>
                                  <span>Lead Cost<br>
                                  Decreased</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item cloned" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> smo</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/Solar.jpg" alt="Ravisolar - SMO Client" title="Ravisolar - SMO Client">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> Ravisolar</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>Ravi Solar is dedicated to deliver superior quality and performance excellence in the field of manufacturing high quality Module Mounting Structures and Engineering- Procurement- Contracting services along with a vast experience in the diversified industries. Ravi Solar backed by its hu... </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Icon-26.png" alt="Increase in Page  View" title="Increase in Page  View"></figure>
                                  <h3>72%</h3>
                                  <span>Increase in Page <br>
                                  View</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/increase-page-likes.png" alt="Increase Page Likes" title="Increase Page Likes"></figure>
                                  <h3>57%</h3>
                                  <span>Increase Page <br>
                                  Likes</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/people-reach.png" alt="Increase in People Reach" title="Increase in People Reach"></figure>
                                  <h3>113+</h3>
                                  <span>Increase in People <br>
                                  Reach</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/post-engagement-icon.png" alt="Increase post engagement" title="Increase post engagement"></figure>
                                  <h3>100%</h3>
                                  <span>Increase Post <br>
                                  Engagement</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item cloned" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> orm</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/mark-elexo.png" alt="Mark Alexopolous - ORM Client" title="Mark Alexopolous - ORM Client">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> Mark Alexopolous</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>Develop a winning automotive remarketing strategy with Mark Alexopoulos in Fort Lauderdale, Florida. I help you make your business profitable by managing your campaigns and identifying the best style or approach for your company.</p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Keywords.png" alt="No of Keywords" title="No of Keywords"></figure>
                                  <h3>2</h3>
                                  <span>No of <br>
                                  Keywords</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/positive-results.png" alt="No of Positive Results" title="No of Positive Results"></figure>
                                  <h3>40</h3>
                                  <span>No of Positive <br>
                                  Results</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/negative-results.png" alt="No of Negative Results Pushdown" title="No of Negative Results Pushdown"></figure>
                                  <h3>5</h3>
                                  <span>No of Negative Results Pushdown</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/brand-established.png" alt="Brand established on Top Platforms" title="Brand established on Top Platforms"></figure>
                                  <h3>100</h3>
                                  <span>Brand established on Top Platforms</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> seo</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/Inspired.jpg" alt="Inspired Asset Management" title="Inspired Asset Management">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> Inspired Asset Management</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>One of the leading property investment companies over the last five years, we maximize returns by spotting the marginal gains others miss and now boast a completed and pipeline GDV of around £250 million.&nbsp;We minimize outlay whilst maximizing returns by transforming run-down r... </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Icon-24.png" alt="Increase in sessions" title="Increase in sessions"></figure>
                                  <h3>45.23%</h3>
                                  <span>Increase in <br>
                                  sessions</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Icon-25.png" alt="Increase in Number of users" title="Increase in Number of users"></figure>
                                  <h3>32.01%</h3>
                                  <span>Increase in Number of <br>
                                  users</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Icon-26.png" alt="Increase in Page  View" title="Increase in Page  View"></figure>
                                  <h3>51.5%</h3>
                                  <span>Increase in Page <br>
                                  View</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Icon-27.png" alt="Decrease in Bounce Rate" title="Decrease in Bounce Rate"></figure>
                                  <h3>50%</h3>
                                  <span>Decrease in Bounce <br>
                                  Rate</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> smo</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/Ayurmana.jpg" alt="ayurmana.in - SMO Client" title="ayurmana.in - SMO Client">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> AyurMana</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>Ayurmana is an exclusive Ayurvedic Hospital in Trivandrum, Kerala, India; run by Dharma Ayurveda. Set in a healingly serene ambience on a beautiful hillock in Thiruvananthapuram, the distinguished ayurvedic health centre offers congenial surrounding for the powerful cures of the most re... </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/page-view.png" alt="Increase Page View" title="Increase Page View"></figure>
                                  <h3>55%</h3>
                                  <span>Increase Page <br>
                                  View</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/increase-page-likes.png" alt="Increase Page Likes" title="Increase Page Likes"></figure>
                                  <h3>64%</h3>
                                  <span>Increase Page <br>
                                  Likes</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/people-reach.png" alt="Increase in People Reach" title="Increase in People Reach"></figure>
                                  <h3>258+</h3>
                                  <span>Increase in People <br>
                                  Reach</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/post-engagement-icon.png" alt="Increase post engagement" title="Increase post engagement"></figure>
                                  <h3>176%</h3>
                                  <span>Increase Post <br>
                                  Engagement</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> orm</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/Basket_20Ball.jpg" alt="sibl - ORM Client" title="sibl - ORM Client">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> Craig Raucher</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>The well known Staten Island Basketball League at Public School 8 in Great Kills, Staten Island was founded by Craig Raucher in 1980. It is the oldest and longest running group at the same location in the history of the New York City school system. The ages of the players range from 26 ... </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Keywords.png" alt="No of Keywords" title="No of Keywords"></figure>
                                  <h3>2</h3>
                                  <span>No of <br>
                                  Keywords</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/positive-results.png" alt="No of Positive Results" title="No of Positive Results"></figure>
                                  <h3>37</h3>
                                  <span>No of Positive <br>
                                  Results</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/negative-results.png" alt="No of Negative Results Pushdown" title="No of Negative Results Pushdown"></figure>
                                  <h3>4</h3>
                                  <span>No of Negative Results Pushdown</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/brand-established.png" alt="Brand established on Top Platforms" title="Brand established on Top Platforms"></figure>
                                  <h3>65</h3>
                                  <span>Brand established on Top Platforms</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> ppc</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/HLG-home.jpg" alt="Gshlaw - PPC Client" title="Gshlaw - PPC Client">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> Greg Hoover</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>The Hoover Law Group was started in 1998 in a tiny office in downtown Seattle. The firm started in the areas of personal injury, criminal defense, and immigration. Since then, the firm has grown to 3 lawyers, and six assistants, and now has office locations in three states, Seattle, WA,... </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Increase-in-conversion.png" alt="Increase in Conversion Rate" title="Increase in Conversion Rate"></figure>
                                  <h3>60%</h3>
                                  <span>Increase in Conversion <br>
                                  Rate</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Qualified-clicks.png" alt="Qualified Clicks Increased" title="Qualified Clicks Increased"></figure>
                                  <h3>66%</h3>
                                  <span>Qualified Clicks <br>
                                  Increased</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Impression.png" alt="Total Impressions Increased" title="Total Impressions Increased"></figure>
                                  <h3>149%</h3>
                                  <span>Total Impressions <br>
                                  Increased</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Cost-per-lead-decreased.png" alt="Lead Cost Decreased" title="Lead Cost Decreased"></figure>
                                  <h3>57%</h3>
                                  <span>Lead Cost<br>
                                  Decreased</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> smo</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/Solar.jpg" alt="Ravisolar - SMO Client" title="Ravisolar - SMO Client">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> Ravisolar</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>Ravi Solar is dedicated to deliver superior quality and performance excellence in the field of manufacturing high quality Module Mounting Structures and Engineering- Procurement- Contracting services along with a vast experience in the diversified industries. Ravi Solar backed by its hu... </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Icon-26.png" alt="Increase in Page  View" title="Increase in Page  View"></figure>
                                  <h3>72%</h3>
                                  <span>Increase in Page <br>
                                  View</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/increase-page-likes.png" alt="Increase Page Likes" title="Increase Page Likes"></figure>
                                  <h3>57%</h3>
                                  <span>Increase Page <br>
                                  Likes</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/people-reach.png" alt="Increase in People Reach" title="Increase in People Reach"></figure>
                                  <h3>113+</h3>
                                  <span>Increase in People <br>
                                  Reach</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/post-engagement-icon.png" alt="Increase post engagement" title="Increase post engagement"></figure>
                                  <h3>100%</h3>
                                  <span>Increase Post <br>
                                  Engagement</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item active" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> orm</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/mark-elexo.png" alt="Mark Alexopolous - ORM Client" title="Mark Alexopolous - ORM Client">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> Mark Alexopolous</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>Develop a winning automotive remarketing strategy with Mark Alexopoulos in Fort Lauderdale, Florida. I help you make your business profitable by managing your campaigns and identifying the best style or approach for your company.</p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Keywords.png" alt="No of Keywords" title="No of Keywords"></figure>
                                  <h3>2</h3>
                                  <span>No of <br>
                                  Keywords</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/positive-results.png" alt="No of Positive Results" title="No of Positive Results"></figure>
                                  <h3>40</h3>
                                  <span>No of Positive <br>
                                  Results</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/negative-results.png" alt="No of Negative Results Pushdown" title="No of Negative Results Pushdown"></figure>
                                  <h3>5</h3>
                                  <span>No of Negative Results Pushdown</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/brand-established.png" alt="Brand established on Top Platforms" title="Brand established on Top Platforms"></figure>
                                  <h3>100</h3>
                                  <span>Brand established on Top Platforms</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item cloned" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> seo</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/Inspired.jpg" alt="Inspired Asset Management" title="Inspired Asset Management">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> Inspired Asset Management</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>One of the leading property investment companies over the last five years, we maximize returns by spotting the marginal gains others miss and now boast a completed and pipeline GDV of around £250 million.&nbsp;We minimize outlay whilst maximizing returns by transforming run-down r... </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Icon-24.png" alt="Increase in sessions" title="Increase in sessions"></figure>
                                  <h3>45.23%</h3>
                                  <span>Increase in <br>
                                  sessions</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Icon-25.png" alt="Increase in Number of users" title="Increase in Number of users"></figure>
                                  <h3>32.01%</h3>
                                  <span>Increase in Number of <br>
                                  users</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Icon-26.png" alt="Increase in Page  View" title="Increase in Page  View"></figure>
                                  <h3>51.5%</h3>
                                  <span>Increase in Page <br>
                                  View</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Icon-27.png" alt="Decrease in Bounce Rate" title="Decrease in Bounce Rate"></figure>
                                  <h3>50%</h3>
                                  <span>Decrease in Bounce <br>
                                  Rate</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item cloned" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> smo</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/Ayurmana.jpg" alt="ayurmana.in - SMO Client" title="ayurmana.in - SMO Client">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> AyurMana</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>Ayurmana is an exclusive Ayurvedic Hospital in Trivandrum, Kerala, India; run by Dharma Ayurveda. Set in a healingly serene ambience on a beautiful hillock in Thiruvananthapuram, the distinguished ayurvedic health centre offers congenial surrounding for the powerful cures of the most re... </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/page-view.png" alt="Increase Page View" title="Increase Page View"></figure>
                                  <h3>55%</h3>
                                  <span>Increase Page <br>
                                  View</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/increase-page-likes.png" alt="Increase Page Likes" title="Increase Page Likes"></figure>
                                  <h3>64%</h3>
                                  <span>Increase Page <br>
                                  Likes</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/people-reach.png" alt="Increase in People Reach" title="Increase in People Reach"></figure>
                                  <h3>258+</h3>
                                  <span>Increase in People <br>
                                  Reach</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/post-engagement-icon.png" alt="Increase post engagement" title="Increase post engagement"></figure>
                                  <h3>176%</h3>
                                  <span>Increase Post <br>
                                  Engagement</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item cloned" style="width: 1105px;">
                        <div class="row item">
                          <div class="col-md-6 mr0">
                            <div class="case-study-colom">
                              <div class="case_category-dv">
                                <h5> orm</h5>
                              </div>
                              <div class="casestudy-over-child"> <img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/home/Basket_20Ball.jpg" alt="sibl - ORM Client" title="sibl - ORM Client">
                                <div class="casestudy-overlay">
                                  <p><b>Project Name: </b> Craig Raucher</p>
                                  <p style="display:none;"><b>URL: </b> <a href="javascript:void(0)"></a></p>
                                </div>
                              </div>
                              <p>The well known Staten Island Basketball League at Public School 8 in Great Kills, Staten Island was founded by Craig Raucher in 1980. It is the oldest and longest running group at the same location in the history of the New York City school system. The ages of the players range from 26 ... </p>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/Keywords.png" alt="No of Keywords" title="No of Keywords"></figure>
                                  <h3>2</h3>
                                  <span>No of <br>
                                  Keywords</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/positive-results.png" alt="No of Positive Results" title="No of Positive Results"></figure>
                                  <h3>37</h3>
                                  <span>No of Positive <br>
                                  Results</span> </div>
                              </div>
                              <div class="col-md-6 col-6 mr0">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/negative-results.png" alt="No of Negative Results Pushdown" title="No of Negative Results Pushdown"></figure>
                                  <h3>4</h3>
                                  <span>No of Negative Results Pushdown</span> </div>
                              </div>
                              <div class="col-md-6 col-6">
                                <div class="case-study-status text-center">
                                  <figure><img src="https://www.ezrankings.org/ez-admin/uploads/case_studies/features/brand-established.png" alt="Brand established on Top Platforms" title="Brand established on Top Platforms"></figure>
                                  <h3>65</h3>
                                  <span>Brand established on Top Platforms</span> </div>
                              </div>
                            </div>
                          </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/case-study.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                    <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="portfolio">
                <div class="case-study-slider owl-carousel owl-theme owl-loaded owl-drag">
                  <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">
                      <div class="owl-item">
                        <div class="portfolio row ">
                          <div class="col-md-6">
                            <div class="port-folio">
                              <h5>OUR FEATURED PROJECTS</h5>
                              <h3>Auction Sonic</h3>
                              <p>Auction sonic is the  live bidding website on e-commerce experience with a unique bargain shoppin... </p>
                              <div class="row">
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-html5" aria-hidden="true"></i> </span> <span> HTML5</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-retweet" aria-hidden="true"></i> </span> <span> Ajax</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-code" aria-hidden="true"></i> </span> <span> PHP</span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6"> <img src="https://www.ezrankings.org/ez-admin/uploads/portfolio/thumb/Auction-sonic.jpg" alt="Auction Sonic" title="Auction Sonic"> </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/portfolio.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class="portfolio row ">
                          <div class="col-md-6">
                            <div class="port-folio">
                              <h5>OUR FEATURED PROJECTS</h5>
                              <h3>NerdPRO Solutions</h3>
                              <p>NerdPRO Solutions is assignment help services which is specialize in providing successful endeavo... </p>
                              <div class="row">
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-html5" aria-hidden="true"></i> </span> <span> HTML5</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-wordpress" aria-hidden="true"></i> </span> <span> Wordpress</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-retweet" aria-hidden="true"></i> </span> <span> Ajax</span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6"> <img src="https://www.ezrankings.org/ez-admin/uploads/portfolio/thumb/Nerdpro.jpg" alt="NERD Pro" title="NERD Pro"> </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/portfolio.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class="portfolio row ">
                          <div class="col-md-6">
                            <div class="port-folio">
                              <h5>OUR FEATURED PROJECTS</h5>
                              <h3>Staten Island Basketball League</h3>
                              <p>Staten Island Basketball League at Public School 8 in Great Kills, Staten Island was founded by C... </p>
                              <div class="row">
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-html5" aria-hidden="true"></i> </span> <span> HTML5</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-wordpress" aria-hidden="true"></i> </span> <span> Wordpress</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-retweet" aria-hidden="true"></i> </span> <span> Ajax</span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6"> <img src="https://www.ezrankings.org/ez-admin/uploads/portfolio/thumb/Sibl.jpg" alt="Staten Island Basketball League" title="Staten Island Basketball League"> </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/portfolio.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class="portfolio row ">
                          <div class="col-md-6">
                            <div class="port-folio">
                              <h5>OUR FEATURED PROJECTS</h5>
                              <h3>Petcare</h3>
                              <p>Petcare is the website which takes the review on pets from the world and graph the Result on the world map. It logs the errors and display the errors to report viewer.</p>
                              <div class="row">
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-html5" aria-hidden="true"></i> </span> <span> HTML5</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-wordpress" aria-hidden="true"></i> </span> <span> Wordpress</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-retweet" aria-hidden="true"></i> </span> <span> Ajax</span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6"> <img src="https://www.ezrankings.org/ez-admin/uploads/portfolio/thumb/Petcare.jpg" alt="Petcare" title="Petcare"> </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/portfolio.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class="portfolio row ">
                          <div class="col-md-6">
                            <div class="port-folio">
                              <h5>OUR FEATURED PROJECTS</h5>
                              <h3>Casio Calculators India</h3>
                              <p>CASIO supports the intellectual and creative activities of people around the world with long-lasting products that can be used anywhere, anytime, and by anyone. To achieve this, CASIO uses a product development approach focused on constantly advancing its five core technologies.</p>
                              <div class="row">
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-html5" aria-hidden="true"></i> </span> <span> HTML5</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-retweet" aria-hidden="true"></i> </span> <span> Ajax</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-code" aria-hidden="true"></i> </span> <span> Cake PHP</span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6"> <img src="https://www.ezrankings.org/ez-admin/uploads/portfolio/thumb/casiocalculators.jpg" alt="Casio Calculators India" title="Casio Calculators India"> </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/portfolio.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class="portfolio row ">
                          <div class="col-md-6">
                            <div class="port-folio">
                              <h5>OUR FEATURED PROJECTS</h5>
                              <h3>Overdrive Asia</h3>
                              <p>OVERDRIVE is the first Indian Company to have LED Products with safety certification -UL / ETL Li... </p>
                              <div class="row">
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-html5" aria-hidden="true"></i> </span> <span> HTML5</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-retweet" aria-hidden="true"></i> </span> <span> Ajax</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-file-code-o" aria-hidden="true"></i> </span> <span> Magento</span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6"> <img src="https://www.ezrankings.org/ez-admin/uploads/portfolio/thumb/overdriveasia.jpg" alt="Overdrive Asia" title="Overdrive Asia"> </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/portfolio.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class="portfolio row ">
                          <div class="col-md-6">
                            <div class="port-folio">
                              <h5>OUR FEATURED PROJECTS</h5>
                              <h3>Rosewellcares</h3>
                              <p>Rosewell Home and Residential Care, LLC in Port St Lucie is like no other. It may be smaller in s... </p>
                              <div class="row">
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-html5" aria-hidden="true"></i> </span> <span> HTML5</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-wordpress" aria-hidden="true"></i> </span> <span> Wordpress</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-retweet" aria-hidden="true"></i> </span> <span> Ajax</span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6"> <img src="https://www.ezrankings.org/ez-admin/uploads/portfolio/thumb/Rosewell-cres.jpg" alt="Rosewellcares" title="Rosewellcares"> </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/portfolio.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class="portfolio row ">
                          <div class="col-md-6">
                            <div class="port-folio">
                              <h5>OUR FEATURED PROJECTS</h5>
                              <h3>Zlite</h3>
                              <p>Zlite is an average electric supply retailer. They sell not only top quality products, but give t... </p>
                              <div class="row">
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-html5" aria-hidden="true"></i> </span> <span> HTML5</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-retweet" aria-hidden="true"></i> </span> <span> Ajax</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-opencart" aria-hidden="true"></i> </span> <span> Open Cart</span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6"> <img src="https://www.ezrankings.org/ez-admin/uploads/portfolio/thumb/Zlite.jpg" alt="Zlite" title="Zlite"> </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/portfolio.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class="portfolio row ">
                          <div class="col-md-6">
                            <div class="port-folio">
                              <h5>OUR FEATURED PROJECTS</h5>
                              <h3>Udara</h3>
                              <p>Sai Kutir’s Udara develop more than 100 recipes of premium sweets, savouries, sherbets and spices. Udara transforms treasured timeless family recipes into magical delights and delicacies. Udara is symbolic of tradition, taste and quality.</p>
                              <div class="row">
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-html5" aria-hidden="true"></i> </span> <span> HTML5</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-wordpress" aria-hidden="true"></i> </span> <span> Wordpress</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-retweet" aria-hidden="true"></i> </span> <span> Ajax</span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6"> <img src="https://www.ezrankings.org/ez-admin/uploads/portfolio/thumb/Udara.jpg" alt="Udara" title="Udara"> </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/portfolio.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class="portfolio row ">
                          <div class="col-md-6">
                            <div class="port-folio">
                              <h5>OUR FEATURED PROJECTS</h5>
                              <h3>Beckimpex</h3>
                              <p>Becker’s farm was one of the first fruit growers to cultivate JONAGOLD, the most successful cultivars for years.. BECKIMPEX has supplied hire and demo tractors and combines globally.</p>
                              <div class="row">
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-html5" aria-hidden="true"></i> </span> <span> HTML5</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-retweet" aria-hidden="true"></i> </span> <span> Ajax</span> </div>
                                </div>
                                <div class="col-md-6 col-6">
                                  <div class="expertise"> <span class="icon-class"> <i class="fa fa-opencart" aria-hidden="true"></i> </span> <span> Open Cart</span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6"> <img src="https://www.ezrankings.org/ez-admin/uploads/portfolio/thumb/Beckimpex.jpg" alt="Beckimpex" title="Beckimpex"> </div>
                          <div class="read-more-style text-right"> <a href="https://www.ezrankings.org/portfolio.html" class="btn btn-nfo btn-lg"> View More</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
                    <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---------------------end--------------------------> 
  
  <!--work process start-->
  <section id="process" class="work-process-section position-relative  ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9 col-lg-8">
          <div class="section-heading text-center mb-5">
            <h2>Our Work Process</h2>
          </div>
        </div>
      </div>
      <div class="row align-items-center justify-content-md-center justify-content-sm-center">
        <div class="col-md-12 col-lg-6">
          <div class="work-process-wrap">
            <div class="process-single-item">
              <div class="process-icon-item left-shape">
                <div class="d-flex align-items-center">
                  <div class="process-icon mr-4"> <img src="{{asset('landingseo/images/Keyword Suggestion.png')}}" class="img-fluid-three" alt="Project Analysis"></i> </div>
                  <div class="process-content text-left">
                    <h5>Keywords Suggestions</h5>
                    <P>Based on your business and marketing objectives, we will suggest you the set of keywords that
                      you can easily rank in the given time frame.</p>
                  </div>
                </div>
                <svg x="0px" y="0px" width="312px" height="130px">
                <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338"></path>
                <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338 "></path>
                </svg> </div>
            </div>
            <div class="process-single-item">
              <div class="process-icon-item right-shape">
                <div class="d-flex align-items-center">
                  <div class="process-icon ml-4"> <img src="{{asset('landingseo/images/On Page-Off Page.png')}}" class="img-fluid-three" alt="Project Analysis"> </div>
                  <div class="process-content text-right">
                    <h5>On-Page &amp; Off-Page SEO</h5>
                    <p>For each keyword that we final, we will optimize the website &amp; specific pages around them &amp;
                      also create quality backlinks to increase the authority</p>
                  </div>
                </div>
                <svg x="0px" y="0px" width="312px" height="130px">
                <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                </svg> </div>
            </div>
            <div class="process-single-item">
              <div class="process-icon-item left-shape mb-0">
                <div class="d-flex align-items-center">
                  <div class="process-icon mr-4"> <img src="{{asset('landingseo/images/Reporting.png')}}" class="img-fluid-three" alt="Project Analysis"> </div>
                  <div class="process-content text-left">
                    <h5>Reporting</h5>
                    <p>Weekly we will share with you the Detail Reporting of all our work and improvement we made
                      in your website rankings..</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6  wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">
          <div class="img-wrap"> <img src="{{asset('landingseo/images/process.png')}}" alt="features" class="img-fluid"> </div>
        </div>
      </div>
    </div>
  </section>
  <!--end--> 
  
  <!--new testimonial-->
  <section class="xamin-custom-bg pb-0">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          <div class="title-box wow fadeInUp text-center" style="visibility: visible; animation-name: fadeInUp;"> 
            <!--<span class="center-head">TESTIMONIALS</span>-->
            
            <h2>Here's What Our Clients Say</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          <div class="owl-carousel testimonial-style owl-loaded owl-drag" data-dots="true" data-nav="true" data-autoplay="true" data-loop="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
            <div class="owl-stage-outer">
              <div class="owl-stage" style="transform: translate3d(-6000px, 0px, 0px); transition: all 0.25s ease 0s; width: 18000px;">
                <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                  <div class="item text-center">
                    <div class="iq-testimonial">
                      <div class="testimonial-info"> <img alt="#" class="img-fluid rounded-circle" src="https://quantumitinnovation.com/landing/images/testimonials/2.jpg">
                        <div class="testimonial-name">
                          <h5>Garg Eagly</h5>
                          <!-- 
                                       <span class="sub-title">Business Advisor</span> --> 
                        </div>
                      </div>
                      <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                      <p>I must say Quantumitinnovation have an outstanding technical team. We have been able to achieve a major milestone in this initiative so quickly because of the undying dedication that your team maintained throughout the project cycle.</p>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                  <div class="item text-center">
                    <div class="iq-testimonial">
                      <div class="testimonial-info"> <img alt="#" class="img-fluid rounded-circle" src="https://quantumitinnovation.com/landing/images/testimonials/3.jpg">
                        <div class="testimonial-name">
                          <h5>JBonnie Schaffer</h5>
                          <!-- <span class="sub-title">COO</span> --> 
                        </div>
                      </div>
                      <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                      <p>Team Quantumitinnovation consistently went above and beyond in terms of responsiveness, adaptability to new requirements, and dedication to client and concept.</p>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                  <div class="item text-center">
                    <div class="iq-testimonial">
                      <div class="testimonial-info"> <img alt="#" class="img-fluid rounded-circle" src="https://quantumitinnovation.com/landing/images/testimonials/1.jpg">
                        <div class="testimonial-name">
                          <h5>Peter Albert</h5>
                          <!--  <span class="sub-title">CEO</span> --> 
                        </div>
                      </div>
                      <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                      <p>First of all, I want to recommend Quantumitinnovation, because they stay connected with you even after the project is delivered to ensure the maximum ROI. The team is efficient in responding and in dealing with new challenges.</p>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                  <div class="item text-center">
                    <div class="iq-testimonial">
                      <div class="testimonial-info"> <img alt="#" class="img-fluid rounded-circle" src="https://quantumitinnovation.com/landing/images/testimonials/2.jpg">
                        <div class="testimonial-name">
                          <h5>Garg Eagly</h5>
                          <!-- 
                                       <span class="sub-title">Business Advisor</span> --> 
                        </div>
                      </div>
                      <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                      <p>I must say Quantumitinnovation have an outstanding technical team. We have been able to achieve a major milestone in this initiative so quickly because of the undying dedication that your team maintained throughout the project cycle.</p>
                    </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 1170px; margin-right: 30px;">
                  <div class="item text-center">
                    <div class="iq-testimonial">
                      <div class="testimonial-info"> <img alt="#" class="img-fluid rounded-circle" src="https://quantumitinnovation.com/landing/images/testimonials/1.jpg">
                        <div class="testimonial-name">
                          <h5>Peter Albert</h5>
                          <!--  <span class="sub-title">CEO</span> --> 
                        </div>
                      </div>
                      <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                      <p>First of all, I want to recommend Quantumitinnovation, because they stay connected with you even after the project is delivered to ensure the maximum ROI. The team is efficient in responding and in dealing with new challenges.</p>
                    </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 1170px; margin-right: 30px;">
                  <div class="item text-center">
                    <div class="iq-testimonial">
                      <div class="testimonial-info"> <img alt="#" class="img-fluid rounded-circle" src="https://quantumitinnovation.com/landing/images/testimonials/2.jpg">
                        <div class="testimonial-name">
                          <h5>Garg Eagly</h5>
                          <!-- 
                                       <span class="sub-title">Business Advisor</span> --> 
                        </div>
                      </div>
                      <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                      <p>I must say Quantumitinnovation have an outstanding technical team. We have been able to achieve a major milestone in this initiative so quickly because of the undying dedication that your team maintained throughout the project cycle.</p>
                    </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 1170px; margin-right: 30px;">
                  <div class="item text-center">
                    <div class="iq-testimonial">
                      <div class="testimonial-info"> <img alt="#" class="img-fluid rounded-circle" src="https://quantumitinnovation.com/landing/images/testimonials/3.jpg">
                        <div class="testimonial-name">
                          <h5>JBonnie Schaffer</h5>
                          <!-- <span class="sub-title">COO</span> --> 
                        </div>
                      </div>
                      <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                      <p>Team Quantumitinnovation consistently went above and beyond in terms of responsiveness, adaptability to new requirements, and dedication to client and concept.</p>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                  <div class="item text-center">
                    <div class="iq-testimonial">
                      <div class="testimonial-info"> <img alt="#" class="img-fluid rounded-circle" src="https://quantumitinnovation.com/landing/images/testimonials/2.jpg">
                        <div class="testimonial-name">
                          <h5>Garg Eagly</h5>
                          <!-- 
                                       <span class="sub-title">Business Advisor</span> --> 
                        </div>
                      </div>
                      <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                      <p>I must say Quantumitinnovation have an outstanding technical team. We have been able to achieve a major milestone in this initiative so quickly because of the undying dedication that your team maintained throughout the project cycle.</p>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                  <div class="item text-center">
                    <div class="iq-testimonial">
                      <div class="testimonial-info"> <img alt="#" class="img-fluid rounded-circle" src="https://quantumitinnovation.com/landing/images/testimonials/3.jpg">
                        <div class="testimonial-name">
                          <h5>JBonnie Schaffer</h5>
                          <!-- <span class="sub-title">COO</span> --> 
                        </div>
                      </div>
                      <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                      <p>Team Quantumitinnovation consistently went above and beyond in terms of responsiveness, adaptability to new requirements, and dedication to client and concept.</p>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                  <div class="item text-center">
                    <div class="iq-testimonial">
                      <div class="testimonial-info"> <img alt="#" class="img-fluid rounded-circle" src="https://quantumitinnovation.com/landing/images/testimonials/1.jpg">
                        <div class="testimonial-name">
                          <h5>Peter Albert</h5>
                          <!--  <span class="sub-title">CEO</span> --> 
                        </div>
                      </div>
                      <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                      <p>First of all, I want to recommend Quantumitinnovation, because they stay connected with you even after the project is delivered to ensure the maximum ROI. The team is efficient in responding and in dealing with new challenges.</p>
                    </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 1170px; margin-right: 30px;">
                  <div class="item text-center">
                    <div class="iq-testimonial">
                      <div class="testimonial-info"> <img alt="#" class="img-fluid rounded-circle" src="https://quantumitinnovation.com/landing/images/testimonials/2.jpg">
                        <div class="testimonial-name">
                          <h5>Garg Eagly</h5>
                          <!-- 
                                       <span class="sub-title">Business Advisor</span> --> 
                        </div>
                      </div>
                      <svg class="svg-inline--fa fa-quote-left fa-w-16 left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                      <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z"></path>
                      </svg><!-- <i class="fa fa-quote-left left_quote" style="float: left; font-size: 30px; margin-top: 20%; color: #002fa6;"></i> -->
                      <p>I must say Quantumitinnovation have an outstanding technical team. We have been able to achieve a major milestone in this initiative so quickly because of the undying dedication that your team maintained throughout the project cycle.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button role="button" class="owl-dot"><span></span></button>
            <button role="button" class="owl-dot active-1"><span></span></button>
            <button role="button" class="owl-dot"></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--testimnonial end--> 
  
  <!--clients-->
  <section class="pt-0">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-box wow fadeInUp  text-center" style="visibility: visible; animation-name: fadeInUp;"> <br>
            <!--<span class="title-design">Our Clients</span>-->
            <h2 class="center-head">Our Clients</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel owl-loaded owl-drag" data-dots="false" data-nav="false" data-items="6" data-items-laptop="4" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-autoplay="true" data-loop="true" data-margin="30">
            <div class="owl-stage-outer">
              <div class="owl-stage" style="transform: translate3d(-3705px, 0px, 0px); transition: all 0.25s ease 0s; width: 5265px;">
                <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/7.png" alt="image6"> </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/1.png" alt="image7"> </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/2.png" alt="image8"> </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/3.png" alt="image9"> </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/4.png" alt="image10"> </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/5.png" alt="image11"> </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/6.png" alt="image12"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/1.png" alt="image0"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/2.png" alt="image1"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/3.png" alt="image2"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/4.png" alt="image3"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/5.png" alt="image4"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/6.png" alt="image5"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/7.png" alt="image6"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/1.png" alt="image7"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/2.png" alt="image8"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/3.png" alt="image9"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/4.png" alt="image10"> </div>
                  </div>
                </div>
                <div class="owl-item" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/5.png" alt="image11"> </div>
                  </div>
                </div>
                <div class="owl-item active" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/6.png" alt="image12"> </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/1.png" alt="image0"> </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/2.png" alt="image1"> </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/3.png" alt="image2"> </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/4.png" alt="image3"> </div>
                  </div>
                </div>
                <div class="owl-item cloned active" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/5.png" alt="image4"> </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/6.png" alt="image5"> </div>
                  </div>
                </div>
                <div class="owl-item cloned" style="width: 165px; margin-right: 30px;">
                  <div class="item">
                    <div class="clients-box"> <img class="img-fluid client-img" src="https://quantumitinnovation.com/landing/images/partners/7.png" alt="image6"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--clients-end--> 
  
  <!--our contact section start-->
  <section id="contact" class="contact-us-section ptb-100">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-12 pb-3 message-box d-none">
          <div class="alert alert-danger"></div>
        </div>
        <div class="col-md-5 col-12 mt-3">
          <div class="contact-info sytle-one service-contact text-left">
            <div class="contact-info-title-wrap">
              <h3 class="heading-one mb-10" style="color:#fff !important;">4.9/5.0</h3>
              <div class="ht-star-rating lg-style"> <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                </svg><!-- <span class="fa fa-star"></span> --> 
                <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                </svg><!-- <span class="fa fa-star"></span> --> 
                <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                </svg><!-- <span class="fa fa-star"></span> --> 
                <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                </svg><!-- <span class="fa fa-star"></span> --> 
                <svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                </svg><!-- <span class="fa fa-star"></span> --> 
              </div>
              <p class="sub-text"> <br>
                150 + Projects <br>
                Worldwide Clients </p>
            </div>
            <div class="contact-list-item"> <a class="single-contact-list"> </a>
              <div class="content-wrap"><a class="single-contact-list"> </a>
                <div class="content"><a class="single-contact-list">
                  <div class="icon"> <svg class="svg-inline--fa fa-phone fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path>
                    </svg><!-- <span class="fa fa-phone"></span> --> 
                  </div>
                  </a>
                  <div class="main-content"><a class="single-contact-list">
                    <h6 class="heading">Call for advice now!</h6>
                    </a>
                    <div class="text" style="font-size: 1.5em;"><a class="single-contact-list"> </a><a href="tel:+ 91 859 571 57 45" style="color:#d2a98e!important;">+ 91 859 571 57 45</a> </div>
                  </div>
                </div>
              </div>
              <a class="single-contact-list"> </a>
              <div class="content-wrap"><a class="single-contact-list"> </a>
                <div class="content"><a class="single-contact-list">
                  <div class="icon"> <svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path>
                    </svg><!-- <span class="fa fa-envelope"></span> --> 
                  </div>
                  </a>
                  <div class="main-content"><a class="single-contact-list">
                    <h6 class="heading">Say hello</h6>
                    </a>
                    <div class="text" style="font-size:18px;"><a class="single-contact-list"> </a><a href="mailto:sales@quantumitinnovation.com" style="color:#d2a98e!important;word-break: break-all;">sales@quantumitinnovation.com</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-12 col-sm-5 ml-auto">
          <div class="contact-form-service-wrap">
            <div class="contact-title text-center section-space--mb_">
              <h4 class="">Get In Touch</h4>
              <p class="text-one" style="text-align:center !important;">Tell us what's on your mind and we'll get right back to you !</p>
            </div>
            <form method="post" action="" class="form p-t-20 needs-validation" novalidate id="contactus">
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
                  <div class="form-item contact-inner"> <span class="inquiry">
                    <select name="enquiry_type" class="select-item cust-height" required="">
                      <option value="">Your Enquiry about</option>
                      <option value="Mobile App Development">Mobile App Development</option>
                      <option value="Website Design &amp; Development">Website Design &amp; Development</option>
                      <option value="Digital Marketing (SEO, PPC, SMO)">Digital Marketing (SEO, PPC, SMO)</option>
                      <option value="Artificial Intelligence">Artificial Intelligence</option>
                      <option value="Robotic Process Automation">Robotic Process Automation</option>
                    </select>
                    </span> </div>
                </div>
                <div class="contact-inner contact-message">
                  <textarea name="description" placeholder="Please describe what you need."></textarea>
                </div>
                <div class="submit-btn text-center">
                  <button class="ht-btn ht-btn-md cust-height-btn" type="submit">Send message</button>
                  <p class="form-messege"></p>
                </div>
                <br>
                
                <!--<div class="alert alert-danger alert-dismissible">--> 
                
                <!--</div>--> 
                
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--our contact section end--> 
  
</div>
  @endsection
    @section('after-script')

    @endsection
