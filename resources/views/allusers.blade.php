<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">

</head>
<style>
    nav .w-5{
        display: none;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>All User List</h1>
             <a href="/newuser" class="btn btn-success btn-sm mb-3">Add New</a>
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>EMAIL</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $id => $set )
                    <tr>
                    <td>{{$set->id}}</td>
                    <td>{{$set->name}}</td>
                    <td>{{$set->email}}</td>
                    <td><a href="{{route('deatils',$set->id)}}" class="btn btn-primary btn-sm"> View</a></td>
                    <td><a href="{{route('deleteUser',$set->id)}}" class="btn btn-danger btn-sm"> Delete</a></td>
                    <td><a href="{{route('updatepage',$set->id)}}" class="btn btn-warning btn-sm"> Update</a></td>


                

                </tr>
                   @endforeach
                </table>
                <div class="mt-5">
                    {{ $data->links('pagination::bootstrap-5') }}
                </div>
                <div class="">
                    Total User : {{$data->total()}}
                    Total Current Page : {{$data->currentPage()}}

                </div>
            </div>
            
        </div>
    </div>
</body>

    
