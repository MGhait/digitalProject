<?php

namespace App\Livewire\Admin\Messages;

use App\Models\Messages;
use Livewire\Component;

class MessagesShow extends Component
{
    public $name, $email, $subject, $message;
    protected $listeners = ['showMessage'];

    public function showMessage($id)
    {
        $data = Messages::findOrFail($id);
        $this->name = $data->name;
        $this->email = $data->email;
        $this->subject = $data->subject;
        $this->message = $data->message;

        $data->update(['status' => '1']);
        $this->dispatch('show-modal-toggle');
        // to make the status change in this state we need to refresh the data
        $this->dispatch('refreshData')->to(MessagesData::class);
    }
    public function render()
    {
        return view('admin.messages.messages-show');
    }
}
