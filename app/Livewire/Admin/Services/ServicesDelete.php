<?php

namespace App\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesDelete extends Component
{
    public $service;

    protected $listeners = ['deleteService'];

    public function deleteService($id){
        $this->service = Service::findOrFail($id);
        $this->dispatch('delete-modal-toggle');
    }

    public function submit()
    {
        $this->service->delete();
        $this->reset('service');
        $this->dispatch('delete-modal-toggle');
        $this->dispatch('refreshData')->to(ServicesData::class);
    }
    public function render()
    {
        return view('admin.services.services-delete');
    }
}
