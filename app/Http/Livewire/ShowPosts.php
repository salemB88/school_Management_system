<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public function render()
    {
        return view('livewire.counter');

    }

    public function test(){
        dd('h');
    }
}
