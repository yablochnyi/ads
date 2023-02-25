<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Ads extends Component
{
    public $showPhone = false;
    public $ads;

    public function showPhoneTrue()
    {
        $this->showPhone = true;
    }
    public function mount(\App\Models\Ads $ads)
    {
        $this->ads = $ads;
    }
    public function render()
    {
        return view('livewire.ads');
    }
}
