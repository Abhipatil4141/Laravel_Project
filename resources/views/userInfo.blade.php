
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
                    <p><strong>Name:</strong> {{ $user->fullname}}</p>
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

















