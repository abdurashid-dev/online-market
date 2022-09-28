@extends('online-market::layouts.app')
@section('title')
    Product show
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('products.index')}}" class="btn btn-primary">Back</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{$product->id}}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$product->name}}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{$product->price}}</td>
                </tr>
                <tr>
                    <th>Desc</th>
                    <td>{{$product->desc}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
