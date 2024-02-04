@extends('template')
@section('title', 'Pendaftaran')
    
@section('content')
    
<div class="container-fluid">

    <!-- Search Bar -->
    <div class="input-group my-5 ms-5">
        <div>
            <input type="text" class="form-control rounded-start border-dark" placeholder="cari poli..." aria-label="cari poli" aria-describedby="button-addon2">
        </div>
        <button class="btn btn-outline-dark" type="button" id="button-addon2">
            <i class="bi bi-search"></i>
        </button>
    </div>
    <!-- /Search Bar -->

    <!-- Poli -->
    <div class="row row-cols-1 row-cols-md-6 g-4 mx-4">
        <a href="#" class="link-underline link-underline-opacity-0">
            <div class="col">
              <div class="card h-100 bg-poli d-flex align-items-center justify-content-center text-center">
                <img src="{{ asset('img/logo-poli/poli-umum-copy.png') }}" class="card-img-top w-50 mt-2" alt="...">
                <div class="card-body">
                  <h3 class="card-title fw-bold text-light">Poli Umum</h3>
                </div>
              </div>
            </div>
        </a>
        <a href="#" class="link-underline link-underline-opacity-0">
            <div class="col">
                <div class="card h-100 bg-poli d-flex align-items-center justify-content-center text-center">
                <img src="{{ asset('img/logo-poli/poli-gigi-copy.png') }}" class="card-img-top w-50 mt-2" alt="...">
                <div class="card-body">
                    <h3 class="card-title fw-bold text-light">Poli Gigi</h3>
                </div>
                </div>
            </div>
        </a>
        <a href="#" class="link-underline link-underline-opacity-0">
            <div class="col">
                <div class="card h-100 bg-poli d-flex align-items-center justify-content-center text-center">
                <img src="{{ asset('img/logo-poli/poli-anak-copy.png') }}" class="card-img-top w-50 mt-2" alt="...">
                <div class="card-body">
                    <h3 class="card-title fw-bold text-light">Poli Anak</h3>
                </div>
                </div>
            </div>
        </a>
    </div>
    <!-- /Poli -->

</div>


@endsection