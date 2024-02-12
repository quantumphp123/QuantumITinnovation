@extends('admin.layouts.admin')

@section('content')

<section class="content-header">

  <div class="container-fluid">

    <div class="row mb-2">

      <div class="col-sm-6">

        <h1>Blogs Management</h1>

      </div>

      <div class="col-sm-5">

         <a href="{{ route('blog.create') }}" class="btn btn-success" style="float: right;"><i class="fa fa-plus" aria-hidden="true"></i></a>

      </div>

    </div>

  </div>

 <div class="row">

          <div class="col-12">

            <div class="card">

              <!-- /.card-header -->

              <div class="card-body table-responsive p-0">

                <table class="table table-hover">

                  <thead>

                    <tr>

                      <th>S.No.</th>

                      <th>Title</th>

                      <th>Image</th>

                      <th>Action</th>

                    </tr>

                  </thead>

                  <tbody>

                    @forelse($blogs as $key => $data)

                    <tr>

                      <td>{{ $key+1 }}</td>

                      <td>{{ $data->title }}</td>

                      <td><img src="{{ asset('/blogs/'.$data->image) }}" height="50" width="50"></td>

                      <td>

                        <a href="{{ route('blog.show',$data->id) }}" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>

                        <a href="{{route('blog.edit',$data->id)}}" class="btn btn-info"><i class="fas fa-edit"></i></a>

                        <button class="btn btn-danger" onclick="myFunction({{$data->id}})"><i class="fa fa-trash" aria-hidden="true"></i></button>

                      </td>

                    </tr>

                    @empty

                    <tr>

                      <td>No data found !!</td>

                    </tr>

                    @endforelse

                  </tbody>

                </table>

                <div class="text-center">

                  {{$blogs->links()}}

                </div>

                

              </div>



              <!-- /.card-body -->

            </div>

            <!-- /.card -->

          </div>

        </div>

</section>

@endsection

@section('after-script')

   <script type="text/javascript">

      function myFunction(id){

        swal({

          title: "Are you sure?",

          text: "You will not be able to recover this Portfolio!",

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

                url: "{{ url('/portfolio/delete/') }}/"+id,

                type: "GET",

                dataType: "html",

                success: function () {

                    swal("Done!", "Portfolio succesfully deleted!", "success");

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