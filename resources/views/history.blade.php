@extends('layouts.app')
@section('title', 'History')
@section('page-title', 'History Transaksi')
@section('content')
<div class="card border-0 shadow-sm">

    <div class="card-body">

        <h5>
            History Transaksi
        </h5>

        <p class="text-muted">
            Riwayat transaksi laundry yang telah dilakukan.
        </p>

        <div class="table-responsive">

            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Transaksi</th>
                        <th>Tanggal</th>
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
                            29 September 2026
                        </td>

                        <td>
                            Cuci Kering
                        </td>

                        <td>
                            Rp 35.000
                        </td>

                        <td>
                            <span class="badge bg-success">
                                Selesai
                            </span>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
