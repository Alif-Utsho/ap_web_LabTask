@extends('welcome')

@section('content')
    <table class="table table-borded mt-4">
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Desc</th>
            <th>Operation</th>
        </tr>
        
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->desc }}</td>
                <td>
                    <a href="/product/update/{{$product->id}}" class="btn btn-info">Edit</a>
                    <a href="/product/delete/{{$product->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection