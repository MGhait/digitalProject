<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersUpdate extends Component
{
    public $counter, $name, $count, $icon;

    protected $listeners = ['updateCounter'];

    public function updateCounter($id){
        $this->counter = Counter::findOrFail($id);
        $this->name = $this->counter->name;
        $this->count = $this->counter->count;
        $this->icon = $this->counter->icon;

        $this->resetValidation();

        $this->dispatch('edit-modal-toggle');
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'icon' => ['required', 'string', 'max:255'],
            'count' => ['required', 'integer'],
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        $this->counter->update($data);
        $this->dispatch('edit-modal-toggle');
        $this->dispatch('refreshData')->to(CountersData::class);
    }
    public function render()
    {
        return view('admin.counters.counters-update');
    }
}
