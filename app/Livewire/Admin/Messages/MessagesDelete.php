<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Messages;
use Livewire\Component;

class MessagesDelete extends Component
{
    public $message;

    protected $listeners = ['deleteMessage'];

    public function deleteMessage($id){
        $this->message = Messages::findOrFail($id);
        $this->dispatch('delete-modal-toggle');
    }

    public function submit()
    {
        $this->message->delete();
        $this->reset('message');
        $this->dispatch('delete-modal-toggle');
        $this->dispatch('refreshData')->to(MessagesData::class);

    }
    public function render()
    {
        return view('admin.messages.messages-delete');
    }
}
