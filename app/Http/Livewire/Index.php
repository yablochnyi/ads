<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('livewire.index', compact('categories'));
    }
}
