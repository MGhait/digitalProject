<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesUpdate extends Component
{
    public $category, $name;

    public $listeners = ['updateCategory'];

    public function updateCategory($id)
    {
        $this->category = Category::findOrFail($id);
        $this->name = $this->category->name;

        $this->resetValidation();
        $this->dispatch('edit-modal-toggle');
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'unique:categories,name,' . $this->category->id, // Exclude the current model's ID
            ],
        ];
    }

    public function submit()
    {
        $data = $this->validate();

        $this->category->update($data);

        $this->dispatch('edit-modal-toggle');
        $this->dispatch("refreshData")->to(CategoriesData::class);

    }
    public function render()
    {
        return view('admin.categories.categories-update');
    }
}
