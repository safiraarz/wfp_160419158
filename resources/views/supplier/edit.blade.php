@extends('layouts.conquer')

@section('content')
    <div class="container">
        <h2>EDIT SUPPLIER</h2>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="{{ route('suppliers.edit', $supplier->id) }}" class="form-horizontal" method='POST'>
                @csrf
                @method("PUT")
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-md-1">Nama</label>
                        <div class="col-md-9">
                            <input type="text" name="name" value="{{ $supplier->name }}" class="form-control" placeholder="Nama" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-1">Address</label>
                        <div class="col-md-9">
                            <input type="text" name="address" value="{{ $supplier->address }}"  class="form-control" placeholder="Address" required>
                        </div>
                    </div>
                    
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    {{-- <button type="button" >Cancel</button> --}}
                                    <a href="/suppliers" class="btn btn-default">Cancel</a>
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