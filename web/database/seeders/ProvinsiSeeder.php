<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    public function run()
    {
        
            $array=[
            [ 'nama_provinsi' => 'D.K.I. Jakarta', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Jawa Barat', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Jawa Tengah', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'D.I. Yogyakarta', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Jawa Timur', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Aceh', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Sumatera Utara', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Sumatera Barat', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Riau', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Jambi', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Sumatera Selatan', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Lampung', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Kalimantan Barat', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Kalimantan Tengah', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Kalimantan Selatan', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Kalimantan Timur', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Sulawesi Utara', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Sulawesi Tengah', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Sulawesi Selatan', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Sulawesi Tenggara', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Maluku', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Bali', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Nusa Tenggara Barat', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Nusa Tenggara Timur', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Papua', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Bengkulu', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Maluku Utara', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Banten', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Bangka Belitung', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Gorontalo', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Kepulauan Riau', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Papua Barat', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Sulawesi Barat', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Kalimantan Utara', 'created_at' => now(), 'updated_at' => now() ],
            [ 'nama_provinsi' => 'Luar Negeri', 'created_at' => now(), 'updated_at' => now() ],
            ];
            foreach($array as $key => $row){
                DB::table('provinsis')->insert($row);
            }
            
    }
}
