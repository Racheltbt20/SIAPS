<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIAPS | ADMIN</title>
</head>
<body>
    
<form action="{{ route('logout') }}" method="POST" class="d-flex justify-content-center">
    @csrf 
    <button class="nav-link" type="submit">
      Logout
    </button>
</form>

</body>
</html>