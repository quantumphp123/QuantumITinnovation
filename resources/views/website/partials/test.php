       
.hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
/*box-shadow: 0px 1px 4px 2px silver;*/
}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0, 0, 0, 0.42);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
    position: absolute;
    top: 55%;
    left: 25%;
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
/*box-shadow:0 0 5px #fff;*/
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}






<style type="text/css">
    #customersCats{
   margin-top:1.2rem;
   height: 80px;
}

.nav-link.active, .nav-link:focus,  .nav-link:hover {
    background-color: transparent;
    border-color: transparent;
    border-bottom: 3px solid #1aafff;
}
a.nav-link{
  color:#333;
}
</style>


 <div class="tabs-wrapper bg_lite_gray section-space--ptb_100" style="padding-bottom:4%;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                        <h6 class="section-sub-title mb-20">Our Portfolio</h6>
                        <h3 class="section-title">We’ve come a long way in <span class="text-color-primary"> 10 years</span> </h3>
                    </div>
                </div>
            </div>


  <div class="row">
    <div class="col-sm-12">
      <ul class="nav justify-content-center port_tab" role="tablist" id="customersCats" >
        <li class="nav-item">
          <a class="nav-link active show" href="#featuredSection" id="featured" data-toggle="tab" role="tab" aria-controls="featuredSection" aria-selected="true">Feature</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#educationSection" id="education" data-toggle="tab" role="tab" aria-controls="educationSection" aria-selected="false">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#healthSection" id="healthcare" data-toggle="tab" role="tab" aria-controls="healthSection" aria-selected="false">Healthcare</a>
        </li>
      </ul>
    </div>
  </div><!-- row-->
  <div class="row">
    <div class="col-sm-12">
      <div class="tab-content" id="catsContent">
        <!--TAB-START-->
        <div class="tab-pane fade show active" id="featuredSection" role="tabpanel" aria-labelledby="featured">
          <div class="row">

            <div class="col-sm-6 col-md-3" onclick="location.href='#'">
              <a href="#">
                <img src="https://raw.githubusercontent.com/solodev/bootstrap-tabs-portfolio/master/1.jpg" alt="Portfolio Item" class="img-fluid pf_img"/>
              </a>
            </div>

            <div class="col-sm-6 col-md-3" onclick="location.href='#'">
              <a href="#">
                <img src="https://raw.githubusercontent.com/solodev/bootstrap-tabs-portfolio/master/2.jpg" alt="Portfolio Item" class="img-fluid pf_img" />
              </a>
            </div>

            <div class="col-sm-6 col-md-3" onclick="location.href='#'">
              <a href="#">
                <img src="https://raw.githubusercontent.com/solodev/bootstrap-tabs-portfolio/master/3.jpg" alt="Portfolio Item" class="img-fluid pf_img"/>
              </a>
            </div>

            <div class="col-sm-6 col-md-3" onclick="location.href='#'">
              <a href="#">
                <img src="https://raw.githubusercontent.com/solodev/bootstrap-tabs-portfolio/master/2.jpg" alt="Portfolio Item" class="img-fluid pf_img" />
              </a>
            </div>

          </div>
        </div>
        <!--TAB-END-->

        <!--TAB-START-->
        <div class="tab-pane fade" id="educationSection" role="tabpanel" aria-labelledby="education">
          <div class="row">
            <div class="col-sm-6 col-md-3" onclick="location.href='#'">
              <a href="#">
                <img src="https://raw.githubusercontent.com/solodev/bootstrap-tabs-portfolio/master/2.jpg" alt="Portfolio Item" class="img-fluid pf_img"/>
              </a>
            </div>
            <div class="col-sm-6 col-md-3" onclick="location.href='#'">
              <a href="#">
                <img src="https://raw.githubusercontent.com/solodev/bootstrap-tabs-portfolio/master/4.jpg" alt="Portfolio Item" class="img-fluid pf_img" />
              </a>
            </div>
          </div>
        </div>
        <!--TAB-END-->
        <!--TAB-START-->
        <div class="tab-pane fade" id="healthSection" role="tabpanel" aria-labelledby="healthcare">
          <div class="row">
            <div class="col-sm-6 col-md-3" onclick="location.href='#'">
              <a href="#">
                <img src="https://raw.githubusercontent.com/solodev/bootstrap-tabs-portfolio/master/3.jpg" alt="Portfolio Item" class="img-fluid pf_img"/>
              </a>
            </div>
            <div class="col-sm-6 col-md-3" onclick="location.href='#'">
              <a href="#">
                <img src="https://raw.githubusercontent.com/solodev/bootstrap-tabs-portfolio/master/5.jpg" alt="Portfolio Item" class="img-fluid pf_img"/>
              </a>
            </div>
            <div class="col-sm-6 col-md-3" onclick="location.href='#'">
              <a href="#">
                <img src="https://raw.githubusercontent.com/solodev/bootstrap-tabs-portfolio/master/6.jpg"  alt="Portfolio Item" class="img-fluid pf_img"/>
              </a>
            </div>
          </div>
        </div>
        <!--TAB-END-->
      
        </div>
    </div>
  </div>
</div>