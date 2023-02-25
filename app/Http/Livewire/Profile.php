<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public function notActive($adsId)
    {
        $ads = \App\Models\Ads::find($adsId);
        $ads->update(['active' => 0]);
        $ads->save();
    }

    public function active($adsId)
    {
        $ads = \App\Models\Ads::find($adsId);
        $ads->update(['active' => 1]);
        $ads->save();
    }
    public function delete($adsId)
    {
        $ads = \App\Models\Ads::find($adsId);
        $ads->delete();
    }
    public function render()
    {
        $adsActive = \App\Models\Ads::where('user_id', Auth::id())->where('active', 1)->with('images')->get();
        $adsNotActive = \App\Models\Ads::where('user_id', Auth::id())->where('active', 0)->with('images')->get();
        return view('livewire.profile', compact('adsNotActive', 'adsActive'))->layout('layouts.profile');
    }
}
