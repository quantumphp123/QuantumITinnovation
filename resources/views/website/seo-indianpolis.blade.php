@extends('website.layouts.master') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SEO Company Indianapolis | Indianapolis SEO Service | Quantum IT</title>
    <meta name="keywords" content="SEO Service Indianapolis, SEO company Indianapolis, SEO services, SEO Company">
	<meta name="description" content="SEO Company Indianapolis - Quantum IT is one of the best-rated SEO company in Indianapolis. We focus on delivering top SEO service in Indianapolis and quality results for your business. Choose the best Indianapolis SEO service company to bring the best out of your business.">
@endsection
@section('content')

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
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
                    <h1 class="title_h1 h1_banner">SEO Company Indianapolis.</h1>
                    <div id="line"></div>
                     <div class="row">
                        <div class="col-lg-7">
                            <p class="text-white title_p">
                                <span> Quantum IT is one of the best SEO company in Indianapolis and provides best seo service in Indianapolis.</span>
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

      <section class="pb-5 process-banner">
            <div class="container">
              <div class="row">
                   <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Want to rank on the first page of search engine ?</h2>
               
                 </div><!--12--> 
<div class="col-md-12">
    <p class="top-box-content">If yes, then you are on the right plateform!
If yes, then you are on the right platform! Our experienced SEO experts provide you the best SEO service Indianapolis and rank your website in the Everest of search engines. Just like math’s formulas are used to solve the tough equations similar, for the tough SEO equation, we made a Formula by doing years of research, and successful implementation of it on around 100 business in Indianapolis and all over the USA. We are the best SEO company Indianapolis and an award-winning digital marketing agency in the USA.
 </p>
 
<h2 class="top-head-side">Choose the Best SEO company Indianapolis</h2>

<p class="top-box-content" style="clear: both;">Quantum It Innovation is the world’s best SEO service Indianapolis. We are not admiring ourselves it’s our clients on Good firms and Clutch say to us, which parses us for our customer-friendly SEO service Indianapolis.</p>
<p>Well, People now in the world using Google, Yahoo, and Bing in their daily lives, They get so comfortable with them, that it becomes an integral part of their daily life see social media and the best example E-commerce, everything that we need is just a few words away you just have to type and you will whatever you want. So contact the best Indianapolis SEO Company Quantum IT and get your website on the top.</p>
<p>If your customer is not getting your website you will end up losing them, that’s why maybe now you are looking for SEO of your website. SEO company Indianapolis promises with its 10 + years of experience that we rank your website on the first page of search engines and gives you the highest leads, more traffic, and conversions. If you are looking for the best Digital marketing agency then SEO service Indianapolis is the right option for you, your search might end here. Feel free to call our SEO company Indianapolis. +1 877 877 3644.</p>

</div><!--12-->

      
          </div><!--row-->
         </div><!--cont-->
    </section>

<!------------------------------services------------------------------->
<section class="py-0" style="background: #086ad8;">
  <div class="container">
    <div class="row">
       <div class="col-md-12 mt-3 text-center">
                  <h2 class="top-head" style="color: #fff;">

Our full range of SEO service Indianapolis</h2>
                  
                </div><!--12-->
<div class="fw-row icon-wrapper">
  <div class="col-md-4 col-12 col-sm-4 icon-seo scrollme">
  <span class="dark-hex dark-hex-icn animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="2" style="opacity: 0.92; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1.076, 1.076, 1.076);">
            <img src="{{asset('assets/images/National-SEO.png')}}" class="bottom-img-s" title="automation">
  </span>
<h5 class="no-underline">Local SEO</h5>
<p>If you are a doctor or having a local store, by just simple choosing our Local SEO service Indianapolis, we rank your website first in Indianapolis and in other local nearby areas, Local SEO bring a lot of growth opportunity for your businesses and a perfect way to get customers nearby your business.
</p></div>
<div class="col-md-4 col-12 col-sm-4 icon-seo scrollme">
  <span class="dark-hex dark-hex-icn animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="2" style="opacity: 0.92; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1.076, 1.076, 1.076);">
       <img src="{{asset('assets/images/Ecommerce-SEO.png')}}" class="bottom-img-s" title="automation">
  </span>
