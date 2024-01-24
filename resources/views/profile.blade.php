

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        {{-- <a class="navbar-brand" href="">GoMyGPS</a> --}}
        <img src="data:image/png;base64,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" alt="Profile Image" height="80" class="me-2" width="80">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item me-2">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item me-2">
                    <a class="nav-link" href="">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Service</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn btn-light " href="{{ route('profileInfo') }}">User Profile</a>
                    {{-- <button class= "nav-link btn btn-red" href = "">User Profile</button> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-light" href="{{ route('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
  <div class="container text-center"> 
  <h1>Welcome to GoMyGPS, {{ $user->fullname }}!</h1>
  {{-- <form action="#"></form> --}}
 
  </div> 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



