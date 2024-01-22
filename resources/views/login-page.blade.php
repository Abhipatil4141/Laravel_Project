<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <form action="{{url('/')}}/login" method="post">
        @csrf {{-- this is token for data  --}}
        <div class="container">
            <h4 class="my-3 text-center">Log In</h4>
            <div class="form-group">
                <label for="">Email :</label>
                <input type="email" class="form-control" name="email" placeholder="Email:"  value="{{old('email')}}">
                <span class="text-danger">
                    @error('email')
                    {{$message}}

                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Password :</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
                <span class="text-danger">
                    @error('password')
                    {{$message}}@enderror
                </span>
            </div>
            <div class="mt-0">
                <p>Don't have an account? <a href="{{ route('index') }}">Register</a></p>
            </div>
            
            <div class="form-btn text-center">
                <input type="submit" class="btn btn-primary" name="login" placeholder="login">
                
            </div>
            

</body>
</html>
