@extends('website.layouts.master2') 
@section('content')

<head>



<style>
.nav-tabs {
border-bottom:none !important; 
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
border-bottom:1px solid #000;  
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
border-bottom:1px solid #000;
}
.absolute{
text-align: center;
padding-top:2%;
color: #7b7777;
min-height: 0px;
left: 16%;

}

.side-button  {
margin-left: 22%;
background-color: #199fd2;
padding: 6px 18px;
color: #fff;
text-transform: uppercase;
font-size: 15px;
border-radius: 50px;
border-top-left-radius: 0;
}
.side-button:hover{
background-color:#fff;
border:none;
transition: 0.7s ease in out;
color: #000;   
transition: all .2s cubic-bezier(.02,.54,.58,1);
}
.card1{
box-shadow: 7px 6px 6px 9px #f3f2f2;
-webkit-transform: translateY(0);
-moz-transform: translateY(0);
-ms-transform: translateY(0);
-o-transform: translateY(0);
transform: translateY(0);
-webkit-transition: 0.5s;
-o-transition: 0.5s;
-moz-transition: 0.5s;
transition: 0.5s;
}
.card1:hover{
-webkit-transform: translateY(-10px);
-moz-transform: translateY(-10px);
-ms-transform: translateY(-10px);
-o-transform: translateY(-10px);
transform: translateY(-10px);
box-shadow: 0 0 20px rgba(0,0,0,.14); 
background-image: linear-gradient(145deg,#0039e4,#04dbf1);
}

.card-text1{
text-align: center;
color: #848080;
font-size: 15px;
}
.card1:hover .card-text1{
color:#fff;
}

.card1:hover .absolute{
color:#fff;
}
.card1:hover .main-head{
color:#fff !important;
}
.card1:hover .side-button{
background-color: #fff;
color:#000;
}

.card1:hover #right-icon{
background-color: #fff;
color:#000;
}
.cat-anchor{
padding: 3px 6px;
border: 1px solid;
margin: 3px 0px;
background-color: #fff;
}
.cat-anchor:hover{
color:#fff;
transition: 0.6s ease in out;
background-image: linear-gradient(145deg,#0039e4,#04dbf1);
}  
#right-icon{
padding-left: 7px; color: #fff; font-size:15px;
}
.side-button:hover #right-icon{
color:#000;
}
.latest{
text-align: center;
font-size: 34px;
color: #000;
width: 100%;
}
.border-b{
position: relative;
width: 9%;
padding: 6px 0px;
left: 12%;
border-radius: 6px;
border-bottom: 5px solid #187fe8; 
}
/**********************/
.cat-anchor1{
border-radius: 20px 0px 26px 0px;
padding: 3px 6px;
border: 1px solid;
margin: 3px 0px;
background-color: #fff; 

}


.card2{
box-shadow: 7px 6px 6px 9px #f3f2f2;
-webkit-transform: translateY(0);
-moz-transform: translateY(0);
-ms-transform: translateY(0);
-o-transform: translateY(0);
transform: translateY(0);
-webkit-transition: 0.5s;
-o-transition: 0.5s;
-moz-transition: 0.5s;
transition: 0.5s;
border: 2px dotted #cccc;
}
.side-button1  {
text-align: center;
justify-content: center;
display: flex;
/* background-color: #989a9a; */
padding: 15px 63px;
color: #fff;
text-transform: uppercase;
font-size: 15px;

/* border-radius: 50px; */
border-top-left-radius: 0;
}
}
.side-button1:hover{
background-color:#fff;
border:none;
transition: 0.7s ease in out;
color: #fff;   
transition: all .2s cubic-bezier(.02,.54,.58,1);
}
.main-head1{
font-size: 18px;
color: #ccc;
text-align: center;
color: #333638;
padding-top: 0%;


}
.absolute1{
float: left;
padding: 0;
width: 100%;
margin: 0;
background-image: linear-gradient(145deg,#0039e4,#04dbf1);
}


}
.absolute1:hover{
background-color: #fff;
border: 1px solid #000;
transition: 0.5s ease in out;


}
#right-icon1{
padding-left: 7px; color: #fff; font-size:15px;
padding-top: 3%;


}
.text-side1{
/* display: flex; */
/* text-align: center; */
position: relative;
color: #6b6262;
font-size: 16px;
justify-content: center;
/* z-index: 999; */
/* top: 13em; */
/* position: relative; */
left: 1%;


}
#icon1{
float: left;
padding-left: 25%;
padding-top: 16px;
font-size: 17px;
color: #545151;

}
.absolute1 :hover{
background-color: #fff;
transition: 0.3s ease in out;


}

.absolute1:hover .side-button1{
color:#000;


}
.absolute1:hover #right-icon1{
color:#000;


}



.card2 {
cursor: pointer;
position: relative;
padding: 10px 20px;
background: white;
font-size: 28px;
border-top-right-radius: 10px;
border-bottom-left-radius: 10px;
transition: all 1s;
}
.card2:after, .card2:before {
content: " ";
width: 10px;
height: 10px;
position: absolute;
border: 0px solid #fff;
transition: all 1s;
}
.card2:after {
top: -1px;
left: -1px;
border-top: 5px solid #187fe8;
border-left: 5px solid #187fe8;
}
.card2:before {
bottom: -1px;
right: -1px;
border-bottom: 5px solid #187fe8;
border-right: 5px solid #187fe8;
}
.card2:hover {
border-top-right-radius: 0px;
border-bottom-left-radius: 0px;
}
.card2:hover:before, .card2:hover:after {
width: 100%;
height: 100%;
}

