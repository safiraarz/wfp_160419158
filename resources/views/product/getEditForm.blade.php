<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Edit Medicine 1</h4>
</div>
<div class="modal-body">

    <form action="{{ route('products.update',$data->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        @method('PUT')
        <div class="form-body">
            <div class="form-group">
                <label>Generic Name</label>
                <input type="text" name="generic_name" class="form-control" placeholder="Generic Name" value='{{$data->generic_name}}'>
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="desc" class="form-control" placeholder="Description" value='{{$data->description}}'>
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category" id="category">
                    @foreach ($category as $item)
                    <option value="{{ $item->id }}" {{ $item->id == $data->category_id ? 'selected' : '' }}>{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Formula</label>
                <input type="text" name="form" class="form-control" placeholder="Formula" value='{{$data->form}}'>
            </div>
            <div class="form-group">
                <label>Restriction Formula</label>
                <input type="text" name="restriction_formula" class="form-control" placeholder="Restriction Formula" value='{{$data->restriction_formula}}'>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4">Faskes TK1 </label>
                <input type="checkbox" name="faskes_tk1" id="" class="form-control" {{ ($data->faskes_tk1 == 1) ? 'checked' : ''}}>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4">Faskes TK2 </label>
                <input type="checkbox" name="faskes_tk2" id="" class="form-control" {{ ($data->faskes_tk2 == 1) ? 'checked' : ''}}>
            </div>
            <div class="form-group">
                <label class="control-label col-md-4">Faskes TK3</label>
                <input type="checkbox" name="faskes_tk3" id="" class="form-control" {{ ($data->faskes_tk3 == 1) ? 'checked' : ''}}>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>