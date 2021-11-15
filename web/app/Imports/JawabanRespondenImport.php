<?php

namespace App\Imports;

use App\Models\JawabanResponden;
use App\Models\JawabanRespondendetail;
use App\Models\User;
use App\Models\Alumni;
use App\Models\PilihanJawaban;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class JawabanRespondenImport implements ToCollection, WithHeadingRow
{

    public function collection(Collection $rows)
    {
        $len = count($rows[0]) - 8;
        $i = 1;
        foreach ($rows as $row) {
            $cek_npm = Alumni::where('npm', $row["nimhsmsmh"])->count();
            if ($cek_npm == 0) {
                User::create([
                    "name" => $row["nmmhsmsmh"],
                    "username" => $row["nimhsmsmh"],
                    "email" => ($row['emailmsmh'] != '') ? $row['emailmsmh'] : '',
                    "email_verified_at" => now(),
                    "password" => Hash::make($row["nimhsmsmh"]),
                    "forget_password" => Crypt::encryptString($row["nimhsmsmh"]),
                    "level" => "alumni"
                ]);
                $get_id_user = DB::getPdo()->lastInsertId();
                Alumni::create([
                    "npm" => $row["nimhsmsmh"],
                    "tahun_masuk" => "",
                    "tahun_lulus" => ($row["tahun_lulus"] != '') ? $row["tahun_lulus"] : '',
                    "nik" => $row["nik"],
                    "npwp" => ($row["npwp"] != '') ? $row["npwp"] : '',
                    "no_telp" => $row["telpomsmh"],
                    "id_user" => $get_id_user,
                    "id_prodi" => 22,
                ]);
                JawabanResponden::create([
                    "kategori_responden" => "alumni",
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
                $user_id = Alumni::select('id_user')->where('npm', $row["nimhsmsmh"])->first();
                JawabanResponden::create([
                    "kategori_responden" => "alumni",
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
