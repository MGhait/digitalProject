<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonials;
use Livewire\Component;
use Livewire\WithFileUploads;

class TestimonialsUpdate extends Component
{
    use WithFileUploads;
    public $testimonial, $name, $position, $description, $image;

    public $listeners = ['updateTestimonial'];

    public function updateTestimonial($id)
    {
        $this->image = null;

        $this->testimonial = Testimonials::findOrFail($id);
        $this->name = $this->testimonial->name;
        $this->position = $this->testimonial->position;
        $this->description = $this->testimonial->description;
        $this->resetValidation();

        $this->dispatch('edit-modal-toggle');
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'position' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
        if ($this->image) {
            unlink($this->testimonial->image);

            $imageName = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('images', $imageName, 'public');

            $data['image'] = 'storage/images/' . $imageName;
        } else {
            unset($data['image']);
        }
        $this->testimonial->update($data);
        $this->dispatch('edit-modal-toggle');
        $this->dispatch("refreshData")->to(TestimonialsData::class);
    }
    public function render()
    {
        return view('admin.testimonials.testimonials-update');
    }
}
