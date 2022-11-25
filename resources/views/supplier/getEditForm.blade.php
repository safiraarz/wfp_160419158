<form role="form" action="{{url('suppliers/'.$data->id)}}" method='POST'>
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Edit Supplier</h4>
    </div>
    <div class="modal-body">
        @csrf
        @method('PUT')
        <div class="form-body">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" id='name' value='{{$data->name}}' required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea type="text" rows="3" name="address" class="form-control" id='address' required>{{$data->address}}
                </textarea>
            </div>
        </div>
        <div class="modal-footer">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="{{url('suppliers')}}" class="btn btn-default" data-dismiss="modal">Cancel</a>
            </div>
        </div>
    </div>
</form>