<?php

namespace App\Livewire\Admin\Testimonials;

use App\Models\Testimonials;
use Livewire\Component;
use Livewire\WithFileUploads;

class TestimonialsCreate extends Component
{
    use WithFileUploads;
    public $name, $position, $description, $image;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'description' => 'required|string',
            'position' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function submit()
    {
        $data = $this->validate();
//        $data['image'] = $this->image->store('testimonials', 'public');

        $imageName = time() . '.' . $this->image->getClientOriginalExtension();
        $this->image->storeAs('images', $imageName, 'public');

        $data['image'] = 'storage/images/' . $imageName;

        Testimonials::create($data);
//        session()->flash('message', 'Testimonial Created Successfully.');
        $this->reset(['name', 'position', 'description', 'image']);
        $this->dispatch('create-modal-toggle');
        $this->dispatch('refreshData')->to(TestimonialsData::class);
    }
    public function render()
    {
        return view('admin.testimonials.testimonials-create');
    }
}
