@extends('layout.app')

@section('title', 'Surat Masuk')

@section('content')
    <h1>Halaman ini menampilkan data surat masuk</h1>
    <table border="1" cellpadding = "10">
        <thead>
            <tr>
            <th>No urut</th>
            <th>Nomor surat</th>
            <th>Tanggal</th>
            <th>Pengirim</th>
            <th>Perihal</th>
            <th>Aksi</th>
            </tr>
</thead>
<tbody>
    @foreach($suratMasuk as $surat)
    <tr>
    <td>{{ $loop-> iteration}}</td>
    <td>{{ $surat['nomor_surat'] }}</td>
    <td>{{ $surat['tanggal'] }}</td>
    <td>{{ $surat['pengirim'] }}</td>
    <td>{{ $surat['perihal'] }}</td>
    <td>
        <a href="{{route('surat-masuk.show', $surat['id']) }}">Detail</a>
    </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection