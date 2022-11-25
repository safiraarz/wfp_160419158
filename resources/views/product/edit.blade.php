@extends('layouts.conquer')
@section('content')
<div class="container">
    <h2>Edit Product</h2>
    <!-- BEGIN FORM-->
    <form action="{{ route('products.update',$product->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        @method("PUT")
        <div class="form-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Generic Name</label>
                        <div class="col-md-9">
                            <input type="text" value="{{ $product->generic_name }}" name="generic_name" class="form-control" placeholder="Generic Name">
                        </div>
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Description</label>
                        <div class="col-md-9">
                            <input type="text" value="{{ $product->description  }}" name="desc" class="form-control" placeholder="Description">
                        </div>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Category</label>
                        <div class="col-md-9">
                            <select class="form-control" name="category" id="category">
                                @foreach ($category as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $product->category_id ? 'selected' : ''}}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            <span class="help-block">
                                Select Category</span>
                        </div>
                    </div>
                </div>
                <!--/span-->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Formula</label>
                        <div class="col-md-9">
                            <input type="text" name="form" value="{{ $product->form  }}" class="form-control" placeholder="Formula">
                        </div>
                    </div>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3">Restriction Formula</label>
                        <div class="col-md-9">
                            <input type="text" value="{{ $product->restriction_formula  }}" name="restriction_formula" class="form-control" placeholder="Restriction Formula">
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Faskes TK1 </label>
                        <input type="checkbox" name="faskes_tk1" id="" class="form-control" {{ ($product->faskes_tk1 == 1) ? 'checked' : ''}}>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Faskes TK2 </label>
                        <input type="checkbox" name="faskes_tk2" id="" class="form-control" {{ ($product->faskes_tk2 == 1) ? 'checked' : ''}}>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="control-label col-md-4">Faskes TK3</label>
                        <input type="checkbox" name="faskes_tk3" id="" class="form-control" {{ ($product->faskes_tk3 == 1) ? 'checked' : ''}}>
                    </div>
                </div>
            </div>
            <!--/row-->
            <div class="row">
                {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label col-md-3">Restriction Formula</label>
                            <div class="col-md-9">
                                <input type="file" name="image_product" class="form-control">
                            </div>
                        </div>
                    </div> --}}
                <!--/span-->
            </div>
        </div>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="/products" class="btn btn-default">Cancel</a>
                            {{-- <button type="button" class="btn btn-default">Cancel</button> --}}
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

@endsection