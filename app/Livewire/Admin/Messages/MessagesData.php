<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Messages;
use Livewire\Component;
use Livewire\WithPagination;

class MessagesData extends Component
{
    use WithPagination;

    public $search;

    public function updaingSearch()
    {
        $this->resetPage();
    }

    protected $listeners = ['refreshData' => '$refresh'];

    public function render()
    {
        return view('admin.messages.messages-data',[
            'data'=> Messages::where('name','LIKE','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
