<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Sign up</title>
</head>
<body>
    


    {{-- <form action="{{url('/')}}/register" method="post"> --}}
    <form action="{{route('register')}}" method="post">
        @csrf {{-- this is token for data  --}}
        <div class="container">
            <h4 class="my-3 text-center">Registration</h4>

            <div class="form-group">
                <label for=""> FullName :</label>
                <input type="text" class="form-control" name="fullname" placeholder="Full Name" value="{{old('fullname')}}">
                <span class="text-danger">
                    @error('fullname')
                    {{$message}}

                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">RFID No :</label>
                <input type="text" class="form-control" name="rfid" placeholder="RFID No "  value="{{old('rfid')}}">
                <span class="text-danger">
                    @error('rfid')
                    {{$message}}

                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Email :</label>
                <input type="email" class="form-control" name="email" placeholder="email">
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
                    {{$message}}

                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Confirm Password :</label>
                <input type="password" class="form-control" name="repeat_password" placeholder="Confirm Password">
                <span class="text-danger">
                    @error('repeat_password')
                    {{$message}}

                    @enderror
                </span>
            </div>
            <div class="form-btn text-center">
                <input type="submit" class="btn btn-primary" name="submit" >
                <span class="text-danger"></span>
            </div>
            
            
        </div>
    </form>

</body>
</html>