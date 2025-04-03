<?php

namespace App\Livewire\Admin\Members;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithFileUploads;

class MembersCreate extends Component
{
    use WithFileUploads;

    public $name, $position, $facebook, $linkedin, $twitter, $instagram, $image;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'position' => 'required|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function submit()
    {
        $data = $this->validate();

        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $imageName, 'public');

        $data['image'] = 'storage/images/' . $imageName;

        Member::create($data);
        $this->reset(['name', 'position', 'image', 'facebook', 'linkedin', 'twitter', 'instagram']);
        $this->dispatch('create-modal-toggle');
        $this->dispatch('refreshData')->to(MembersData::class);
    }

    public function render()
    {
        return view('admin.members.members-create');
    }
}
