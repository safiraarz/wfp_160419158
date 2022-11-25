@extends('layouts.conquer')
@section('content')
<div class="container">
  @if(session('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
  @endif
  <h2>Category Table</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>List of Medicines</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $d)
      <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->name}}</td>
        <td>{{$d->desc}}</td>
        <td>
          <a class='btn btn-xs btn-info' data-toggle='modal' data-target='#myModal' onclick='showProducts({{ $d->id }})'>Show Product</a>
          <ul>
          </ul>
        </td>
        <td>
          <a href="{{ route('categories.edit', $d->id) }}" class="btn btn-success">UPDATE</a>
          <form action="{{ route('categories.destroy', $d->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">DELETE</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" id="showproducts">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">Detail Product</h4>
        </div>
        <div class="modal-body">
          <img src="{{ asset('conquer/img/ajax-modal-loading.gif') }}" alt="">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@section('js')
<script>
  function showProducts(category_id) {
    $.ajax({
      type: 'POST',
      url: '{{route("category.showProducts")}}',
      data: {
        '_token': '<?php echo csrf_token() ?>',
        'category_id': category_id
      },
      success: function(data) {
        $('#showproducts').html(data.msg)
      }
    });
  }
</script>
@endsection