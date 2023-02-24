<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Setting extends Component
{
    public $email;
    public $city;

    public function mount()
    {
        $this->city = Auth::user()->city;
        if (Auth::user()->email) {
            $this->email = Auth::user()->email;
        } else {
            $this->email = 'Введите Ваш Email';
        }

    }

    public function updateEmail()
    {

        $user = User::find(Auth::id());
        $user->email = $this->email;
        $user->save();

    }

    public function updateCity()
    {
        $user = User::find(Auth::id());
        $user->city = $this->city;
        $user->save();
    }

    public function render()
    {
        return view('livewire.setting')->layout('layouts.profile');
    }
}
