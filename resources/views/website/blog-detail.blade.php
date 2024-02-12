@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$blog->meta_title ? $blog->meta_title : ''}}</title>
    <meta name="keywords" content="{{$blog->meta_keywords ? $blog->meta_keywords : ''}}">
	<meta name="description" content="{{$blog->meta_description ? $blog->meta_description : ''}}">
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
 <!--====================  Blog Area Start ====================-->
        <div class="blog-pages-wrapper section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Post Feature Start -->
                        <div class="post-feature blog-thumbnail  wow move-up">
                            <img class="img-fluid" src="{{asset('/blogs-image/'.$blog->image)}}" alt="Blog Images">
                        </div>
                        <!-- Post Feature End -->
                    </div>
                    <div class="col-lg-8 ml-auto mr-auto">
                        <div class="main-blog-wrap">
                            <!--======= Single Blog Item Start ========-->
                            <div class="single-blog-item  wow move-up">

                                <!-- Post info Start -->
                                <div class="post-info lg-blog-post-info">
                                    <div class="post-categories text-center">
                                        <a href="#"> 
                                            @foreach($categories as $value)
                                            {{$value['categoryDetails']['name']}} | 
                                            @endforeach
                                        </a>
                                    </div>

                                    <h3 class="post-title text-center">
                                        <a href="#">{{$blog->title}}</a>
                                    </h3>

                                    <div class="post-meta mt-20 justify-content-center">
                                        <div class="post-author">
                                            <a href="#">
                                                <img class="img-fluid avatar-96" src="assets/images/team/admin.jpeg" alt=""> Dharmendra Tripathi
                                            </a>
                                        </div>
                                        <div class="post-date">
                                            <span class="far fa-calendar meta-icon"></span>
                                            {{$blog->date}}
                                        </div>
                                        <!--<div class="post-view">-->
                                        <!--    <span class="meta-icon far fa-eye"></span>-->
                                        <!--    346 views-->
                                        <!--</div>-->
                                        <!--<div class="post-comments">-->
                                        <!--    <span class="far fa-comment-alt meta-icon"></span>-->
                                        <!--    <a href="#" class="smooth-scroll-link">4 Comments</a>-->
                                        <!--</div>-->
                                    </div>

                                    <div class="post-excerpt mt-15">
                                        {!! $blog->description !!}
                                    </div>

                                </div>
                                <!-- Post info End -->
                            </div>
                            <!--===== Single Blog Item End =========-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Blog Area End  ====================-->
</div>
@endsection