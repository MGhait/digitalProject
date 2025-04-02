<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesCreate extends Component
{
    public $name;

    public function rules()
    {
        return [
            'name' => 'required|string|unique:categories,name',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        Category::create($data);
        $this->reset(['name']);
        $this->dispatch('create-modal-toggle');
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.categories-create');
    }
}
