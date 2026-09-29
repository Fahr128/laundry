@extends('layouts.app')

@section('title', 'Peta')

@section('page-title', 'Peta Laundry')

@section('content')

<div class="container-fluid">

    {{-- Header Halaman --}}
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h4 class="fw-bold mb-1">
                <i class="bi bi-map text-primary me-2"></i>
                Peta Laundry
            </h4>

            <p class="text-muted mb-0">
                Lihat lokasi laundry pada peta.
            </p>
        </div>

        <a
            href="{{ route('dashboard') }}"
            class="btn btn-outline-primary"
        >
            <i class="bi bi-arrow-left me-1"></i>
            Dashboard
        </a>

    </div>


    {{-- Card Peta --}}
    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <div class="d-flex align-items-center mb-3">

                <div
                    class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3"
                    style="width: 45px; height: 45px;"
                >
                    <i class="bi bi-geo-alt-fill fs-5"></i>
                </div>

                <div>
                    <h5 class="fw-bold mb-1">
                        Lokasi Laundry
                    </h5>

                    <p class="text-muted mb-0">
                        Pilih lokasi laundry pada peta.
                    </p>
                </div>

            </div>


            {{-- Tombol Lokasi Saya --}}
            <div class="mb-3">

                <button
                    type="button"
                    id="btnLokasi"
                    class="btn btn-primary"
                >
                    <i class="bi bi-crosshair me-1"></i>
                    Gunakan Lokasi Saya
                </button>

            </div>


            {{-- Area Peta --}}
            <div
                id="map"
                style="
                    width: 100%;
                    height: 450px;
                    border-radius: 12px;
                    overflow: hidden;
                    background: #e9ecef;
                "
            >

                <div
                    id="map-loading"
                    class="h-100 d-flex align-items-center justify-content-center"
                >

                    <div class="text-center text-muted">

                        <i class="bi bi-map fs-1"></i>

                        <p class="mt-2 mb-0">
                            Memuat peta...
                        </p>

                    </div>

                </div>

            </div>


            {{-- Informasi Lokasi --}}
            <div
                id="location-info"
                class="alert alert-light border mt-3 mb-0"
            >

                <i class="bi bi-info-circle text-primary me-2"></i>

                Tekan tombol
                <strong>Gunakan Lokasi Saya</strong>
                untuk mengetahui lokasi Anda.

            </div>

        </div>

    </div>


    {{-- Informasi Tambahan --}}
    <div class="row mt-4">

        <div class="col-md-4 mb-3">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex align-items-center">

                        <div
                            class="bg-primary bg-opacity-10 text-primary rounded p-3 me-3"
                        >
                            <i class="bi bi-geo-alt-fill fs-4"></i>
                        </div>

                        <div>
                            <h6 class="fw-bold mb-1">
                                Lokasi Anda
                            </h6>

                            <small class="text-muted">
                                Posisi saat ini
                            </small>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-md-4 mb-3">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex align-items-center">

                        <div
                            class="bg-success bg-opacity-10 text-success rounded p-3 me-3"
                        >
                            <i class="bi bi-shop fs-4"></i>
                        </div>

                        <div>
                            <h6 class="fw-bold mb-1">
                                Laundry
                            </h6>

                            <small class="text-muted">
                                Lokasi laundry tersedia
                            </small>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-md-4 mb-3">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex align-items-center">

                        <div
                            class="bg-warning bg-opacity-10 text-warning rounded p-3 me-3"
                        >
                            <i class="bi bi-signpost-2 fs-4"></i>
                        </div>

                        <div>
                            <h6 class="fw-bold mb-1">
                                Navigasi
                            </h6>

                            <small class="text-muted">
                                Cari laundry terdekat
                            </small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="mt-3">

        <a
            href="{{ route('laundry.terdekat') }}"
            class="btn btn-outline-primary"
        >
            <i class="bi bi-shop me-1"></i>
            Laundry Terdekat
        </a>

        <a
            href="{{ route('laundry') }}"
            class="btn btn-outline-secondary ms-2"
        >
            <i class="bi bi-basket me-1"></i>
            Laundry
        </a>

    </div>

</div>




<link
    rel="stylesheet"
    href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"


<script
    src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js">
</script>


<script>

