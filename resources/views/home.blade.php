@extends('template')
@section('title', 'Home')

@section('content')

<div class="card my-4 mx-auto border-0" style="max-width: 1200px;">
    <div class="row g-0">
        <div class="col-md-5">
            <img src="{{ asset('img/siaps-logo-nobg.png') }}" alt="SIAPS logo" class="img-fluid rounded-start" />
        </div>
        <div class="col-md-7 my-auto">
            <div class="card-body bg-transparent">
                <p class="card-text fw-semibold">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, maiores? In aspernatur architecto quos, eaque porro fugiat, dolores ratione repudiandae ipsam explicabo, magni praesentium nisi numquam neque debitis saepe cumque.
                </p>
                <a href="{{ route('pendaftaran') }}" type="button" class="btn btn-mgt text-light px-3">daftar</a>
            </div>
        </div>
    </div>
</div>
    
@endsection
    

