<?php

namespace App\Livewire\Front\Components;

use App\Models\Subscriber;
use Livewire\Component;

class SubscribeComponent extends Component
{
    public $email;

    public function rules()
    {
        return [
            'email' => 'required|email|unique:subscribers,email',
        ];
    }

    public function submit()
    {
        $validate = $this->validate();
        Subscriber::create($validate);
        $this->reset('email');
        session()->flash('message', 'Subscribed Successfully');

    }
    public function render()
    {
        return view('front.components.subscribe-component');
    }
}
