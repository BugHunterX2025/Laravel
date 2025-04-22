<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<p>
    name is :{{$emp->name}}
</p>
<p>
    email is :{{$emp->email}}
</p>
<a href="{{route('users.index')}}" class="btn btn-success"> Back</a>