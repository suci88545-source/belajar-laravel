@extends('layout.app')

@section('title', 'Surat Masuk')

@section('content')
    <h1>halaman detail surat masuk</h1>
@if($suratShow)

    <p>
        <strong>nomor surat :</strong>
        {{ $suratShow['nomor_surat'] }}
    </p>
<p>
        <strong>Tanggal :</strong>
        {{ $suratShow['tanggal'] }}
    </p>
<p>
        <strong>Pengirim :</strong>
        {{ $suratShow['pengirim'] }}
    </p>
<p>
        <strong>Perihal :</strong>
        {{ $suratShow['perihal'] }}
    </p>
@else
    <p>Surat tidak ditemukan.</p>
@endif

    <a href="{{route('surat-masuk.index')}}">kembali</a>
@endsection