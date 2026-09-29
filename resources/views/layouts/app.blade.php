<!DOCTYPE html> <html lang="id"> <head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>@yield('title', 'Aplikasi Laundry')</title>

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
        background: #f5f7fb;
        font-family: Arial, Helvetica, sans-serif;
        color: #212529;
    }

    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        background: #0d6efd;
        color: white;
        padding: 20px 15px;
        overflow-y: auto;
        z-index: 1050;
    }

    .sidebar-logo {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        font-size: 23px;
        font-weight: 700;
        margin-bottom: 30px;
        color: white;
    }

    .sidebar-logo i {
        font-size: 30px;
    }

    .menu {
        width: 100%;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 15px;
        margin-bottom: 5px;
        border: none;
        border-radius: 8px;
        background: transparent;
        color: white;
        text-decoration: none;
        transition: all .2s ease;
        cursor: pointer;
        text-align: left;
        font-size: 15px;
    }

    .menu:hover {
        background: rgba(255, 255, 255, .15);
        color: white;
    }

    .menu.active {
        background: white;
        color: #0d6efd;
        font-weight: 600;
    }

    .menu i {
        width: 20px;
        min-width: 20px;
        font-size: 18px;
        text-align: center;
    }

    .sidebar hr {
        border-color: rgba(255, 255, 255, .3);
        margin: 20px 0;
    }

    .main {
        margin-left: 250px;
        min-height: 100vh;
    }

    .topbar {
        height: 70px;
        background: white;
        border-bottom: 1px solid #e9ecef;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 30px;
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .page-title {
        margin: 0;
        font-size: 22px;
        font-weight: 600;
    }

    .user-info {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .username {
        font-size: 14px;
        font-weight: 500;
    }

    .user-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: #e7f1ff;
        color: #0d6efd;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
    }

    .content {
        padding: 30px;
        min-height: calc(100vh - 70px);
    }

    @media (max-width: 768px) {

        .sidebar {
            width: 70px;
            padding: 20px 10px;
        }

        .sidebar-logo span,
        .menu span {
            display: none;
        }

        .sidebar-logo {
            justify-content: center;
        }

        .menu {
            justify-content: center;
            padding: 12px 10px;
        }

        .menu i {
            width: auto;
            min-width: auto;
            font-size: 20px;
        }

        .main {
            margin-left: 70px;
        }

        .content {
            padding: 20px;
        }

        .topbar {
            padding: 0 15px;
        }

        .username {
            display: none;
        }

        .page-title {
            font-size: 18px;
        }
    }

</style>

</head> <body> <div class="sidebar">
<div class="sidebar-logo">

    <i class="bi bi-droplet-fill"></i>

    <span>
        Laundry
    </span>

</div>


<a
    href="{{ route('dashboard') }}"
    class="menu {{ request()->routeIs('dashboard') ? 'active' : '' }}"
>

    <i class="bi bi-speedometer2"></i>

    <span>
        Dashboard
    </span>

</a>


<a
    href="{{ route('laundry') }}"
    class="menu {{ request()->routeIs('laundry') ? 'active' : '' }}"
>

    <i class="bi bi-basket-fill"></i>

    <span>
        Laundry Pakaian
    </span>

</a>


<a
    href="{{ route('laundry.terdekat') }}"
    class="menu {{ request()->routeIs('laundry.terdekat') ? 'active' : '' }}"
>

    <i class="bi bi-shop"></i>

    <span>
        Laundry Terdekat
    </span>

</a>


<a
    href="{{ route('peta') }}"
    class="menu {{ request()->routeIs('peta') ? 'active' : '' }}"
>

    <i class="bi bi-map-fill"></i>

    <span>
        Peta
    </span>

</a>


<a
    href="{{ route('transaksi') }}"
    class="menu {{ request()->routeIs('transaksi') ? 'active' : '' }}"
>

    <i class="bi bi-receipt"></i>

    <span>
        Transaksi
    </span>

</a>


<a
    href="{{ route('history') }}"
    class="menu {{ request()->routeIs('history') ? 'active' : '' }}"
>

    <i class="bi bi-clock-history"></i>

    <span>
        History
    </span>

</a>


<a
    href="{{ route('profile') }}"
    class="menu {{ request()->routeIs('profile') ? 'active' : '' }}"
>

    <i class="bi bi-person-circle"></i>

    <span>
        Profile
    </span>

</a>


<hr>


<form
    action="{{ route('logout') }}"
    method="POST"
    class="m-0"
>

    @csrf

    <button
        type="submit"
        class="menu"
    >

        <i class="bi bi-box-arrow-right"></i>

        <span>
            Logout
        </span>

    </button>

</form>

</div> <div class="main">
<div class="topbar">

    <h5 class="page-title">

        @yield('page-title', 'Dashboard')

    </h5>


    <div class="user-info">

        <span class="username text-muted">

            {{ auth()->user()->username ?? 'User' }}

        </span>


        <div class="user-icon">

            <i class="bi bi-person-fill"></i>

        </div>

    </div>

</div>


<main class="content">

    @yield('content')

</main>

</div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script> </body> </html>