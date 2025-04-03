<?php

namespace App\Livewire\Admin\Members;

use App\Models\Member;
use Livewire\Component;

class MembersShow extends Component
{
    public $name, $position, $facebook, $linkedin, $twitter, $instagram, $image;

    protected $listeners = ['showMember'];

    public function showMember($id)
    {
        $data = Member::find($id);
        $this->name = $data->name;
        $this->position = $data->position;
        $this->facebook = $data->facebook ?? null;
        $this->linkedin = $data->linkedin ?? null;
        $this->twitter = $data->twitter ?? null;
        $this->instagram = $data->instagram ?? null;
        $this->image = $data->image;

        $this->dispatch('show-modal-toggle');
    }

    public function render()
    {
        return view('admin.members.members-show');
    }
}
