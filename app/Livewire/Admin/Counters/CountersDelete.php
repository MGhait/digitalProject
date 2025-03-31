<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersDelete extends Component
{
    public $counter;

    protected $listeners = ['deleteCounter'];

    public function deleteCounter($id){
        $this->counter = Counter::findOrFail($id);
        $this->dispatch('delete-modal-toggle');
    }

    public function submit()
    {
        $this->counter->delete();
        $this->reset(['counter']);
        $this->dispatch('delete-modal-toggle');
        $this->dispatch('refreshData')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-delete');
    }
}
