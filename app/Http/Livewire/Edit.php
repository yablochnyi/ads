<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
    public $name;

    public function mount()
    {
        if (Auth::user()->name) {
            $this->name = Auth::user()->name;
        } else {
            $this->name = 'Введите имя';
        }
    }
    public function updateName()
    {
        $user = User::find(Auth::id());
        $user->name = $this->name;
        $user->save();
    }
    public function render()
    {
        return view('livewire.edit')->layout('layouts.profile');
    }
}
