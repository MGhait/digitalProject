<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsDelete extends Component
{
    public $project;

    protected $listeners = ['deleteProject'];

    public function deleteProject($id)
    {
        $this->project = Project::findOrFail($id);
        $this->dispatch('delete-modal-toggle');
    }

    public function submit()
    {
        if ($this->project->image != null) {
            unlink($this->project->image);
        }
        $this->project->delete();
        $this->reset('project');
        $this->dispatch('delete-modal-toggle');
        $this->dispatch('refreshData')->to(ProjectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-delete');
    }
}
