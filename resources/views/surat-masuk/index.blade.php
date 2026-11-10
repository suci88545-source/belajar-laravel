@extends('layout.app')

@section('title', 'Daftar Surat Masuk')

@section('content')

<div class="min-h-screen bg-slate-50 p-6">

    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center
                sm:justify-between gap-4 mb-8">

        <div>
            <h1 class="text-3xl font-bold text-slate-800">
                Surat Masuk
            </h1>

            <p class="text-slate-500 mt-2">
                Kelola dan lihat seluruh data surat masuk.
            </p>
        </div>

        <a href="{{ route('surat-masuk.create') }}"
           class="inline-flex items-center justify-center gap-2
                  bg-blue-600 hover:bg-blue-700 text-white
                  px-5 py-3 rounded-lg font-semibold
                  shadow-sm transition">

            <span class="text-xl">+</span>
            Tambah Surat

        </a>

    </div>

    <!-- Tabel Surat -->
    <div class="bg-white rounded-xl shadow-sm
                border border-slate-200 overflow-hidden">

        <div class="p-5 border-b border-slate-200">

            <h2 class="text-lg font-bold text-slate-800">
                Daftar Data Surat Masuk
            </h2>

            <p class="text-sm text-slate-500 mt-1">
                Informasi surat yang telah diterima.
            </p>

        </div>

        <div class="overflow-x-auto">

            <table class="w-full text-sm text-left">

                <thead class="bg-blue-50 text-slate-700">

                    <tr>
                        <th class="px-6 py-4 font-semibold">No</th>
                        <th class="px-6 py-4 font-semibold">Nomor Surat</th>
                        <th class="px-6 py-4 font-semibold">Tanggal</th>
                        <th class="px-6 py-4 font-semibold">Pengirim</th>
                        <th class="px-6 py-4 font-semibold">Perihal</th>
                        <th class="px-6 py-4 font-semibold text-center">Aksi</th>
                    </tr>

                </thead>

                <tbody class="divide-y divide-slate-100">

                    @forelse ($suratMasuk as $surat)

                        <tr class="hover:bg-blue-50/50 transition">

                            <td class="px-6 py-4 text-slate-600">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-4 font-medium text-slate-800">
                                {{ $surat->nomor_surat }}
                            </td>

                            <td class="px-6 py-4 text-slate-600">
                                {{ $surat->tanggal }}
                            </td>

                            <td class="px-6 py-4 text-slate-600">
                                {{ $surat->pengirim }}
                            </td>

                            <td class="px-6 py-4 text-slate-600">
                                {{ $surat->perihal }}
                            </td>

                            <td class="px-6 py-4">

                                <div class="flex items-center justify-center gap-2">

                                    <!-- Detail -->
                                    <a href="{{ route('surat-masuk.show', $surat->id) }}"
                                       class="bg-blue-100 hover:bg-blue-200
                                              text-blue-700 px-3 py-2
                                              rounded-lg font-medium transition">
                                        Detail
                                    </a>

                                    <!-- Edit -->
                                    <a href="{{ route('surat-masuk.edit', $surat->id) }}"
                                       class="bg-amber-100 hover:bg-amber-200
                                              text-amber-700 px-3 py-2
                                              rounded-lg font-medium transition">
                                        Edit
                                    </a>

                                    <!-- Hapus -->
                                    <form action="{{ route('surat-masuk.destroy', $surat->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Hapus surat ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="bg-red-100 hover:bg-red-200
                                                       text-red-700 px-3 py-2
                                                       rounded-lg font-medium transition">
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="6"
                                class="px-6 py-12 text-center">

                                <div class="text-4xl mb-3">📭</div>

                                <p class="text-slate-600 font-semibold">
                                    Belum ada surat masuk.
                                </p>

                                <p class="text-slate-400 text-sm mt-1">
                                    Silakan tambahkan data surat masuk.
                                </p>

                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection