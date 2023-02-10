@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Category</h4>
    </div>
    <div class="card-body">
        <form action="{{ url('update-category/'.$cat->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input value="{{ $cat->name }}" class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection