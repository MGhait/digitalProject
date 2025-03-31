<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesShow extends Component
{
    public $name, $description, $icon;
    protected $listeners = ['showService'];

    public function showService($id)
    {
        $data = Service::findOrFail($id);
        $this->name = $data->name;
        $this->description = $data->description;
        $this->icon = $data->icon;

        $this->dispatch('show-modal-toggle');
    }
    public function render()
    {
        return view('admin.services.services-show');
    }
}
