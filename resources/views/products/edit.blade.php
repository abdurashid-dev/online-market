@extends('online-market::layouts.app')
@section('title')
    Product edit
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Product edit
        </div>
        <div class="card-body">
            <form action="{{route('products.update', $product)}}" method="POST">
                @csrf
                @method('PUT')
                @include('online-market::products.forms')
                <button type="submit" class="btn btn-primary float-right">Edit</button>
            </form>
        </div>
    </div>
@endsection
