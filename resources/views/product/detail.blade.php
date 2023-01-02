@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img height="200" src="{{$product->gallery}}" alt="product" />
        </div>
        <div class="col-sm-6">
            <a href="/"> Back </a>
            <h2>{{$product->name ?? ''}}</h2>
            <p><b>Categroy:</b> {{$product['category'] ?? ''}}</p>
            <p><b>Price:</b> Rs. {{$product->price ?? 0}}</p>
            <p><b>Description:</b> {{$product->description ?? ''}}</p>
            <div class="d-flex">
                <form action="{{url('product/add_to_cart')}}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    <button class="btn btn-sm btn-warning">Add to Cart</button>
                </form>


                <button class="btn btn-sm btn-success mx-2">Buy Now</button>
            </div>

        </div>
    </div>


</div>
@endsection