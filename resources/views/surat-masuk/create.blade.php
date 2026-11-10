@extends('layout.app')

@section('title', 'Tambah Surat Masuk')

@section('content')

<style>
    .form-container {
        max-width: 750px;
        margin: 30px auto;
        padding: 30px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    }

    .form-container h1 {
        color: #333;
        font-size: 26px;
        margin-bottom: 25px;
        padding-bottom: 15px;
        border-bottom: 2px solid #667eea;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #444;
        font-weight: 600;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 7px;
        font-size: 14px;
        box-sizing: border-box;
        outline: none;
        transition: 0.3s;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #667eea;
        box-shadow: 0 0 5px rgba(102,126,234,0.2);
    }

    .form-group textarea {
        min-height: 110px;
        resize: vertical;
    }

    .error-message {
        display: block;
        color: #e74c3c;
        font-size: 13px;
        margin-top: 6px;
    }

    .form-actions {
        display: flex;
        gap: 10px;
        margin-top: 25px;
    }

    .btn-simpan,
    .btn-batal {
        padding: 11px 22px;
        border: none;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn-simpan {
        background: #667eea;
        color: white;
    }

    .btn-simpan:hover {
        background: #4c5fd5;
    }

    .btn-batal {
        background: #e5e7eb;
        color: #333;
    }

    .btn-batal:hover {
        background: #d1d5db;
    }

    @media (max-width: 600px) {
        .form-container {
            margin: 15px;
            padding: 20px;
        }

        .form-actions {
            flex-wrap: wrap;
        }
    }
</style>

<div class="form-container">

    <h1>Tambah Surat Masuk</h1>

    <form action="{{ route('surat-masuk.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nomor Surat</label>
            <input name="nomor_surat" value="{{ old('nomor_surat') }}">

            @error('nomor_surat')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" value="{{ old('tanggal') }}">

            @error('tanggal')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Pengirim</label>
            <input name="pengirim" value="{{ old('pengirim') }}">

            @error('pengirim')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Perihal</label>
            <input name="perihal" value="{{ old('perihal') }}">

            @error('perihal')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan">{{ old('keterangan') }}</textarea>

            @error('keterangan')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-simpan">Simpan</button>

            <a href="{{ route('surat-masuk.index') }}" class="btn-batal">
                Batal
            </a>
        </div>

    </form>

</div>

@endsection