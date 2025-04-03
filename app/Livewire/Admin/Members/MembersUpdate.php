<?php

namespace App\Livewire\Admin\Members;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithFileUploads;

class MembersUpdate extends Component
{
    use WithFileUploads;
    public $member, $name, $position, $facebook, $linkedin, $twitter, $instagram, $image;

    protected $listeners = ['updateMember'];

    public function updateMember( $id)
    {
        $this->image = null;

        $this->member = Member::findOrFail($id);
        $this->name = $this->member->name;
        $this->position = $this->member->position;
        $this->facebook = $this->member->facebook ?? null;
        $this->linkedin = $this->member->linkedin ?? null;
        $this->twitter = $this->member->twitter ?? null;
        $this->instagram = $this->member->instagram ?? null;

//        $this->image = $this->project->image;
        $this->resetValidation();

        $this->dispatch('edit-modal-toggle');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'position' => 'required|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        if ($this->image) {
//            unlink(storage_path('app/public/' . $this->image)); // normal case but i stored the full path in database
            unlink($this->member->image);

            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('images', $imageName, 'public');

            $data['image'] = 'storage/images/' . $imageName;
        } else {
            unset($data['image']);
        }
        $this->member->update($data);

        $this->dispatch('edit-modal-toggle');
        $this->dispatch("refreshData")->to(MembersData::class);
    }

    public function render()
    {
        return view('admin.members.members-update');
    }
}
