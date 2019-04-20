@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('home')}}" class="btn">Home /</a>
                    <a href="{{route('home.sellsmodule')}}" class="btn">Sells Module /</a>
                    <a href="{{route('home.sellsmodule.dailysell')}}" class="btn">Daily Sells /</a>
                    <a href="{{route('home.sellsmodule.dailysells')}}" class="btn ">List /</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4 class="card-title">Daily Sells</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Amount Paid</th>
                                <th>Amount Left</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if( !empty($dailysells) && count($dailysells))
                                @foreach($dailysells as $dailysell)
                                    <tr>
                                        
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
