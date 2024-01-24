
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>User Profile</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">User Profile</h2>
                </div>
                <div class="card-body">
                    {{-- <p><strong>Name:</strong> {{ $user->fullname}}</p>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>RFID Number:</strong> {{ $user->rfid }}</p>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Image upload form -->
                            <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="profileImage">Profile Image:</label>
                                    <input type="file" class="form-control-file" id="profileImage" name="profileImage">
                                </div>
                                <button type="submit" class="btn btn-primary">Upload Image</button>
                            </form> --}}
                            <form action="{{route('updateprofile')}}" method="post" id="updateform">
                                <div id="success_alert"></div>
                                @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="id" id="id" value="{{$user->id}}">
                                        <label for="name">Full Name</label>
                                        <input type="text" class="form-control" id="name" name="fullname" value="{{ $user->fullname}}" placeholder="Update Your Name">
                                    </div>
                                    <div class="form-group">
                                      <label for="email">Email address</label>
                                      <input type="email" class="form-control" value="{{$user->email}}" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                      <label for="rfid">RFID Number</label>
                                      <input type="text" class="form-control" value="{{$user->rfid}}" name="rfid" id="rfid" placeholder=" Update RFID Number">
                                    </div>
                                    <div class="form-group">
                                      <label for="rfid">Phone</label>
                                      <input type="phone" class="form-control" value="{{$user->phone}}" name="phone" id="phone" placeholder=" Update Phone Number">
                                    </div>
                                    <input type="submit" id="profile_btn" value="Update" class="btn btn-primary rounded float-end">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
      $("#updateform").change(function(e){
        e,preventDefault();
        $("#profile_btn").val("Updating...")
      })


});
</script>

</body>
</html>

















