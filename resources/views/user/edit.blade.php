@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit User</h4>
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
        <form id="addUserForm" action="{{ url('update-user/'.$user->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input value="{{ $user->name }}" class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="col-md-6">
                    <label for="email">Email</label>
                    <input value="{{ $user->email }}" class="form-control" type="email" name="email" id="email" required>
                </div>
                <div class="col-md-6">
                    <label for="password">Password</label>
                    <input value="{{ $user->password }}" class="form-control" type="text" name="password" id="password" required>
                    <p id="message" style="color: red;font-size: 14px;"></p>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection