@extends('layout.app')

@section('title', 'Dashboard')

@section('content')

<div class="min-h-screen bg-slate-50 p-6">

    <!-- Header Dashboard -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-800">
            Dashboard
        </h1>

        <p class="text-slate-500 mt-2">
            Selamat datang di Sistem Informasi Surat.
        </p>
    </div>

    <!-- Welcome Card -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700
                rounded-2xl p-8 text-white shadow-lg mb-8">

        <h2 class="text-2xl font-bold mb-3">
            Selamat Datang!
        </h2>

        <p class="text-blue-100">
            Kelola surat masuk dan surat keluar dengan
            mudah melalui Sistem Informasi Surat.
        </p>

    </div>

    <!-- Menu Dashboard -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Surat Masuk -->
        <div class="bg-white p-6 rounded-xl shadow-sm
                    border border-slate-200
                    hover:shadow-md transition">

            <div class="w-12 h-12 bg-blue-100 rounded-xl
                        flex items-center justify-center mb-4">

                <span class="text-2xl">📥</span>

            </div>

            <h3 class="text-lg font-bold text-slate-800 mb-2">
                Surat Masuk
            </h3>

            <p class="text-slate-500 text-sm mb-5">
                Lihat dan kelola data surat yang masuk.
            </p>

            <a href="{{ url('/surat-masuk') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700
                      text-white px-5 py-2 rounded-lg transition">
                Lihat Surat Masuk
            </a>

        </div>

        <!-- Surat Keluar -->
        <div class="bg-white p-6 rounded-xl shadow-sm
                    border border-slate-200
                    hover:shadow-md transition">

            <div class="w-12 h-12 bg-indigo-100 rounded-xl
                        flex items-center justify-center mb-4">

                <span class="text-2xl">📤</span>

            </div>

            <h3 class="text-lg font-bold text-slate-800 mb-2">
                Surat Keluar
            </h3>

            <p class="text-slate-500 text-sm mb-5">
                Lihat dan kelola data surat yang keluar.
            </p>

            <a href="{{ url('/surat-keluar') }}"
               class="inline-block bg-indigo-600 hover:bg-indigo-700
                      text-white px-5 py-2 rounded-lg transition">
                Lihat Surat Keluar
            </a>

        </div>

    </div>

</div>

@endsection