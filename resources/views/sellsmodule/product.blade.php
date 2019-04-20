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
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links">
                        <a href="{{route('home.sellsmodule.addproduct')}}" class="btn ">Add Products</a><br>
                        <a href="{{route('home.sellsmodule.products')}}" class="btn ">Products List</a><br>
    
                        <!-- <a href="" class="btn">Daily Sells</a><br>
                        <a href="" class="btn">Transferred Money </a><br>
                        <a href="" class="btn">Customer Debit-Credit </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
