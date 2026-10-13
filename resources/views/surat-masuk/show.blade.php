<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Surat Masuk</title>
</head>
<body>

    <h1>halaman detail surat masuk</h1>
@if($suratShow)

    <p>
        <strong>nomor_surat</strong>
        {{ $suratShow['nomor_surat'] }}
    </p>
<p>
        <strong>Tanggal</strong>
        {{ $suratShow['tanggal'] }}
    </p>
<p>
        <strong>Pengirim</strong>
        {{ $suratShow['pengirim'] }}
    </p>
<p>
        <strong>Perihal</strong>
        {{ $suratShow['perihal'] }}
    </p>
@else
    <p>Surat tidak ditemukan.</p>
@endif

    <a href="{{route('surat-masuk.index')}}">kembali</a>

</body>
</html>