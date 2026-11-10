@extends('layout.app')

@section('title', 'Detail Surat Masuk')

@section('content')

<div class="min-h-screen bg-slate-50 p-6">

    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-800">
            Detail Surat Masuk
        </h1>

        <p class="text-slate-500 mt-2">
            Informasi lengkap mengenai surat masuk.
        </p>
    </div>

    <!-- Detail Card -->
    <div class="max-w-4xl bg-white rounded-2xl
                shadow-sm border border-slate-200 overflow-hidden">

        <!-- Card Header -->
        <div class="bg-blue-700 px-6 py-5 text-white">

            <h2 class="text-xl font-bold">
                Informasi Surat
            </h2>

            <p class="text-blue-100 text-sm mt-1">
                Detail data surat masuk SIM-Surat
            </p>

        </div>

        <!-- Card Content -->
        <div class="p-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Nomor Surat -->
                <div>
                    <p class="text-sm text-slate-500 font-medium mb-2">
                        Nomor Surat
                    </p>

                    <p class="text-slate-800 font-semibold">
                        {{ $surat->nomor_surat }}
                    </p>
                </div>

                <!-- Tanggal -->
                <div>
                    <p class="text-sm text-slate-500 font-medium mb-2">
                        Tanggal
                    </p>

                    <p class="text-slate-800 font-semibold">
                        {{ $surat->tanggal }}
                    </p>
                </div>

                <!-- Pengirim -->
                <div>
                    <p class="text-sm text-slate-500 font-medium mb-2">
                        Pengirim
                    </p>

                    <p class="text-slate-800 font-semibold">
                        {{ $surat->pengirim }}
                    </p>
                </div>

                <!-- Perihal -->
                <div>
                    <p class="text-sm text-slate-500 font-medium mb-2">
                        Perihal
                    </p>

                    <p class="text-slate-800 font-semibold">
                        {{ $surat->perihal }}
                    </p>
                </div>

            </div>

            <!-- Keterangan -->
            <div class="mt-6 pt-6 border-t border-slate-200">

                <p class="text-sm text-slate-500 font-medium mb-2">
                    Keterangan
                </p>

                <p class="text-slate-700 leading-relaxed">
                    {{ $surat->keterangan ?? '-' }}
                </p>

            </div>

            <!-- Tombol Kembali -->
            <div class="mt-8 pt-5 border-t border-slate-200">

                <a href="{{ route('surat-masuk.index') }}"
                   class="inline-flex items-center gap-2
                          bg-blue-600 hover:bg-blue-700
                          text-white px-5 py-3 rounded-lg
                          font-semibold transition">

                    ← Kembali ke Daftar

                </a>

            </div>

        </div>

    </div>

</div>

@endsection