<?php

namespace App\Exports;

use App\Models\Jawabanresponden;
use App\Models\Jawabanrespondendetail;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class HasilRespondenDetail implements FromView
{
    protected $date;

    function __construct($date)
    {
        $ex = explode(' s/d ', $date);
        $this->from = date('Y-m-d', strtotime($ex[0]));
        $this->to = date('Y-m-d', strtotime($ex[1]));
    }

    public function view(): View
    {
        $jawabanrespondens = Jawabanresponden::where('kategori_responden', '=', 'alumni')->where('created_at', ">=", $this->from . ' 00:00:00')->where('created_at', "<=", $this->to . ' 23:59:59')->get();
        $kd_pertanyaans = Jawabanrespondendetail::leftJoin('jawabanrespondens', 'jawabanrespondens.id', '=', 'jawabanrespondendetails.id_jawabanresponden')->leftJoin('pertanyaans', 'pertanyaans.kd_pertanyaan', '=', 'jawabanrespondendetails.kd_pertanyaan')
            ->where('jawabanrespondens.kategori_responden', '=', 'alumni')->where('pertanyaans.no_tampilan', '!=', null)
            ->select('jawabanrespondendetails.kd_jawaban', 'pertanyaans.no_tampilan')->orderBy('pertanyaans.no_tampilan')->orderBy('jawabanrespondendetails.kd_jawaban')->groupBy('jawabanrespondendetails.kd_jawaban')->groupBy('pertanyaans.no_tampilan')
            ->get();
        // $kd_pertanyaans = [];
        // foreach ($kd_pertanyaan_querys as $query) {
        //     $kd_pertanyaans[$query->no_tampilan . "-" . $query->kd_jawaban] = $query;
        // }
        // ksort($kd_pertanyaans, SORT_NATURAL);
        // dd($jawabanrespondens);
        return view('admin.exports.jawabanrespondenalumni', compact('jawabanrespondens', 'kd_pertanyaans'));
    }
}
