@extends('layouts.app')
@section('title')
      Sonford  Shopping Cart
@endsection
@section('content')
    @if(Session::has('success'))
    <div class="row">
          <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
              <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
              </div>
          </div>
    </div>
    @endif
    <div class="row">
        <div id="custom-search-input">
            <div class="input-group col-md-12">
                <input type="text" class="  search-query form-control" placeholder="Search Your Products Here.." />
                <span class="input-group-btn">
                        <button class="btn btn-danger" type="button">
                            <span class=" glyphicon glyphicon-search"></span>
                        </button>
                </span>
            </div>
        </div>
        <hr>
        @foreach( $products as $product)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ $product->imagepath }}" alt="..." style="max-height: 200px" class="img-responsive">
                <div class="caption">
                    <h3>{{ $product->title  }}</h3>
                    <p>{{ $product->description }}</p>
                    </div>
                    <div class="clearfix">
                        <div class="pull-left">Price <strong>$ {{ $product->price }}</strong></div>
                        <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to Cart</a>
                 </div>
            </div>
        </div>
        @endforeach
           <center> {{ $products ->links() }} </center>
    </div>
@endsection