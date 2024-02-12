@extends('website.layouts.master2') 
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<title>Portfolio | Quantum IT Innovation</title>
<div class="site-wrapper-reveal">





<!--====================  Conact us Section Start ====================-->
<div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-8">
                 <h4 class="section-title text-center" style="cursor:pointer;"><a href="https://www.raniazara.co.uk/" target="_blank" class="text-decoration-none">Rania Zara</a></h4>
                <hr>
                <div class="container">
                    <img src="assets/images/projects/Rania-Zara.jpg" width="100%" >
                </div>
            </div>

            <div class="col-lg-4 col-lg-4">
                <h4 class="section-title text-center">Write to Us</h4><hr>
                <div class="contact-form-wrap ">
                    <form id="contact-form" action="http://hasthemes.com/file/mail.php" method="post">
                        <div class="contact-form">
                            <div class="contact-input">
                                <div class="contact-inner">
                                    <input name="con_name" type="text" placeholder="Your Name *">
                                </div>
                                <div class="contact-inner">
                                    <input name="con_num" type="text" placeholder="Phone *">
                                </div>
                                <div class="contact-inner" style="width: 100%">
                                    <input name="con_email" type="email" placeholder="Your Email *">
                                </div>
                            </div>

                            <div class="contact-inner contact-message">
                                <textarea name="con_message" placeholder="Query..."></textarea>
                            </div>
                            <div class="submit-btn mt-20">
                                <button class="ht-btn ht-btn-md" type="submit">S E N D</button>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====================  Conact us Section End  ====================-->



















</div>
@endsection