<h5 class="no-underline">Ecommerce SEO</h5>
<p>If you have an e-commerce store in Indianapolis and looking for higher sales and traffic then our E-commerce SEO service Indianapolis is the best launch pad for your website. We know that website like Amazon.com and bestbuy.comalready captured your market but still, we assure you, you will outrank them see our SEO formula </p></div>
<div class="col-md-4 col-12 col-sm-4 icon-seo scrollme">
  <span class="dark-hex dark-hex-icn animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="2" style="opacity: 0.92; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1.076, 1.076, 1.076);">
         <img src="{{asset('assets/images/Online-Reputation-Management.png')}}" class="bottom-img-s" title="automation">
  </span>
<h5 class="no-underline">Online Reputation Management (ORM)</h5>
<p>Reputation is very important for a business, it one of the major factor customers take in mind when they purchase any product and services, reputation depicts trust and authority, if your customers are talking bad about you or you are looking for good reviews and have positives wives around the internet.</p></div>
</div>
  <div class="col-md-4 col-12 col-sm-4 icon-seo scrollme">
  <span class="dark-hex dark-hex-icn animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="2" style="opacity: 0.92; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1.076, 1.076, 1.076);">
               <img src="{{asset('assets/images/enterprise-seo.png')}}" class="bottom-img-s" title="automation">
  </span>
<h5 class="no-underline"> 
Enterprise SEO</h5>
<p>If you have a big business in Indianapolis and looking to extension and leads from the USA and all over around the world then choosing or Enterprise, SEO company Indianapolis will be a great deal for your business, we rank your website on particular places and demographics related to your target areas and niche. </p></div>

  <div class="col-md-4 col-12 col-sm-4 icon-seo scrollme">
  <span class="dark-hex dark-hex-icn animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="2" style="opacity: 0.92; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1.076, 1.076, 1.076);">
        <img src="assets/images/Off-page-SEO.png" class="bottom-img-s" alt="">
  </span>
<h5 class="no-underline"> 
Off-Page SEO</h5>
<p>Off page is an integral part of SEO activities it basically means link building we are the expert of quality off page activities and will link your website to high-quality authority domains, you already did on the page of your website and looking for the off-page of it then we are the best option available in the Indianapolis.</p></div>

  <div class="col-md-4 col-12 col-sm-4 icon-seo scrollme">
  <span class="dark-hex dark-hex-icn animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="2" style="opacity: 0.92; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1.076, 1.076, 1.076);">
   <img src="{{asset('assets/images/content-marketing.png')}}" class="bottom-img-s" title="automation">
  </span>
<h5 class="no-underline"> 
Content Marketing</h5>
<p>The biggest factor on the ranking of the website is its content, search engines bots focus on how well is it written and does it have the proper utilization of keywords or not. Our expert content writer will do the job for you and delivers the amazing content, if the content is good people defiantly read it and share it, it will all trigger the word of mouth.</p></div>

  <div class="col-md-4 col-12 col-sm-4 icon-seo scrollme">
  <span class="dark-hex dark-hex-icn animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="2" style="opacity: 0.92; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1.076, 1.076, 1.076);">
        <img src="{{asset('assets/images/google-.png')}}" class="bottom-img-s" title="automation">
  </span>
<h5 class="no-underline"> 
Google Recovery Services</h5>
<p>If your website gets penalize by search engines with panda and penguin SEO updates then we are here to recover it, Google and search engines penalize those websites which have bad backlinks profile and high keyword stuffing, we will improve it and reframe your website image in search engine eyes. </p></div>
  <div class="col-md-4 col-12 col-sm-4 icon-seo scrollme">
  <span class="dark-hex dark-hex-icn animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="2" style="opacity: 0.92; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1.076, 1.076, 1.076);">
 
    <img src="{{asset('assets/images/icon (1).png')}}" class="bottom-img-s" title="automation">
  </span>
