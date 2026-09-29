@extends('layouts.app')

@section('title', 'Profile')

@section('page-title', 'Profile')

@section('content')

<div class="row">

    <div class="col-md-8">

        <div class="card border-0 shadow-sm">

            <div class="card-body">

                <h5 class="mb-4">
                    Profile Pengguna
                </h5>


                <div class="mb-3">

                    <label class="form-label">
                        Nama
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="{{ auth()->user()->name ?? '' }}"
                    >

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Username
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="{{ auth()->user()->username ?? '' }}"
                    >

                </div>


                <div class="mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <input
                        type="email"
                        class="form-control"
                        value="{{ auth()->user()->email ?? '' }}"
                    >

                </div>


                <button class="btn btn-primary">

                    <i class="bi bi-save me-1"></i>

                    Simpan Perubahan

                </button>

            </div>

        </div>

    </div>

</div>

@endsection
