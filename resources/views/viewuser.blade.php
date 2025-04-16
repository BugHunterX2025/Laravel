@extends('layout');
@section('title')
Add New User
@endsection
@section('content')
<table class="table table-striped table-bordered">
    <tr>
        <th width="80px"> Name:</th>
        <td>{{$users->name}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$users->email}}</td>
    </tr>
</table>
<a href="{{route('user.index')}}" class="btn btn-danger">Back</a>
@endsection