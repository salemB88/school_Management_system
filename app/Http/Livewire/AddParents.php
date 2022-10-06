<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddParents extends Component
{
    public $currentStep=2;
    public function render()
    {
        return view('livewire.add-parents');
    }
}
