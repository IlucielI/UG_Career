<?php

namespace App\Imports;

use App\Models\;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class ImportHasilAlumni implements ToModel
{
    public function model(array $row)
    {
        return new Produk([
            'kode_barang'     => $row[0],
            'jenis_barang'    => $row[1],
            'nama_barang'    => $row[2],
            'tipe'    => $row[3],
            'kategori_id'    => $row[4],
            'harga_beli'    => $row[5],
            'harga_jual'    => $row[6],
            'keterangan'    => $row[7],
        ]);
    }
}
