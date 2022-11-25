@extends('layouts.conquer')
@section('content')
<div class="container">
  @if(session('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
  @endif
  @if(session('error'))
  <div class="alert alert-danger">
    {{session('error')}}
  </div>
  @endif
  <h2>Medicine List</h2>
  <div class="table">
    <div>
      <a href="{{url('products/create')}}" class="btn btn-info" type="button">+Add Medicine</a>
    </div>
    <div>
      <a href="#modalCreate" data-toggle='modal' class="btn btn-info" type="button">+Add Medicine (modal)</a>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Generic Name</th>
          <th>Form</th>
          <th>Description</th>
          <th>Category ID</th>
          <th></th>
          <th>Action</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $d)
        <tr id='tr_{{$d->id}}'>
          <td>{{$d->id}}</td>
          <td id='td_name_{{$d->id}}'>{{$d->generic_name}}</td>
          <td id='td_form_{{$d->id}}'>{{$d->form}}</td>
          <td id='td_desc_{{$d->id}}'>{{$d->description}}</td>
          <td id='td_catg_{{$d->id}}'>{{$d->category_id}}</td>
          <td> <a class="btn btn-default" data-toggle="modal" href="#detail_{{$d->id}}">Detail</a>
            <div class="modal fade" id="detail_{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">{{$d->generic_name}}</h4>
                  </div>
                  <div class="modal-body">
                    <img src="{{asset ('images/'.$d->image)}}" height='200px' style="display:block; margin:auto" />
                    <hr>
                    <b>Deskripsi</b>
                    <p>{{$d->description}}</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <!-- <td>
            <a class='btn btn-info' href="{{route('products.show',$d->id)}}" data-target="#show{{$d->id}}" data-toggle='modal'>detail</a>
            <div class="modal fade" id="show{{$d->id}}" tabindex="-1" role="basic" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <img src="assets\img\loading2.gif" alt="" style="display:block; margin:auto">
                </div>
              </div>
            </div>
          </td> -->
          <td>
            <a href="{{ url('products/'. $d->id.'/edit')}}" class="btn btn-xs btn-info">edit</a>
            <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' onclick="getEditForm({{$d->id}})">+ Edit A</a>
            <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' onclick="getEditForm2({{$d->id}})">+ Edit B</a>
          </td>
          <td>
            <form method='POST' action="{{url('products/'.$d->id)}}">
              @csrf
              @method('DELETE')
              <input type="submit" value="delete" class='btn btn-danger btn-xs' onclick="if(!confirm('Are you sure you wanna delete this data?')) return false;">
            </form>
            <a class='btn btn-danger btn-xs' onclick="if(confirm('Are you sure you wanna delete this data?')) deleteDataRemoveTR({{$d->id}})">Delete 2</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
      <div class="carousel-inner py-3">
        <div class="row">
          @foreach ($data as $product)
          <div class="col-sm col-md-4">
            <br>
            <div class="card">
              <img src="{{ asset ('images/'.$product->image)}}" alt="" style="width: 100%; height: 200px;">
              <div class="detailproduct">
                <h3>{{ $product->generic_name }}</h3>
                <p>
                  {{ $product->form }}
                </p>
                <a href="#!" class="btn btn-primary">Details</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- <div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true"> -->
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">DISCLAIMER</h4>
        </div>
        <div class="modal-body">
          Pictures shown are for illustration purpose only. Actual product may vary due to product enhancement.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

<!-- add new medicine -->
<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Add New Medicine</h4>
      </div>
      <div class="modal-body">
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
          @csrf
          <div class="form-body">
            <div class="form-group">
              <label>Generic Name</label>
              <input type="text" name="generic_name" class="form-control" placeholder="Generic Name">
            </div>
            <div class="form-group">
              <label>Description</label>
              <input type="text" name="description" class="form-control" placeholder="Description">
            </div>
            <div class="form-group">
              <label>Category</label>
              <select class="form-control" name="category" id="category">
                @foreach ($category as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label>Formula</label>
              <input type="text" name="form" class="form-control" placeholder="Formula">
            </div>
            <div class="form-group">
              <label>Restriction Formula</label>
              <input type="text" name="restriction_formula" class="form-control" placeholder="Restriction Formula">
            </div>
            <div class="form-group">
              <label>Faskes TK1</label>
              <input type="checkbox" name="faskes_tk1" id="" class="form-control">
            </div>
            <div class="form-group">
              <label>Faskes TK2</label>
              <input type="checkbox" name="faskes_tk2" id="" class="form-control">
            </div>
            <div class="form-group">
              <label>Faskes TK3</label>
              <input type="checkbox" name="faskes_tk3" id="" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id='modalContent'>
    </div>
  </div>
</div>
@section('javascript')
<script>
  function showInfo() {
    $.ajax({
      type: 'POST',
      url: '{{route("products.showInfo")}}',
      data: '_token=<?php echo csrf_token() ?>',
      success: function(data) {
        $('#showinfo').html(data.msg)
      }
    });
  }

  function getEditForm(id) {
    $.ajax({
        type: 'POST',
        url: '{{route("product.getEditForm")}}',
        data: {
          '_token': '<?php echo csrf_token() ?>',
          'id': id
        },
        success: function(data) {
          $('#modalContent').html(data.msg)
        }
      },

    );
  }

  function getEditForm2(id) {
    $.ajax({
        type: 'POST',
        url: '{{route("product.getEditForm2")}}',
        data: {
          '_token': '<?php echo csrf_token() ?>',
          'id': id
        },
        success: function(data) {
          $('#modalContent').html(data.msg)
        }
      },

    );
  }

  function saveDataUpdateTD(id) {
    var eName = $('#eName').val();
    var eDesc = $('#eDesc').val();
    var eCatg = $('#eCatg').val();
    var eForm = $('#eForm').val();
    var eRescForm = $('#eRescForm').val();
    var eFaskes1 = $('#eFaskes1').val();
    var eFaskes2 = $('#eFaskes2').val();
    var eFaskes3 = $('#eFaskes3').val();

    $.ajax({
      type: 'POST',
      url: '{{route("product.saveData")}}',
      data: {
        '_token': '<?php echo csrf_token() ?>',
        'id': id,
        'generic_name': eName,
        'description': eDesc,
        'category': eCatg,
        'form': eForm,
        'restriction_formula': eRescForm,
        'faskes_tk1': eFaskes1,
        'faskes_tk2': eFaskes2,
        'faskes_tk3': eFaskes3,
      },
      success: function(data) {
        if (data.status == 'ok') {
          alert(data.msg)
          $('#td_name_' + id).html(eName);
          $('#td_form_' + id).html(eForm);
          $('#td_desc_' + id).html(eDesc);
          $('#td_catg_' + id).html(eCatg);

        }
      }
    });
  }

  function deleteDataRemoveTR(id) {
    $.ajax({
      type: 'POST',
      url: '{{route("product.deleteData")}}',
      data: {
        '_token': '<?php echo csrf_token() ?>',
        'id': id
      },
      success: function(data) {
        if (data.status == 'ok') {
          alert(data.msg)
          $('#tr_' + id).remove();
        } else {
          alert(data.msg)
        }
      }
    });
  }
</script>
@endsection