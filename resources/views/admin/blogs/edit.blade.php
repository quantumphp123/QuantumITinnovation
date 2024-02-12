@extends('admin.layouts.admin')

@section('content')

  <section class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1>Portfolio Edit</h1>

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

              <!-- <div class="card-header">

                <h3 class="card-title">Add Portfolio</h3>

              </div> -->

              <!-- /.card-header -->

              <!-- form start -->

              <form class="form-horizontal" method="POST" name="edit-portfolio" id="edit-portfolio" action="{{route('blog.update',$blogs->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="card-body">

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Blog Title</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="blog_title" name="blog_title" placeholder="Blog Title" value="{{$blogs->title}}">

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Blog Category</label>

                    <div class="col-sm-10">

                      <select id="category" name="category[]" multiple=" " class="form-control">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}"{{in_array($category->id,$assign_category) ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                      </select>

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Blog Description</label>

                    <div class="col-sm-10">

                      <textarea class="form-control" id="blog_description" name="blog_description" placeholder="Blog Description">{{$blogs->description}}</textarea>

                    </div>

                  </div>


                   <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Published Date</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="date" name="date" placeholder="Published Date" value="{{$blogs->date}}">

                    </div>

                  </div>

                    <div class="form-group row">

                    <label for="inputPassword3" class="col-sm-2 col-form-label">Featured Image</label>

                    <div class="col-sm-10">

                      <input type="file" class="" id="blog_image" name="blog_image">
                      <img src="{{ asset('/blogs/'.$blogs->image) }}" height="50" width="100">
                    </div>

                  </div>
                <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">URL</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="url" name="url" placeholder="URL" value="{{$blogs->url}}">

                    </div>

                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Tag Title</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Meta Tag Title" value="{{$blogs->meta_title}}">

                    </div>

                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Keywords</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="Meta Keywords" value="{{$blogs->meta_keywords}}">

                    </div>

                  </div>
                  <div class="form-group row">

                    <label for="inputEmail3" class="col-sm-2 col-form-label">Meta Description</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="meta_description" name="meta_description" placeholder="Meta Descrition" value="{{$blogs->meta_description}}">

                    </div>

                  </div>

                </div>

                </div>

                <!-- /.card-body -->

                <div class="card-footer">

                  <button type="submit" class="btn btn-info">Submit</button>

                  <a href="{{route('blog.index')}}"><button type="button" class="btn btn-default ">Cancel</button></a>

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

       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
      <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
       <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
      <script type="text/javascript">
        $("#category").select2({
        placeholder: "Select categories for blog",
        allowClear: true
      });
      </script>
      <script>
        flatpickr("#date", {
          maxDate: "today"
        });
      </script>
      <script>
              CKEDITOR.replace( 'blog_description', {
                filebrowserUploadUrl: '{{ route('upload',['_token' => csrf_token() ]) }}',
                                  filebrowserUploadMethod: 'form'
              });
      </script>

@endsection