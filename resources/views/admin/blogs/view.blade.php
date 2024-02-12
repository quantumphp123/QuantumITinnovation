@extends('admin.layouts.admin')

@section('content')

  <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>Blog View</h1>

          </div>

        </div>

      </div><!-- /.container-fluid -->

    </section> 

    @if (count($errors) > 0)

      <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

          @foreach ($errors->all() as $error)

              <li>{{ $error }}</li>

          @endforeach

        </ul>

      </div>

      @endif

   <section class="content">

      <div class="container-fluid">

        <!-- SELECT2 EXAMPLE -->

        <div class="card card-default">

          

          <!-- /.card-header -->

          <div class="card-body">

            <div class="row">

              <div class="col-12">

                <div class="card card-info">

              <!-- form start -->

          

                <div class="card-body">

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Blog Title</label>

                    <div class="col-sm-10">

                      <span >{{$blogs->title}}</span>

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Blog Category</label>

                    <div class="col-sm-10">

                      @foreach($category as $key => $value)
                      <span >{{$value['categoryDetails']['name']}}</span><br>
                      @endforeach
                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Blog Description</label>

                    <div class="col-sm-10">

                      <span >{!! $blogs->description !!}</span>

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Published Date</label>

                    <div class="col-sm-10">

                      <span >{{$blogs->date}}</span>

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-2 col-form-label">Featured Image</label>

                    <div class="col-sm-10">

                      <img src="{{ asset('/blogs/'.$blogs->image) }}" height="50" width="100">

                    </div>

                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">URL</label>

                    <div class="col-sm-10">

                      <span >{{$blogs->url}}</span>

                    </div>

                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Tag Title</label>

                    <div class="col-sm-10">

                      <span >{{$blogs->meta_title}}</span>

                    </div>

                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Keywords</label>

                    <div class="col-sm-10">

                      <span >{{$blogs->meta_keywords}}</span>

                    </div>

                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Description</label>

                    <div class="col-sm-10">

                      <span >{{$blogs->meta_description}}</span>

                    </div>

                  </div>

               

                 

                </div>

                <!-- /.card-body -->

                <div class="card-footer">

                  <!-- <button type="submit" class="btn btn-info">Submit</button> -->

                  <a href="{{route('blog.index')}}"><button type="button" class="btn btn-default ">Back</button></a>

                </div>

            </div>

            <!-- /.card -->

              </div>

              <!-- /.col -->

             

              <!-- /.col -->

            </div>

            <!-- /.row -->

          </div>

          <!-- /.card-body -->

          

        </div>

        <!-- /.card -->

        </div>

      </section>

      @endsection

      @section('after-script')

     <!--  <script type="text/javascript">



        $(document).ready(function() {



          $(".add-more").click(function(){ 

              var html = $(".clone").html();

              $(".increment").after(html);

          });



          $("body").on("click",".btn-danger",function(){ 

              $(this).parents(".control-group").remove();

          });



        });



    </script> -->

    <script type="text/javascript">

      function myFunction(id){

        swal({

          title: "Are you sure?",

          text: "You will not be able to recover this image!",

          type: "warning",

          showCancelButton: true,

          confirmButtonClass: 'btn-danger',

          confirmButtonText: 'Yes, delete it!',

          cancelButtonText: "No, cancel please!",

          closeOnConfirm: false,

          closeOnCancel: true

        },

        function(isConfirm){

           if (!isConfirm) return;

            $.ajax({

                url: "{{ url('/portfolio/related/delete/') }}/"+id,

                type: "GET",

                dataType: "html",

                success: function () {

                    swal("Done!", "Image succesfully deleted!", "success");

                    location.reload();

                },

                error: function (xhr, ajaxOptions, thrownError) {

                    swal("Error deleting!", "Please try again", "error");

                }

            });

        });

      };

    </script>

@endsection