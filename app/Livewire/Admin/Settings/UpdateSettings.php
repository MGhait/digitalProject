<?php

namespace App\Livewire\Admin\Settings;

use App\Models\Settings;
use Livewire\Component;

class UpdateSettings extends Component
{
//    public Settings $settings; sometimes work and sometimes not
    public $settings;
    public function mount(){
        $this->settings = Settings::find(1);
//        dd($this->settings);
    }

    public function rules()
    {
        return [
            'settings.name' => ['required', 'string'],
            'settings.email' => ['required', 'email'],
            'settings.phone' => ['required'],
            'settings.address' => ['required'],
            'settings.facebook' => ['nullable', 'url'],
            'settings.twitter' => ['nullable', 'url'],
            'settings.instagram' => ['nullable', 'url'],
            'settings.linkedin' => ['nullable', 'url'],
        ];
    }

    public function submit()
    {
        $this->validate();
        $this->settings->save();
        session()->flash('message', 'Settings updated successfully.');
        $this->dispatch('alert', 'Settings updated successfully.');
//        dd('it works');
    }
    public function render()
    {
        return view('admin.settings.update-settings');
    }
}
