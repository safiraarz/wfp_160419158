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
    <h2>Supplier Table</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr id='tr_{{$d->id}}'>
                <td>{{$d->id}}</td>
                <td id='td_name_{{$d->id}}'>{{$d->name}}</td>
                <td id='td_address_{{$d->id}}'>{{$d->address}}</td>
                <td>
                    <a href="{{ url('suppliers/'. $d->id. '/edit')}}" class="btn btn-xs btn-info">edit</a>
                    <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' onclick="getEditForm({{$d->id}})">+ Edit A</a>
                    <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' onclick="getEditForm2({{$d->id}})">+ Edit B</a>
                </td>
                <td>
                    <form method='POST' action="{{url('suppliers/'.$d->id)}}">
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
</div>
<div>
    <a href="{{url('suppliers/create')}}" class="btn btn-info" type="button">+Supplier baru</a>
</div>
<br>
<div>
    <a href="#modalCreate" data-toggle='modal' class="btn btn-info" type="button">+Supplier baru (modal)</a>
</div>
@endsection
<!-- modal add new -->
<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Add New Supplier</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url('suppliers') }}" class="form-horizontal" method='POST'>
                    @csrf
                    <div class="form-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" id='name' required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea type="text" rows="3" name="address" class="form-control" id='address' required>
                            </textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{url('suppliers')}}" class="btn btn-default" data-dismiss="modal">Cancel</a>
                        </div>
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
    function getEditForm(id) {
        $.ajax({
                type: 'POST',
                url: '{{route("supplier.getEditForm")}}',
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
                url: '{{route("supplier.getEditForm2")}}',
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
        var eAddress = $('#eAddress').val();
        $.ajax({
            type: 'POST',
            url: '{{route("supplier.saveData")}}',
            data: {
                '_token': '<?php echo csrf_token() ?>',
                'id': id,
                'name': eName,
                'address': eAddress
            },
            success: function(data) {
                if (data.status == 'ok') {
                    alert(data.msg)
                    $('#td_name_' + id).html(eName);
                    $('#td_address_' + id).html(eAddress);
                }
            }
        });
    }

    function deleteDataRemoveTR(id) {
        $.ajax({
            type: 'POST',
            url: '{{route("supplier.deleteData")}}',
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