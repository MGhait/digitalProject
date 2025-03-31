<?php

namespace App\Livewire\Admin\Counters;

use App\Models\Counter;
use Livewire\Component;

class CountersCreate extends Component
{
    public $name, $count, $icon;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'count' => 'required|numeric',
            'icon' => 'required|string',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
//        dd($data);
        // save in db
        Counter::create($data);
        $this->reset(['name', 'count', 'icon']);
        //hide modal
        $this->dispatch('create-modal-toggle');
        // refresh skills in data-component
        $this->dispatch('refreshData')->to(CountersData::class);
    }

    public function render()
    {
        return view('admin.counters.counters-create');
    }
}
