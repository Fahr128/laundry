<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Daftar Akun | Laundry</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

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
        }

        .register-card {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.20);
        }

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
        }

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

        .form-label {
            font-weight: 600;
            color: #343a40;
        }

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
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15);
            border-radius: 8px;
        }

        .btn-register {
            background: #0d6efd;
            border: none;
            color: white;
            padding: 13px;
            border-radius: 10px;
            font-weight: 600;
        }

        .btn-register:hover {
            background: #0b5ed7;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .login-link a {
            text-decoration: none;
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="register-card">

    <!-- Logo -->
    <div class="logo">
        <i class="bi bi-person-plus-fill"></i>
    </div>

    <!-- Judul -->
    <div class="text-center">
        <h3 class="title">Daftar Akun</h3>

        <p class="subtitle">
            Buat akun untuk Aplikasi Laundry
        </p>
    </div>

    <!-- Pesan Error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form -->
    <form action="/register" method="POST">

        @csrf

        <!-- Username -->
        <div class="mb-4">

            <label for="username" class="form-label">
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
                    value="{{ old('username') }}"
                    required
                    autofocus
                >

            </div>

        </div>

        <!-- Password -->
        <div class="mb-4">

            <label for="password" class="form-label">
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
                    required
                >

            </div>

        </div>

        <!-- Konfirmasi Password -->
        <div class="mb-4">

            <label for="password_confirmation" class="form-label">
                Konfirmasi Password
            </label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="bi bi-shield-lock-fill"></i>
                </span>

                <input
                    type="password"
                    class="form-control"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Ulangi password"
                    required
                >

            </div>

        </div>

        <!-- Tombol -->
        <button
            type="submit"
            class="btn btn-register w-100"
        >
            <i class="bi bi-person-plus me-2"></i>
            Daftar Akun
        </button>

    </form>

    <!-- Kembali Login -->
    <div class="login-link">
        Sudah punya akun?
        <a href="/">
            Login di sini
        </a>
    </div>

</div>

</body>
</html>