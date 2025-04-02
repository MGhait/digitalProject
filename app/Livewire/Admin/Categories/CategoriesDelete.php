<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class CategoriesDelete extends Component
{
    public $category;

    protected $listeners = ['deleteCategory'];

    public function deletecategory($id)
    {
        $this->category = Category::findOrFail($id);
        $this->dispatch('delete-modal-toggle');
    }

    public function submit()
    {
        $this->category->delete();
        $this->reset('category');
        $this->dispatch('delete-modal-toggle');
        $this->dispatch('refreshData')->to(CategoriesData::class);
    }
    public function render()
    {
        return view('admin.categories.categories-delete');
    }
}
