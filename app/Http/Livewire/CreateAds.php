<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class CreateAds extends Component
{
    public function render()
    {
        $categories = Category::whereNull('parent_id')->with('subcategories')->get();
        return view('livewire.create-ads', compact('categories'))->layout('layouts.create-ads');
    }
}
