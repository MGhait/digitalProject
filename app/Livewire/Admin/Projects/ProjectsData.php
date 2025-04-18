<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectsData extends Component
{
    use WithPagination;

    public $search;

    public function updaingSearch()
    {
        $this->resetPage();
    }

    protected $listeners = ['refreshData' => '$refresh'];

    public function render()
    {
        return view('admin.projects.projects-data',[
            'data' => Project::where('name','LIKE','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
