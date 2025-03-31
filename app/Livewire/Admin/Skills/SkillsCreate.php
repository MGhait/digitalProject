<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsCreate extends Component
{
//    public $skill;
    public $name;
    public $progress;
//    public function mount()
//    {
//        $this->skill = new Skill();
//    }

    public function rules()
    {
        return [
            'name' => 'required',
            'progress' => 'required|numeric|min:0|max:100',
        ];
    }
    public function submit()
    {
        $data = $this->validate();
        // save in db
//        $this->skill->save();
        Skill::create($data);
        $this->reset(['name', 'progress']);
        //hide modal
        $this->dispatch('create-modal-toggle');
        // refresh skills in data-component
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.skills-create');
    }
}
