<?php

namespace App\Http\Controllers;

use App\Models\Kredit;
use Illuminate\Http\Request;

class BendaharaController extends Controller
{
    public function index(){
        $list_kredit = Kredit::query();
        $list_kredit = $list_kredit->paginate(10);
        return view('validasi.index', compact('list_kredit'));
    }

    public function validasi(Request $request, Kredit $kredit){
        return view('validasi.validate', compact('kredit'));
    }

    public function store(Request $request, Kredit $kredit){
        $data =  $request->validate([
            'validasi' => 'required'
        ]);
        $kredit->update($data);
        return redirect()->route('validasi.index');
    }

    public function authorisasiIndex(){
        $list_kredit = Kredit::query();
        $list_kredit->where('validasi', true);
        $list_kredit = $list_kredit->paginate(10);
        return view('validasi.authorisasi', compact('list_kredit'));
    }

    public function slipPencairanIndex(){
        $list_kredit = Kredit::query();
        $list_kredit->where('authorisasi', true);
        $list_kredit = $list_kredit->paginate(10);
        return view('validasi.slip', compact('list_kredit'));
    }
    public function authorizeKredit(Request $request, Kredit $kredit){
        $kredit->authorisasi = true;
        $kredit->save();

        return redirect()->back();
    }


    public function cetakSlip(Request $request, Kredit $kredit){
        return view('laporan.slip', compact('kredit'));
    }

}
