@extends('layouts.app')

@section('title', 'Laundry Pakaian')

@section('page-title', 'Laundry Pakaian')

@section('content')

<div class="card border-0 shadow-sm">

    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>

                <h5>
                    Laundry Pakaian
                </h5>

                <p class="text-muted mb-0">
                    Pilih layanan laundry yang tersedia.
                </p>

            </div>

            <button class="btn btn-primary">

                <i class="bi bi-plus-lg"></i>

                Tambah Laundry

            </button>

        </div>


        <div class="table-responsive">

            <table class="table table-hover">

                <thead>

                    <tr>

                        <th>No</th>
                        <th>Jenis Laundry</th>
                        <th>Harga</th>
                        <th>Estimasi</th>
                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>1</td>

                        <td>
                            Cuci Kering
                        </td>

                        <td>
                            Rp 7.000 / Kg
                        </td>

                        <td>
                            2 Hari
                        </td>

                        <td>

                            <button class="btn btn-sm btn-primary">
                                Pilih
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>2</td>

                        <td>
                            Cuci Setrika
                        </td>

                        <td>
                            Rp 10.000 / Kg
                        </td>

                        <td>
                            2 Hari
                        </td>

                        <td>

                            <button class="btn btn-sm btn-primary">
                                Pilih
                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
