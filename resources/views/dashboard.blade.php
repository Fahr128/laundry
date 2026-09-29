@extends('layouts.app')

@section('title', 'Dashboard | Laundry')

@section('page-title', 'Dashboard')

@section('content')

<div class="container-fluid">
<!-- JUDUL DASHBOARD -->

<div class="mb-4">

    <h4 class="fw-bold mb-1">
        Dashboard
    </h4>

    <p class="text-muted mb-0">
        Selamat datang di Aplikasi Laundry.
    </p>

</div>


<!-- STATISTIK -->

<div class="row g-4">


    <!-- TOTAL LAUNDRY -->

    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <p class="text-muted mb-2">
                            Total Laundry
                        </p>

                        <h3 class="fw-bold mb-0">
                            12
                        </h3>

                    </div>

                    <div
                        class="bg-primary bg-opacity-10
                               text-primary rounded-circle
                               d-flex align-items-center
                               justify-content-center"
                        style="width: 55px; height: 55px;"
                    >

                        <i class="bi bi-basket-fill fs-4"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- TRANSAKSI -->

    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <p class="text-muted mb-2">
                            Total Transaksi
                        </p>

                        <h3 class="fw-bold mb-0">
                            8
                        </h3>

                    </div>

                    <div
                        class="bg-success bg-opacity-10
                               text-success rounded-circle
                               d-flex align-items-center
                               justify-content-center"
                        style="width: 55px; height: 55px;"
                    >

                        <i class="bi bi-receipt fs-4"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- DIPROSES -->

    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <p class="text-muted mb-2">
                            Sedang Diproses
                        </p>

                        <h3 class="fw-bold mb-0">
                            4
                        </h3>

                    </div>

                    <div
                        class="bg-warning bg-opacity-10
                               text-warning rounded-circle
                               d-flex align-items-center
                               justify-content-center"
                        style="width: 55px; height: 55px;"
                    >

                        <i class="bi bi-hourglass-split fs-4"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- SELESAI -->

    <div class="col-md-6 col-xl-3">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <p class="text-muted mb-2">
                            Laundry Selesai
                        </p>

                        <h3 class="fw-bold mb-0">
                            4
                        </h3>

                    </div>

                    <div
                        class="bg-info bg-opacity-10
                               text-info rounded-circle
                               d-flex align-items-center
                               justify-content-center"
                        style="width: 55px; height: 55px;"
                    >

                        <i class="bi bi-check-circle-fill fs-4"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<!-- SELAMAT DATANG -->

<div class="card border-0 shadow-sm mt-4">

    <div class="card-body p-4">

        <div class="row align-items-center">

            <div class="col-md-8">

                <h4 class="fw-bold mb-2">
                    Selamat Datang di Aplikasi Laundry
                </h4>

                <p class="text-muted mb-0">

                    Kelola laundry pakaian, transaksi,
                    lokasi laundry, dan riwayat transaksi
                    melalui menu yang tersedia di sebelah kiri.

                </p>

            </div>

            <div class="col-md-4 text-center mt-3 mt-md-0">

                <i
                    class="bi bi-droplet-fill text-primary"
                    style="font-size: 80px;"
                ></i>

            </div>

        </div>

    </div>

</div>


<!-- TRANSAKSI TERBARU -->

<div class="card border-0 shadow-sm mt-4">

    <div class="card-body p-4">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <div>

                <h5 class="fw-bold mb-1">
                    Transaksi Terbaru
                </h5>

                <small class="text-muted">
                    Transaksi laundry terbaru Anda
                </small>

            </div>

            <a
                href="#"
                class="btn btn-sm btn-primary"
            >
                Lihat Semua
            </a>

        </div>


        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead>

                    <tr>

                        <th>
                            No
                        </th>

                        <th>
                            Kode Transaksi
                        </th>

                        <th>
                            Laundry
                        </th>

                        <th>
                            Layanan
                        </th>

                        <th>
                            Total
                        </th>

                        <th>
                            Status
                        </th>

                    </tr>

                </thead>


                <tbody>

                    <tr>

                        <td>
                            1
                        </td>

                        <td>
                            <strong>
                                TRX001
                            </strong>
                        </td>

                        <td>
                            Laundry Bersih
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


                    <tr>

                        <td>
                            2
                        </td>

                        <td>
                            <strong>
                                TRX002
                            </strong>
                        </td>

                        <td>
                            Fresh Laundry
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


                    <tr>

                        <td>
                            3
                        </td>

                        <td>
                            <strong>
                                TRX003
                            </strong>
                        </td>

                        <td>
                            Clean Wash
                        </td>

                        <td>
                            Express
                        </td>

                        <td>
                            Rp 75.000
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