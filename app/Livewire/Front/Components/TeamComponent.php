<?php

namespace App\Livewire\Front\Components;

use App\Models\Member;
use Livewire\Component;

class TeamComponent extends Component
{
    public function render()
    {
        return view('front.components.team-component',[
            'team' => Member::take(3)->get(),
        ]);
    }
}
