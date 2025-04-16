@extends('layout');
@section('title')
Update User Data
@endsection
@section('content')
<form action="{{route('user.update',$users->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" value="{{$users->name}}" name="name" >
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" value="{{$users->email}}" id="email" name="email">
    </div>
    <div class="mb-3">
        <input type="submit" value="Save" class="btn btn-success">
    </div>
</form>
@endsection