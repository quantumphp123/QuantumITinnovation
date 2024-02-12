<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Hash;
use App\User;
use Auth;
use Session;
use DB;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Login the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginPost(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|max:60|min:3',
            'password' => 'required|min:8|max:16'
        ]);

        if($validator->fails()){

            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard');
        }else{
            return redirect('login')->withSuccess('You have entered invalid credentials');
        }
    }

     /**
     * logout the user.
     
     */
     public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.dashboard');
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
    public function destroy($id)
    {
        //
    }
    
    public function trans_index(){
        return view('admin.transaction.index');
    }
    
    public function razorpay(){
        return view('admin.transaction.razorpay');
    }
    
    public function razorpay_s(Request $request){
        $t = DB::table('razorpay')
            ->whereBetween('timestamp', [$request->fdate, $request->edate])
            ->get();
        return view('admin.transaction.razorpay', ['tt'=>$t]);
    }
    
    public function search(Request $request){
        $sea = DB::table('hdfc_payment')
                ->leftjoin('payment_status', 'hdfc_payment.order_id', "=", 'payment_status.orders_id')
                ->whereBetween('hdfc_payment.timestamp', [$request->fdate, $request->edate])
                ->get();
        return view('admin.transaction.index', ['trans'=>$sea]);
    }
    
    
}
