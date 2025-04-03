<?php

namespace App\Livewire\Admin\Members;

use App\Models\Member;
use Livewire\Component;

class MembersDelete extends Component
{
    public $member;

    protected $listeners = ['deleteMember'];

    public function deleteMember($id)
    {
        $this->member = Member::findOrFail($id);
        $this->dispatch('delete-modal-toggle');
    }

    public function submit()
    {
        if ($this->member->image != null) {
            unlink($this->member->image);
        }
        $this->member->delete();
        $this->reset('member');
        $this->dispatch('delete-modal-toggle');
        $this->dispatch('refreshData')->to(MembersData::class);
    }

    public function render()
    {
        return view('admin.members.members-delete');
    }
}
