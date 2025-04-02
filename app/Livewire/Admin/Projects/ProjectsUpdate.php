<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsUpdate extends Component
{
    use WithFileUploads;
    public $project, $name, $description, $link, $image, $category_id, $categories;

    public $listeners = ['updateProject'];

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updateProject($id)
    {
        // Reset the image property
        $this->image = null;

        $this->project = Project::findOrFail($id);
        $this->name = $this->project->name;
        $this->description = $this->project->description;
        $this->link = $this->project->link;
        $this->category_id = $this->project->category_id;
//        $this->image = $this->project->image;
        $this->resetValidation();

        $this->dispatch('edit-modal-toggle');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function attributes()
    {
        return [
            'category_id' => 'Category',
        ];
    }

    public function submit()
    {
        $data = $this->validate($this->rules(), [], $this->attributes());
        // check if project has image -> delete previous one -> save new one
        if ($this->image) {
//            unlink(storage_path('app/public/' . $this->image)); // normal case but i stored the full path in database
            unlink($this->project->image);

            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('images', $imageName, 'public');

            $data['image'] = 'storage/images/' . $imageName;
        } else {
//            $data['image'] = $this->project->image;
            unset($data['image']);
        }
        $this->project->update($data);

        $this->dispatch('edit-modal-toggle');
        $this->dispatch("refreshData")->to(ProjectsData::class);

    }
    public function render()
    {
        return view('admin.projects.projects-update');
    }
}
