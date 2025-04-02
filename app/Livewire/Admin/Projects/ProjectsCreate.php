<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectsCreate extends Component
{
    use WithFileUploads; // for dealing with images
    public $name, $description, $link, $image, $category_id, $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }
    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required',
            'link' => 'nullable|url',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
        $data = $this->validate($this->rules(),[],$this->attributes());
        // save image

        $imageName = time().'.'.$this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $imageName, 'public');

        $data['image'] = 'storage/images/' . $imageName;
        Project::create($data);
        $this->reset(['name', 'description', 'link', 'image', 'category_id']);
        $this->dispatch('create-modal-toggle');
        $this->dispatch('refreshData')->to(ProjectsData::class);
    }
    public function render()
    {
        return view('admin.projects.projects-create');
    }
}
