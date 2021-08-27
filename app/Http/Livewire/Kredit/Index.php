<?php

namespace App\Http\Livewire\Kredit;

use App\Models\Kredit;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners = [
        'kreditDeleted',
    ];

    public function kreditDeleted(){
        $this->dispatchBrowserEvent('show-message',[
            'type' => 'success',
            'message' => 'Data kredit berhasil di hapus',
        ]);
    }
    public function render()
    {
        $list_kredit = Kredit::query();
        $list_kredit = $list_kredit->paginate(10);
        return view('livewire.kredit.index', compact('list_kredit'));
    }
}