</style>
</head>

<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
<title>Blogs | Quantum IT Innovation</title>
<div class="site-wrapper-reveal">
<!--prac-->
<section class="pb-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center mt-2">
            <h3 class="latest">Latest Blog</h3>
            <div class="border-b offset-md-4"></div>
         </div>
         <div class="category-section" style="text-align: center; margin-top: 3%;">
             <a href="{{url('/blog/')}}" class="cat-anchor" style="text-transform:uppercase;">All</a>
             @foreach($categories as $category)
             
            <a href="#" class="cat-anchor" id="cat_{{$category->id}}" style="text-transform:uppercase;">{{$category->name}}</a>
            @endforeach
         </div>
         
         <!--====================  Blog Area Start ====================-->
        <div class="blog-pages-wrapper section-space--ptb_100">
            <div class="container">
                <div class="row blog">

                    @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6  mb-30 wow move-up">
                        <!--======= Single Blog Item Start ========-->
                        <div class="single-blog-item blog-grid">
                            <!-- Post Feature Start -->
                            <div class="post-feature blog-thumbnail">
                                <a href="{{url("$blog->url")}}">
                                    <img class="img-fluid" src="{{asset('blogs-image/'.$blog->image)}}" alt="Blog Images">
                                </a>
                            </div>
                            <!-- Post Feature End -->

                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info">
                                <div class="post-meta">
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        {{date('M d,Y',strtotime($blog->date))}}
                                    </div>
                                </div>

                                <h5 class="post-title font-weight--bold">
                                    <a href="{{url("$blog->url")}}">{{$blog->title}}</a>
                                </h5>

                                <div class="post-excerpt mt-15">
                                    <p>{{$blog->short_description ? $blog->short_description : 'Using the profit accumulator is one such way, and you should understand why it increases your chances of the profits. …'}}</p>
                                </div>
                                <div class="btn-text">
                                    <a href="{{url("$blog->url")}}">Read more <i class="ml-1 button-icon fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- Post info End -->
                        </div>
                        <!--===== Single Blog Item End =========-->

                    </div>
                    @endforeach
                    


                  <!--   <div class="col-lg-12 wow move-up">
                        <div class="ht-pagination mt-30 pagination justify-content-center">
                            <div class="pagination-wrapper">

                                <ul class="page-pagination">
                                    <li><a class="prev page-numbers" href="#">Prev</a></li>
                                    <li><a class="page-numbers current" href="#">1</a></li>
                                    <li><a class="page-numbers" href="#">2</a></li>
                                    <li><a class="next page-numbers" href="#">Next</a></li>
                                </ul>

                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
        <!--====================  Blog Area End  ====================-->



      </div>
   </div>
</section>
<!--prac-->


@endsection
@section('after-script')
<script type="text/javascript">
    $(".cat-anchor").on("click", function(){
        
        var id = $(this).attr('id');
        var arr = id.split('_');
        cat_id = arr[1];
        $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $.ajax({
            type: "GET",
            url: "{{ route('categ-blogs') }}",
            data: {'cat_id' : cat_id},
            dataType: "text",
            beforeSend:function(){
               $('.loader-opcity').show();
            },
            complete:function(){
               $('.loader-opcity').hide();
            },
            success: function(result)
            {
                
                var msg = JSON.parse(result);
                var breakHtml = '';
                $('.blog').empty();
                console.log(msg.blogs);
                $.each(msg.blogs,function(key,value){
                 breakHtml = breakHtml + '<div class="col-lg-4 col-md-6  mb-30 wow move-up">'+
                        
                        '<div class="single-blog-item blog-grid">'+
                           
                            '<div class="post-feature blog-thumbnail">'+
                                '<a href="'+value.blog_detail.url+'">'+
                                    '<img class="img-fluid" src="'+'https://quantumitinnovation.com/blogs-image/'+value.blog_detail.image+'" alt="Blog Images">'+
                                '</a>'+
                            '</div>'+
                            
                            '<div class="post-info lg-blog-post-info">'+
                                '<div class="post-meta">'+
                                    '<div class="post-date">'+
                                        '<span class="far fa-calendar meta-icon"></span>'+value.blog_detail.date+
                                    '</div>'+
                               ' </div>'+

                                '<h5 class="post-title font-weight--bold">'+
                                    '<a href="'+value.blog_detail.url+'">'+value.blog_detail.title+'</a>'+
                                '</h5>'+

                               ' <div class="post-excerpt mt-15">'+
                                    '<p>'+value.blog_detail.short_description+'</p>'+
                                '</div>'+
                                '<div class="btn-text">'+
                                    '<a href="'+value.blog_detail.url+'">Read more <i class="ml-1 button-icon fa fa-arrow-right"></i></a>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+

                    '</div>';
                });
                $('.blog').append(breakHtml)
            },
    });
});
</script>
@endsection
