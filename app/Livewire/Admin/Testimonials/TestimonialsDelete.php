<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonials;
use Livewire\Component;

class TestimonialsDelete extends Component
{
    public $testimonial;

    protected $listeners = ['deleteTestimonial'];

    public function deleteTestimonial($id)
    {
        $this->testimonial = Testimonials::findOrFail($id);
        $this->dispatch('delete-modal-toggle');
    }

    public function submit()
    {
        if ($this->testimonial->image != null) {
            unlink($this->testimonial->image);
        }
        $this->testimonial->delete();
        $this->reset('testimonial');
        $this->dispatch('delete-modal-toggle');
        $this->dispatch('refreshData')->to(TestimonialsData::class);
    }
    public function render()
    {
        return view('admin.testimonials.testimonials-delete');
    }
}
