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
                    <a href="{{route('home.sellsmodule.addproduct')}}" class="btn ">Add /</a>
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
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Quantity</label>
                                <input type="number" name="quantity" min="1" class="form-control">
                            </div>
                            <div class="form-group">
                            <label>Price</label>
                                <input type="number" min="1" name="price" class="form-control">
                            </div><br>
                            <input type="submit" class="btn btn-primary" value="Add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
