@extends('website.layouts.master2') 
@section('meta')
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Disclaimer | Quantum IT Innovation</title>
    <meta name="keywords" content="Disclaimer ">
	<meta name="description" content="">
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
<!---------modal-end--------------->
        <div class="container pt-5">
            <div class="row">
                    <div class="col-lg-6">
                            <h5 class="">Disclaimer for Quantum IT Innovation</h5>
                            <p>If you require any more information or have any questions about our disclaimer, please feel free to contact us by email at <strong>sales@quantumitinnovation.com</strong></p>
                            <ul style="list-style-type: disc">
                                <li><h6 class="mb-3">All the contact number mentioned on the website are routed to India Development Center.</h6></li>
                                <li><h6>All sales point of contact that are mentioned on the website are reference contacts, not necessarily be commercial premises.</h6></li>
                            </ul>
                    </div>
                            <div class="col-lg-6 pb-5">
                                <div class="contact-form-service-wrap contact-us-form">
                                        
                                          @if(Session::has('success'))
                                                <p class="alert alert-success">{{ Session::get('success') }}</p>
                                            @endif
                
                                        <div class="contact-title text-center section-space--mb_">
                                            <h4 class="">Get In Touch</h4>
                                            <p class="text">Tell us what's on your mind and we'll get right back to you !</p>
                                        </div>
                                        <form  method="post" action="{{ route('user_post_inquiry') }}" 
                                         class="form p-t-20 needs-validation" novalidate>
                                            {{csrf_field()}}
                                               
                                    
                                            <div class="contact-form__two">
                                                <div class="contact-input">
                                                    <div class="contact-inner">
                                                        <input name="name" type="text" placeholder="Name *" class="cust-height" required>
                                                    </div>
                                                    <div class="contact-inner">
                                                        <input name="email" type="email" placeholder="Email *" class="cust-height" required>
                                                    </div>
                                                </div>
                                                <div class="contact-select">
                                                    <div class="form-item contact-inner">
                                                        <span class="inquiry">
                                                        <select name="enquiry_type" class="select-item cust-height" required>
                                                            <option value="Your inquiry about">Your Enquiry about</option>
                                                            <option value="General Information Request">General Information Request</option>
                                                            <option value="Partner Relations">Partner Relations</option>
                                                            <option value="Careers">Careers</option>
                                                            <option value="Software Licencing">Software Licencing</option>
                                                        </select>
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="contact-inner contact-message">
                                                    <textarea name="description" placeholder="Please describe what you need."></textarea>
                                                </div>
                                                <div class="submit-btn text-center">
                                                    <button class="ht-btn ht-btn-md cust-height-btn" type="submit">Send message</button>
                                                    <p class="form-messege"></p>
                                                </div>
                                                
                                                <br />
                                            @if($errors->first())
                                            <div class="alert alert-danger alert-dismissible">
                                                {{$errors->first()}}
                                            </div>
                                            @endif
                                            </div>
                                        </form>
                                    </div>
                            </div>
                </div>
        </div>
        
</div>    
@endsection