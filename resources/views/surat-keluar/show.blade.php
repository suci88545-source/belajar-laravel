@extends('layout.app')

@section('title', 'Surat Keluar')

@section('content')

<style>
    .detail-container {
        max-width: 750px;
        margin: 30px auto;
        padding: 25px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }

    .detail-container h1 {
        color: #333;
        font-size: 25px;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #667eea;
    }

    .detail-item {
        display: flex;
        padding: 15px;
        border-bottom: 1px solid #eee;
        gap: 10px;
    }

    .detail-item strong {
        width: 140px;
        color: #555;
        text-transform: capitalize;
    }

    .detail-item span {
        color: #333;
    }

    .btn-kembali {
        display: inline-block;
        margin-top: 25px;
        padding: 10px 20px;
        background: #667eea;
        color: white;
        text-decoration: none;
        border-radius: 6px;
        transition: 0.3s;
    }

    .btn-kembali:hover {
        background: #4c5fd5;
    }

    .pesan-kosong {
        padding: 15px;
        background: #fff3cd;
        color: #856404;
        border-radius: 6px;
    }

    @media (max-width: 600px) {
        .detail-item {
            flex-direction: column;
            gap: 5px;
        }

        .detail-item strong {
            width: 100%;
        }
    }
</style>

<div class="detail-container">

    <h1>Detail Surat Keluar</h1>

    @if($suratShow)

        <div class="detail-item">
            <strong>Nomor Surat:</strong>
            <span>{{ $suratShow['nomor_surat'] }}</span>
        </div>

        <div class="detail-item">
            <strong>Tanggal:</strong>
            <span>{{ $suratShow['tanggal'] }}</span>
        </div>

        <div class="detail-item">
            <strong>Pengirim:</strong>
            <span>{{ $suratShow['pengirim'] }}</span>
        </div>

        <div class="detail-item">
            <strong>Perihal:</strong>
            <span>{{ $suratShow['perihal'] }}</span>
        </div>

    @else

        <p class="pesan-kosong">Surat tidak ditemukan.</p>

    @endif

    <a href="{{ route('surat-keluar.index') }}" class="btn-kembali">
        ← Kembali
    </a>

</div>

@endsection