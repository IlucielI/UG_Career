<?php

namespace App\Imports;

use App\Models\JawabanRespondenDetail;
use Maatwebsite\Excel\Concerns\ToModel;

class JawabanRespondenDetailImport implements ToModel
{
    public function model(array $row)
    {
        return new JawabanRespondenDetail([
            //
        ]);
    }
}