<h5 class="no-underline">National & International SEO</h5>
<p>Quantum It Innovation is an SEO Company Indianapolis. But that’s not all we are. we ar a team of individuals who have hands-on experience in digital promoting with an extreme passion for serving to our clients succeed. If from Indianapolis you want to cater to the whole USA and International countries.</p></div>
  <div class="col-md-4 col-12 col-sm-4 icon-seo scrollme">
  <span class="dark-hex dark-hex-icn animateme" data-when="enter" data-from="0.5" data-to="0" data-crop="false" data-opacity="0" data-scale="2" style="opacity: 0.92; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1.076, 1.076, 1.076);">
        <img src="{{asset('assets/images/mobile-seo.png')}}" class="bottom-img-s" title="automation">
  </span>
<h5 class="no-underline"> 
Mobile & APP SEO</h5>
<p>Mobile searches have outranked the desktop searches last year it’s the right time to focus on Mobile SEO. If you have an app or only want to serve the mobile users in Indianapolis then we are here to help you. Google and other search engines recently laid some mobile SEO guideline so we rank your website high.</p></div>
</div>
  </div>
</section>
  <!----------------------servicesw end----------------------------------->


            <section class="main-top" style="background-color: #fff;">
              <div class="container">
              <div class="row">
          <div class="col-md-12 text-center">
  <img src="{{asset('assets/images/Infographic-new.png')}}" class="seo-rotate" title="seo">
   
        </div>
        
              
        </div><!--row-->
    </div><!--cont-->
</section>

    
<!----------------gastro-----------------section------------------>

    <section class="py-0 pb-5">
      <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">How we rank a Gastroenterologist website on the first page of Google</h2>
                    
    </div><!--12-->


         <div class="col-md-12 col-12 text-center">
                      <img src="assets/images/logo-g.jpg" class="g-logo" title="Gastroenterologist-logo">
                    </div><!--4-->

          <div class="col-md-12 col-12">
                    <div class="top-box-content">
    <p>Quantum is not limited to SEO service Indianapolis we also cater in Oklahoma, New Jersey, Fresno and also on the different part of the world, we help grow the small business and gives them the strong presence on the internet.</p>

<p>2 month before we got an interesting SEO project from Dr.Affan Quadri he is basically a gastroenterologist and his website North American gastroenterology is ranking somewhere on the 100 pages in Google UAE. In the span of 3 months, he asked us to rank his website for the keyword gastroenterologist in UAE or for gastro specialist in UAE. Our SEO company indianapolis team can work hand-in-hand with you to create an best SEO plan that fits your budget  and creates greater visibility for you online.</p>
<p>Here are the steps we performed in  1 month to rank his website on the first page of the Google:</p></div><!--12-->
       
        </div>
        </div><!--row-->
      </div><!--cont-->
    </section>
<!----------accordion---------------->
<section class="pb-5 accordion-tab" style="background-color: #fff;">
            <div class="container">
            <div class="row">
                    <div class="col-md-6 mt-5">
                      <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn-new" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 Keyword Research

                  </button> </h5>
                    <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></i>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
         <p style="margin:0;">you may be thinking keywords are already finalized why then a keyword research again when we do the analysis of competition in the market for a gastroenterologist in UAE it was bit tough, all the website which are rank are actually pretty old and are well SEO optimized.</p>

<p>Dr. Affan’s North American gastroenterologist website is a new one. Which is in Google eyes is less authoritative and will take more time to rank for a competitive keyword.</p>

<p>Gastroenterologist in UAE, so we decided to perform a hack why not to rank the website on a keyword which is less competitive and on the same side high searchable.So then we finalized a long tail keyword, Gastro expert UAE it is a good replication of the competitive keyword gastroenterologist in UAE.</p>
                </div>
              </div>
            </div>
       
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color: #fff;">
                Competitiors Analysis

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"></i>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
     <p>Although on the keyword Gastro expert UAE there is less competition it’s not nil we still have to fight, so we started by seeing their website authority from the Moz which is easy to outrank by writing good content. When we see the content of the top 5 page for the keywords it is just 200 words content.</p>

<p>On pro tipif your competitors for a particular keyword just wrote 1000 words of content and you have written 3000 words of content you will easily rank above them as search engines bots love more content.</p>

