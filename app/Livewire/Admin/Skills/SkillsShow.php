<?php

namespace App\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;

class SkillsShow extends Component
{
    public $name, $progress;
    protected $listeners = ['skillShow'];
    public function skillShow($id){
        $data = Skill::find($id);
        $this->name = $data->name;
        $this->progress = $data->progress;
        // show modal
        $this->dispatch('show-modal-toggle');
    }
    public function render()
    {
        return view('admin.skills.skills-show');
    }
}
