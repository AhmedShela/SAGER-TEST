@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-head">
        <h1>Users Page</h1>
        <a class="btn btn-primary" href="{{ url('add-user') }}">Add User</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ url('edit-user/'.$item->id) }}">
                            <i class="fa fa-edit fa-fw" style="color: green;"></i>
                        </a>
                        <a href="{{ url('delete-user/'.$item->id) }}" onclick="return confirm('Are you sure?')">
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