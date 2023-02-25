<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditAds extends Component
{
    public function render()
    {
        return view('livewire.edit-ads')->layout('layouts.create-ads');
    }
}
