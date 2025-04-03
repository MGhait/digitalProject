<?php

namespace App\Livewire\Front\Components;

use App\Models\Messages;
use Livewire\Component;

class MessageComponent extends Component
{
    public $name, $email, $subject, $message;

    public function rules()
    {
        return [
            'name' => 'required|string|min:3',
            'email' => 'required|string|email',
            'subject' => 'required|string|min:3',
            'message' => 'required|string|min:3'
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        Messages::create($data);
        session()->flash('message', 'Message Sent Successfully');
        $this->reset(['name', 'email', 'subject', 'message']);
        $this->resetValidation();
    }
    public function render()
    {
        return view('front.components.message-component');
    }
}
