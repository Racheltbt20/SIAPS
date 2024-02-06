<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIAPS Admin | @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- /Bootstrap -->

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- /Bootstrap Icons -->

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top px-5 nb-bg">
      <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ route('admin.home') }}">SIAPS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link me-2 {{  request()->routeIs('admin.home') ? 'active' : '' }}" href="{{ route('admin.home') }}">home</a>
                <a class="nav-link me-2 {{  request()->routeIs('admin.pendaftaran') ? 'active' : '' }}" href="#">poli</a>
                <a class="nav-link me-2 {{  request()->routeIs('admin.datadiri') ? 'active' : '' }}" href="#">data diri</a>
                @guest
                    <a class="nav-link me-2" href="{{ route('login.index') }}">login</a>
                @else
                    <form action="{{ route('logout') }}" method="POST" class="d-flex justify-content-center">
                        @csrf 
                        <button class="nav-link" type="submit" onclick="return confirm('Logout?')">
                            logout
                        </button>
                    </form>   
                @endguest
            </div>
        </div>
      </div>
    </nav>
    <!-- /Navbar -->

    <!-- Content -->
    <main class="py-4">
        @yield('content')
    </main>
    <!-- /Content -->
    
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- /Bootstrap -->

</body>
</html>