<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Register extends Component
{
    public $phone;

    public function register()
    {
        dd($this->phone);
    }
    public function render()
    {
        return view('livewire.components.register');
    }
}
