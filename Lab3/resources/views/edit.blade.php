@extends('welcome')

@section('content')

<form action="{{route('product.update')}}" method="POST" class="mt-3">
    {{csrf_field()}}
    
    
    <div class=" col-md-5 form-group">
        <span>Name</span>
        <input type="hidden" name="id" class="form-control" value="{{$product->id}}">
    </div>

    <div class=" col-md-5 form-group">
        <span>Name</span>
        <input type="text" name="name" class="form-control" value="{{$product->name}}">
    </div>

    <div class=" col-md-5 form-group">
        <span>Price</span>
        <input type="text" name="price" class="form-control" value="{{$product->price}}">
    </div>

    <div class=" col-md-5 form-group">
        <span>Qty</span>
        <input type="text" name="qty" class="form-control" value="{{$product->qty}}">
    </div>

    <div class=" col-md-5 form-group">
        <span>Description</span>
        <input type="text" name="desc" class="form-control" value="{{$product->desc}}">
    </div>

    <input type="submit" class="col-3 btn btn-success mt-2" value="Update">
</form>

@endsection