@extends('website.layouts.master') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fresno SEO Company | Get Free SEO Analysis | Quantum IT</title>
    <meta name="keywords" content="Fresno SEO Company, SEO Company Fresno, Fresno SEO Expert">
	<meta name="description" content="#1 Fresno SEO Company: choose the best SEO service in Fresno for your website and bring it at top of Search engines, we are SEO experts and have successfully delivered 1000 of SEO projects in the USA.">
@endsection
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").toggle();
  });
});
</script>

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
<!---------modal-end--------------->
 <div class="title_image" role="listbox" style="background-image:url({{asset('assets/images/3.jpg')}});">
            <div class="carousel-caption text-left">
                <div class="animated fadeInDown">
                    <h1 class="title_h1 h1_banner">Want to rank your website on the 1st page of search engines?</h1>
                    <div id="line"></div>
                     <div class="row">
                        <div class="col-lg-7">
                            <p class="text-white title_p">
                                <span>We will do it for you, by our formula of SEO success !!</span>
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

    <section class="py-0 pb-5">
      <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3 text-center">
                    <h2 class="top-head">Choose the best Fresno SEO Company</h2>
                    </div><!--12-->



          <div class="col-md-12 col-12">
                    <div class="top-box-content">
    <p>Fresno is the amazing city and in the list of fastest growing cities like Indianapolis, Oklahoma city and new jersey, its credit goes to all the business that runs here as they keep on innovating and fulfilling the needs of the people.</p>

<p>But now the world is changing companies in Fresno need to have an edge if they want more customers.If we look at the statistics 91% of people here own a PC, 95% is having their own smartphones and 65 % have the tablets</p>

<p>These figures tell us if you have an online presence, you will a lot of growth opportunities. So Then what’s better then Quantum IT Innovation we will cash these opportunities for you and ranks your website in the First page of Fresno city</p>
<p>We are currently known as the best emerging SEO Company in USA and UK and created a the proven SEO success formula that so precise and powerful and ranks your website high.</p>

<p>So, Choose Quantum IT Innovation, we are serving worldwide SEO needs and trusted as the best SEO Services Company in USA, India, and the UK.We will do the perfect and profitable SEO of your business and rank your website fast in the first page of search engines.</p>

</p></div><!--12-->
  </div>
        </div><!--row-->
      </div><!--cont-->
    </section>




    <section class="py-0 pb-3">
      <div class="container">
        <div class="row">
         <div class="col-md-12 text-center">
                  <h2 class="top-head">
 Why At First Page ?</h2> </div><!--12-->
        <div class="col-md-7 mt-4">
          <p class="para-s">Statistics say that 80% of people for their search queries not go to the 2nd page of search engines. which looks even more shocking to know that 70% of people only visit the top 5 suggestion in the 1st search engine result page. ,<p>

<p class="para-s">From this, you may understand how important is the 1 position in the 1 page of the search engines,  and who knows better than us which ranked 1000 of the website in the USA at the first page.</p>

<p class="para-s">We have the team of best SEO experts that are master in different fields like Local SEO, off page, content writing, online reputation management etc they work collaboratively and will rank your website in Fresno.</p>

<p class="para-s">There is the total of 200 factors which search engines looks to rank any website for Fresno SEO so, our team of SEO experts will make sure you that your website is optimized for those 200 factors and gives you the desired results.</p>

<p class="para-s">To do so, we will optimize your website and make it SEO friendly, to all the 200 SEO factors, websites which are up on the all the factors, Search engines give them the prime position.</p>

<p class="para-s">Being a Top SEO service company in the USA and have the wide experience of working with more than 1000 of business, makes us the perfect choice for your business and promises you that our SEO experts will rank your website on the first page results in the Oklahoma City.</p>
        </div><!--6-->
              <div class="col-md-5 mt-5">
            <img src="{{asset('assets/images/seo-okhla.jpg')}}" class="industry-one" title="automation">
                    </div><!--4--> 
        </div><!---row-->
      </div><!--cont-->
    </section>
<!-- Demo header-->
<section class="py-5 header">
    <div class="container">
        <div class="row">
           <div class="col-md-12 text-center">
                  <h2 class="top-head">
Our Fresno SEO Service gives you
</h2> </div><!--12-->
            <div class="col-md-3 mt-5">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="margin-top: 13%;    margin-top: 13%;border: 1px solid #e2e0e0;border-radius: 10px;">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="padding:20px 0px !important;box-shadow: none !important;">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Potensional Customers</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"style="padding:20px 0px !important;box-shadow: none !important;border-bottom: 1px solid #ccc;">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Amazing website structure</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"style="padding:20px 0px !important;box-shadow: none !important;border-bottom: 1px solid #ccc;">
                       
                        <span class="font-weight-bold small text-uppercase">Close Leads</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"style="padding:20px 0px !important;box-shadow: none !important;">
                       
                        <span class="font-weight-bold small text-uppercase">Delight Customers</span></a>
                    </div>
            </div>


            <div class="col-md-9 mt-5">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" style="border: 1px solid #e0e0e0;background-color: #fff !important;">
                        <h4 class="mb-4">Potensional Customers</h4>
                        <p class="text-muted mb-2">To get the customers apart from the local marketing you have to have an online presence it does not just mean having a beautiful website. Your website should be SEO friendly then only it drives all the potential customers.Quantum IT the best Fresno SEO company makes your website as a first option for the focused keywords. This means that your brand will be the first result that a targeted prospect will see when searching for the focused keywords.By this, your website will dominate in the Fresno and you will get the most amount of traffic leads and conversionsMost of the time people get confused that by just making a webpage for targeted keyword and audience they will get a high rank but it’s not the case Fresno SEO takes time there lots of off page SEO activates have to perform to get  the 1st position in the for the keywordsBut, our SEO process is little advance with our collaborative team efforts we will rank your website as early as possible that will easily bring all the prospect customer</p>


                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"style="border: 1px solid #e0e0e0;background-color: #fff !important;">
                        <h4 class="mb-4">Bookings</h4>
                         <p class="mb-2">Just having a  traffic of potential customers in your website is not enough, website structure also plays a crucial role in converting potential customers into the leads or sales So, we make sure the website should have the wonderful design by keeping the customer psych in mind that which entice and encourage them to purchase your products and services.</p>


                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"style="border: 1px solid #e0e0e0;background-color: #fff !important;">
                        <h4 class="mb-4">Reviews</h4>
                      <p class="text-muted mb-2">As in the above point, we say the amazing design of a website plays a very crucial role to convert visitors into the leads but who will fill the design, something is needed to make the amazing design and i.e work of content!!Our content writers will make sure that content is written well it reflect your brand and convert visitors into the leads</p>
