@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add Product</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-control" name="category_id" id="category_id">
                        @foreach($categories as $item)
                        @if($item->id == $product->category->id)
                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                            @else
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input value="{{ $product->name }}" class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="col-md-6">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="3" name="description" id="description">{{ $product->description }}</textarea>
                </div>
                <div class="col-md-6">
                    <label for="price">Price</label>
                    <input value="{{ $product->price }}" class="form-control" type="number" value="1" min="1" name="price" id="price" required>
                </div>
                <div class="col-md-6">
                    <label for="name">Quantity</label>
                    <input value="{{ $product->quantity }}" class="form-control" type="number" value="1" min="1" name="quantity" id="quantity" required>
                </div>
                @if($product->image)
                <div class="mt-5"></div>
                <img width="50px" src="{{ asset('assets/uploads/products/'.$product->image) }}" style="width: 200px;" alt="">
                @endif
                <div class="col-md-6 mt-2">
                    <input class="form-control" type="file" name="image" id="image">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection