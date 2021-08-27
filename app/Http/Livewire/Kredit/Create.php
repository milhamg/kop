<?php

namespace App\Http\Livewire\Kredit;

use App\Models\Anggota;
use App\Models\Kredit;
use Livewire\Component;

class Create extends Component
{
    public $anggota_id;
    public $tanggal_pinjam;
    public $jangka_waktu;
    public $jumlah;

    protected $rules = [
        'anggota_id' => 'required',
        'tanggal_pinjam' => 'required|date',
        'jangka_waktu' => 'required|numeric',
        'jumlah' => 'required|numeric'
    ];

    public function simpan(){
        $data = $this->validate();
        $data["jumlah_ansuran"] = $data["jumlah"] / $data["jangka_waktu"];
        try {
            Kredit::create($data);
            $this->dispatchBrowserEvent('show-message', [
                'type' => 'success',
                'message' => 'Berhasil menambahkan kredit',
            ]);
        }catch (\Exception $err){
            $this->dispatchBrowserEvent('show-message', [
                'type' => 'error',
                'message' => 'Gagal menambahkan kredit',
            ]);
        }
    }
    public function render()
    {
        $list_anggota = Anggota::all();
        return view('livewire.kredit.create', compact('list_anggota'));
    }
}
