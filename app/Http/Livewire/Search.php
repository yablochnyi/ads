<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $q;
    public $search_term;

    public $ads;
    public $emptyAds;

    public function mount()
    {
        $this->fill(request()->only('q'));
        $this->search_term = '%' . $this->q . '%';
        $ads = \App\Models\Ads::where('title', 'like', $this->search_term)->orderByDesc('created_at')->get();
        if ($ads->count() > 0)
        {
            $this->ads = $ads;
        } else {
            $this->emptyAds = 'К сожалению по Вашему запросу ничего не найдено';
        }
    }
    public function render()
    {

        return view('livewire.search');
    }
}
