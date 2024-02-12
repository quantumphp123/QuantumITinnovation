<?php

namespace App\Http\Controllers\Web;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Model\Contact;
use App\BlogCategory;
use App\Blog;
use App\BlogCatAssign;
use Illuminate\Support\Facades\File;
use Mail;

class FrontendController extends Controller
{
    
    public $admin_email = '';

    public function __construct()
    {

        $this->admin_email = getenv('EMAIL_ADDRESS');
    }


    
    public function hdfcNew(){
        
        return \File::get('hdfc/index3.php');
        
    }
    
    /**
     * User post inquiry 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function UserPostInquiry(Request $request)
    {
       
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'enquiry_type' => 'required',
        ]);

        if($validator->fails()){

            return redirect()->back()->withErrors([$validator->messages()->first()]);
        }else{

         
            $name=$request['name'];
            $email=$request['email'];
            $description=$request['description'];
            $enquiry_type=$request['enquiry_type'];
            $number = $request['number'];

            $postData=Contact::create([
                'name'=>$name,
                'email'=>$email,
                'description'=>$description,
                'enquiry_type'=>$enquiry_type
            ]);
            
            $send_email = 'sales@quantumitinnovation.com';
            $data  = array('email'=>$email,'name'=>$name,'message'=>$description,'enquiry_type'=>$enquiry_type,'contact_number'=>$number);
            
            $send_email = 'sales@quantumitinnovation.com';
            $subject = "Contact Form Queries";
            //$htmlContent = file_get_contents(resource_path('views/website/email/reset_mail.blade.php',false, $context));
            $message ="<html>
            <head>
            	<title></title>
            </head>
            <body>
            	<p><b>Name - </b>".$data['name']."</p><br>
            	<p><b>Email - </b>".$data['email']."</p><br>
            	<p><b>Phone Number - </b>".$data['contact_number']."</p><br>
            	<p><b>Enquiry About - </b>".$data['enquiry_type']."</p><br>
            	<p><b>Message - </b>".$data['message']."</p>
            </body>
            </html>";
            // Set content-type header for sending HTML email 
            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 

            // Additional headers 
            $headers .= 'From: '.$send_email.'<'.$send_email.'>' . "\r\n"; 

            mail('aayushiquantum@gmail.com,nitin.quantumitinnovation@gmail.com',"Contact Form Query",$message,$headers);

         
            Session::flash('success', 'Thank You! Your message has been sent.');
            return redirect()->back();
        
        }
    }


    public function test_email(){
        dd("hiii");
        $email = 'aayushiquantum@gmail.com';
        try {
           Mail::send('Emails.otp_verify', ['name' => 'nishi', 'otp' => 1234], function ($m) use ($email) {
               $m->from($this->admin_email, 'test');
               $m->to($email, 'test email')->subject('test email');
           });
       } catch (Exception $e) {
       }
    }


    public function blogs(){

        $categories = BlogCategory::all();
        $blogs = Blog::orderBy('id','DESC')->get();
        return view('website.blogs',compact('categories','blogs'));
    }
    
    public function blogsCatg(Request $request){
        
        
        $blogs = BlogCatAssign::with('blogDetail')->where('category_id',$request->cat_id)->get();
         return response()->json(['blogs'=>$blogs,'status'=>200]);
    }
    
    
     public function blogsDetail($url){
        
        $blog = Blog::where('url',$url)->first();
        if(isset($blog)){
            $categories = BlogCatAssign::where('blog_id',$blog->id)->get();
            return view('website.blog-detail',compact('blog','categories'));
        }else{
            return redirect('/');
        }
        
    }
    
    
}
