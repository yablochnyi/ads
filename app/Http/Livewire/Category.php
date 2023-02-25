<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Category extends Component
{
    public $category;
    public $ads;
    public $emptyAds;

    public function mount(\App\Models\Category $category)
    {
        $this->category = $category;
        $ads = \App\Models\Ads::where('active', 1)->where('category_id', $this->category->id)->with('images')->get();
        if ($ads->count() > 0)
        {
            $this->ads = $ads;
        } else {
            $this->emptyAds = 'К сожалению в данной категории еще нет обьявлений';
        }
    }
    public function render()
    {

        return view('livewire.category');
    }
}
