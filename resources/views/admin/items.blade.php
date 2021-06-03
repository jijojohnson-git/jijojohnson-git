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
    @if($message = Session::get('updated'))
    <div class="alert alert-primary alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>

    @endif
    <div class="card">
        <div class="card-header">{{ __('Add Item') }}</div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <!-- {{ __('You are logged in!') }} -->
            <div class="col-md-4 m-auto">
                <form action="/admin/item/create" enctype="multipart/form-data" method="POST" id="upload-form">
                    @csrf
                    <div class="form-group">
                        <label for="customFile">Image</label>
                        <input type="file" class="form-control" name="image" id="customFile" required accept="image/*">
                    </div>

                    <div class="form-group">
                        <label for="">Item Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="price" id="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="category_id">Select Category</label>
                        <select name="category_id" id="category_id" required class="form-control">
                            <option value="" selected disabled class="text-center">---SELECT---</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="">Description</label>
                        <input type="text" name="desc" id="desc" class="form-control" required>
                    </div> --}}
                    <div class="form-group">
                        <input type="submit" class="btn btn-info form-control" value="Submit" id="upload-btn">
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="col-12">

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($items as $item)

        <div class="col">
            <div class="card">
                <img src="/images/menu/{{$item->image}}" class="card-img-top" alt="{{$item->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{strtoupper($item->name)}}</h5>
                    <h4>{{$item->category->name}}</h4>
                    <h4>{{$item->price}}</h4>
                    <div class="action">
                        <button type="button" data-id="{{$item->id}}" data-toggle="modal" data-target="#editItem" class="btn btn-primary">EDIT</button>
                        <button type="button" data-id="{{$item->id}}" data-toggle="modal" data-target="#deleteItem" class="btn btn-danger">DELETE</button>
                    </div>
                </div>

            </div>
        </div>

        @endforeach
      </div>

</div>
<div class="col-12 d-flex justify-content-center">
    <div>{{$items->links()}}</div>
</div>

<div class="modal" id="deleteItem">
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
                    <h6>Are you sure to DELETE this Item <span class="text-danger">?</span></h6>
                    <input type="hidden" name="item_id" id="item_id" >
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal" id="editItem">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="" method="POST" id="edit-form" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="modal-header">
                    <h4 class="modal-title">
                        Edit Item Details
                    </h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <img src="" alt="" id="edit_image" class="img-fluid">
                        <label for="customFile">Change Image</label>
                        <input type="file" class="form-control" name="image" id="customFile">
                    </div>
                    <div class="form-group">
                        <label for="">Item Name</label>
                        <input type="text" name="name" class="form-control" id="edit_name">
                    </div>
                    <div class="form-group">
                        <label for="">Category</label>
                        <select name="category_id" class="form-control" id="edit_category">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="price" class="form-control" id="edit_price">
                    </div>

                    <input type="hidden" name="item_id" id="edit_item_id">
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

        $('#editItem').on('hidden.bs.modal', function() {
            $(this).find("input").val('').end();
        });

        $('#editItem').on('show.bs.modal', function(e) {
            var item = $(e.relatedTarget);
            var id = item.attr("data-id");
            var value = "/admin/item/" + id + "/update";
            var modal = $(this);
            modal.find('#edit-form').attr("action", value);
            modal.find('.modal-body #edit_item_id').val(id);

            $.ajax({
                type: "GET",
                url: "{{url('/admin/item/getOldValues')}}?item_id=" + id,
                success: function(res) {
                    if (res) {
                        $('#edit_image').attr('src', '/images/menu/'+res.image);
                        $('#edit_name').val(res.name);
                        $('#edit_category').val(res.category_id);
                        $('#edit_price').val(res.price);
                    }
                }
            });
                $('#edit_image').attr('src', '');
                $('#edit_name').val('');
                $('#edit_category').val('');
                $('#edit_price').val('');
        });


        $('#deleteItem').on('show.bs.modal', function(e) {
            var item = $(e.relatedTarget);
            var id = item.attr("data-id");
            var modal = $(this);
            var url = "/admin/item/"+id+"/destroy";
            modal.find('.modal-body #item_id').val(id);
            var form = modal.find('#delete-form');
            form.attr('action', url);
        });

    });
</script>
@endsection
