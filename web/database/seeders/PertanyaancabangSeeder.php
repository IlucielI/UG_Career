<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaancabangSeeder extends Seeder
{
    
    public function run()
    {
    $array =[
        ['kd_cabang' => 'F1761','pertanyaan_cabang' => 'Etika', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1763','pertanyaan_cabang' => 'Keahlian berdasarkan bidang ilmu', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1765','pertanyaan_cabang' => 'Bahasa Inggris', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1767','pertanyaan_cabang' => 'Penggunaan Teknologi Informasi', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1769','pertanyaan_cabang' => 'Komunikasi', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1771','pertanyaan_cabang' => 'Kerja sama tim', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1773','pertanyaan_cabang' => 'Pengembangan Diri', 'id_pertanyaan' => '18', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1762','pertanyaan_cabang' => 'Etika', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1764','pertanyaan_cabang' => 'Keahlian berdasarkan bidang ilmu', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1766','pertanyaan_cabang' => 'Bahasa Inggris', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1768','pertanyaan_cabang' => 'Penggunaan Teknologi Informasi', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1770','pertanyaan_cabang' => 'Komunikasi', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1772','pertanyaan_cabang' => 'Kerja sama tim', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F1774','pertanyaan_cabang' => 'Pengembangan Diri', 'id_pertanyaan' => '19', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F21','pertanyaan_cabang' => 'Perkuliahan', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F22','pertanyaan_cabang' => 'Demonstrasi', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F23','pertanyaan_cabang' => 'Partisipasi dalam Proyek Riset', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F24','pertanyaan_cabang' => 'Magang', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F25','pertanyaan_cabang' => 'Praktikum', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F26','pertanyaan_cabang' => 'Kerja Lapangan', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'F27','pertanyaan_cabang' => 'Diskusi', 'id_pertanyaan' => '20', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P7A','pertanyaan_cabang' => 'Motivasi lulusan dalam menyelesaikan suatu pekerjaan', 'id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P7B','pertanyaan_cabang' => 'Kreativitas lulusan dalam menyelesaikan suatu pekerjaan', 'id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P7C','pertanyaan_cabang' => 'Motivasi lulusan dalam peningkatan karir', 'id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P7D','pertanyaan_cabang' => 'Motivasi lulusan dalam menambah pengetahuan / keahlian yang dimilikinya', 'id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P7E','pertanyaan_cabang' => 'Motivasi lulusan dalam menambah pengetahuan / keahlian di luar bidang ilmu yang dimilikinya', 'id_pertanyaan' => '29', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P8A','pertanyaan_cabang' => 'Kemampuan lulusan dalam melakukan negosiasi', 'id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P8B','pertanyaan_cabang' => 'Kemampuan lulusan dalam memecahkan permasalahan', 'id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P8C','pertanyaan_cabang' => 'Kemampuan lulusan dalam menuangkan ide / inovasi', 'id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P8D','pertanyaan_cabang' => 'Kemampuan lulusan dalam menciptakan suatu lapangan kerja', 'id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P8E','pertanyaan_cabang' => 'Kemampuan lulusan dalam berpikir logis', 'id_pertanyaan' => '30', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P9A','pertanyaan_cabang' => 'Kemampuan lulusan dalam menyelesaikan pekerjaan', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P9B','pertanyaan_cabang' => 'Kemampuan lulusan dalam melaporkan hasil pekerjaannya', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P9C','pertanyaan_cabang' => 'Kemampuan lulusan dalam mengoperasikan komputer / alat bantu modern / penggunaan teknologi informasi', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P9D','pertanyaan_cabang' => 'Kemampuan lulusan dalam menangani permasalahan', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P9E','pertanyaan_cabang' => 'Kemampuan lulusan dalam memenuhi segala aturan / petunjuk kerja', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P9F','pertanyaan_cabang' => 'Kemampuan lulusan dalam bekerja mandiri', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P9G','pertanyaan_cabang' => 'Kemampuan lulusan dalam memenuhi pekerjaan diluar pekerjaannya sendiri', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P9H','pertanyaan_cabang' => 'Kemampuan lulusan dalam mengerjakan pekerjaan sesuai bidang ilmu yang dimilikinya', 'id_pertanyaan' => '31', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P10A','pertanyaan_cabang' => 'Kemampuan lulusan dalam berkomunikasi dengan pimpinan', 'id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P10B','pertanyaan_cabang' => 'Kemampuan lulusan dalam berkomunikasi dengan rekan kerja', 'id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P10C','pertanyaan_cabang' => 'Kemampuan lulusan dalam berkomunikasi menggunakan bahasa asing', 'id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P10D','pertanyaan_cabang' => 'Kemampuan lulusan dalam bekerja pada bagian / divisinya', 'id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P10E','pertanyaan_cabang' => 'Integritas (etika dan moral) lulusan di tempat kerja', 'id_pertanyaan' => '32', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P11A','pertanyaan_cabang' => 'Kemampuan lulusan dalam menyelesaikan pekerjaan rutin', 'id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P11B','pertanyaan_cabang' => 'Kemampuan lulusan dalam membantu rekan kerja', 'id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P11C','pertanyaan_cabang' => 'Kemampuan lulusan dalam menyelesaikan masalah tim', 'id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],
        ['kd_cabang' => 'P11D','pertanyaan_cabang' => 'Kemampuan lulusan dalam bekerjasama dalam tim', 'id_pertanyaan' => '33', 'created_at' => now(), 'updated_at' => now()],        
    ];
    foreach($array as $key => $row){
        DB::table('pertanyaancabangs')->insert($row);
    }

    }
}
