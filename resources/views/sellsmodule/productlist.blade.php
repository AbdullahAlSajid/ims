@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('home')}}" class="btn">Home /</a>
                    <a href="{{route('home.sellsmodule')}}" class="btn">Sells Module /</a>
                    <a href="{{route('home.sellsmodule.product')}}" class="btn">Products /</a>
                    <a href="{{route('home.sellsmodule.products')}}" class="btn ">List /</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4 class="card-title">Products</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Quantity</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if( !empty($products) && count($products))
                                @foreach($products as $product)
                                    <tr>
                                        <td>
                                            {{$product->name}}
                                        </td>
                                        <td>
                                            @if($product->quantity > 0)
                                                {{ "In stock" }}
                                            @else
                                                {{ "Out of stock" }}
                                            @endif
                                        </td>
                                        <td >
                                            {{$product->quantity}}
                                        </td>
                                        <td>
                                            {{$product->price}} tk
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="8" class="text-center text-danger">
                                        No data found
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
