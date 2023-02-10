@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-head">
        <h1>Category Page</h1>
        <a class="btn btn-primary" href="{{ url('add-category') }}">Add Category</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Number Of Products</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->products_count }}</td>
                    <td>
                        <a href="{{ url('edit-category/'.$item->id) }}">
                            <i class="fa fa-edit fa-fw" style="color: green;"></i>
                        </a>
                        <a href="{{ url('delete-category/'.$item->id) }}" onclick="return confirm('Are you sure?')">
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