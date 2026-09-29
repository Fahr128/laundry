@extends('layouts.app')

@section('title', 'Laundry Terdekat')

@section('page-title', 'Laundry Terdekat')

@section('content')

<div class="card border-0 shadow-sm">

    <div class="card-body">

        <h5>
            Laundry Terdekat
        </h5>

        <p class="text-muted">
            Temukan laundry yang berada di sekitar lokasi Anda.
        </p>


        <div class="alert alert-info">

            <i class="bi bi-info-circle me-2"></i>

            Fitur pencarian laundry terdekat
            dapat menggunakan lokasi pengguna.

        </div>


        <button class="btn btn-primary">

            <i class="bi bi-geo-alt"></i>

            Cari Laundry Terdekat

        </button>

    </div>

</div>

@endsection
