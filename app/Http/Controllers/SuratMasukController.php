<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index(){
       // return 'halaman surat masuk dari controller';
       $suratMasuk = [
        [
            'id'          => 1,
            'nomor_surat' => '001/FT/X/2026',
            'tanggal'     => '13-10-2026',
            'pengirim'    => 'Fakultas Teknik',
            'perihal'     => 'Undangan Rapat'
        ],
        [
            'id'          => 2,
            'nomor_surat' => '002/6AA/X/2026',
            'tanggal'     => '15-10-2026',
            'pengirim'    => 'BAA',
            'perihal'     => 'Edaran Akademik'
        ],
        [
            'id'          => 3,
            'nomor_surat' => '003/LPM/X/2026',
            'tanggal'     => '18-10-2026',
            'pengirim'    => 'LPM',
            'perihal'     => 'Sosialisasi Pedoman'
        ]
       ];
       return view('surat-masuk.index', compact('suratMasuk'));
    }
    public function show($id){
         $suratMasukShow = [
        1 => [
            'id'          => 1,
            'nomor_surat' => '001/FT/X/2026',
            'tanggal'     => '13-10-2026',
            'pengirim'    => 'Fakultas Teknik',
            'perihal'     => 'Undangan Rapat'
        ],
        2 => [
            'id'          => 2,
            'nomor_surat' => '002/6AA/X/2026',
            'tanggal'     => '15-10-2026',
            'pengirim'    => 'BAA',
            'perihal'     => 'Edaran Akademik'
        ],
        3 => [
            'id'          => 3,
            'nomor_surat' => '003/LPM/X/2026',
            'tanggal'     => '18-10-2026',
            'pengirim'    => 'LPM',
            'perihal'     => 'Sosialisasi Pedoman'
        ]
       ];
       $suratShow = $suratMasukShow[$id] ?? null;
       return view ('surat-masuk.show', compact('suratShow'));
        
    }
}

//mencari project sistem informasi yang dipandu oleh laravel kemudian 
// di pelajari dan di rubah2 