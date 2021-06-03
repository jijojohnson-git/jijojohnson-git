 @extends('layouts.admin')

@section('content')
<!-- <div class="container"> -->
<!-- <div class="row justify-content-center"> -->
<div class="col-12 p-2 m-2">
    @if(count($errors)>0)
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if($message = Session::get('uploaded'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
    @php
        if(Session::has('uploaded'))
        {
            Session::forget('uploaded');
        }
    @endphp
    @endif
    @if($message = Session::get('failed'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
    @php
        if(Session::has('failed'))
        {
            Session::forget('failed');
        }
    @endphp
    @endif
    @if($message = Session::get('deleted'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>

    @endif
    <div class="card">
        <div class="card-header">{{ __('Add Category') }}</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <!-- {{ __('You are logged in!') }} -->
            <div class="col-md-4 m-auto">
                <form action="/admin/category/create" enctype="multipart/form-data" method="POST" id="upload-form">
                    @csrf

                    <div class="form-group">
                        <label for="">Category Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-info form-control" value="Submit" id="upload-btn">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Item Count</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @php
              $index = 1;
          @endphp
          @forelse ($categories as $category)

          <tr>
              <th scope="row">{{$index}}</th>
              <td>{{$category->name}}</td>
              <td>{{count($category->items)}}</td>
              <td><button type="button" class="btn btn-danger" data-id="{{$category->id}}" data-toggle="modal" data-target="#deleteCategory">remove</button></td>
            </tr>
            @php
                $index++;
                @endphp
          @empty
            <tr class="text-center"><td colspan="4" class="">No Categories Found!</td></tr>
          @endforelse
        </tbody>
      </table>
</div>
{{--
<div class="col-12">

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($images as $img)

        <div class="col">
            <div class="card">
                <img src="/images/gallery/{{$img->image}}" class="card-img-top" alt="{{$img->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{strtoupper($img->title)}}</h5>
                    <div class="action">
                        <button type="button" data-id="{{$img->id}}" data-toggle="modal" data-target="#editImage" class="btn btn-primary">EDIT</button>
                        <button type="button" data-id="{{$img->id}}" data-toggle="modal" data-target="#deleteImage" class="btn btn-danger">DELETE</button>
                    </div>
                </div>

            </div>
        </div>

        @endforeach
      </div>

</div>
<div class="col-12 d-flex justify-content-center">
    <div>{{$images->links()}}</div>
</div> --}}

<div class="modal" id="deleteCategory">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="" method="POST" id="delete-form">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h4 class="modal-title">
                        Confirm Delete Action
                    </h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h6>Are you sure to DELETE this Category <span class="text-danger">?</span></h6>
                    <input type="hidden" name="category_id" id="category_id" value="">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal" id="editImage">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="" method="POST" id="edit-form" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-header">
                    <h4 class="modal-title">
                        Edit Image Details
                    </h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="customFile">Change Image</label>
                        <input type="file" class="form-control" name="image" id="customFile">
                    </div>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" id="edit_title" value="">
                    </div>

                    <input type="hidden" name="image_id" id="edit_image_id">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="modal" id="successModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title bg-success">
                       Success
                    </h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <h6>Image Successfully Uploaded!</h6>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
                </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{asset('js/jquery.form.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('#editImage').on('hidden.bs.modal', function() {
            $(this).find("input").val('').end();
        });

        $('#editImage').on('show.bs.modal', function(e) {
            var image = $(e.relatedTarget);
            var id = image.attr("data-id");
            var value = "image/" + id + "/update";
            var modal = $(this);
            modal.find('#edit-form').attr("action", value);
            modal.find('.modal-body #edit_image_id').val(id);

            $.ajax({
                type: "GET",
                url: "{{url('/admin/image/getOldValues')}}?image_id=" + id,
                success: function(res) {
                    if (res) {
                        $('#edit_title').val(res.image.title);
                    }
                    else
                    {
                        $("#edit-title").empty();
                    }
                }
            });
            // select.val('');
            modal.find('#edit-title').val('');
        });


        $('#deleteCategory').on('show.bs.modal', function(e) {
            var category = $(e.relatedTarget);
            var id = category.attr("data-id");
            var modal = $(this);
            var url = "/admin/category/"+id+"/destroy";
            modal.find('.modal-body #category_id').val(id);
            var form = modal.find('#delete-form');
            form.attr('action', url);
        });

    });
</script>
@endsection
