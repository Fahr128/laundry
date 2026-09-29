<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Login
    |--------------------------------------------------------------------------
    */

    Route::get('/', function () {
        return view('login');
    })->name('login');


    Route::post('/login', function (Request $request) {

        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->route('dashboard');
        }

        return back()
            ->withInput($request->only('username'))
            ->with('error', 'Username atau password salah.');

    })->name('login.process');


    /*
    |--------------------------------------------------------------------------
    | Register
    |--------------------------------------------------------------------------
    */

    Route::get('/register', function () {
        return view('register');
    })->name('register');


    Route::post('/register', function (Request $request) {

        $validated = $request->validate([
            'username' => [
                'required',
                'string',
                'max:255',
                'unique:users,username',
            ],

            'password' => [
                'required',
                'string',
                'min:6',
                'confirmed',
            ],
        ]);


        User::create([
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
        ]);


        return redirect()
            ->route('login')
            ->with(
                'success',
                'Akun berhasil dibuat. Silakan login.'
            );

    })->name('register.process');

});


/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Laundry
    |--------------------------------------------------------------------------
    */

    Route::get('/laundry', function () {
        return view('laundry');
    })->name('laundry');


    /*
    |--------------------------------------------------------------------------
    | Laundry Terdekat
    |--------------------------------------------------------------------------
    */

    Route::get('/laundry/terdekat', function () {
        return view('laundry.terdekat');
    })->name('laundry.terdekat');


    /*
    |--------------------------------------------------------------------------
    | Peta
    |--------------------------------------------------------------------------
    */

    Route::get('/peta', function () {
        return view('peta');
    })->name('peta');


    /*
    |--------------------------------------------------------------------------
    | Transaksi
    |--------------------------------------------------------------------------
    */

    Route::get('/transaksi', function () {
        return view('transaksi');
    })->name('transaksi');


    /*
    |--------------------------------------------------------------------------
    | History
    |--------------------------------------------------------------------------
    */

    Route::get('/history', function () {
        return view('history');
    })->name('history');


    /*
    |--------------------------------------------------------------------------
    | Profile
    |--------------------------------------------------------------------------
    */

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');


    /*
    |--------------------------------------------------------------------------
    | Logout
    |--------------------------------------------------------------------------
    */

    Route::post('/logout', function (Request $request) {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('success', 'Berhasil logout.');

    })->name('logout');

});
