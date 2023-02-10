@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Add User</h4>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="card-body">
        <form id="addUserForm" action="{{ url('insert-user') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" required>
                </div>
                <div class="col-md-6">
                    <label for="password">Password</label>
                    <input class="form-control" type="text" name="password" id="password" required>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection