@extends('admin.layouts.admin')

@section('content')

<section class="content-header">

  <div class="container-fluid">

    <div class="row mb-2">

      <div class="col-sm-6">

        <h1>HDFC Transaction</h1>

      </div>

      <div class="col-sm-5">

         <a href="/razorpay" class="btn btn-success" style="float: right;">ICICI Transaction</a>

      </div>

    </div>

  </div>
  
 <div class="row">
     <div class="col-12">
         <div class="card">
             <div><h2>Search</h2>
             <form action="/searchTransaction" method="post">
                 @csrf
                 <center>&nbsp;&nbsp;&nbsp;&nbsp;<label>From Date&nbsp;</label><input type="date" name="fdate" placeholder="From Date">&nbsp;&nbsp;&nbsp;<label>End Date&nbsp;</label><input type="date" name="edate" placeholder="End Date"><br><br><input type="submit" name="search" value="Search"></center>
             </form></div>
             <br>
         </div>
     </div>
 </div>
@if(!@empty($trans))
 <div class="row">

          <div class="col-12">

            <div class="card">

              <!-- /.card-header -->

              <div class="card-body table-responsive p-0">

                <table class="table table-hover">

                  <thead>

                    <tr>

                      <th>S.No.</th>

                      <th>Name</th>

                      <th>Email</th>

                      <th>Phone</th>
                      
                      <th>Order ID</th>
                      
                      <th>Amount</th>
                      
                       <th>Amount INR</th>
                      
                      <th>Currency Type</th>
                      
                      <th>Method</th>
                      
                      <th>Status</th>
                      
                      <th>Date</th>
                      
                      <th>Transaction ID</th>
                      
                      <th>Message</th>

                    </tr>

                  </thead>

                  <tbody>
                    @foreach($trans as $key=>$value)  
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->tel}}</td>
                        <td>{{$value->order_id}}</td>
                        <td>{{$value->amount}}</td>
                        <td>
                           
                            @if($value->amount_inr == "")
                            @if($value->currency_type == 'AUD')
           {{$amount = (float)$value->amount*'52'}}
       @endif
        @if($value->currency_type == 'CAD')
           {{$amount = (float)$value->amount*'60'}}
       @endif
       @if($value->currency_type == 'EUR')
           {{$amount = (float)$value->amount*'82'}}
       @endif
       @if($value->currency_type == 'GBP')
           {{$amount = (float)$value->amount*'94'}}
       @endif
       @if($value->currency_type == 'SGD')
           {{$amount = (float)$value->amount*'58'}}
       @endif
       @if($value->currency_type == 'USD')
           {{$amount = (float)$value->amount*'81'}}
       @endif
       @if($value->currency_type == 'INR')
           {{$amount = (float)$value->amount}}
       @endif
       @else
       {{$value->amount_inr}}
       @endif
                            </td>
                        <td>{{$value->currency_type}}</td>
                        @if($value->pay_method == 'null')
                            <td>Null</td>
                        @elseif(@empty($value->pay_method))
                            <td>Null</td>
                        @else
                            <td>{{$value->pay_method}}</td>
                        @endif
                        @if($value->bank_ref_no == 'null')
                            <td>Failed</td>
                        @elseif($value->bank_ref_no == '000000')
                            <td>Failed</td>
                        @elseif(@empty($value->bank_ref_no))
                            <td>Failed</td>
                        @else
                            <td>Success</td>
                        @endif
                        
                        @if($value->trans_date == 'null')
                            <td>{{$value->timestamp}}</td>
                        @elseif(!@empty($value->trans_date))
                            <td>{{$value->trans_date}}</td>
                        @else
                            <td>Null</td>
                        @endif
                        
                        @if(@empty($value->tracking_id))
                            <td>Null</td>
                        @else
                            <td>{{$value->tracking_id}}</td>
                        @endif
                        @if(@empty($value->status_message))
                            <td>Null</td>
                        @else
                            <td>{{$value->status_message}}</td>
                        @endif    
                    </tr>
                    @endforeach

                    <!--tr>

                      <td><center>No data found !!</center></td>

                    </tr-->

                  </tbody>

                </table>

                

              </div>



              <!-- /.card-body -->

            </div>

            <!-- /.card -->

          </div>

        </div>
@endif

</section>

@endsection