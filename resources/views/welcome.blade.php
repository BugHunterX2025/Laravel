<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 alert-danger alert">
                @if(session('success'))
                <p class="text-center">{{ session('success') }}</p>
                @endsession)
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <h1 class="mb-4 text-center">This is My Data Fetch</h1>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <a href="{{route('users.create')}}" class="btn btn-success">Add New</a>
            </div>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empp as $emp)
                <tr>
                    <td>{{ $emp->name }}</td>
                    <td>{{ $emp->email }}</td>
                    <td><a href="{{route('users.show',$emp->id)}}" class="btn btn-danger">View</a></td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
