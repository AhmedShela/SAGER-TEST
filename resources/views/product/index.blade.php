@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="">
            <h1>Products Page</h1>
            <i class="bi bi-pen"></i>
            <a class="btn btn-primary" href="{{ url('add-product') }}">Add Product</a>
        </div>
        <hr>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Updaet Time</th>
                    <th>Image</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td><img src="{{ asset('assets/uploads/products/'.$item->image) }}" width="50px" class="product-image" alt=""></td>
                    <td><a class="btn btn-primary" href="{{ url('reduce-product-qty/'.$item->id) }}">Reduce Quantity</a></td>
                    <td>
                        <a href="{{ url('edit-product/'.$item->id) }}">
                            <i class="fa fa-edit fa-fw" style="color: green;"></i>
                        </a>
                        <a href="{{ url('delete-product/'.$item->id) }}" onclick="return confirm('Are you sure?')">
                            <i class="fa fa-trash" style="color: red;"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection