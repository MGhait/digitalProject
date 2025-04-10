<?php

namespace App\Livewire\Front\Components;

use App\Models\Testimonials;
use Livewire\Component;

class TestimonialsComponent extends Component
{
    public function render()
    {
        return view('front.components.testimonials-component',[
            'testimonials' => Testimonials::all(),
        ]);
    }
}
