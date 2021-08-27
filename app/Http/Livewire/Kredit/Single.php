<?php

namespace App\Http\Livewire\Kredit;

use App\Models\Kredit;
use Livewire\Component;

class Single extends Component
{
    public $index;
    public $kredit;

    public function mount(Kredit $kredit){
        $this->kredit = $kredit;
    }

    public function hapus(){
        $this->kredit->delete();
        $this->emit('kreditDeleted');
    }

    public function render()
    {
        return view('livewire.kredit.single');
    }
}
