@extends('online-market::layouts.app')
@section('title')
    Product create
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Product create
        </div>
        <div class="card-body">
            <form action="{{route('products.store')}}" method="POST">
                @csrf
                @include('online-market::products.forms')
                <button type="submit" class="btn btn-primary float-end">Save</button>
            </form>
        </div>
    </div>
@endsection
