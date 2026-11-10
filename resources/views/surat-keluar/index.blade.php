
@extends('layout.app')

@section('title', 'Surat Keluar')

@section('content')

<style>
    .surat-container {
        max-width: 1400px;
        margin: 30px auto;
        padding: 0 25px;
    }

    .page-header {
        margin-bottom: 50px;
    }

    .page-header h1 {
        font-size: 32px;
        color: #172b4d;
        margin: 0 0 10px;
        font-weight: bold;
    }

    .page-header p {
        font-size: 18px;
        color: #64748b;
        margin: 0;
    }

    .btn-tambah {
        display: inline-block;
        background: #667eea;
        color: white;
        padding: 12px 20px;
        border-radius: 7px;
        text-decoration: none;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .btn-tambah:hover {
        background: #4c5fd5;
    }

    .table-wrapper {
        overflow-x: auto;
        background: white;
        border: 1px solid #dce3ed;
        border-radius: 15px;
        box-shadow: 0 3px 12px rgba(0,0,0,0.04);
    }

    .table-surat {
        width: 100%;
        border-collapse: collapse;
    }

    .table-surat th {
        background: #667eea;
        color: white;
        padding: 16px;
        text-align: left;
        font-size: 17px;
    }

    .table-surat td {
        padding: 15px;
        border-bottom: 1px solid #eee;
        color: #444;
    }

    .table-surat tr:hover {
        background: #f5f7ff;
    }

    .aksi a,
    .aksi button {
        display: inline-block;
        padding: 7px 12px;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        color: white;
        font-size: 13px;
        cursor: pointer;
        margin: 2px;
    }

    .btn-detail {
        background: #3498db;
    }

    .btn-edit {
        background: #f39c12;
    }

    .btn-hapus {
        background: #e74c3c;
    }

    .kosong {
        text-align: center;
        color: #888;
        padding: 25px !important;
    }

    @media (max-width: 600px) {
        .page-header h1 {
            font-size: 32px;
        }

        .page-header p {
            font-size: 17px;
        }

        .surat-container {
            padding: 0 10px;
        }
    }
</style>

<div class="surat-container">

    <div class="page-header">
        <h1>Surat Keluar</h1>
        <p>Kelola dan lihat seluruh data surat keluar.</p>
    </div>

    @can('manage-letters')
        <a href="{{ route('surat-keluar.create') }}" class="btn-tambah">
            + Tambah Surat Keluar
        </a>
    @endcan

    <div class="table-wrapper">
        <table class="table-surat">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nomor Surat</th>
                    <th>Tanggal</th>
                    <th>Pengirim</th>
                    <th>Perihal</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($suratKeluar as $surat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $surat['nomor_surat'] }}</td>
                        <td>{{ $surat['tanggal'] }}</td>
                        <td>{{ $surat['pengirim'] }}</td>
                        <td>{{ $surat['perihal'] }}</td>

                        <td class="aksi">
                            <a href="{{ route('surat-keluar.show', $surat['id']) }}"
                               class="btn-detail">
                                Detail
                            </a>

                            @can('manage-letters')
                                <a href="{{ route('surat-keluar.edit', $surat['id']) }}"
                                   class="btn-edit">
                                    Edit
                                </a>

                                <form method="POST"
                                      action="{{ route('surat-keluar.destroy', $surat['id']) }}"
                                      style="display:inline"
                                      onsubmit="return confirm('Hapus surat ini?')">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn-hapus">
                                        Hapus
                                    </button>
                                </form>
                            @endcan
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="kosong">
                            Belum ada surat keluar.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection
