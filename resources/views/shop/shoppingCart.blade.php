@extends('layouts.app')
@section('title')
    Sonford  Shopping Cart
@endsection
@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Your Shopping Cart Summary  <span class="badge btn btn-primary">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></h3>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3 pull-right ">
                                    <a href="{{ route('checkout') }}" type="button" class="btn btn-success">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                            <tr>
                                <th>Price</th>
                                <th class="hidden-xs">Quantity</th>
                                <th>Name</th>
                                <th>Increase / Reduce</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td align="center"><span class="label label-success">{{ $product['price'] }}</span></td>
                                    <td class="hidden-xs" align="center"> <span class="badge">{{ $product['qty'] }}</span></td>
                                    <td ><strong>{{ $product['item'] ['title'] }}</strong></td>
                                    <td ><div class="btn-group">
                                            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li href="#">Reduce 1</li>
                                                <li href="#">Reduce All</li>
                                            </ul>
                                        </div></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 pull-right">
                                <div class="panel price panel-white">
                                    <div class="panel-heading arrow_box text-center">
                                        <h3>Grand Total  </h3>
                                    </div>
                                    <div class="panel-footer">
                                        <a class="btn btn-lg btn-block btn-success" href="#"> USD : {{ $totalPrice }}.00</a>
                                    </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div></div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items In Cart </h2>
            </div>
        </div>
    @endif
@endsection
