<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
use App\Contact;
use Validator;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactFormPost(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'enquiry_type' => 'required',
            'phone'=>'required',
        ]);

        if($validator->fails()){

            return response()->json(['status'=>'400']);
        }else{

         
            $name=$request['name'];
            $email=$request['email'];
            $description=$request['description'];
            $enquiry_type=$request['enquiry_type'];
            $number = $request['phone'];

            
            $send_email = 'sales@quantumitinnovation.com';
            $data  = array('email'=>$email,'name'=>$name,'message'=>$description,'enquiry_type'=>$enquiry_type,'contact_number'=>$number);
            
            $send_email = 'sales@quantumitinnovation.com';
            $subject = "Web Landing Page Queries";
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

            mail('sales@quantumitinnovation.com',"Web Landing Page Query",$message,$headers);

         
            return response()->json(['status'=>'200']);
        
        }
    }
    
    
    public function contactUsPost(Request $request)
    {  
        
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){

            return response()->json(['status'=>'400']);
        }else{
    
       
            //get contact  data
            $contactData = $request->all();
           
            $contactu = new ContactUs();
            $contactu->name = $request->name;
            $contactu->email = $request->email;
            $contactu->phone = $request->phone;
            $contactu->save();
            
            $name=$request['name'];
            $email=$request['email'];
            $number=$request['phone'];
            
            $send_email = 'sales@quantumitinnovation.com';
            $data  = array('email'=>$email,'name'=>$name,'contact_number'=>$number);
                
                $send_email = 'sales@quantumitinnovation.com';
                $subject = "Web Landing Page Queries";
                //$htmlContent = file_get_contents(resource_path('views/website/email/reset_mail.blade.php',false, $context));
                $message ="<html>
                <head>
                	<title></title>
                </head>
                <body>
                	<p><b>Name - </b>".$data['name']."</p><br>
                	<p><b>Email - </b>".$data['email']."</p><br>
                	<p><b>Phone Number - </b>".$data['contact_number']."</p><br>
                </body>
                </html>";
                // Set content-type header for sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    
                // Additional headers 
                $headers .= 'From: '.$send_email.'<'.$send_email.'>' . "\r\n"; 
    
                mail('sales@quantumitinnovation.com',"Web Landing Page Query",$message,$headers);
                
            return response()->json(['status'=>'200']);
        }
       
    }
    
    
    /*App*/
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function appContactFormPost(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'enquiry_type' => 'required',
            'phone'=>'required',
        ]);

        if($validator->fails()){

            return response()->json(['status'=>'400']);
        }else{

         
            $name=$request['name'];
            $email=$request['email'];
            $description=$request['description'];
            $enquiry_type=$request['enquiry_type'];
            $number = $request['phone'];

            
            $send_email = 'sales@quantumitinnovation.com';
            $data  = array('email'=>$email,'name'=>$name,'message'=>$description,'enquiry_type'=>$enquiry_type,'contact_number'=>$number);
            
            $send_email = 'sales@quantumitinnovation.com';
            $subject = "App Landing Page Queries";
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

            mail('sales@quantumitinnovation.com',"App Landing Page Query",$message,$headers);

         
            return response()->json(['status'=>'200']);
        
        }
    }
    
    
    public function appContactUsPost(Request $request)
    {  
        
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){

            return response()->json(['status'=>'400']);
        }else{
    
       
            //get contact  data
            $contactData = $request->all();
           
            $contactu = new ContactUs();
            $contactu->name = $request->name;
            $contactu->email = $request->email;
            $contactu->phone = $request->phone;
            $contactu->save();
            
            $name=$request['name'];
            $email=$request['email'];
            $number=$request['phone'];
            
            $send_email = 'sales@quantumitinnovation.com';
            $data  = array('email'=>$email,'name'=>$name,'contact_number'=>$number);
                
                $send_email = 'sales@quantumitinnovation.com';
                $subject = "App Landing Page Queries";
                //$htmlContent = file_get_contents(resource_path('views/website/email/reset_mail.blade.php',false, $context));
                $message ="<html>
                <head>
                	<title></title>
                </head>
                <body>
                	<p><b>Name - </b>".$data['name']."</p><br>
                	<p><b>Email - </b>".$data['email']."</p><br>
                	<p><b>Phone Number - </b>".$data['contact_number']."</p><br>
                </body>
                </html>";
                // Set content-type header for sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    
                // Additional headers 
                $headers .= 'From: '.$send_email.'<'.$send_email.'>' . "\r\n"; 
    
                mail('sales@quantumitinnovation.com',"App Landing Page Query",$message,$headers);
                
            return response()->json(['status'=>'200']);
        }
       
    }
    
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactFormPostSeo(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'enquiry_type' => 'required',
            'phone'=>'required',
        ]);

        if($validator->fails()){

            return response()->json(['status'=>'400']);
        }else{

         
            $name=$request['name'];
            $email=$request['email'];
            $description=$request['description'];
            $enquiry_type=$request['enquiry_type'];
            $number = $request['phone'];

            
            $send_email = 'sales@quantumitinnovation.com';
            $data  = array('email'=>$email,'name'=>$name,'message'=>$description,'enquiry_type'=>$enquiry_type,'contact_number'=>$number);
            
            $send_email = 'sales@quantumitinnovation.com';
            $subject = "Web Seo Landing Page Queries";
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

            mail('sales@quantumitinnovation.com',"Web Seo Landing Page Query",$message,$headers);

         
            return response()->json(['status'=>'200']);
        
        }
    }
    
    
    public function contactUsPostSeo(Request $request)
    {  
        
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){

            return response()->json(['status'=>'400']);
        }else{
    
       
            //get contact  data
            $contactData = $request->all();
           
            $contactu = new ContactUs();
            $contactu->name = $request->name;
            $contactu->email = $request->email;
            $contactu->phone = $request->phone;
            $contactu->save();
            
            $name=$request['name'];
            $email=$request['email'];
            $number=$request['phone'];
            
            $send_email = 'sales@quantumitinnovation.com';
            $data  = array('email'=>$email,'name'=>$name,'contact_number'=>$number);
                
                $send_email = 'sales@quantumitinnovation.com';
                $subject = "Web Seo Landing Page Queries";
                //$htmlContent = file_get_contents(resource_path('views/website/email/reset_mail.blade.php',false, $context));
                $message ="<html>
                <head>
                	<title></title>
                </head>
                <body>
                	<p><b>Name - </b>".$data['name']."</p><br>
                	<p><b>Email - </b>".$data['email']."</p><br>
                	<p><b>Phone Number - </b>".$data['contact_number']."</p><br>
                </body>
                </html>";
                // Set content-type header for sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    
                // Additional headers 
                $headers .= 'From: '.$send_email.'<'.$send_email.'>' . "\r\n"; 
    
                mail('sales@quantumitinnovation.com',"Web Seo Landing Page Query",$message,$headers);
                
            return response()->json(['status'=>'200']);
        }
       
    }
    
    
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contactFormPostAppDemand(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'enquiry_type' => 'required',
            'phone'=>'required',
        ]);

        if($validator->fails()){

            return response()->json(['status'=>'400']);
        }else{

         
            $name=$request['name'];
            $email=$request['email'];
            $description=$request['description'];
            $enquiry_type=$request['enquiry_type'];
            $number = $request['phone'];

            
            $send_email = 'sales@quantumitinnovation.com';
            $data  = array('email'=>$email,'name'=>$name,'message'=>$description,'enquiry_type'=>$enquiry_type,'contact_number'=>$number);
            
            $send_email = 'sales@quantumitinnovation.com';
            $subject = "On App Demand Landing Queries";
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

            mail('sales@quantumitinnovation.com',"On App Demand Landing Queries",$message,$headers);

         
            return response()->json(['status'=>'200']);
        
        }
    }
    
    
    public function contactUsPostAppDemand(Request $request)
    {  
        
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){

            return response()->json(['status'=>'400']);
        }else{
    
       
            //get contact  data
            $contactData = $request->all();
           
            $contactu = new ContactUs();
            $contactu->name = $request->name;
            $contactu->email = $request->email;
            $contactu->phone = $request->phone;
            $contactu->save();
            
            $name=$request['name'];
            $email=$request['email'];
            $number=$request['phone'];
            
            $send_email = 'sales@quantumitinnovation.com';
            $data  = array('email'=>$email,'name'=>$name,'contact_number'=>$number);
                
                $send_email = 'sales@quantumitinnovation.com';
                $subject = "On App Demand Landing Queries";
                //$htmlContent = file_get_contents(resource_path('views/website/email/reset_mail.blade.php',false, $context));
                $message ="<html>
                <head>
                	<title></title>
                </head>
                <body>
                	<p><b>Name - </b>".$data['name']."</p><br>
                	<p><b>Email - </b>".$data['email']."</p><br>
                	<p><b>Phone Number - </b>".$data['contact_number']."</p><br>
                </body>
                </html>";
                // Set content-type header for sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    
                // Additional headers 
                $headers .= 'From: '.$send_email.'<'.$send_email.'>' . "\r\n"; 
    
                mail('sales@quantumitinnovation.com',"On App Demand Landing Queries",$message,$headers);
                
            return response()->json(['status'=>'200']);
        }
       
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ppcFormPost(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'enquiry_type' => 'required',
            'phone'=>'required',
        ]);

        if($validator->fails()){

            return response()->json(['status'=>'400']);
        }else{

         
            $name=$request['name'];
            $email=$request['email'];
            $description=$request['description'];
            $enquiry_type=$request['enquiry_type'];
            $number = $request['phone'];

            
            $send_email = 'sales@quantumitinnovation.com';
            $data  = array('email'=>$email,'name'=>$name,'message'=>$description,'enquiry_type'=>$enquiry_type,'contact_number'=>$number);
            
            $send_email = 'sales@quantumitinnovation.com';
            $subject = "PPC Landing Page Queries";
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

            mail('sales@quantumitinnovation.com',"PPC Landing Page Query",$message,$headers);

         
            return response()->json(['status'=>'200']);
        
        }
    }
    
    public function ppcPost(Request $request)
    {  
        
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        if($validator->fails()){

            return response()->json(['status'=>'400']);
        }else{
    
       
            //get contact  data
            $contactData = $request->all();
           
            $contactu = new ContactUs();
            $contactu->name = $request->name;
            $contactu->email = $request->email;
            $contactu->phone = $request->phone;
            $contactu->save();
            
            $name=$request['name'];
            $email=$request['email'];
            $number=$request['phone'];
            
            $send_email = 'sales@quantumitinnovation.com';
            $data  = array('email'=>$email,'name'=>$name,'contact_number'=>$number);
                
                $send_email = 'sales@quantumitinnovation.com';
                $subject = "PPC Landing Page Queries";
                //$htmlContent = file_get_contents(resource_path('views/website/email/reset_mail.blade.php',false, $context));
                $message ="<html>
                <head>
                	<title></title>
                </head>
                <body>
                	<p><b>Name - </b>".$data['name']."</p><br>
                	<p><b>Email - </b>".$data['email']."</p><br>
                	<p><b>Phone Number - </b>".$data['contact_number']."</p><br>
                </body>
                </html>";
                // Set content-type header for sending HTML email 
                $headers = "MIME-Version: 1.0" . "\r\n"; 
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    
                // Additional headers 
                $headers .= 'From: '.$send_email.'<'.$send_email.'>' . "\r\n"; 
    
                mail('sales@quantumitinnovation.com',"PPC Landing Page Query",$message,$headers);
                
            return response()->json(['status'=>'200']);
        }
       
    }
    
    
}
