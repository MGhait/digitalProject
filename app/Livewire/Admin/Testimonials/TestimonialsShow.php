<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonials;
use Livewire\Component;

class TestimonialsShow extends Component
{
    public $name, $description, $position, $image;

    protected $listeners = ['showTestimonial'];

    public function showTestimonial($id)
    {
        $data = Testimonials::findOrFail($id);
        $this->name = $data->name;
        $this->description = $data->description;
        $this->position = $data->position;
        $this->image = $data->image;

        $this->dispatch('show-modal-toggle');
    }
    public function render()
    {
        return view('admin.testimonials.testimonials-show');
    }
}