</div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"style="border: 1px solid #e0e0e0;background-color: #fff !important;">
                        <h4 class="mb-4">Confirm booking</h4>
                        <p class="text-muted mb-2">Till now You may be aware that in Fresno our SEO service are best as we help our client to convert prospects into the leads by uplifting their services and expertise.We assure you, you will build the large customer base that’s will be delighted by your services and recommending your product and services to other people</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 
            <section class="main-top" style="background-color: #fff;">
              <div class="container">
              <div class="row">
          <div class="col-md-12 text-center">
  <img src="{{asset('assets/images/Infographic-new.png')}}" class="seo-rotate" title="seo"> </div>    
   </div><!--row-->
 </div><!--cont-->
</section>

<section class="py-0 pb-5">
  <div class="container">
    <div class="row">
    <div class="col-md-12 mt-3 text-center">
    <h2 class="top-head">How much time Fresno SEO takes?</h2></div><!--12-->
      <div class="col-md-12 col-12">
      <div class="top-box-content">
    <p>Time to rank a website is a very mysterious thing in SEO as there are a lot of SEO factors that working behind it, to name you a few these are- competitors, your website nice, its authority and market condition. But don’t worry how hard it is we rank your website within 3-4 month or even less which is actually better than other Fresno SEO Companies.</p>
<p>But how?, We have a proper controlling system in place and whoever in our team performs your website SEO will have a strict target on every SEO action he performed to rank your website. Then every week he has to make an SEO improvement report which will summarize all the activities and will have to show how much improvement your website gets, We will also mail you these reports…</p></div><!--12-->
    </div>
   </div><!--row-->
  </div><!--cont-->
</section>

<!----------------end------------------->
<section class="py-0" style="background-color: #f7f7f7;">
<div class="container">
  <div class="row">
        <div class="col-md-12 text-center">
                  <h2 class="top-head">
    After Fresno SEO how much traffic your website will receive?</h2> </div><!--12-->
    <div class="col-md-6 mt-5">
      <img src="{{asset('assets/images/fresno-1.png')}}" title="seo-bar" style="width: 100%;">
      </div>
      <div class="col-md-6 mt-5">
<p style="padding:30px 20px;">You may be curious to know how much traffic or leads I will get if we rank your website in the First page,  for that you have to understand the science of keywords the graph below gives an overview of how much the monthly searches are coming for the keyword: doctors in Fresno i.e 210 which increases to 320 in the month of October on the side if we look to the keyword</p>
    </div><!--cols-->
      <div class="col-md-6 mt-5">
<p style="padding:5px 0px;">“Restaurant in Fresno” it is getting 12100 average month searches which increase to 15000 in the month of Aug and Sep well you may be thinking there is no comparison between the two and it’s true as for the doctor keyword people don’t search regularly but for the restaurant people usually search and it’s common.

So those websites which have a high rank on the “restaurant keyword will have the most amount of traffic

But keywords are not that simple. By just adding or deleting a single word, things change drastically

Just like this example</p>

    </div>
     <div class="col-md-6 mt-5">
      <img src="{{asset('assets/images/fresno-2.png')}}" title="seo-bar" style="width: 100%;">
      </div>

      <div class="col-md-6 mt-5">
      <img src="{{asset('assets/images/fresno-3.png')}}" title="seo-bar" style="width: 100%;">
      </div>
      <div class="col-md-6 mt-5">
<p style="padding:10px 20px;">When we search for the keyword“Best restaurant in Fresno” the average month searches decreases to 2400 which is 21000 in the “restaurant in Fresno” keyword.

So it’s obvious to guess the website which ranks for “best restaurant in Fresno” is having the less traffic than “restaurant in Fresno” websites but about leads who you think in which keywords will have the high lead generation capability?

If you are thinking “restaurant in Fresno” then you are wrong the keyword “best restaurant in Fresno” is much better as it is having a word “best” in it, think when you use best, most of the time when you are more likely to purchase anything or when you are in the final stage of buying.

So know you understand that the word we use in search is just the reflection of our inner state and how close we are at the end of the buying cycle.

so to decide for which keywords we should rank a website we will definitely choose the keyword  “best restaurant in Fresno” but it all depends on the objective of the client maybe he needs more traffic rather than leads.</p>
    </div><!--cols-->
  </div>
</div>
</section>


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