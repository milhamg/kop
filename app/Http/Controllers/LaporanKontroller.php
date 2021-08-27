<?php

namespace App\Http\Controllers;

use App\Models\Kredit;
use Illuminate\Http\Request;

class LaporanKontroller extends Controller
{
    public function kridit(){
        $list_kredit = Kredit::all();
        return view('laporan.kredit', compact('list_kredit'));
    }

    public function jurnalBendahara(Request $request){
        $list_kredit = Kredit::query();
        if($request->has(['start_date', 'end_date'])){
            $list_kredit->whereDate("tanggal_pinjam", ">=", $request->start_date)->whereDate("tanggal_pinjam", "<=",
                $request->end_date);
        }
        $list_kredit = $list_kredit->get();
        return view('laporan.jurnal-bendahara', compact('list_kredit'));
    }

}
