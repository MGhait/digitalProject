<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsDelete extends Component
{
    public $skill;
    protected $listeners = ['skillDelete'];
    public function skillDelete($id){
        $this->skill = Skill::find($id);
        $this->dispatch('deleteModalToggle');
    }

    public function submit()
    {
        // delete record
        $this->skill->delete();
        // cleaning up may be useful for some cases,but it works fine without it for me
        $this->reset('skill');
        //hide modal
        $this->dispatch('deleteModalToggle');

        // refresh skills in data-component
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.skills-delete');
    }
}
