<?php

namespace App\Livewire\Front\Components;

use App\Models\Service;
use Livewire\Component;

class FeaturesComponent extends Component
{
    public function render()
    {
        return view('front.components.features-component',[
            'features' => Service::latest()->take(3)->get()->sortBy('created_at')
        ]);
    }
}