<p>The new on Moz we also see the competitors backlink profile which is just ok if we rank Dr. Affan website with high authority website we will outrank the competitors.</p>
                </div>
              </div>
            </div>

             <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color: #fff;">
        Content

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"></i>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
         <p>As you know in the above point we won the competition by just writing the quality keyword rich and detailed content, we just did that our content writer did a great job and made an amazing piece of for around 1397 words other website are less than 500 words</p>
                </div>
              </div>
            </div>


               <div class="card">
              <div class="card-header" id="headingSix">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" style="color: #fff;">
Backlinks

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix"></i>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                <div class="card-body">
                 <p>I hope you get to the known power of backlinks from our formula of SEO success, it’s basically when someone referring to your website, if you want to know more just move the cursor up.</p>

<p>The power of backlinks becomes more powerful when you get a reference from the high authority website. We actually follow this concept where other websites just linking to low authority domains we link Dr.affan website with a high authority website.</p>

<p>Our content writers did the guest blogging on the health-related website and provide links the pages to Dr.affan website.We also make awareness infographics on the digestive system and publish them on infographic websites.We submit Dr. Affan website in all the business listing websites which not just only give them the backlink but also the business as people also searched about various services on the business listing website.</p>
                </div>
              </div>
            </div>


               <div class="card">
              <div class="card-header" id="headingSeven">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven" style="color: #fff;">
        Customer Centric

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven"></i>
              </div>
              <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                <div class="card-body">
                 <p> Well from the case study you may think we were bit-focused on bots and search engines ranking parameters and everything is happened for them from keywords to content and backlinks but it is not, we did not miss the customers</p>

<p>when we do the keyword research we do it from the customer side and rather on choosing gastro expert we choose gastro expert UAE.
Same in content rather on just writing the detailed content to make both happy we also add lots of images videos and make psychologically friendly page structure as people are searching for the gastroenterologist it’s bit obvious people know about what gastroenterologist do so we rather on making it the main thing we place the appointment form first.
Same thing we do in backlinks rather just on making the backlinks form the website we also give a customer friendly touch and link the website to high traffic business listing websites where customer are freaking out for the good gastroenterologist.
And you know search engines look to these things by knowing:-<p>

<p>The website bounce rate<br>
Click through rate<br>
Time the customer spends on the websites and<br>
repeat visitors<br>
Which all symbolize customer-centric website and that’s same we do with the Dr. Affan’s <br>websites and you know the results it’s on the first page of the google.</p>


                </div>
              </div>
            </div>




               <div class="card">
              <div class="card-header" id="headingEight">
                <h5 class="mb-0">
                  <button class="btn-new collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight" style="color: #fff;">
         Reporting

                  </button></h5>
                  <i class="fas fa-plus" id="plus" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight"></i>
              </div>
              <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                <div class="card-body">
                 <p>When we did the SEO of Dr. Affan website it becomes very important to see are our efforts actually paying or not is there any growth happening in ranking, traffic and leads.</p>

<p>So, We monitor his website performance and ranking with the tools like Google analytics, bing analytics, Google webmaster and bing webmaster and every week send him a complete analysis of:-<p>

<p>Weekly improvement in ranking<br>
A weekly increase in traffic<br>
Average bounce rate throughout the week<br>
Current Domain and page authority<br>
And how much improvement happened in the website ranking<br>
It easily helped him to take a decision: should I continue SEO of website or move to<br>some other companies, which made believe in our search engine optimization services.</p>

</div>
                </div>
              </div>
            </div>
         </div><!--8-->

         <div class="col-md-6 mt-5">
                      <img src="#" class="industry-one" title="seo">
                    </div><!--4-->            
               
            </div><!--row-->
            </div><!--cont-->
          </section>        

       <div class="why-choose-us mt-5" style="background-image:url(assets/img/Group-new.png);">
                    <div class="container pt-5 pb-5">
                        <h5 class="clr-wht text-center mb-3">Why choose Quantum IT for Best Seo services in Indianapolis?</h5>
                        <p class="txt-wht">Quantum IT is one of the best local SEO company in Indianapolis providing the best digital marketing and SEO services in Indianapolis. Quantum It Innovation is an SEO Company Indianapolis. But that’s not all we are. We are a team of individuals who have hands-on experience in digital promoting with an extreme passion for serving our clients. If from Indianapolis you want to cater to the whole USA and International countries.</p>
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