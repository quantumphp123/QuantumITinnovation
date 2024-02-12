@extends('admin.layouts.admin')

@section('content')

<section class="content-header">

  <div class="container-fluid">

    <div class="row mb-2">

      <div class="col-sm-6">

        <h1>ICICI Transaction</h1>

      </div>

      <div class="col-sm-5">

         <a href="/transaction" class="btn btn-success" style="float: right;">HDFC Transaction</a>

      </div>

    </div>

  </div>
  
  <div class="row">
     <div class="col-12">
         <div class="card">
             <div><h2>Search</h2>
             <form action="/searchRazorpay" method="post">
                 @csrf
                 <center>&nbsp;&nbsp;&nbsp;&nbsp;<label>From Date&nbsp;</label><input type="date" name="fdate" placeholder="From Date">&nbsp;&nbsp;&nbsp;<label>End Date&nbsp;</label><input type="date" name="edate" placeholder="End Date"><br><br><input type="submit" name="search" value="Search"></center>
             </form></div>
             <br>
         </div>
     </div>
 </div>

@if(!@empty($tt))
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
                      
                      <th>Currency Type</th>
                      
                      <th>Date</th>

                    </tr>

                  </thead>

                  <tbody>
                    @foreach($tt as $key=>$value)  
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->tel}}</td>
                        <td>{{$value->order_id}}</td>
                        <td>{{$value->amount}}</td>
                        <td>{{$value->currency_type}}</td>
                        <td>{{$value->timestamp}}</td>
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