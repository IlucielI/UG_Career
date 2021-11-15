<?php

namespace App\Imports;

use App\Models\JawabanResponden;
use App\Models\JawabanRespondendetail;
use App\Models\User;
use App\Models\Perusahaan;
use App\Models\PilihanJawaban;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class JawabanRespondenPerusahaanImport implements ToCollection, WithHeadingRow
{

    public function collection(Collection $rows)
    {
        $len = count($rows[0]) - 8;
        $i = 1;
        foreach ($rows as $row) {
            $cek_npm = User::where('username', $row["email"])->count();
            if ($cek_npm == 0) {
                User::create([
                    "name" => $row["nama_perusahaan"],
                    "username" => $row["email"],
                    "email" => ($row['email'] != '') ? $row['email'] : '',
                    "email_verified_at" => now(),
                    "password" => Hash::make($row["nama_perusahaan"]),
                    "forget_password" => Crypt::encryptString($row["nama_perusahaan"]),
                    "level" => "perusahaan"
                ]);
                $get_id_user = DB::getPdo()->lastInsertId();
                Perusahaan::create([
                    "no_telp" => $row["no_telp"],
                    "alamat" => $row["alamat"],
                    "url_web" => ($row["url_web"] != '') ? $row["url_web"] : '',
                    "nama_cp" => $row["nama_cp"],
                    "email_cp" => ($row["email_cp"] != '') ? $row["email_cp"] : '',
                    "jabatan" => $row["jabatan"],
                    "id_user" => $get_id_user,
                ]);
                JawabanResponden::create([
                    "kategori_responden" => "perusahaan",
                    "id_user" => $get_id_user,
                ]);
                $get_id_responden = DB::getPdo()->lastInsertId();
                foreach ($row as $key => $val) {
                    if ($i > 8) {
                        $kd_pertanyaan = PilihanJawaban::select('kd_pertanyaan')->where('kd_jawaban', $key)->leftJoin('pertanyaans', 'pertanyaans.id', '=', 'pilihanjawabans.id_pertanyaan')->first();
                        if ($kd_pertanyaan) {
                            JawabanRespondendetail::create([
                                "kd_jawaban" => $key,
                                "kd_pertanyaan" => $kd_pertanyaan['kd_pertanyaan'],
                                "jawaban" => $val,
                                "id_jawabanresponden" => $get_id_responden,
                            ]);
                        } else {
                            continue;
                        }
                    }
                    $i++;
                }
            } else {
                $user_id = Perusahaan::select('id_user')->where('no_telp', $row["no_telp"])->first();
                JawabanResponden::create([
                    "kategori_responden" => "perusahaan",
                    "id_user" => $user_id['id_user'],
                ]);
                $get_id_responden = DB::getPdo()->lastInsertId();
                foreach ($row as $key => $val) {
                    if ($i > 8) {
                        $kd_pertanyaan = PilihanJawaban::select('kd_pertanyaan')->where('kd_jawaban', $key)->leftJoin('pertanyaans', 'pertanyaans.id', '=', 'pilihanjawabans.id_pertanyaan')->first();
                        if ($kd_pertanyaan) {
                            JawabanRespondendetail::create([
                                "kd_jawaban" => $key,
                                "kd_pertanyaan" => $kd_pertanyaan['kd_pertanyaan'],
                                "jawaban" => $val,
                                "id_jawabanresponden" => $get_id_responden,
                            ]);
                        } else {
                            continue;
                        }
                    }
                    $i++;
                }
            }
            $i = 1;
        }
    }
}