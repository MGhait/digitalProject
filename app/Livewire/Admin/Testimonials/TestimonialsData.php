<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonials;
use Livewire\Component;
use Livewire\WithPagination;

class TestimonialsData extends Component
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
        return view('admin.testimonials.testimonials-data',[
            'data' => Testimonials::where('name', 'like', '%' . $this->search . '%')->paginate(10),
        ]);
    }
}
