<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Aplikasi Laundry</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;

            font-family: Arial, Helvetica, sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #0d6efd 0%,
                    #4dabf7 50%,
                    #74c0fc 100%
                );

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 20px;
        }

        /* CARD LOGIN */
        .login-card {
            width: 100%;
            max-width: 420px;

            background: #ffffff;

            border-radius: 20px;

            padding: 40px;

            box-shadow:
                0 20px 50px
                rgba(0, 0, 0, 0.20);
        }

        /* LOGO */
        .logo {
            width: 75px;
            height: 75px;

            background: #0d6efd;

            color: white;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: 0 auto 20px;

            font-size: 34px;

            box-shadow:
                0 8px 20px
                rgba(13, 110, 253, 0.3);
        }

        /* TITLE */
        .title {
            font-weight: 700;

            color: #212529;

            margin-bottom: 5px;
        }

        .subtitle {
            color: #6c757d;

            font-size: 14px;

            margin-bottom: 30px;
        }

        /* LABEL */
        .form-label {
            font-weight: 600;

            color: #343a40;
        }

        /* INPUT */
        .input-group-text {
            background: #f8f9fa;

            border-right: none;

            color: #0d6efd;
        }

        .form-control {
            border-left: none;

            padding: 12px;
        }

        .form-control:focus {
            box-shadow: none;

            border-color: #dee2e6;
        }

        .input-group:focus-within {
            box-shadow:
                0 0 0 3px
                rgba(13, 110, 253, 0.15);

            border-radius: 8px;
        }

        /* BUTTON LOGIN */
        .btn-login {
            background: #0d6efd;

            border: none;

            color: white;

            padding: 13px;

            border-radius: 10px;

            font-weight: 600;

            transition: 0.2s;
        }

        .btn-login:hover {
            background: #0b5ed7;

            color: white;

            transform: translateY(-1px);
        }

        /* REGISTER */
        .register-section {
            text-align: center;

            margin-top: 20px;

            padding-top: 20px;

            border-top: 1px solid #eeeeee;

            font-size: 14px;
        }

        .register-section span {
            color: #6c757d;
        }

        .register-link {
            color: #0d6efd;

            font-weight: 600;

            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        /* FOOTER */
        .footer-text {
            text-align: center;

            color: #adb5bd;

            font-size: 12px;

            margin-top: 25px;
        }

        /* ERROR */
        .alert {
            font-size: 14px;
        }

    </style>

</head>

<body>

    <div class="login-card">

        <!-- =========================
             LOGO
        ========================== -->

        <div class="logo">

            <i class="bi bi-droplet-fill"></i>

        </div>


        <!-- =========================
             JUDUL
        ========================== -->

        <div class="text-center">

            <h3 class="title">
                Aplikasi Laundry
            </h3>

            <p class="subtitle">
                Silakan masuk untuk melanjutkan
            </p>

        </div>


        <!-- =========================
             PESAN ERROR
        ========================== -->

        @if(session('error'))

            <div class="alert alert-danger">

                {{ session('error') }}

            </div>

        @endif


        @if(session('success'))

            <div class="alert alert-success">

                {{ session('success') }}

            </div>

        @endif


        <!-- =========================
             FORM LOGIN
        ========================== -->

        <form action="/login" method="POST">

            @csrf


            <!-- USERNAME -->

            <div class="mb-4">

                <label
                    for="username"
                    class="form-label"
                >
                    Username
                </label>


                <div class="input-group">

                    <span class="input-group-text">

                        <i class="bi bi-person-fill"></i>

                    </span>


                    <input
                        type="text"
                        class="form-control"
                        id="username"
                        name="username"
                        placeholder="Masukkan username"
                        autocomplete="username"
                        required
                        autofocus
                    >

                </div>

            </div>


            <!-- PASSWORD -->

            <div class="mb-4">

                <label
                    for="password"
                    class="form-label"
                >
                    Password
                </label>


                <div class="input-group">

                    <span class="input-group-text">

                        <i class="bi bi-lock-fill"></i>

                    </span>


                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        required
                    >

                </div>

            </div>


            <!-- =========================
                 TOMBOL LOGIN
            ========================== -->

            <button
                type="submit"
                class="btn btn-login w-100"
            >

                <i class="bi bi-box-arrow-in-right me-2"></i>

                Masuk

            </button>

        </form>


        <!-- =========================
             REGISTER
        ========================== -->

        <div class="register-section">

            <span>
                Belum punya akun?
            </span>

            <a
                href="/register"
                class="register-link"
            >
                Daftar di sini
            </a>

        </div>


        <!-- =========================
             FOOTER
        ========================== -->

        <div class="footer-text">

    Laundry

        </div>

    </div>


    <!-- Bootstrap JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>