<?php

namespace App\Http\Livewire\Anggota;

use App\Models\Anggota;
use Livewire\Component;

class Create extends Component
{
    public $nama;
    public $pangkat;
    public $no_hp;
    public $alamat;

    protected $rules = [
        'nama' => 'required',
        'pangkat' => 'required',
        'no_hp' => 'required',
        'alamat' => 'required'
    ];

    public function simpan(){
        $data = $this->validate();
        try{
            Anggota::create($data);
            $this->dispatchBrowserEvent('show-message', [
                'type' => 'success',
                'message' => "Data anggota berhasil dibuat"
            ]);
            $this->reset();
        }catch (\Exception $exception){
            \Log::error($exception->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.anggota.create');
    }
}
