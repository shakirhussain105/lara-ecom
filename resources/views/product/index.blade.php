@extends('master')
@section('content')
<div class="products">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach($products as $product)
            <div class="carousel-item {{($product->id == 1)?'active':''}}">
                <a href="product/detail/{{$product->id}}">
                    <img height="500" src="{{$product->gallery}}" class="d-block w-100" alt="{{$product->category}}"></a>
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{$product->name}}</h5>
                    <p>{{$product->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="trending-wrapper">
        <h3>Trending Products</h3>
        @foreach($products->sortBy('id')->take(5) as $product)
        <div class="trending-products">
            <a href="product/detail/{{$product->id}}">
                <img height="100" src="{{$product->gallery}}" class="" alt="{{$product->category}}">
            </a>
            <div class="">
                <h5>{{$product->name}}</h5>

            </div>
        </div>
        @endforeach

    </div>

</div>
@endsection