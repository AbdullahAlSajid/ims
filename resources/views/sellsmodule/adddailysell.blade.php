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
                    <a href="{{route('home.sellsmodule.adddailysell')}}" class="btn ">Add /</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="">
                        <form method="post" >
                            @csrf
                            <div class="form-group">
                            <label>Sells Point</label>
                                <input type="text" name="sellspoint" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Customer</label>
                                <select class="form-control" name="customer">
                                @if(!empty($users))
                                    @foreach($users as $user)
                                        @if($user->roles->first()->name == 'Customer')
                                            <option value="{{$user->id}}">
                                                {{$user->name}}
                                            </option>
                                        @endif
                                    @endforeach
                                @else
                                    <div class="alert alert-danger">Sorry! No category found</div>
                                @endif
                                </select>
                            </div>
                            <div class="form-group">
                            <label>Quantity</label>
                                <input type="number" name="quantity" min="1" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Price</label>
                                <input type="number" min="1" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Amount Paid</label>
                                <input type="number" name="amountpaid" min="1" class="form-control">
                            </div>
                            <br>
                            <input type="submit" class="btn btn-primary" value="Add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
