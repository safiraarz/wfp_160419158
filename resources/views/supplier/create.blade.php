@extends('layouts.conquer')
@section('content')

<div class="container">
    <!-- BEGIN FORM-->
    <form action="{{ route('suppliers.store') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-body">
            <div class="form-group">
                <label class="control-label col-md-1">Nama</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-1">Address</label>
                <div class="col-md-9">
                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-default">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </form>
    <!-- END FORM-->
</div>
</div>

@endsection