@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            Filters
        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h4>Result for Product</h4>
                @foreach($products->sortBy('id')->take(5) as $product)
                <div class="search-products">
                    <a href="product/detail/{{$product->id}}">
                        <img height="100" src="{{$product->gallery}}" class="" alt="{{$product->category}}">
                    </a>
                    <div class="">
                        <h2>{{$product->name}}</h2>
                        <p>{{$product->description }}</p>

                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection