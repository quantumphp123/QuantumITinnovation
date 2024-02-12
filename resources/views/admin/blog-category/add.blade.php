@extends('admin.layouts.admin')

@section('content')

  <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>Blog Category Add</h1>

          </div>

          <!-- <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Advanced Form</li>

            </ol>

          </div> -->

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

              <!-- <div class="card-header">

                <h3 class="card-title">Add Portfolio</h3>

              </div> -->

              <!-- /.card-header -->

              <!-- form start -->

              <form class="form-horizontal" method="POST" name="add-category" id="add-category" action="{{route('category.store')}}" enctype="multipart/form-data">

                @csrf

                <div class="card-body">

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Category Name</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name">

                    </div>

                  </div>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">

                  <button type="submit" class="btn btn-info">Submit</button>

                  <a href="{{route('category.index')}}"><button type="button" class="btn btn-default ">Cancel</button></a>

                </div>

              </form>

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

<script type="text/javascript">

  $('#add-portfolio').validate({

    rules: {

      "category_name": {

           required: true,

           minlength: 2,

           maxlength: 100

       }
     

    },

    messages: {

      "category_name": {

           required: "*Please enter category name.",

           minlength: "Please enter at least 2 characters.",

           maxlength: "Category Name should be less than 100 characters.",

       }

    }

  });

</script>

@endsection