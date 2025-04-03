<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;

class ProjectsShow extends Component
{
    public $name, $description, $link, $image, $category;
    protected $listeners = ['showProject'];

    public function showProject($id)
    {
        $data = Project::findOrFail($id);
        $this->name = $data->name;
        $this->description = $data->description;
        $this->link = $data->link ??  null;
        $this->category = $data->category->name;
        $this->image = $data->image;


        $this->dispatch('show-modal-toggle');
    }
    public function render()
    {
        return view('admin.projects.projects-show');
    }
}