document.addEventListener('DOMContentLoaded', function () {


    const defaultLatitude = -6.200000;

    const defaultLongitude = 106.816666;

    const defaultZoom = 12;


    const map = L.map('map').setView(
        [
            defaultLatitude,
            defaultLongitude
        ],
        defaultZoom
    );



    L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        {
            maxZoom: 19,

            attribution:
                '&copy; OpenStreetMap contributors'
        }
    ).addTo(map);


    const loading = document.getElementById('map-loading');

    if (loading) {
        loading.style.display = 'none';
    }

    */

    const laundryLocations = [

        {
            name: 'Laundry Jakarta',
            latitude: -6.200000,
            longitude: 106.816666
        },

        {
            name: 'Laundry Sudirman',
            latitude: -6.214620,
            longitude: 106.845130
        },

        {
            name: 'Laundry Kuningan',
            latitude: -6.229700,
            longitude: 106.829500
        }

    ];


    laundryLocations.forEach(function (laundry) {

        const marker = L.marker([
            laundry.latitude,
            laundry.longitude
        ]).addTo(map);


        marker.bindPopup(`
            <div style="min-width: 180px;">

                <strong>
                    ${laundry.name}
                </strong>

                <br>

                <span class="text-muted">
                    Laundry
                </span>

                <br><br>

                <button
                    type="button"
                    class="btn btn-sm btn-primary"
                    onclick="lihatRute(
                        ${laundry.latitude},
                        ${laundry.longitude}
                    )"
                >
                    <i class="bi bi-signpost-2"></i>
                    Lihat Rute
                </button>

            </div>
        `);

    });


    let userMarker = null;

    let userCircle = null;


    const btnLokasi = document.getElementById('btnLokasi');

    const locationInfo = document.getElementById('location-info');


    if (btnLokasi) {

        btnLokasi.addEventListener(
            'click',
            function () {

                if (!navigator.geolocation) {

                    locationInfo.innerHTML = `
                        <i class="bi bi-exclamation-triangle text-danger me-2"></i>

                        Browser Anda tidak mendukung
                        fitur lokasi.
                    `;

                    return;
                }


                btnLokasi.disabled = true;

                btnLokasi.innerHTML = `
                    <span
                        class="spinner-border spinner-border-sm me-1"
                    ></span>

                    Mencari lokasi...
                `;


                navigator.geolocation.getCurrentPosition(

                    function (position) {

                        const latitude =
                            position.coords.latitude;

                        const longitude =
                            position.coords.longitude;

                        const accuracy =
                            position.coords.accuracy;


                        if (userMarker) {
                            map.removeLayer(userMarker);
                        }


                        if (userCircle) {
                            map.removeLayer(userCircle);
                        }


                        userMarker = L.marker([
                            latitude,
                            longitude
                        ]).addTo(map);


                        userMarker.bindPopup(`
                            <strong>
                                Lokasi Anda
                            </strong>

                            <br>

                            Latitude:
                            ${latitude.toFixed(6)}

                            <br>

                            Longitude:
                            ${longitude.toFixed(6)}
                        `);

                        userCircle = L.circle(
                            [
                                latitude,
                                longitude
                            ],
                            {
                                radius: accuracy,

                                color: '#0d6efd',

                                fillColor: '#0d6efd',

                                fillOpacity: 0.15
                            }
                        ).addTo(map);


                        map.setView(
                            [
                                latitude,
                                longitude
                            ],
                            15
                        );



                        locationInfo.innerHTML = `

                            <i
                                class="bi bi-check-circle-fill text-success me-2"
                            ></i>

                            <strong>
                                Lokasi berhasil ditemukan.
                            </strong>

                            <br>

                            <small class="text-muted">

                                Latitude:
                                ${latitude.toFixed(6)}

                                <br>

                                Longitude:
                                ${longitude.toFixed(6)}

                                <br>

                                Akurasi:
                                sekitar ${Math.round(accuracy)} meter

                            </small>

                        `;



                        btnLokasi.disabled = false;

                        btnLokasi.innerHTML = `
                            <i class="bi bi-crosshair me-1"></i>

                            Perbarui Lokasi
                        `;

                    },


         

                    function (error) {

                        let message =
                            'Lokasi tidak dapat ditemukan.';


                        if (error.code === 1) {

                            message =
                                'Akses lokasi ditolak. Silakan izinkan lokasi pada browser.';

                        }
                        else if (error.code === 2) {

                            message =
                                'Lokasi tidak tersedia.';

                        }
                        else if (error.code === 3) {

                            message =
                                'Waktu pencarian lokasi habis.';

                        }


                        locationInfo.innerHTML = `

                            <i
                                class="bi bi-exclamation-triangle-fill text-danger me-2"
                            ></i>

                            ${message}

                        `;



                        btnLokasi.disabled = false;

                        btnLokasi.innerHTML = `
                            <i class="bi bi-crosshair me-1"></i>

                            Gunakan Lokasi Saya
                        `;

                    },


                    {
                        enableHighAccuracy: true,

                        timeout: 10000,

                        maximumAge: 0
                    }

                );

            }
        );

    }

    setTimeout(function () {

        map.invalidateSize();

    }, 300);

});


function lihatRute(latitude, longitude) {

    const url =
        'https://www.google.com/maps/dir/?api=1' +
        '&destination=' +
        latitude +
        ',' +
        longitude;


    window.open(
        url,
        '_blank'
    );

}

</script>

@endsection
