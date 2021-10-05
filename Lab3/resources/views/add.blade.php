@extends('welcome')

@section('content')

<form action="{{route('product.create')}}" method="POST" class="mt-3">
    {{csrf_field()}}
    
    <div class=" col-md-5 form-group">
        <span>Name</span>
        <input type="text" name="name" class="form-control" value="{{old('name')}}">
    </div>

    <div class=" col-md-5 form-group">
        <span>Price</span>
        <input type="text" name="price" class="form-control" value="{{old('price')}}">
    </div>

    <div class=" col-md-5 form-group">
        <span>Qty</span>
        <input type="text" name="qty" class="form-control" value="{{old('qty')}}">
    </div>

    <div class=" col-md-5 form-group">
        <span>Description</span>
        <input type="text" name="desc" class="form-control" value="{{old('desc')}}">
    </div>

    <input type="submit" class="col-3 btn btn-success mt-2" value="submit">
</form>

@endsection