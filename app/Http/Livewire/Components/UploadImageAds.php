<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImageAds extends Component
{
    use WithFileUploads;

    public $images = [];

    public function save()
    {
        $this->validate([
            'images.*' => 'image|max:1024', // 1MB Max
        ]);

        foreach ($this->images as $image) {
            $imageName = uniqid().'.'.$image->getClientOriginalExtension();
            $image->storeAs('image', $imageName);
        }
    }

    public function render()
    {
        return view('livewire.components.upload-image-ads');
    }
}
