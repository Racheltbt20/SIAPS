@extends('admin.template')
@section('title', 'Home')

@section('content')

@guest
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>
                <div class="card-body">
                    <span>Anda belum login!</span>
                </div>
            </div>
        </div>
    </div>
    </div>
@else
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <span>Selamat Datang {{ auth()->user()->nama }}!</span>
                </div>
            </div>
        </div>
    </div>
    </div>
@endguest

@endsection
