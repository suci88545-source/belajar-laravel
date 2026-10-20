<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratKeluarController extends Controller
{
    public function index(){
       // return 'halaman surat keluar dari controller';
       $suratKeluar = [
        [
            'id'          => 1,
            'nomor_surat' => '001/FT/X/2029',
            'tanggal'     => '04-04-2026',
            'pengirim'    => 'madha',
            'perihal'     => 'Pemberitahuan'
        ],
        [
            'id'          => 2,
            'nomor_surat' => '027/4MM/X/2026',
            'tanggal'     => '27-09-2026',
            'pengirim'    => 'FM',
            'perihal'     => 'Edaran Undangan'
        ],
        [
            'id'          => 3,
            'nomor_surat' => '003/27I/X/2026',
            'tanggal'     => '09-07-2026',
            'pengirim'    => 'Majalah',
            'perihal'     => 'Sosialisasi'
        ]
       ];
       return view('surat-keluar.index', compact('suratKeluar'));
    }
    public function show($id){
         $suratKeluarShow = [
        1 => [
             'id'          => 1,
            'nomor_surat' => '001/FT/X/2029',
            'tanggal'     => '04-04-2026',
            'pengirim'    => 'madha',
            'perihal'     => 'Pemberitahuan'
        ],
        2 => [
            'id'          => 2,
            'nomor_surat' => '027/4MM/X/2026',
            'tanggal'     => '27-09-2026',
            'pengirim'    => 'FM',
            'perihal'     => 'Edaran Undangan'
        ],
        3 => [
             'id'          => 3,
            'nomor_surat' => '003/27I/X/2026',
            'tanggal'     => '09-07-2026',
            'pengirim'    => 'Majalah',
            'perihal'     => 'Sosialisasi'
        ]
       ];
       $suratShow = $suratKeluarShow[$id] ?? null;
       return view ('surat-keluar.show', compact('suratShow'));
        
    }
}

//mencari project sistem informasi yang dipandu oleh laravel kemudian 
// di pelajari dan di rubah2 