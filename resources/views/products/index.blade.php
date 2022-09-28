@extends('online-market::layouts.app')
@section('title')
    Products index
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            Products
            <a href="{{route('products.create')}}" class="btn btn-primary float-end">Create</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Desc</th>
                    <th>Actions</th>
                </tr>
                @forelse($products as $product)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->desc}}</td>
                        <td>
                            <a href="{{route('products.show', $product)}}" class="btn btn-primary">Show</a>
                            <a href="{{route('products.edit', $product)}}" class="btn btn-success">Edit</a>
                            <form action="{{route('products.destroy', $product)}}" class="d-inline-block" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-flat">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No data found</td>
                    </tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection
