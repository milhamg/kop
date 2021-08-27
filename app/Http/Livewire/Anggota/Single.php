<?php

namespace App\Http\Livewire\Anggota;

use App\Models\Anggota;
use Livewire\Component;

class Single extends Component
{
    public $anggota;
    public $index;

    public function mount(Anggota $anggota){
        $this->anggota = $anggota;
    }

    public function hapus(){
        $this->anggota->delete();
        $this->emit('anggotaDeleted');
    }
    public function render()
    {
        return view('livewire.anggota.single');
    }
}
