<?php

namespace App\Livewire\Admin\Subscribers;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribersDelete extends Component
{

    public $subscriber;
    protected $listeners = ['SubscriberDelete'];

    public function SubscriberDelete($id)
    {
        $this->subscriber = Subscriber::findOrfail($id);
        $this->dispatch('delete-modal-toggle');
    }

    public function submit()
    {
        $this->subscriber->delete();
        $this->reset('subscriber');
        $this->dispatch('delete-modal-toggle');
        $this->dispatch('refreshData')->to(SubscribersData::class);
    }
    public function render()
    {
        return view('admin.subscribers.subscribers-delete');
    }
}
