<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Add New User</h1>
                  {{-- @if ($errors->any())
                  <ul  class="alert alert-danger">
                    @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                  @endif --}}
                <form action="{{route('adduser')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="form-label">Name</label>
                        <input type="text" value="{{old('name')}}" name="name" id="" class="form-control @error('name')
                            is-invalid
                        @enderror   ">
                        <span class="text-danger">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="form-label ">Email</label>
                        <input type="email"  value="{{old('email')}}" name="email" id="" class="form-control @error('name')
                        is-invalid
                    @enderror   ">
                        <span class="text-danger">

                        @error('email')
                        {{$message}}
                    @enderror
                    </span>
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Age</label>
                        <input type="number" value="{{old('age')}}" name="age" id="" class="form-control @error('name')
                        is-invalid
                    @enderror   ">
                        <span class="text-danger">

                        @error('age')
                        {{$message}}
                    @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Password</label>
                        <input type="password" value="{{old('password')}}" name="password" id="" class="form-control @error('password')
                        is-invalid
                    @enderror   ">
                        <span class="text-danger">

                        @error('password')
                        {{$message}}
                    @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>