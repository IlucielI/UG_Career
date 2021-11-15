<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdiSeeder extends Seeder
{

    public function run()
    {
        $array=[
            [ 'kd_prodi' => '55001', 'jenjang' => 'S3',  'nama_prodi' => 'Ilmu Komputer', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '55002', 'jenjang' => 'S3',  'nama_prodi' => 'Teknik Informatika', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '60001', 'jenjang' => 'S3',  'nama_prodi' => 'Ilmu Ekonomi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '73001', 'jenjang' => 'S3',  'nama_prodi' => 'Ilmu Psikologi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '20101', 'jenjang' => 'S2',  'nama_prodi' => 'Teknik Elektro', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '21101', 'jenjang' => 'S2',  'nama_prodi' => 'Teknik Mesin', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '22101', 'jenjang' => 'S2',  'nama_prodi' => 'Teknik Sipil', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '57101', 'jenjang' => 'S2',  'nama_prodi' => 'Manajemen Sistem Informasi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '61101', 'jenjang' => 'S2',  'nama_prodi' => 'Manajemen', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '70101', 'jenjang' => 'S2',  'nama_prodi' => 'Komunikasi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '73101', 'jenjang' => 'S2',  'nama_prodi' => 'Psikologi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '73103', 'jenjang' => 'S2',  'nama_prodi' => 'Psikologi Profesi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '79102', 'jenjang' => 'S2',  'nama_prodi' => 'Sastra Inggris', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '20201', 'jenjang' => 'S1',  'nama_prodi' => 'Teknik  Elektro', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '21201', 'jenjang' => 'S1',  'nama_prodi' => 'Teknik  Mesin', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '22201', 'jenjang' => 'S1',  'nama_prodi' => 'Teknik  Sipil', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '23201', 'jenjang' => 'S1',  'nama_prodi' => 'Arsitektur', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '26201', 'jenjang' => 'S1',  'nama_prodi' => 'Teknik Industri', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '54211', 'jenjang' => 'S1',  'nama_prodi' => 'Agroteknologi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '55201', 'jenjang' => 'S1',  'nama_prodi' => 'Teknik Informatika', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '56201', 'jenjang' => 'S1',  'nama_prodi' => 'Sistem Komputer', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '57201', 'jenjang' => 'S1',  'nama_prodi' => 'Sistem Informasi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '60202', 'jenjang' => 'S1',  'nama_prodi' => 'Ekonomi Syariah', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '61201', 'jenjang' => 'S1',  'nama_prodi' => 'Manajemen', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '62201', 'jenjang' => 'S1',  'nama_prodi' => 'Akuntansi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '70201', 'jenjang' => 'S1',  'nama_prodi' => 'Ilmu Komunkasi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '73201', 'jenjang' => 'S1',  'nama_prodi' => 'Psikologi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '79202', 'jenjang' => 'S1',  'nama_prodi' => 'Sastra Inggris', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '93202', 'jenjang' => 'S1',  'nama_prodi' => 'Pariwisata', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '56401', 'jenjang' => 'D3',  'nama_prodi' => 'Teknik Komputer', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '57401', 'jenjang' => 'D3',  'nama_prodi' => 'Manajemen Informatika', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '61404', 'jenjang' => 'D3',  'nama_prodi' => 'Manajemen Pemasaran', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '61406', 'jenjang' => 'D3',  'nama_prodi' => 'Manajemen Keuangan', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '62401', 'jenjang' => 'D3',  'nama_prodi' => 'Akuntasi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '15401', 'jenjang' => 'D3',  'nama_prodi' => 'Kebidanan', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '79209', 'jenjang' => 'S1',  'nama_prodi' => 'Sastra Tiogkok', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '90221', 'jenjang' => 'S1',  'nama_prodi' => 'Desain Interior', 'created_at' => now(), 'updated_at' => now() ],
            [ 'kd_prodi' => '48201', 'jenjang' => 'S1',  'nama_prodi' => 'Farmasi', 'created_at' => now(), 'updated_at' => now() ],
        ];
        foreach($array as $key => $row){
            DB::table('prodis')->insert($row);
        }

    }
}
