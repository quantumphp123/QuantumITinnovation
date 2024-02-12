@extends('website.layouts.master2') 
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<script type="text/javascript"  src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<title>Portfolio | Quantum IT Innovation</title>

<style>
.details::-webkit-scrollbar {
  width: 8px;
  height: 0px;
}
    .details {
        overflow-y:scroll;
        opacity: 0;
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 100%;
        transition: all 0.5s ease 0s;
        background: #023b7ae6;
    }
    .phoneCard{
        box-shadow:0px 0px 4px 2px silver;
    }
    .phoneCard:hover .details {
        opacity: 1;
        bottom: 0;
        color: white;
    }
    .tab.active{
        border-bottom: 2px solid #086AD8;
    }
    .fade{
        transition:0.4s !important;
    }
</style>



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
<!-- <div class="pf_thumbnail">
  <img src="assets/images/projects/thumbnail/10TH-GATE-TOURS.jpg" class="portrait" alt="Image" />
</div> -->
<script>
function addClass() {
  var elem = document.getElementById("web");
  elem.classList.add("fade");
}
</script>
       <!--===========  Projects wrapper Start =============-->
        <div class="projects-wrapper section-space--ptb_100 projects-masonary-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrap text-center section-space--mb_40">
                            <h3 class="heading">Proud projects that<span class="text-color-primary"> make us stand out</span></h3>
                        </div>
                        <div class="justify-content-center d-flex mb-5">
                        <!--<div class="messonry-button text-center section-space--mb_60">-->
                          <!--<button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>-->
                            <!--<button data-filter=".cat--1" class="web"><span class="filter-text">WEB APPLICATION</span></button>-->
                            <!--<button data-filter=".cat--3" onClick="show"><span class="filter-text">MOBILE APP</span></button> -->
                            <ul class="nav nav-tabs border-0">
                              <li class="active mx-2">
                                <a
                                  class="active tab filter-text text-decoration-none"
                                  type="button"
                                  data-toggle="tab"
                                  href="#web"
                                  style="font-size: 18px;font-weight: 500;line-height: 1.74;color: #086AD8;"
                                >
                                  WEB APPLICATION
                                </a>
                              </li>
                              <li class="mx-2">
                                <a
                                  class="mx-3 tab filter-text text-decoration-none"
                                  type="button"
                                  data-toggle="tab"
                                  href="#apps"
                                  onclick="addClass()"
                                  style="font-size: 18px;font-weight: 500;line-height: 1.74;color: #086AD8;"
                                >
                                  MOBILE APP
                                </a>
                              </li>
                            </ul>
                            
	                   </div>
                    </div>
                </div>

                            
                            
                             
                <div class="projects-case-wrap">
                    <div class="tab-content">
                        <div id="web" class="active tab-pane">
                            <div class="row mesonry-list">
                    	
                        <!-- WEB-APPLICATION -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 not-in portfolioBox cat--1" >
								<a target="_blank" href="{{url('/lucid-rank')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/Lucid-Rank.png" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/lucid-rank')}}">Lucid Rank
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/deliverease')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/Deliverease.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/deliverease')}}">Deliverease
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/site-supply')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/Site-Supply.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/site-supply')}}">Site Supply
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
<!--                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >-->
<!--								<a target="_blank" href="{{url('/mein-haus')}}" class="projects-wrap style-01">-->
<!--									<div class="hovereffect">-->
<!--										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/Mein-Haus.jpg" alt="">-->
<!--										<div class="overlay">-->
<!--											<a class="port_info" href="{{url('/mein-haus')}}">MeinHaus-->
<!--</a>-->
<!--											<br><br>-->
<!--										</div>-->
<!--									</div>-->
<!--								</a>-->
<!--						</div>-->
                        <!-- BOX-END -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/inner-soul')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/Shop-Inner-Soul.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/inner-soul')}}">Inner Soul
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/dash-tray')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/Dash-Tray.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/dash-tray')}}">Dash Tray
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/rania-zara')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/Rania-Zara.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/rania-zara')}}">Rania Zara
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/decor-redefined')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/Decor-Redefined.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/decor-redefined')}}">Decor Redefined
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/rockrooster-footwear')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/Rockrooster-Footwear.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/rockrooster-footwear')}}">Rockrooster Footwear
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/weaves-of-tradition')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/Weaves-of-Tradition.png" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/weaves-of-tradition')}}">Weaves of Tradition
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/li-golf-academy')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/LI-Golf-Academy.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/li-golf-academy')}}">LI Golf Academy
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
                         <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/hemp-sure')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/hemp-sure.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/hemp-sure')}}">Hemp Sure
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/healthy-creations')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/healthy-creations.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/healthy-creations')}}">Healthy Creations
</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
						<!-- BOX-END -->
                        <!-- BOX-START -->
                        <div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/child-emergency-plan')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/child-emergency-plan.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/child-emergency-plan')}}">Child Emergency Plan</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
						<!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/10th-gate-tours')}}" class="projects-wrap style-01">
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
								<a target="_blank" href="{{url('/adelphia')}}" class="projects-wrap style-01">
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
								<a target="_blank" href="{{url('/bhamas')}}" class="projects-wrap style-01">
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
								<a target="_blank" href="{{url('/canahemp')}}" class="projects-wrap style-01">
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
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/celebrity-scene')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/celebrity-scene.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/celebrity-scene')}}">celebrity-scene</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/eagletax')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/eagletax.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/eagletax')}}">eagletax</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/footostudio')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/footostudio.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/footostudio')}}">footostudio</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/fossminerali')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/fossminerali.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/fossminerali')}}">fossminerali</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/gastroentrology')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/gastroentrology.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/gastroentrology')}}">gastroentrology</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/healthycreations')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/healthycreations.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/healthycreations')}}">healthycreations</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/jivala')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/jivala.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/jivala')}}">jivala</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/kennebunkport')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/kennebunkport.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/kennebunkport')}}">kennebunkport</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/kumba-market')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/kumba-market.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/kumba-market')}}">kumba market</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/luxury-india-tours')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/luxury-india-tours.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/luxury-india-tours')}}">luxury india tours</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/mercer-and-co')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/mercer-and-co.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/mercer-and-co')}}">mercer and co</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/mudra')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/mudra.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/mudra')}}">mudra</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/onstar-pc')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/onstar-pc.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/onstar-pc')}}">onstar pc</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/peelhypnosis')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/peelhypnosis.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/peelhypnosis')}}">peelhypnosis</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/relativity-textiles')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/relativity-textiles.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/relativity-textiles')}}">relativity textiles</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/remodel')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/remodel.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/remodel')}}">remodel</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/rf-solutions')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/rf-solutions.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/rf-solutions')}}">rf solutions</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                        <!-- BOX-START -->
						<div class="col-lg-3 col-md-3 portfolioBox cat--1" >
								<a target="_blank" href="{{url('/shangrilah20')}}" class="projects-wrap style-01">
									<div class="hovereffect">
										<img class="img-responsive web_img_shadows" width="100%" src="assets/images/projects/thumbnail/shangrilah20.jpg" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/shangrilah20')}}">shangrilah20</a>
											<br><br>
										</div>
									</div>
								</a>
						</div>
                        <!-- BOX-END -->
                    </div>    
                        </div>
              
                    
                        <div id="apps" class="tab-pane fade">    
                            <div class="row"> 
                                <!-- MOBILE-APP -->
                               <!-- BOX-START -->
                                <div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">
                                    <div class="phoneCard position-relative">
                                        <img src="assets/images/projects/thumbnail/good-sam-camping.jpeg" width="100%" />
                                        <div class="details">
                    
                                            <div className="details py-5 justify-content-center align-items-center d-flex">
                                                <div class="p-lg-5 p-3">
                                                    <div class="text-white" style="font-size:1.8rem"><b>Good Sam Camping</b></div>
                                                    <div className="text-white py-5"
                                                        style="text-align: justify;font-weight:500;font-size:17px">Download the latest
                                                        version of the Good Sam Camping app and get essential information, directions and
                                                        discounts for campgrounds, RV parks, attractions and service centers across North
                                                        America. FREE, easy-to-use, with NO membership login required. The app is the
                                                        perfect companion for your next RV trip.</div>
                                                    <div class="d-flex mt-4 my-2">
                                                        <a href="https://apps.apple.com/us/app/good-sam-camping/id449060020" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg"
                                                            class="" style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                        <a href="https://play.google.com/store/apps/details?id=com.goodsam.gscamping&hl=en_IN" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg"
                                                            class="mx-3" style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">
                                    <div class="phoneCard position-relative">
                                        <img src="assets/images/projects/thumbnail/Mein-Haus-App.jpeg" width="100%" />
                                        <div class="details">
                    
                                            <div className="details py-5 justify-content-center align-items-center d-flex">
                                                <div class="p-lg-5 p-3">
                                                    <div class="text-white" style="font-size:1.8rem"><b>MeinHaus</b></div>
                                                    <div className="text-white py-5" style="text-align: justify;font-weight:500;font-size:17px">Meinhaus always 
                                                    available via our large network of professionals; simply specify an ideal time for you and we'll match you with
                                                    a nearby pro. All rates are pre-set, so you know you're always paying an industry average rate, without having to
                                                    research, price compare, and go back and forth haggling with each company.</div>
                                                    <div class="d-flex mt-4 my-2">
                                                        <a href="https://apps.apple.com/dk/app/mein-haus-user/id1555252416" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg" class=""
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                        <a href="https://play.google.com/store/apps/details?id=com.quantum.meinhauspro&hl=en_IE&gl=US" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg" class="mx-3"
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">
                                    <div class="phoneCard position-relative">
                                        <img src="assets/images/projects/thumbnail/Deliverease-App.png" width="100%" />
                                        <div class="details">
                    
                                            <div className="details py-5 justify-content-center align-items-center d-flex">
                                                <div class="p-lg-5 p-3">
                                                    <div class="text-white" style="font-size:1.8rem"><b>Deliverease</b></div>
                                                    <div className="text-white py-5" style="text-align: justify;font-weight:500;font-size:17px">Upon signup,
                                                    you will be sent a welcome package, including a one-time free, promotional shipping code! Simply tell us
                                                    what, where and when you want to ship your item. Leave the rest to us!</div>
                                                    <div class="d-flex mt-4 my-2">
                                                        <a href="https://apps.apple.com/in/app/deliverease-user/id1488424647" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg" class=""
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                        <a href="https://play.google.com/store/apps/details?id=com.quantumitinnovation.delivereaseuser" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg" class="mx-3"
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">
                                    <div class="phoneCard position-relative">
                                        <img src="assets/images/projects/thumbnail/Realtor-App.jpeg" width="100%" />
                                        <div class="details">
                    
                                            <div className="details py-5 justify-content-center align-items-center d-flex">
                                                <div class="p-lg-5 p-3">
                                                    <div class="text-white" style="font-size:1.8rem"><b>Realtor</b></div>
                                                    <div className="text-white py-5" style="text-align: justify;font-weight:500;font-size:17px">Realtor Globally
                                                    makes sales easy, honest and empowering by bringing the entire journey online. Realtor Globally wide selection
                                                    of services are available across in Cyprus, Greek and UK.</div>
                                                    <div class="d-flex mt-4 my-2">
                                                        <a href="https://apps.apple.com/us/app/realtor-globally/id1516675059" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg" class=""
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                        <a href="https://play.google.com/store/apps/details?id=com.realtor" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg" class="mx-3"
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">
                                    <div class="phoneCard position-relative">
                                        <img src="assets/images/projects/thumbnail/Child-Emergency-Plan-App.jpeg" width="100%" />
                                        <div class="details">
                    
                                            <div className="details py-5  align-items-center d-flex">
                                                <div class="p-lg-5 p-3">
                                                    <div class="text-white" style="font-size:1.8rem"><b>Child Emergency Plan</b></div>
                                                    <div className="text-white py-5" style="text-align: justify;font-weight:500;font-size:17px">Child Emergency Plan
                                                    - App to share important child-related information with emergency caregivers. Recent events have shown us that any
                                                    parent or guardian can experience an emergency, the Child Emergency Plan helps parents record and share important
                                                    details of their child's daily routine and care. </div>
                                                    <div class="d-flex mt-4 my-2">
                                                        <a href="https://apps.apple.com/lb/app/child-emergency-plan/id1588084473" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg" class=""
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                        <a href="https://play.google.com/store/apps/details?id=com.child.plan" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg" class="mx-3"
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">
                                    <div class="phoneCard position-relative">
                                        <img src="assets/images/projects/thumbnail/Monkey-App.jpeg" width="100%" />
                                        <div class="details">
                    
                                            <div className="details py-5 justify-content-center align-items-center d-flex">
                                                <div class="p-lg-5 p-3">
                                                    <div class="text-white" style="font-size:1.8rem"><b>Monkey Mick</b></div>
                                                    <div className="text-white py-5" style="text-align: justify;font-weight:500;font-size:17px">Monkey Mick lives
                                                    in the jungle with his buddies. He teaches and encourages his friends to learn and practice breathing exercises,
                                                    yoga poses, mindfulness and cooking! The app is packed with life, fun and a lot of connection with the animated
                                                    character.</div>
                                                    <div class="d-flex mt-4 my-2">
                                                        <a href="https://apps.apple.com/in/app/monkey-mick/id1606131686" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg" class=""
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                        <a href="https://play.google.com/store/apps/details?id=com.monkey.mick" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg" class="mx-3"
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">
                                    <div class="phoneCard position-relative">
                                        <img src="assets/images/projects/thumbnail/Personal-Security-App.jpeg" width="100%" />
                                        <div class="details">
                    
                                            <div className="details py-5 justify-content-center align-items-center d-flex">
                                                <div class="p-lg-5 p-3">
                                                    <div class="text-white" style="font-size:1.8rem"><b>Personal Security App</b></div>
                                                    <div className="text-white py-5" style="text-align: justify;font-weight:500;font-size:17px">An app to book
                                                    security guards in some simple steps. Booking guards have never been so easy. No need to worry because our
                                                    firm has great extent of appropriate authorities and abides by various labor laws governing such services
                                                    from time to time to ensure a trouble-free service to you.</div>
                                                    <div class="d-flex mt-4 my-2">
                                                        <a href="https://apps.apple.com/in/app/guard-plus/id1620105886" target="_blank"><img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg" class=""
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                        <img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg" class="mx-3"
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">-->
                                <!--    <div class="phoneCard position-relative">-->
                                <!--        <img src="assets/images/projects/thumbnail/Deliverease-App.png" width="100%" />-->
                                <!--        <div class="details">-->
                    
                                <!--            <div className="details py-5 justify-content-center align-items-center d-flex">-->
                                <!--                <div class="p-lg-5 p-3">-->
                                <!--                    <div class="text-white" style="font-size:1.8rem"><b>Volunteer Management App</b></div>-->
                                <!--                    <div className="text-white py-5" style="text-align: justify;font-weight:500;font-size:17px"></div>-->
                                <!--                    <div class="d-flex mt-4 my-2">-->
                                <!--                        <img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg" class=""-->
                                <!--                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" />-->
                                <!--                        <img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg" class="mx-3"-->
                                <!--                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" />-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>    -->
                                <div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">
                                    <div class="phoneCard position-relative">
                                        <img src="assets/images/projects/thumbnail/EPNAC-Photography-App.jpeg" width="100%" />
                                        <div class="details">
                    
                                            <div className="details py-5 justify-content-center align-items-center d-flex">
                                                <div class="p-lg-5 p-3">
                                                    <div class="text-white" style="font-size:1.8rem"><b>EPNAC Photography App</b></div>
                                                    <div className="text-white py-5" style="text-align: justify;font-weight:500;font-size:17px">Through our many
                                                    years of experience, we know the questions that need to be asked to ensure things run smoothly and expectations
                                                    are met – and surpassed. 
                                                    </div>
                                                    <div class="d-flex mt-4 my-2">
                                                        <a href="https://apps.apple.com/in/app/epnac-photography/id1623987749" target="_black"><img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg" class=""
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" /></a>
                                                        <img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg" class="mx-3"
                                                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">-->
                                <!--    <div class="phoneCard position-relative">-->
                                <!--        <img src="assets/images/projects/thumbnail/Deliverease-App.png" width="100%" />-->
                                <!--        <div class="details">-->
                    
                                <!--            <div className="details py-5 justify-content-center align-items-center d-flex">-->
                                <!--                <div class="p-lg-5 p-3">-->
                                <!--                    <div class="text-white" style="font-size:1.8rem"><b>Fitness Coaching App</b></div>-->
                                <!--                    <div className="text-white py-5" style="text-align: justify;font-weight:500;font-size:17px">-->
                                <!--                    </div>-->
                                <!--                    <div class="d-flex mt-4 my-2">-->
                                <!--                        <img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg" class=""-->
                                <!--                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" />-->
                                <!--                        <img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg" class="mx-3"-->
                                <!--                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" />-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--<div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">-->
                                <!--    <div class="phoneCard position-relative">-->
                                <!--        <img src="assets/images/projects/thumbnail/Deliverease-App.png" width="100%" />-->
                                <!--        <div class="details">-->
                    
                                <!--            <div className="details py-5 justify-content-center align-items-center d-flex">-->
                                <!--                <div class="p-lg-5 p-3">-->
                                <!--                    <div class="text-white" style="font-size:1.8rem"><b>Natural Opinion</b></div>-->
                                <!--                    <div className="text-white py-5" style="text-align: justify;font-weight:500;font-size:17px">-->
                                <!--                    </div>-->
                                <!--                    <div class="d-flex mt-4 my-2">-->
                                <!--                        <img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg" class=""-->
                                <!--                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" />-->
                                <!--                        <img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg" class="mx-3"-->
                                <!--                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" />-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>     -->
                                <!--<div class="col-lg-6 col-md-6 col-12 pb-5 portfolioBox cat--3">-->
                                <!--    <div class="phoneCard position-relative">-->
                                <!--        <img src="assets/images/projects/thumbnail/Deliverease-App.png" width="100%" />-->
                                <!--        <div class="details">-->
                    
                                <!--            <div className="details py-5 justify-content-center align-items-center d-flex">-->
                                <!--                <div class="p-lg-5 p-3">-->
                                <!--                    <div class="text-white" style="font-size:1.8rem"><b>Happy Hour Guide App</b></div>-->
                                <!--                    <div className="text-white py-5" style="text-align: justify;font-weight:500;font-size:17px">-->
                                <!--                    </div>-->
                                <!--                    <div class="d-flex mt-4 my-2">-->
                                <!--                        <img width="120px" src="assets/images/projects/thumbnail/app-store-icon.jpg" class=""-->
                                <!--                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" />-->
                                <!--                        <img width="120px" src="assets/images/projects/thumbnail/google-play-icon.jpg" class="mx-3"-->
                                <!--                            style="box-shadow: 1px 1px 2px 1px #a4a3a3b8" />-->
                                <!--                    </div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                            
                                
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/alice-in-wonderland')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/alice-in-wonderland.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/alice-in-wonderland')}}" style="top: 50%;left: 0%;">alice in wonderland</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/book-my-tiffin')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/book-my-tiffin.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/book-my-tiffin')}}" style="top: 50%;left: 0%;">book my tiffin</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/contact-manager')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/contact-manager.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/contact-manager')}}" style="top: 50%;left: 0%;">contact manager</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/design-like-app')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/design-like-app.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/design-like-app')}}" style="top: 50%;left: 0%;">design like app</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/echocardiography')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/echocardiography.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/echocardiography')}}" style="top: 50%;left: 0%;">echocardiography</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/festiadvisor')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/festiadvisor.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/festiadvisor')}}" style="top: 50%;left: 0%;">festiadvisor</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/frankieg-fitness-app')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/frankieg-fitness-app.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/frankieg-fitness-app')}}" style="top: 50%;left: 0%;">frankieg fitness app</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/iauditor-android-and-ios-app')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/iauditor-android-and-ios-app.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/iauditor-android-and-ios-app')}}" style="top: 50%;left: 0%;">iauditor android and ios app</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/jaded-life-app')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/jaded-life-app.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/jaded-life-app')}}" style="top: 50%;left: 0%;">jaded life app</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/luxury-india-tours-app')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/luxury-india-tours-app.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/luxury-india-tours-app')}}" style="top: 50%;left: 0%;">luxury india tours app</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/mck-tree-fellers-app')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/mck-tree-fellers-app.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/mck-tree-fellers-app')}}" style="top: 50%;left: 0%;">mck tree fellers app</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/mera-mechanic')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/mera-mechanic.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/mera-mechanic')}}" style="top: 50%;left: 0%;">mera mechanic</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/mobility2')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/mobility2.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/mobility2')}}" style="top: 50%;left: 0%;">mobility2</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/parivesa')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/parivesa.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/parivesa')}}" style="top: 50%;left: 0%;">parivesa</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
        						<!--<div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/qr-reader')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/qr-reader.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/qr-reader')}}" style="top: 50%;left: 0%;">qr reader</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
              <!--                 <div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/school-management')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/school-management.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/school-management')}}" style="top: 50%;left: 0%;">school management</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
              <!--                 <div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/serwhizz')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/serwhizz.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/serwhizz')}}" style="top: 50%;left: 0%;">serwhizz</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                                <!-- BOX-START -->
              <!--                 <div class="col-lg-3 col-md-3 portfolioBox cat--2" >-->
        						<!--		<a href="{{url('/shangrilah2o')}}" class="projects-wrap style-01">-->
        						<!--			<div class="hovereffect" style="width: 65%;margin:auto">-->
        						<!--				<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/shangrilah2o.png" alt="">-->
        						<!--				<div class="overlay">-->
        						<!--					<a class="port_info" href="{{url('/shangrilah2o')}}" style="top: 50%;left: 0%;">shangrilah2o</a>-->
        						<!--					<br><br>-->
        						<!--				</div>-->
        						<!--			</div>-->
        						<!--		</a>-->
        						<!--</div>-->
                                <!-- BOX-END -->
                            </div>    
                        </div>    
                        
                        
                        
                        <!-- BOX-START -->
                       <!-- <div class="col-lg-3 col-md-3 portfolioBox cat--2" >
								<a href="{{url('/total-holiday-options')}}" class="projects-wrap style-01">
									<div class="hovereffect" style="width: 65%;margin:auto">
										<img class="img-responsive" width="100%" src="assets/images/projects/thumbnail/total-holiday-options.png" alt="">
										<div class="overlay">
											<a class="port_info" href="{{url('/total-holiday-options')}}" style="top: 50%;left: 0%;">total holiday options</a>
											<br><br>
										</div>
									</div>
								</a>
						</div> -->
                        <!-- BOX-END -->
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  Projects wrapper End =============-->
        
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