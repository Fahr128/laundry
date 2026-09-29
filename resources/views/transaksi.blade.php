@extends('layouts.app')

@section('title', 'Transaksi')

@section('page-title', 'Transaksi')

@section('content')

<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex justify-content-between mb-4">

            <div>

                <h5>
                    Transaksi
                </h5>

                <p class="text-muted mb-0">
                    Daftar transaksi laundry Anda.
                </p>

            </div>

            <button class="btn btn-primary">

                <i class="bi bi-plus-lg"></i>

                Transaksi Baru

            </button>

        </div>


        <div class="table-responsive">

            <table class="table table-hover">

                <thead>

                    <tr>

                        <th>No</th>
                        <th>Kode</th>
                        <th>Layanan</th>
                        <th>Total</th>
                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>1</td>

                        <td>
                            TRX001
                        </td>

                        <td>
                            Cuci Setrika
                        </td>

                        <td>
                            Rp 50.000
                        </td>

                        <td>

                            <span class="badge bg-warning">
                                Diproses
                            </span>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
