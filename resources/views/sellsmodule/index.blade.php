@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('home')}}" class="btn">Home /</a>
                    <a href="{{route('home.sellsmodule')}}" class="btn">Sells Module /</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="links">
                        <a href="" class="btn btn-sm">Inventory</a><br>
                        <a href="{{route('home.sellsmodule.product')}}" class="btn">Products </a><br>
                        <a href="" class="btn">Shipments </a><br>
                        <a href="" class="btn btn-sm">Accounts</a><br>
                        <a href="{{route('home.sellsmodule.dailysell')}}" class="btn ">Daily Sells</a><br>
                        <a href="" class="btn">Transferred Money </a><br>
                        <a href="" class="btn">Customer Debit-Credit </a>
                        
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
