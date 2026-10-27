<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomingLetterSeeder extends Seeder
{
    
    public function run(): void
    {
        $data = [
            [
            'nomor_surat' => '001/FT/X/2026',
            'tanggal'     => '2026-04-04',
            'pengirim'    => 'Fakultas Teknik',
            'perihal'     => 'Undangan Rapat',
            'keterangan'  => 'Undangan rapat koordinasi'
        ],
        [
            'nomor_surat' => '002/6AA/X/2026',
            'tanggal'     => '2026-09-27',
            'pengirim'    => 'BAA',
            'perihal'     => 'Edaran Akademik',
            'keterangan'  => 'Informasi kegiatan akademik'
        ],
        [
            'nomor_surat' => '003/LPM/X/2026',
            'tanggal'     => '2026-07-09',
            'pengirim'    => 'LPM',
            'perihal'     => 'Sosialisasi Pedoman',
            'keterangan'  => 'Sosialisasi penelitian'],
        ];
                foreach ($data as $surat) {
            DB::table('incoming_letters')->updateOrInsert(
                ['nomor_surat' => $surat['nomor_surat']],
                $surat + [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]

            );
        }
    }
}
