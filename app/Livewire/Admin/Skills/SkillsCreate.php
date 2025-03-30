<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsCreate extends Component
{
    public $skill;

    public function mount()
    {
        $this->skill = new Skill();
    }

    public function rules()
    {
        return [
            'skill.name' => 'required',
            'skill.progress' => 'required|numeric|min:0|max:100',
        ];
    }
    public function submit()
    {
        $this->validate();
        $this->skill->save();
        $this->dispatch('CreateModelToggle');
        $this->dispatch('refreshData')->to(SkillsData::class);
    }
    public function render()
    {
        return view('admin.skills.skills-create');
    }
}
